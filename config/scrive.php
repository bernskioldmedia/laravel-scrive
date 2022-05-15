<?php
return [

    /**
     * The API base URL for the Scrive service.
     */
    'base_url' => env('SCRIVE_BASE_URL', 'https://scrive.com/api/v2/'),

    /**
     * Your personal key client credentials identifier.
     *
     * You can get this from your account settings
     * under the API settings tab.
     */
    'client_id' => env('SCRIVE_CLIENT_ID'),

    /**
     * Your personal key client credentials secret.
     *
     * You can get this from your account settings
     * under the API settings tab.
     */
    'client_secret' => env('SCRIVE_CLIENT_SECRET'),

    /**
     * Your personal key Token Credentials Identifier.
     *
     * You can get this from your account settings
     * under the API settings tab.
     */
    'token_id' => env('SCRIVE_TOKEN_ID'),

    /**
     * Your personal key Token Credentials Secret.
     *
     * You can get this from your account settings
     * under the API settings tab.
     */
    'token_secret' => env('SCRIVE_TOKEN_SECRET'),

];
