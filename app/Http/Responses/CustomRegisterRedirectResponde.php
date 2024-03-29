<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class CustomRegisterRedirectResponde implements RegisterResponseContract
{
    public function toResponse($request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application|\Symfony\Component\HttpFoundation\Response
    {
        // Personalize o redirecionamento conforme necessário
        return redirect()->route('users.index')->banner('success', 'Editado com sucesso');
    }
}
