<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\View\View;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\Routing\Redirector; 
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return Application|Factory|Response|View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Validate the user login request.
     *
     * @param Request $request
     * @return void
     *
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|email',
            'password' => 'required|string',
        ]);
    }
    
    /**
     * Attempt to log the user into the application.
     *
     * @param Request $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        $credentials = $this->credentials($request);
        $user = User::where(['email' => $credentials['email']])->first();
        if($user !== null)
        {
            if($user->role->type === UserRole::USER) {
                return $this->guard()->attempt($this->credentials($request));
            }
        }
        return false;
    }

    /**
     * Log the user out of the application.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();

        return redirect(route('login'));
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        Arr::add($credentials, 'is_confirmed', true);

        return $credentials;
    }

    /**
     * Get the failed login response instance.
     *
     * @param Request $request
     * @return void
     *
     * @throws ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        danger_toast_alert("Combinaison email et mot de passe incorrect ou votre à été bloqué");
        throw ValidationException::withMessages([]);
    }

    /**
     * @param Request $request
     * @param $user
     */
    protected function authenticated(Request $request, $user)
    {
        info_toast_alert("Bienvenue {$user->name}");
    }

    /**
     * @return string
     */
    private function redirectTo()
    {
        return route('customer.dashboard.index');
    }
}