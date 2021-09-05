<?php


namespace App\Http\Controllers\Auth\Login;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;


class ClientLoginController extends DefaultLoginController
{
    protected $redirectTo = '/client/dor';

    public function __construct()
    {
        $this->middleware('guest:client')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function username()
    {
        return 'email';
    }
    protected function guard()
    {
        return Auth::guard('client');
    }
}
