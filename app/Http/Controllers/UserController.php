<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    protected $baseUrl = 'https://apisiga.ddns.net/api';
//    protected $baseUrl = 'http://localhost/api';

    public function index()
    {
        $message = session('message');
        return view('index')->with('message', $message);
    }

    public function login(UserFormRequest $request)
    {
        $credentials = [
            'id' => $request->cpf,
            'password' => $request->password,
        ];

        $data = $this->getResultCreateSession($credentials);
        if ($this->isSessionValid($data)) {
            $user = $this->createUser(
                $request->phone,
                $data['session_id']
            );

            if ($user) {
                return redirect()->route('index')
                    ->with('message', "'session' adicionada com sucesso.");
            } else {
                return redirect()->route('index')
                    ->with('message', "Não foi possível gerar a 'session'.");
            }
        } else {
            return redirect()->route('index')
                ->with('message', "Credenciais inválidas!");
        }
    }

    private function getResultCreateSession($credentials)
    {
        $pathApi = $this->baseUrl . '/session/create';
        $token = 'd6ae5d9bcb7e4885517c3f60cf11da66';

        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])
            ->withOptions(['verify' => false])
            //->timeout(30)
            ->attach('id', $credentials['id'])
            ->attach('password', $credentials['password'])
            ->post($pathApi)
            ->json();
    }

    private function isSessionValid($data): bool
    {
        return isset($data['code']) && $data['code'] == 200 && $this->verifyCredentials($data['session_id']);
    }

    private function createUser($phone, $session_id): bool
    {
        $user = new User();
        $user->phone = $phone;
        $user->session_id = $session_id;
        return $user->add($user);
    }

    private function verifyCredentials($session_id): bool
    {
        $pathApi = $this->baseUrl . '/aluno/all';
        $token = 'd6ae5d9bcb7e4885517c3f60cf11da66';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])
            ->withOptions(['verify' => false])
            //->timeout(30)
            ->get($pathApi, [
                'uid' => $session_id,
            ]);

        $data = $response->json();
        return array_key_exists('NOME', $data);
    }
}
