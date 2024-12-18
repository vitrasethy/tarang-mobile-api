<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends BaseController
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        $request->authenticate();

        $token = $request->user()->createToken($request->email)->plainTextToken;

        return $this->successResponse([
            "token" => $token,
            "user" => [
                'id' => $request->user()->id,
                "name" => $request->user()->name,
                'email' => $request->user()->email
            ]
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->noContent();
    }

    public function getUser(Request $request)
    {
        return $this->successResponse([
            'id' => $request->user()->id,
            "name" => $request->user()->name,
            'email' => $request->user()->email
        ]);
    }
}
