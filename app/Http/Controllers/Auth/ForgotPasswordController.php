<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Http\JsonResponse;
use App\Mail\UserPasswordResetMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Traits\ResetPasswordUserTrait;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    const RESET_LINK_NOT_SENT = 'error';

    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails, ResetPasswordUserTrait;

    /**
     * ForgotPasswordController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param ForgotPasswordRequest $request
     * @return JsonResponse|RedirectResponse
     */
    public function sendResetLinkEmail(ForgotPasswordRequest $request)
    {
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    /**
     * Send a password reset link to a user.
     *
     * @param  array  $credentials
     * @return string
     */
    protected function sendResetLink(array $credentials)
    {
        // First we will check to see if we found a user at the given credentials and
        // if we did not we will redirect back to this current URI with a piece of
        // "flash" data in the session to indicate to the developers the errors.
        $user = $this->getUser($credentials);

        if (is_null($user)) {
            return Password::INVALID_USER;
        }

        // Once we have the reset token, we are ready to send the message out to this
        // user with a link to reset their password. We will then redirect back to
        // the current URI having nothing set in the session to indicate errors.

        return $this->sendResetEmail($user) ? Password::RESET_LINK_SENT : self::RESET_LINK_NOT_SENT;
    }

    /**
     * @param User $user
     * @return bool
     */
    protected function sendResetEmail(User $user)
    {
        try {
            $password_reset = PasswordReset::where(['email' => $user->email])->first();

            if(is_null($password_reset)) $password_reset = PasswordReset::create(['email' => $user->email]);
            else $password_reset->update(['token' => Str::random(64)]);

            try {
                Mail::to($user->email)->send(new UserPasswordResetMail($user, $password_reset));
                return true;
            } catch (Exception $exception) {}

        } catch (Exception $exception) {}

        return false;
    }

    /**
     * Get the response for a successful password reset link.
     *
     * @param String $response
     * @return RedirectResponse|JsonResponse
     */
    protected function sendResetLinkResponse(String $response)
    {
        info_toast_alert(__($response));
        return back();
    }

    /**
     * @param Request $request
     * @param String $response
     * @return RedirectResponse
     */
    protected function sendResetLinkFailedResponse(Request $request, String $response)
    {
        if($response !== self::RESET_LINK_NOT_SENT) danger_toast_alert(__($response));

        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => __($response)]);
    }
}
