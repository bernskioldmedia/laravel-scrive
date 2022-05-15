<?php

namespace BernskioldMedia\LaravelScrive\Resources;

use BernskioldMedia\LaravelScrive\ScriveClient;
use Illuminate\Support\Str;
use ReflectionClass;

abstract class BaseResource
{

    public array $query = [];
    protected string $endpoint;

    public function __construct(
        public ScriveClient $client
    ) {
    }

    abstract protected function getEndpoint(): string;

}
