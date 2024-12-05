<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\AuthService;
use App\Http\Resources\UserResource;
use App\Enum\UserRole;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
        $this->middleware('guest')->except('logout');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(LoginRequest $request)
    {
        if ($this->authService->attemptLogin($request->validated())) {
            $request->session()->regenerate();
            return redirect()->intended($this->getRedirectPath($request));
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->authService->register($request->validated());
        return redirect()->route('login')->with('success', 'Registration successful');
    }

    public function logout(Request $request)
    {
        $this->authService->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    protected function getRedirectPath(Request $request): string
    {
        if ($request->user()->hasRole(UserRole::SUPER_ADMIN)) {
            return route('admin.dashboard');
        }

        if ($request->user()->hasRole(UserRole::ADMIN)) {
            return route('admin.dashboard');
        }

        return route('dashboard');
    }
}