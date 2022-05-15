<?php

namespace BernskioldMedia\LaravelScrive;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class ScriveClient
{
    public PendingRequest $request;

    public function __construct(
        private string $clientId,
        private string $clientSecret,
        private string $tokenId,
        private string $tokenSecret,
        private string $baseUrl
    ) {
        $this->request = Http::acceptJson()
            ->asJson()
            ->withHeaders([
                'Authorization' => 'oauth_signature_method="PLAINTEXT", oauth_consumer_key="'.$this->clientId.'", oauth_token="'.$this->tokenId.'",  oauth_signature="'.$this->clientSecret.'&'.$this->tokenSecret.'"',
            ])
            ->baseUrl($this->baseUrl);
    }

    public static function fromConfig(array $config): static
    {
        return new static(
            $config['client_id'],
            $config['client_secret'],
            $config['token_id'],
            $config['token_secret'],
            $config['base_url']);
    }

    public function get(string $endpoint, array $query = []): object
    {
        return $this->request
            ->get($endpoint, $query)
            ->throw()
            ->object();
    }

    public function contents(string $endpoint, array $query = []): string
    {
        return $this->request
            ->get($endpoint, $query)
            ->throw()
            ->body();
    }

    public function post(string $endpoint, array $data = []): object
    {
        return $this->request
            ->post($endpoint, $data)
            ->throw()
            ->object();
    }

    public function put(string $endpoint, array $data = []): object
    {
        return $this->request
            ->put($endpoint, $data)
            ->throw()
            ->object();
    }

    public function delete(string $endpoint, array $data = []): bool
    {
        return $this->request
            ->delete($endpoint, $data)
            ->throw()
            ->ok();
    }
}
