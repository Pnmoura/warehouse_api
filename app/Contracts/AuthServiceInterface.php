<?php

namespace App\Contracts;

interface AuthServiceInterface
{
    /**
     * Autentica um usuário com base nas credenciais fornecidas.
     *
     * @param array $credentials As credenciais do usuário (por exemplo, email e senha).
     * @return mixed Retorna o token de autenticação se as credenciais forem válidas, ou false caso contrário.
     */
    public function authenticate(array $credentials);

    /**
     * Verifica se um token de autenticação é válido.
     *
     * @param string $token O token de autenticação a ser verificado.
     * @return bool Retorna true se o token for válido, ou false caso contrário.
     */
    public function validateToken(string $token);

    /**
     * Retorna as informações do usuário autenticado com base no token fornecido.
     *
     * @param string $token O token de autenticação do usuário.
     * @return mixed Retorna as informações do usuário se o token for válido, ou null caso contrário.
     */
    public function getUserInfo(string $token);

    /**
     * Invalida o token de autenticação do usuário, realizando o logout.
     *
     * @param string $token O token de autenticação do usuário a ser invalidado.
     * @return bool Retorna true se o token foi invalidado com sucesso, ou false caso contrário.
     */
    public function invalidateToken(string $token);
}
