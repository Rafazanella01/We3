<?php

class Requisicao
{
    /**
     * Faz a requisição à API e retorna o resultado
     */
    public static function requisicao_login(String $cpf, String $email)
    {
        $urlBase = 'https://ah.we.imply.com/loginDesafio3';
        $urlCompleta = "$urlBase/$cpf/$email";

        $ch = curl_init($urlCompleta);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            http_response_code(400);
            echo json_encode(['message' => 'Curl error: ' . curl_error($ch)]);
            exit;
        }
        curl_close($ch);

        $decodificado = json_decode($response, true);

        if (!$decodificado) {
            http_response_code(404);
            echo json_encode(['message' => 'Data not found']);
            exit;
        }

        return $decodificado;
    }
    /**
     * Faz a requisição à API e retorna o resultado
     */
    public static function requisicao_produtos()
    {

        $url = 'https://ah.we.imply.com/getProdutos';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            http_response_code(400);
            echo json_encode(['message' => 'Curl error: ' . curl_error($ch)]);
            exit;
        }
        curl_close($ch);

        $decodificado = json_decode($response, true);


        if (!$decodificado) {
            http_response_code(404);
            echo json_encode(['message' => 'Data not found']);
            exit;
        }

        return $decodificado;
    }
}
