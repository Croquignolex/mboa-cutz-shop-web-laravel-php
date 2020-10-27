<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\Role;
use App\Models\User;
use App\Enums\UserRole;
use Illuminate\View\View;
use App\Mail\UserRegisterMail;
use App\Models\EmailConfirmation;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Contracts\Foundation\Application;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * RegisterController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * improve user self registration
     *
     * @param RegisterRequest $request
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function register(RegisterRequest $request)
    {
        $user = Role::where('type', UserRole::USER)->first()->users()->create($request->all());
        $user->is_confirmed = false;
        $user->save();

        $confirmation = EmailConfirmation::create(['email' => $user->email]);

        Mail::to($user->email)->send(new UserRegisterMail($user, $confirmation));
        success_toast_alert(__('toast.registration_message'));

        return redirect(locale_route('register'));
    }

    /**
     * Improve user account confirmation
     *
     * @param String $language
     * @param String $email
     * @param String $token
     * @return Application|Factory|View
     */
    public function confirmation(String $language, String $email, String $token)
    {
        $confirmation = EmailConfirmation::where('email', $email)->where('token', $token)->first();

        if($confirmation === null) danger_toast_alert(__('toast.bad_link'));
        else {
            $user = User::where('email', $email)->first();
            $user->is_confirmed = true;
            $user->save();

            $confirmation->delete();

            success_toast_alert(__('toast.well_confirmed'));
        }

        return view('auth.confirmation');
    }
}