<?php

namespace BernskioldMedia\LaravelScrive\Resources;

class Document extends BaseResource
{
    public function all(): object
    {
        return $this->client->get($this->getEndpoint().'/list');
    }

    public function create(): object
    {
    }

    public function createFromTemplate(int $templateId): object
    {
    }

    public function clone(int $documentId): object
    {
    }

    public function update(int $documentId): object
    {
    }

    public function setFile(int $documentId): object
    {
    }

    public function addFile(int $documentId): object
    {
    }

    public function setAttachments(int $documentId): object
    {
    }

    public function removePages(int $documentId): object
    {
    }

    public function send(int $documentId): object
    {
    }

    public function canBeSent(int $documentId): bool
    {
    }

    public function history(int $documentId): object
    {
    }

    public function get(int $documentId): object
    {
    }

    public function qrCode(int $documentId, int $signatoryId): object
    {
    }

    public function signingData(int $documentId, int $signatoryId): object
    {
    }

    public function getFile(int $documentId): object
    {
    }

    public function getAttachment(int $documentId, int $fileId): object
    {
    }

    public function remind(int $documentId): bool
    {
    }

    public function extend(int $documentId, int $days = 7): bool
    {
    }

    public function cancel(int $documentId): bool
    {
    }

    public function trash(int $documentId): bool
    {
    }

    public function delete(int $documentId): bool
    {
    }

    public function forward(int $documentId, string $email): bool
    {
    }

    public function restart(int $documentId): bool
    {
    }

    protected function getEndpoint(): string
    {
        return 'documents';
    }
}
