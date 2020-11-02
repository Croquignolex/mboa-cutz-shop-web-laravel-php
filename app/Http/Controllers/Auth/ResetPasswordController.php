<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Traits\ResetPasswordUserTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords, ResetPasswordUserTrait;

    /**
     * ResetPasswordController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @return Factory|View
     */
    public function showResetForm()
    {
        return view('auth.passwords.reset');
    }

    public function reset(ResetPasswordRequest $request, $language, $token)
    {
        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->resetProcess($this->credentials($request), $token);
        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
            ? $this->sendResetResponse($response)
            : $this->sendResetFailedResponse($request, $response);
    }

    /**
     * Reset the password for the given token.
     *
     * @param  array $credentials
     * @param $token
     * @return mixed
     */
    protected function resetProcess(array $credentials, $token)
    {
        // If the responses from the validate method is not a user instance, we will
        // assume that it is a redirect and simply return it from this method and
        // the user is properly redirected having an error message on the post.
        if (is_null($user = $this->getUser($credentials))) {
            return Password::INVALID_USER;
        }

        if (is_null($user = $this->getTokenUser($credentials, $token))) {
            return Password::INVALID_TOKEN;
        }

        // Once the reset has been validated, we'll call the given callback with the
        // new password. This gives the user an opportunity to store the password
        // in their persistent storage. Then we'll delete the token and return.
        $this->resetPassword($user, $credentials['password']);

        return Password::PASSWORD_RESET;
    }

    /**
     * @param array $credentials
     * @param $token
     * @return null
     */
    protected function getTokenUser(array $credentials, $token)
    {
        $password_reset = PasswordReset::where('email', $credentials['email'])->where('token', $token)->first();

        if($password_reset !== null)
        {
            $password_reset->delete();
            return $this->getUser($credentials);
        }

        return null;
    }

    /**
     * @param $user
     * @param $password
     */
    protected function resetPassword(User $user, $password)
    {
        $user->update(compact('password'));
    }

    /**
     * Get the response for a successful password reset.
     *
     * @param String $response
     * @return RedirectResponse|JsonResponse
     */
    protected function sendResetResponse(String $response)
    {
        success_toast_alert(__($response));
        return redirect(locale_route('login'));
    }

    /**
     * Get the response for a failed password reset.
     *
     * @param Request $request
     * @param String $response
     * @return RedirectResponse|JsonResponse
     */
    protected function sendResetFailedResponse(Request $request, String $response)
    {
        danger_toast_alert(__($response));

        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => __($response)]);
    }
}