<?php
return [
    'security' => [
        'shopify' => [
//	                'auth_key' =>'5b1d8296277176f72fcfbdb371c4a6e8',
            'auth_key' =>'95f262f719247e10d53f12af026d5248',
            'secret_key' =>'7fd39f2f82e665825ee4fac46fd4aa89',
//	                'secret_key' =>'79d188a496d54675ded13c691f463ed6',
            'scope' => 'write_shipping,write_inventory,read_inventory,read_products,write_products,read_orders,write_orders,write_fulfillments,read_fulfillments,read_customers,write_customers'
        ],
        'shopify_google' => [
            'auth_key' =>'3a0a9be8bb54bb8cd25cb2f7c6381d19',
            'secret_key' =>'6b86f215317b4564b4550d6594b0f2f6',
            'scope' => 'write_shipping,read_products,write_products,read_orders,write_orders,write_fulfillments,read_fulfillments,read_customers,write_customers'
        ],
        'bigcommerce' => [
            'auth_key' =>'6s9vpjs9cwbuuz4unb59ujx12h4dn3z',
            'secret_key' =>'j883fhaw1eblqxexws2zkat3tmzcpia',
            'scope' => 'write_shipping,read_products,write_products,read_orders,write_orders,write_fulfillments,read_fulfillments,read_customers,write_customers'
        ],
    ],
    'databases' => [
        'db'=>[
            'adapter'  => 'Mysql',
            'host'     => 'localhost',
            'username' => 'root',
            'password' => 'password',
            'dbname'   => 'importer'
        ],
        'db_mongo'=>[
            'adapter'  => 'Mongo',
            'host'     => 'localhost',
            'username' => 'root',
            'password' => 'password',
            'dbname'   => 'importer'
        ],

    ],
    'webhook_api_base' => [
        'shopify' => 'shopify/hook/'
    ],
    'webhooks' => [
        'shopify' => [
            'app/uninstalled' => 'uninstall'
        ]
    ],
    'otp_details' => [
        'sender_phone' => '+12253417074',
        'account_number' => 'AC259f140d36d6fbb8a9b32eeafd246c18',
        'access_token' => '70198f0f9cf3938b64a298a55ae39f09'
    ],
    'max_import_count' => 150000,
    'default_credits' => 50000,
    'trial_period' => 15,
    'test_payment' => true,
    'uninstall_class' => '\App\Amazonimporter\Components\Helper',
    'app_code' => 'importer',
    'shopify_app_name' => '',
    'frontend_app_url' => 'https://d9c24bc2.ngrok.io', // Default-> 192.168.0.153:3001 //level2->https://sellernext.com/express/app/
    'redirect_after_install' => '/show/message',
    'installation_mail_template' => 'core' . DS . 'view' . DS . 'email' . DS . 'omni_installation.volt',
    'server_ip' => '192.168.0.222',
    'current_db' => 'db',
    'default_db' => 'db',
//	     'backend_base_url' => 'https://192.168.0.222/phalcon/importer/public/',
//	     'backend_base_url' => 'https://93db13ba.ngrok.io/phalcon/importer/public/',
    'backend_base_url' => 'https://connector.com/',
    'rabbitmq_url' => 'rabbitmq-url',
    'mail_through_rabbitmq' => true,
    'enable_rabbitmq' => false,
    'enable_rabbitmq_internal'=> true,
    'queue_handler_url' => 'http://localhost:4000/',
    'app_token' => 'app-token',
    'app_name' => 'Google Express Integration',
    'partner_name' => 'CedCommerce',
    'security' => [
        'shopify' => [
            'auth_key' =>'95f262f719247e10d53f12af026d5248',
            'secret_key' =>'7fd39f2f82e665825ee4fac46fd4aa89',
//	            'auth_key' =>'5f639ab160116b767c2f5c3f40155eff',
//	            'secret_key' =>'e56c2be53a5998cff81ebb9bc65fbeca',
            'scope' => 'write_shipping,read_products,write_products,read_orders,write_orders,write_fulfillments,read_fulfillments,read_customers,write_customers'
        ],
        'bigcommerce' => [
            'auth_key' =>'6s9vpjs9cwbuuz4unb59ujx12h4dn3z',
            'secret_key' =>'j883fhaw1eblqxexws2zkat3tmzcpia',
            'scope' => 'write_shipping,read_products,write_products,read_orders,write_orders,write_fulfillments,read_fulfillments,read_customers,write_customers'
        ],
    ],
    'mailer'=>[
        'smtp' => [
            'host' => 'mailserver.cedcommerce.com',
            'port' => '587',
            'username' => 'sellernext@cedcommerce.com',
            'password' => '[4pW_nG7AIV_',

        ],
        'sender_email' => 'sellernext@cedcommerce.com',
        'sender_name' => 'Seller Next',
        'bcc' => 'satyaprakash@cedcoss.com, pankajaswal@cedcommerce.com, apps@cedcommerce.com, swatishukla@cedcommerce.com'
    ],
    'di' => [
        'mailer' => '\App\Core\Components\Mailers\PhpMailer'
    ],
    'ebay_config' =>[
        'sandbox' => [
            'credentials' => [
                'devId' => '3c58a6e1-7965-43a4-bbd5-f5d4987ce9e0',
                'appId' => 'SatyaPat-Affiliat-SBX-88e31710d-5a62e9fd',
                'certId' => 'SBX-8e31710d8cdb-5875-41e9-bdeb-55f5',
            ],
            'authToken' => 'YOUR_SANDBOX_USER_TOKEN_APPLICATION_KEY',
            'oauthUserToken' => 'YOUR_SANDBOX_OAUTH_USER_TOKEN',
            'ruName' => 'Satya_Patel-SatyaPat-Affili-rjgdskmx'
        ],
        'production' => [
            'credentials' => [
                'devId' => '3c58a6e1-7965-43a4-bbd5-f5d4987ce9e0',
                'appId' => 'SatyaPat-Affiliat-PRD-b8e35c535-1e7c120d',
                'certId' => 'PRD-8e35c5356be0-2cbf-4a3a-8764-570d',
            ],
            'authToken' => 'YOUR_PRODUCTION_USER_TOKEN_APPLICATION_KEY',
            'oauthUserToken' => 'YOUR_PRODUCTION_OAUTH_USER_TOKEN',
            'ruName' => 'Satya_Patel-SatyaPat-Affili-rjgdskmx'
        ]
    ]
];
