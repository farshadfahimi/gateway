<?php

return [//-------------------------------
    // set driver for the bank accoutn
    //--------------------------------
    'default_terminal'   =>  'terminal001',

    /**
     * Set the default bank 
     * and make change payment bank in env
     */
    'public_terminal'     =>   explode(',', env('PUBLIC_GATEWAY_TERMINAL', 'terminal001,terminal002,terminal003')),
    'private_terminal'        =>   explode(',', env('PRIVATE_GATEWAY_TERMINAL', 'terminal004')),

    'terminal001' => [
        'bank'          =>  'sadad',
        'merchant'      => env('TERMINAL001_MERCHANT_ID', null),
        'transactionKey'=> env('TERMINAL001_TRANSACTION_KEY', ''),
        'terminalId'    => env('TERMINAL001_TERMINAL_ID', 000000000),
        'callback-url'  => '/'
    ],

    'terminal002'   =>  [
        'bank'  =>  'saman',
        'merchant'     => env('TERMINAL002_MERCHANT_ID', null),
        'password'     => '',
        'callback-url'   => '/',
    ],

    'terminal003'   =>  [
        'bank'  =>  'parsian',
        'pin'          => env('TERMINAL003_MERCHANT_ID', null),
        'callback-url' => '/'
    ],

    'terminal004'   =>  [
        'bank'  =>  'sadad',
        'merchant'      => env('TERMINAL004_MERCHANT_ID', null),
        'transactionKey'=> env('TERMINAL004_TRANSACTION_KEY', ''),
        'terminalId'    => env('TERMINAL004_TERMINAL_ID', 000000000),
        'callback-url'  => '/'
    ],

    //-------------------------------
    // Timezone for insert dates in database
    // If you want Gateway not set timezone, just leave it empty
    //--------------------------------
    'timezone' => 'Asia/Tehran',

    //--------------------------------
    // Zarinpal gateway
    //--------------------------------
    'zarinpal' => [
        'merchant-id'  => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
        'type'         => 'zarin-gate',             // Types: [zarin-gate || normal]
        'callback-url' => '/',
        'server'       => 'germany',                // Servers: [germany || iran || test]
        'email'        => 'email@gmail.com',
        'mobile'       => '09xxxxxxxxx',
        'description'  => 'description',
    ],

    //--------------------------------
    // Mellat gateway
    //--------------------------------
    'mellat' => [
        'username'     => '',
        'password'     => '',
        'terminalId'   => 0000000,
        'callback-url' => '/'
    ],

    //--------------------------------
    // Saman gateway
    //--------------------------------
    'saman' => [
        'merchant'     => '',
        'password'     => '',
        'callback-url'   => '/',
    ],

    //--------------------------------
    // PayIr gateway
    //--------------------------------
    'payir'    => [
        'api'          => 'xxxxxxxxxxxxxxxxxxxx',
        'callback-url' => '/'
    ],

    //--------------------------------
    // IranKish gateway
    //--------------------------------
    'irankish' => [
        'merchantId' => 'xxxxxxxxxxxxxxxxxxxx',
        'sha1key' => 'xxxxxxxxxxxxxxxxxxxx',
        'callback-url' => '/'
    ],

    //--------------------------------
    // Sadad gateway
    //--------------------------------
    'sadad' => [
        'merchant'      => '',
        'transactionKey'=> '',
        'terminalId'    => 000000000,
        'callback-url'  => '/'
    ],

    //--------------------------------
    // Parsian gateway
    //--------------------------------
    'parsian' => [
        'pin'          => 'xxxxxxxxxxxxxxxxxxxx',
        'callback-url' => '/'
    ],
    //--------------------------------
    // Pasargad gateway
    //--------------------------------
    'pasargad' => [
        'terminalId'    => 000000,
        'merchantId'    => 000000,
        'certificate-path'    => storage_path('gateway/pasargad/certificate.xml'),
        'callback-url' => '/gateway/callback/pasargad'
    ],

    //--------------------------------
    // Asan Pardakht gateway
    //--------------------------------
    'asanpardakht' => [
        'merchantId'     => '',
        'merchantConfigId'     => '',
        'username' => '',
        'password' => '',
        'key' => '',
        'iv' => '',
        'callback-url'   => '/',
    ],

    //--------------------------------
    // Paypal gateway
    //--------------------------------
    'paypal'   => [
        // Default product name that appear on paypal payment items
        'default_product_name' => 'My Product',
        'default_shipment_price' => 0,
        // set your paypal credential
        'client_id' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'secret'    => 'xxxxxxxxxx_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'settings'  => [
            'mode'                   => 'sandbox', //'sandbox' or 'live'
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled'         => true,
            'log.FileName'           => storage_path() . '/logs/paypal.log',
            /**
             * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
             *
             * Logging is most verbose in the 'FINE' level and decreases as you
             * proceed towards ERROR
             */
            'call_back_url'          => '/gateway/callback/paypal',
            'log.LogLevel'           => 'FINE'

        ]
    ],
    //-------------------------------
    // Tables names
    //--------------------------------
    'table'    => 'gateway_transactions',
];
