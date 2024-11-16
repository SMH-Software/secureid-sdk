<?php

namespace Secureid\Secureidsdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class SecureID
{
    protected const BASE_URL = 'https://server-gray-seven.vercel.app/api/accounts-register/';
    protected string $baseUrl;
    protected $client;

    public function __construct()
    {
        $this->baseUrl = self::BASE_URL;
        $this->client = new Client(['base_uri' => $this->baseUrl, 'verify' => false,]);
    }

    /**
     * Récupère tous les enregistrements de l'API.
     */
    public function getAll()
    {
        return $this->request('GET', '');
    }

    /**
     * Récupère un enregistrement par son ID.
     */
    public function getById($id)
    {
        return $this->request('GET', "{$id}");
    }

    /**
     * Crée un nouvel enregistrement dans l'API.
     */
    public function create(array $data)
    {
        return $this->request('POST', $this->baseUrl, $data);
    }

    /**
     * Met à jour un enregistrement par son ID.
     */
    public function update($id, array $data)
    {
        return $this->request('PATCH', "{$id}", $data);
    }

    /**
     * Supprime un enregistrement par son ID.
     */
    public function delete($id)
    {
        return $this->request('DELETE', "{$id}");
    }


    /**
     * Méthode protégée pour soumettre les requêtes HTTP.
     * @param string $method Méthode HTTP (GET, POST, PUT, DELETE)
     * @param string $url URL de la requête
     * @param array|null $data Données à envoyer (facultatif)
     * @return mixed Corps de la réponse décodée
     */
    protected function request(string $method, ?string $url, array $data = null){
        $options = [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ];

        if (!empty($data)) {
            $options['json'] = $data;
        }

        try {
            $response = $this->client->request($method, $url, $options);
            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            return [
                'error' => true,
                'message' => $e->getMessage(),
                'status' => $e->getCode(),
            ];
        }
    }
}