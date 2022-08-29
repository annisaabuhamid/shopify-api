<?php

return [

    'credentials' => [

        /*
         * The API key from private app credentials.
         */
        'api_key' => env('SHOPIFY_API_KEY', 'e39be36f220f401f30f6cf36169d9b93'),

        /*
         * The password from private app credentials.
         */
        'password' => env('SHOPIFY_PASSWORD', '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'),

        /*
         * The shopify domain for your shop.
         */
        'domain' => env('SHOPIFY_DOMAIN', 'editions-demo.myshopify.com'),

        /*
         * The shopify api version.
         */
        'api_version' => env('SHOPIFY_API_VERSION', '2022-07'),

    ],

    'webhooks' => [

        /*
         * The webhook secret provider to use.
         */
        'secret_provider' => \Signifly\Shopify\Webhooks\ConfigSecretProvider::class,

        /*
         * The shopify webhook secret.
         */
        'secret' => env('SHOPIFY_WEBHOOK_SECRET'),

    ],

    'exceptions' => [

        /*
         * Whether to include the validation errors in the exception message.
         */
        'include_validation_errors' => false,

    ],
];
