<?php

namespace BernskioldMedia\LaravelScrive\Resources;

class Document extends BaseResource
{

    public function all(): object
    {
        return $this->client->get($this->getEndpoint().'/list');
    }

    protected function getEndpoint(): string
    {
        return 'documents';
    }
}
