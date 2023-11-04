<?php

namespace App\Http\Middleware;

use App\Models\User;
use \Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use phpCAS;
use Symfony\Component\HttpFoundation\Response;

class AuthCASMiddleware
{
    /**
     * Summary of handle
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        phpCAS::client(CAS_VERSION_2_0, getenv('CAS_HOST'), 443, getenv('CAS_CONTEXT'), url('/'));
        phpCAS::setNoCasServerValidation();
        
        if(env('CAS_PROXY', false)){
           $server_name = env('APP_URL');
           phpCAS::setFixedServiceURL("$server_name/login?path=$$server_name/");
        }

        if (phpCAS::isAuthenticated()) {
            if (!Auth::check()) {
                $this->authCasLogin();
            }

            return $next($request);
        } else {
            phpCAS::forceAuthentication();  
        }
    }

    /**
     * Summary of authCasLogin
     * @return void
     */
    protected function authCasLogin()
    {
        $userCpfCAS = phpCAS::getUser(); // Pega o CPF retornado pelo CAS.

        // Busca informações locais do usuário logado no CAS.
        $user = User::where('cpf', $userCpfCAS)->first();

        if ($user) {
            $dataUserCAS = phpCAS::getAttributes();
    
            $user->name = strtolower($dataUserCAS['nome']);
            $user->cpf = $userCpfCAS;
            $user->save();

            Auth::login($user);
        } else {
            abort(403);
        }
    }
}
