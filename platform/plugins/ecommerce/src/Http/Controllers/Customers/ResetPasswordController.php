<?php

namespace Botble\Ecommerce\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use Botble\ACL\Traits\ResetsPasswords;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Response;
use SeoHelper;
use Theme;

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

    use ResetsPasswords;

    /**
     * Where to redirect users after login / registration.
     */
    public string $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customer.guest');
    }

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param Request $request
     * @param string|null $token
     * @return Response
     */
    public function showResetForm(Request $request, $token = null)
    {
        SeoHelper::setTitle(__('Reset Password'));

        Theme::breadcrumb()->add(__('Home'), route('public.index'))
            ->add(__('Reset Password'), route('customer.password.reset'));

        return Theme::scope(
            'ecommerce.customers.passwords.reset',
            [
                'token' => $token,
                'email' => $request->email,
            ],
            'plugins/ecommerce::themes.customers.passwords.reset'
        )
            ->render();
    }

    /**
     * Get the broker to be used during password reset.
     */
    public function broker(): PasswordBroker
    {
        return Password::broker('customers');
    }

    /**
     * Get the guard to be used during password reset.
     */
    protected function guard(): StatefulGuard
    {
        return auth('customer');
    }
}
