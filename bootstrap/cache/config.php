<?php return array (
  'app' => 
  array (
    'name' => 'TreeMan',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'Asia/Tbilisi',
    'locales' => 
    array (
      0 => 'ka',
      1 => 'en',
    ),
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:9yS9fSUEaJEF+Avf8hp86AFoksf4KMBjpdgdHI5kGxQ=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
      23 => 'Merujan99\\LaravelVideoEmbed\\Providers\\LaravelVideoEmbedServiceProvider',
      24 => 'App\\Providers\\AppServiceProvider',
      25 => 'App\\Providers\\AuthServiceProvider',
      26 => 'App\\Providers\\ViewServiceProvider',
      27 => 'App\\Providers\\EventServiceProvider',
      28 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'app' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
      'LaravelVideoEmbed' => 'Merujan99\\LaravelVideoEmbed\\Facades\\LaravelVideoEmbed',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'bannerTypes' => 
  array (
    'card_banners' => 
    array (
      'id' => 1,
      'type' => 1,
      'name' => 'card_banner',
      'fields' => 
      array (
        'trans' => 
        array (
          'name' => 
          array (
            'type' => 'text',
            'required' => 'required',
          ),
          'redirect_link' => 
          array (
            'type' => 'textnorequired',
          ),
          'thumb' => 
          array (
            'type' => 'thumb',
          ),
          'active' => 
          array (
            'type' => 'checkbox',
          ),
        ),
        'nonTrans' => 
        array (
          'date' => 
          array (
            'type' => 'date',
            'required' => 'required',
            'validation' => 'required|max:20',
          ),
        ),
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/deployer/www/TreeMan/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => 'memcached',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'treeman_cache',
  ),
  'config' => 
  array (
    'image_path' => 'uploads/img/',
    'thumb_path' => 'thumb/',
    'file_path' => 'uploads/files/',
    'icon_path' => 'uploads/icons/',
    'profile_path' => 'uploads/profile/',
    'json_path' => 'uploads/json/',
    'thumbnail' => 
    array (
      'width' => 320,
      'height' => 200,
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'countries' => 
  array (
    0 => 
    array (
      'name' => 'Andorra',
      'code' => 'AD',
      'states' => NULL,
    ),
    1 => 
    array (
      'name' => 'United Arab Emirates',
      'code' => 'AE',
      'states' => NULL,
    ),
    2 => 
    array (
      'name' => 'Afghanistan',
      'code' => 'AF',
      'states' => NULL,
    ),
    3 => 
    array (
      'name' => 'Antigua and Barbuda',
      'code' => 'AG',
      'states' => NULL,
    ),
    4 => 
    array (
      'name' => 'Anguilla',
      'code' => 'AI',
      'states' => NULL,
    ),
    5 => 
    array (
      'name' => 'Albania',
      'code' => 'AL',
      'states' => NULL,
    ),
    6 => 
    array (
      'name' => 'Armenia',
      'code' => 'AM',
      'states' => NULL,
    ),
    7 => 
    array (
      'name' => 'Netherlands Antilles',
      'code' => 'AN',
      'states' => NULL,
    ),
    8 => 
    array (
      'name' => 'Angola',
      'code' => 'AO',
      'states' => NULL,
    ),
    9 => 
    array (
      'name' => 'Antarctica',
      'code' => 'AQ',
      'states' => NULL,
    ),
    10 => 
    array (
      'name' => 'Argentina',
      'code' => 'AR',
      'states' => NULL,
    ),
    11 => 
    array (
      'name' => 'American Samoa',
      'code' => 'AS',
      'states' => NULL,
    ),
    12 => 
    array (
      'name' => 'Austria',
      'code' => 'AT',
      'states' => NULL,
    ),
    13 => 
    array (
      'name' => 'Australia',
      'code' => 'AU',
      'states' => 
      array (
        0 => 
        array (
          'code' => 'ACT',
          'name' => 'Australian Capital Territory',
        ),
        1 => 
        array (
          'code' => 'NSW',
          'name' => 'New South Wales',
        ),
        2 => 
        array (
          'code' => 'NT',
          'name' => 'Northern Territory',
        ),
        3 => 
        array (
          'code' => 'QLD',
          'name' => 'Queensland',
        ),
        4 => 
        array (
          'code' => 'SA',
          'name' => 'South Australia',
        ),
        5 => 
        array (
          'code' => 'TAS',
          'name' => 'Tasmania',
        ),
        6 => 
        array (
          'code' => 'VIC',
          'name' => 'Victoria',
        ),
        7 => 
        array (
          'code' => 'WA',
          'name' => 'Western Australia',
        ),
      ),
    ),
    14 => 
    array (
      'name' => 'Aruba',
      'code' => 'AW',
      'states' => NULL,
    ),
    15 => 
    array (
      'name' => 'Azerbaijan',
      'code' => 'AZ',
      'states' => NULL,
    ),
    16 => 
    array (
      'name' => 'Bosnia and Herzegovina',
      'code' => 'BA',
      'states' => NULL,
    ),
    17 => 
    array (
      'name' => 'Barbados',
      'code' => 'BB',
      'states' => NULL,
    ),
    18 => 
    array (
      'name' => 'Bangladesh',
      'code' => 'BD',
      'states' => NULL,
    ),
    19 => 
    array (
      'name' => 'Belgium',
      'code' => 'BE',
      'states' => NULL,
    ),
    20 => 
    array (
      'name' => 'Burkina Faso',
      'code' => 'BF',
      'states' => NULL,
    ),
    21 => 
    array (
      'name' => 'Bulgaria',
      'code' => 'BG',
      'states' => NULL,
    ),
    22 => 
    array (
      'name' => 'Bahrain',
      'code' => 'BH',
      'states' => NULL,
    ),
    23 => 
    array (
      'name' => 'Burundi',
      'code' => 'BI',
      'states' => NULL,
    ),
    24 => 
    array (
      'name' => 'Benin',
      'code' => 'BJ',
      'states' => NULL,
    ),
    25 => 
    array (
      'name' => 'Bermuda',
      'code' => 'BM',
      'states' => NULL,
    ),
    26 => 
    array (
      'name' => 'Brunei Darussalam',
      'code' => 'BN',
      'states' => NULL,
    ),
    27 => 
    array (
      'name' => 'Bolivia',
      'code' => 'BO',
      'states' => NULL,
    ),
    28 => 
    array (
      'name' => 'Brazil',
      'code' => 'BR',
      'states' => 
      array (
        0 => 
        array (
          'code' => 'AC',
          'name' => 'Acre',
        ),
        1 => 
        array (
          'code' => 'AL',
          'name' => 'Alagoas',
        ),
        2 => 
        array (
          'code' => 'AM',
          'name' => 'Amazonas',
        ),
        3 => 
        array (
          'code' => 'AP',
          'name' => 'Amapá',
        ),
        4 => 
        array (
          'code' => 'BA',
          'name' => 'Bahia',
        ),
        5 => 
        array (
          'code' => 'CE',
          'name' => 'Ceará',
        ),
        6 => 
        array (
          'code' => 'DF',
          'name' => 'Distrito Federal',
        ),
        7 => 
        array (
          'code' => 'ES',
          'name' => 'Espírito Santo',
        ),
        8 => 
        array (
          'code' => 'GO',
          'name' => 'Goiás',
        ),
        9 => 
        array (
          'code' => 'MA',
          'name' => 'Maranhão',
        ),
        10 => 
        array (
          'code' => 'MG',
          'name' => 'Minas Gerais',
        ),
        11 => 
        array (
          'code' => 'MS',
          'name' => 'Mato Grosso do Sul',
        ),
        12 => 
        array (
          'code' => 'MT',
          'name' => 'Mato Grosso',
        ),
        13 => 
        array (
          'code' => 'PA',
          'name' => 'Pará',
        ),
        14 => 
        array (
          'code' => 'PB',
          'name' => 'Paraíba',
        ),
        15 => 
        array (
          'code' => 'PE',
          'name' => 'Pernambuco',
        ),
        16 => 
        array (
          'code' => 'PI',
          'name' => 'Piauí',
        ),
        17 => 
        array (
          'code' => 'PR',
          'name' => 'Paraná',
        ),
        18 => 
        array (
          'code' => 'RJ',
          'name' => 'Rio de Janeiro',
        ),
        19 => 
        array (
          'code' => 'RN',
          'name' => 'Rio Grande do Norte',
        ),
        20 => 
        array (
          'code' => 'RO',
          'name' => 'Rondônia',
        ),
        21 => 
        array (
          'code' => 'RR',
          'name' => 'Roraima',
        ),
        22 => 
        array (
          'code' => 'RS',
          'name' => 'Rio Grande do Sul',
        ),
        23 => 
        array (
          'code' => 'SC',
          'name' => 'Santa Catarina',
        ),
        24 => 
        array (
          'code' => 'SE',
          'name' => 'Sergipe',
        ),
        25 => 
        array (
          'code' => 'SP',
          'name' => 'São Paulo',
        ),
        26 => 
        array (
          'code' => 'TO',
          'name' => 'Tocantins',
        ),
      ),
    ),
    29 => 
    array (
      'name' => 'Bahamas',
      'code' => 'BS',
      'states' => NULL,
    ),
    30 => 
    array (
      'name' => 'Bhutan',
      'code' => 'BT',
      'states' => NULL,
    ),
    31 => 
    array (
      'name' => 'Bouvet Island',
      'code' => 'BV',
      'states' => NULL,
    ),
    32 => 
    array (
      'name' => 'Botswana',
      'code' => 'BW',
      'states' => NULL,
    ),
    33 => 
    array (
      'name' => 'Belarus',
      'code' => 'BY',
      'states' => NULL,
    ),
    34 => 
    array (
      'name' => 'Belize',
      'code' => 'BZ',
      'states' => NULL,
    ),
    35 => 
    array (
      'name' => 'Canada',
      'code' => 'CA',
      'states' => 
      array (
        0 => 
        array (
          'code' => 'AB',
          'name' => 'Alberta',
        ),
        1 => 
        array (
          'code' => 'BC',
          'name' => 'British Columbia',
        ),
        2 => 
        array (
          'code' => 'MB',
          'name' => 'Manitoba',
        ),
        3 => 
        array (
          'code' => 'NB',
          'name' => 'New Brunswick',
        ),
        4 => 
        array (
          'code' => 'NL',
          'name' => 'Newfoundland and Labrador',
        ),
        5 => 
        array (
          'code' => 'NS',
          'name' => 'Nova Scotia',
        ),
        6 => 
        array (
          'code' => 'NT',
          'name' => 'Northwest Territories',
        ),
        7 => 
        array (
          'code' => 'NU',
          'name' => 'Nunavut',
        ),
        8 => 
        array (
          'code' => 'ON',
          'name' => 'Ontario',
        ),
        9 => 
        array (
          'code' => 'PE',
          'name' => 'Prince Edward Island',
        ),
        10 => 
        array (
          'code' => 'QC',
          'name' => 'Quebec',
        ),
        11 => 
        array (
          'code' => 'SK',
          'name' => 'Saskatchewan',
        ),
        12 => 
        array (
          'code' => 'YT',
          'name' => 'Yukon',
        ),
      ),
    ),
    36 => 
    array (
      'name' => 'Cocos (Keeling) Islands',
      'code' => 'CC',
      'states' => NULL,
    ),
    37 => 
    array (
      'name' => 'Congo, the Democratic Republic of the',
      'code' => 'CD',
      'states' => NULL,
    ),
    38 => 
    array (
      'name' => 'Central African Republic',
      'code' => 'CF',
      'states' => NULL,
    ),
    39 => 
    array (
      'name' => 'Congo',
      'code' => 'CG',
      'states' => NULL,
    ),
    40 => 
    array (
      'name' => 'Switzerland',
      'code' => 'CH',
      'states' => NULL,
    ),
    41 => 
    array (
      'name' => 'Cote D\'Ivoire',
      'code' => 'CI',
      'states' => NULL,
    ),
    42 => 
    array (
      'name' => 'Cook Islands',
      'code' => 'CK',
      'states' => NULL,
    ),
    43 => 
    array (
      'name' => 'Chile',
      'code' => 'CL',
      'states' => NULL,
    ),
    44 => 
    array (
      'name' => 'Cameroon',
      'code' => 'CM',
      'states' => NULL,
    ),
    45 => 
    array (
      'name' => 'China',
      'code' => 'CN',
      'states' => NULL,
    ),
    46 => 
    array (
      'name' => 'Colombia',
      'code' => 'CO',
      'states' => NULL,
    ),
    47 => 
    array (
      'name' => 'Costa Rica',
      'code' => 'CR',
      'states' => NULL,
    ),
    48 => 
    array (
      'name' => 'Cuba, Republic of',
      'code' => 'CU',
      'states' => NULL,
    ),
    49 => 
    array (
      'name' => 'Cape Verde',
      'code' => 'CV',
      'states' => NULL,
    ),
    50 => 
    array (
      'name' => 'Curacao',
      'code' => 'CW',
      'states' => NULL,
    ),
    51 => 
    array (
      'name' => 'Christmas Island',
      'code' => 'CX',
      'states' => NULL,
    ),
    52 => 
    array (
      'name' => 'Cyprus',
      'code' => 'CY',
      'states' => NULL,
    ),
    53 => 
    array (
      'name' => 'Czech Republic',
      'code' => 'CZ',
      'states' => NULL,
    ),
    54 => 
    array (
      'name' => 'Germany',
      'code' => 'DE',
      'states' => NULL,
    ),
    55 => 
    array (
      'name' => 'Djibouti',
      'code' => 'DJ',
      'states' => NULL,
    ),
    56 => 
    array (
      'name' => 'Denmark',
      'code' => 'DK',
      'states' => NULL,
    ),
    57 => 
    array (
      'name' => 'Dominica',
      'code' => 'DM',
      'states' => NULL,
    ),
    58 => 
    array (
      'name' => 'Dominican Republic',
      'code' => 'DO',
      'states' => NULL,
    ),
    59 => 
    array (
      'name' => 'Algeria',
      'code' => 'DZ',
      'states' => NULL,
    ),
    60 => 
    array (
      'name' => 'Ecuador',
      'code' => 'EC',
      'states' => NULL,
    ),
    61 => 
    array (
      'name' => 'Estonia',
      'code' => 'EE',
      'states' => NULL,
    ),
    62 => 
    array (
      'name' => 'Egypt',
      'code' => 'EG',
      'states' => NULL,
    ),
    63 => 
    array (
      'name' => 'Western Sahara',
      'code' => 'EH',
      'states' => NULL,
    ),
    64 => 
    array (
      'name' => 'Eritrea',
      'code' => 'ER',
      'states' => NULL,
    ),
    65 => 
    array (
      'name' => 'Spain',
      'code' => 'ES',
      'states' => NULL,
    ),
    66 => 
    array (
      'name' => 'Ethiopia',
      'code' => 'ET',
      'states' => NULL,
    ),
    67 => 
    array (
      'name' => 'Finland',
      'code' => 'FI',
      'states' => NULL,
    ),
    68 => 
    array (
      'name' => 'Fiji',
      'code' => 'FJ',
      'states' => NULL,
    ),
    69 => 
    array (
      'name' => 'Falkland Islands (Malvinas)',
      'code' => 'FK',
      'states' => NULL,
    ),
    70 => 
    array (
      'name' => 'Micronesia, Federated States of',
      'code' => 'FM',
      'states' => NULL,
    ),
    71 => 
    array (
      'name' => 'Faroe Islands',
      'code' => 'FO',
      'states' => NULL,
    ),
    72 => 
    array (
      'name' => 'France',
      'code' => 'FR',
      'states' => NULL,
    ),
    73 => 
    array (
      'name' => 'Gabon',
      'code' => 'GA',
      'states' => NULL,
    ),
    74 => 
    array (
      'name' => 'United Kingdom',
      'code' => 'GB',
      'states' => NULL,
    ),
    75 => 
    array (
      'name' => 'Grenada',
      'code' => 'GD',
      'states' => NULL,
    ),
    76 => 
    array (
      'name' => 'Georgia',
      'code' => 'GE',
      'states' => NULL,
    ),
    77 => 
    array (
      'name' => 'French Guiana',
      'code' => 'GF',
      'states' => NULL,
    ),
    78 => 
    array (
      'name' => 'Guernsey',
      'code' => 'GG',
      'states' => NULL,
    ),
    79 => 
    array (
      'name' => 'Ghana',
      'code' => 'GH',
      'states' => NULL,
    ),
    80 => 
    array (
      'name' => 'Gibraltar',
      'code' => 'GI',
      'states' => NULL,
    ),
    81 => 
    array (
      'name' => 'Greenland',
      'code' => 'GL',
      'states' => NULL,
    ),
    82 => 
    array (
      'name' => 'Gambia',
      'code' => 'GM',
      'states' => NULL,
    ),
    83 => 
    array (
      'name' => 'Guinea',
      'code' => 'GN',
      'states' => NULL,
    ),
    84 => 
    array (
      'name' => 'Guadeloupe',
      'code' => 'GP',
      'states' => NULL,
    ),
    85 => 
    array (
      'name' => 'Equatorial Guinea',
      'code' => 'GQ',
      'states' => NULL,
    ),
    86 => 
    array (
      'name' => 'Greece',
      'code' => 'GR',
      'states' => NULL,
    ),
    87 => 
    array (
      'name' => 'South Georgia and the South Sandwich Islands',
      'code' => 'GS',
      'states' => NULL,
    ),
    88 => 
    array (
      'name' => 'Guatemala',
      'code' => 'GT',
      'states' => NULL,
    ),
    89 => 
    array (
      'name' => 'Guam',
      'code' => 'GU',
      'states' => NULL,
    ),
    90 => 
    array (
      'name' => 'Guinea-Bissau',
      'code' => 'GW',
      'states' => NULL,
    ),
    91 => 
    array (
      'name' => 'Guyana',
      'code' => 'GY',
      'states' => NULL,
    ),
    92 => 
    array (
      'name' => 'Hong Kong',
      'code' => 'HK',
      'states' => NULL,
    ),
    93 => 
    array (
      'name' => 'Heard Island and Mcdonald Islands',
      'code' => 'HM',
      'states' => NULL,
    ),
    94 => 
    array (
      'name' => 'Honduras',
      'code' => 'HN',
      'states' => NULL,
    ),
    95 => 
    array (
      'name' => 'Croatia',
      'code' => 'HR',
      'states' => NULL,
    ),
    96 => 
    array (
      'name' => 'Haiti',
      'code' => 'HT',
      'states' => NULL,
    ),
    97 => 
    array (
      'name' => 'Hungary',
      'code' => 'HU',
      'states' => NULL,
    ),
    98 => 
    array (
      'name' => 'Indonesia',
      'code' => 'ID',
      'states' => NULL,
    ),
    99 => 
    array (
      'name' => 'Ireland',
      'code' => 'IE',
      'states' => NULL,
    ),
    100 => 
    array (
      'name' => 'Israel',
      'code' => 'IL',
      'states' => NULL,
    ),
    101 => 
    array (
      'name' => 'Isle of Man',
      'code' => 'IM',
      'states' => NULL,
    ),
    102 => 
    array (
      'name' => 'India',
      'code' => 'IN',
      'states' => NULL,
    ),
    103 => 
    array (
      'name' => 'British Indian Ocean Territory',
      'code' => 'IO',
      'states' => NULL,
    ),
    104 => 
    array (
      'name' => 'Iraq',
      'code' => 'IQ',
      'states' => NULL,
    ),
    105 => 
    array (
      'name' => 'Iran, Islamic Republic of',
      'code' => 'IR',
      'states' => NULL,
    ),
    106 => 
    array (
      'name' => 'Iceland',
      'code' => 'IS',
      'states' => NULL,
    ),
    107 => 
    array (
      'name' => 'Italy',
      'code' => 'IT',
      'states' => NULL,
    ),
    108 => 
    array (
      'name' => 'Jersey',
      'code' => 'JE',
      'states' => NULL,
    ),
    109 => 
    array (
      'name' => 'Jamaica',
      'code' => 'JM',
      'states' => NULL,
    ),
    110 => 
    array (
      'name' => 'Jordan',
      'code' => 'JO',
      'states' => NULL,
    ),
    111 => 
    array (
      'name' => 'Japan',
      'code' => 'JP',
      'states' => 
      array (
        0 => 
        array (
          'code' => '01',
          'name' => 'Hokkaido',
        ),
        1 => 
        array (
          'code' => '02',
          'name' => 'Aomori',
        ),
        2 => 
        array (
          'code' => '03',
          'name' => 'Iwate',
        ),
        3 => 
        array (
          'code' => '04',
          'name' => 'Miyagi',
        ),
        4 => 
        array (
          'code' => '05',
          'name' => 'Akita',
        ),
        5 => 
        array (
          'code' => '06',
          'name' => 'Yamagata',
        ),
        6 => 
        array (
          'code' => '07',
          'name' => 'Fukushima',
        ),
        7 => 
        array (
          'code' => '08',
          'name' => 'Ibaraki',
        ),
        8 => 
        array (
          'code' => '09',
          'name' => 'Tochigi',
        ),
        9 => 
        array (
          'code' => '10',
          'name' => 'Gunma',
        ),
        10 => 
        array (
          'code' => '11',
          'name' => 'Saitama',
        ),
        11 => 
        array (
          'code' => '12',
          'name' => 'Chiba',
        ),
        12 => 
        array (
          'code' => '13',
          'name' => 'Tokyo',
        ),
        13 => 
        array (
          'code' => '14',
          'name' => 'Kanagawa',
        ),
        14 => 
        array (
          'code' => '15',
          'name' => 'Niigata',
        ),
        15 => 
        array (
          'code' => '16',
          'name' => 'Toyama',
        ),
        16 => 
        array (
          'code' => '17',
          'name' => 'Ishikawa',
        ),
        17 => 
        array (
          'code' => '18',
          'name' => 'Fukui',
        ),
        18 => 
        array (
          'code' => '19',
          'name' => 'Yamanashi',
        ),
        19 => 
        array (
          'code' => '20',
          'name' => 'Nagano',
        ),
        20 => 
        array (
          'code' => '21',
          'name' => 'Gifu',
        ),
        21 => 
        array (
          'code' => '22',
          'name' => 'Shizuoka',
        ),
        22 => 
        array (
          'code' => '23',
          'name' => 'Aichi',
        ),
        23 => 
        array (
          'code' => '24',
          'name' => 'Mie',
        ),
        24 => 
        array (
          'code' => '25',
          'name' => 'Shiga',
        ),
        25 => 
        array (
          'code' => '26',
          'name' => 'Kyoto',
        ),
        26 => 
        array (
          'code' => '27',
          'name' => 'Osaka',
        ),
        27 => 
        array (
          'code' => '28',
          'name' => 'Hyogo',
        ),
        28 => 
        array (
          'code' => '29',
          'name' => 'Nara',
        ),
        29 => 
        array (
          'code' => '30',
          'name' => 'Wakayama',
        ),
        30 => 
        array (
          'code' => '31',
          'name' => 'Tottori',
        ),
        31 => 
        array (
          'code' => '32',
          'name' => 'Shimane',
        ),
        32 => 
        array (
          'code' => '33',
          'name' => 'Okayama',
        ),
        33 => 
        array (
          'code' => '34',
          'name' => 'Hiroshima',
        ),
        34 => 
        array (
          'code' => '35',
          'name' => 'Yamaguchi',
        ),
        35 => 
        array (
          'code' => '36',
          'name' => 'Tokushima',
        ),
        36 => 
        array (
          'code' => '37',
          'name' => 'Kagawa',
        ),
        37 => 
        array (
          'code' => '38',
          'name' => 'Ehime',
        ),
        38 => 
        array (
          'code' => '39',
          'name' => 'Kochi',
        ),
        39 => 
        array (
          'code' => '40',
          'name' => 'Fukuoka',
        ),
        40 => 
        array (
          'code' => '41',
          'name' => 'Saga',
        ),
        41 => 
        array (
          'code' => '42',
          'name' => 'Nagasaki',
        ),
        42 => 
        array (
          'code' => '43',
          'name' => 'Kumamoto',
        ),
        43 => 
        array (
          'code' => '44',
          'name' => 'Oita',
        ),
        44 => 
        array (
          'code' => '45',
          'name' => 'Miyazaki',
        ),
        45 => 
        array (
          'code' => '46',
          'name' => 'Kagoshima',
        ),
        46 => 
        array (
          'code' => '47',
          'name' => 'Okinawa',
        ),
      ),
    ),
    112 => 
    array (
      'name' => 'Kenya',
      'code' => 'KE',
      'states' => NULL,
    ),
    113 => 
    array (
      'name' => 'Kyrgyzstan',
      'code' => 'KG',
      'states' => NULL,
    ),
    114 => 
    array (
      'name' => 'Cambodia',
      'code' => 'KH',
      'states' => NULL,
    ),
    115 => 
    array (
      'name' => 'Kiribati',
      'code' => 'KI',
      'states' => NULL,
    ),
    116 => 
    array (
      'name' => 'Comoros',
      'code' => 'KM',
      'states' => NULL,
    ),
    117 => 
    array (
      'name' => 'Saint Kitts and Nevis',
      'code' => 'KN',
      'states' => NULL,
    ),
    118 => 
    array (
      'name' => 'Korea, Democratic People\'s Republic of',
      'code' => 'KP',
      'states' => NULL,
    ),
    119 => 
    array (
      'name' => 'Korea, Republic of',
      'code' => 'KR',
      'states' => NULL,
    ),
    120 => 
    array (
      'name' => 'Kuwait',
      'code' => 'KW',
      'states' => NULL,
    ),
    121 => 
    array (
      'name' => 'Cayman Islands',
      'code' => 'KY',
      'states' => NULL,
    ),
    122 => 
    array (
      'name' => 'Kazakhstan',
      'code' => 'KZ',
      'states' => NULL,
    ),
    123 => 
    array (
      'name' => 'Lao People\'s Democratic Republic',
      'code' => 'LA',
      'states' => NULL,
    ),
    124 => 
    array (
      'name' => 'Lebanon',
      'code' => 'LB',
      'states' => NULL,
    ),
    125 => 
    array (
      'name' => 'Saint Lucia',
      'code' => 'LC',
      'states' => NULL,
    ),
    126 => 
    array (
      'name' => 'Liechtenstein',
      'code' => 'LI',
      'states' => NULL,
    ),
    127 => 
    array (
      'name' => 'Sri Lanka',
      'code' => 'LK',
      'states' => NULL,
    ),
    128 => 
    array (
      'name' => 'Liberia',
      'code' => 'LR',
      'states' => NULL,
    ),
    129 => 
    array (
      'name' => 'Lesotho',
      'code' => 'LS',
      'states' => NULL,
    ),
    130 => 
    array (
      'name' => 'Lithuania',
      'code' => 'LT',
      'states' => NULL,
    ),
    131 => 
    array (
      'name' => 'Luxembourg',
      'code' => 'LU',
      'states' => NULL,
    ),
    132 => 
    array (
      'name' => 'Latvia',
      'code' => 'LV',
      'states' => NULL,
    ),
    133 => 
    array (
      'name' => 'Libyan Arab Jamahiriya',
      'code' => 'LY',
      'states' => NULL,
    ),
    134 => 
    array (
      'name' => 'Morocco',
      'code' => 'MA',
      'states' => NULL,
    ),
    135 => 
    array (
      'name' => 'Monaco',
      'code' => 'MC',
      'states' => NULL,
    ),
    136 => 
    array (
      'name' => 'Moldova, Republic of',
      'code' => 'MD',
      'states' => NULL,
    ),
    137 => 
    array (
      'name' => 'Montenegro',
      'code' => 'ME',
      'states' => NULL,
    ),
    138 => 
    array (
      'name' => 'Saint Martin',
      'code' => 'MF',
      'states' => NULL,
    ),
    139 => 
    array (
      'name' => 'Madagascar',
      'code' => 'MG',
      'states' => NULL,
    ),
    140 => 
    array (
      'name' => 'Marshall Islands',
      'code' => 'MH',
      'states' => NULL,
    ),
    141 => 
    array (
      'name' => 'North Macedonia, Republic of',
      'code' => 'MK',
      'states' => NULL,
    ),
    142 => 
    array (
      'name' => 'Mali',
      'code' => 'ML',
      'states' => NULL,
    ),
    143 => 
    array (
      'name' => 'Myanmar',
      'code' => 'MM',
      'states' => NULL,
    ),
    144 => 
    array (
      'name' => 'Mongolia',
      'code' => 'MN',
      'states' => NULL,
    ),
    145 => 
    array (
      'name' => 'Macao',
      'code' => 'MO',
      'states' => NULL,
    ),
    146 => 
    array (
      'name' => 'Northern Mariana Islands',
      'code' => 'MP',
      'states' => NULL,
    ),
    147 => 
    array (
      'name' => 'Martinique',
      'code' => 'MQ',
      'states' => NULL,
    ),
    148 => 
    array (
      'name' => 'Mauritania',
      'code' => 'MR',
      'states' => NULL,
    ),
    149 => 
    array (
      'name' => 'Montserrat',
      'code' => 'MS',
      'states' => NULL,
    ),
    150 => 
    array (
      'name' => 'Malta',
      'code' => 'MT',
      'states' => NULL,
    ),
    151 => 
    array (
      'name' => 'Mauritius',
      'code' => 'MU',
      'states' => NULL,
    ),
    152 => 
    array (
      'name' => 'Maldives',
      'code' => 'MV',
      'states' => NULL,
    ),
    153 => 
    array (
      'name' => 'Malawi',
      'code' => 'MW',
      'states' => NULL,
    ),
    154 => 
    array (
      'name' => 'Mexico',
      'code' => 'MX',
      'states' => NULL,
    ),
    155 => 
    array (
      'name' => 'Malaysia',
      'code' => 'MY',
      'states' => NULL,
    ),
    156 => 
    array (
      'name' => 'Mozambique',
      'code' => 'MZ',
      'states' => NULL,
    ),
    157 => 
    array (
      'name' => 'Namibia',
      'code' => 'NA',
      'states' => NULL,
    ),
    158 => 
    array (
      'name' => 'New Caledonia',
      'code' => 'NC',
      'states' => NULL,
    ),
    159 => 
    array (
      'name' => 'Niger',
      'code' => 'NE',
      'states' => NULL,
    ),
    160 => 
    array (
      'name' => 'Norfolk Island',
      'code' => 'NF',
      'states' => NULL,
    ),
    161 => 
    array (
      'name' => 'Nigeria',
      'code' => 'NG',
      'states' => NULL,
    ),
    162 => 
    array (
      'name' => 'Nicaragua',
      'code' => 'NI',
      'states' => NULL,
    ),
    163 => 
    array (
      'name' => 'Netherlands',
      'code' => 'NL',
      'states' => NULL,
    ),
    164 => 
    array (
      'name' => 'Norway',
      'code' => 'NO',
      'states' => NULL,
    ),
    165 => 
    array (
      'name' => 'Nepal',
      'code' => 'NP',
      'states' => NULL,
    ),
    166 => 
    array (
      'name' => 'Nauru',
      'code' => 'NR',
      'states' => NULL,
    ),
    167 => 
    array (
      'name' => 'Niue',
      'code' => 'NU',
      'states' => NULL,
    ),
    168 => 
    array (
      'name' => 'New Zealand',
      'code' => 'NZ',
      'states' => NULL,
    ),
    169 => 
    array (
      'name' => 'Oman',
      'code' => 'OM',
      'states' => NULL,
    ),
    170 => 
    array (
      'name' => 'Panama',
      'code' => 'PA',
      'states' => NULL,
    ),
    171 => 
    array (
      'name' => 'Peru',
      'code' => 'PE',
      'states' => NULL,
    ),
    172 => 
    array (
      'name' => 'French Polynesia',
      'code' => 'PF',
      'states' => NULL,
    ),
    173 => 
    array (
      'name' => 'Papua New Guinea',
      'code' => 'PG',
      'states' => NULL,
    ),
    174 => 
    array (
      'name' => 'Philippines',
      'code' => 'PH',
      'states' => NULL,
    ),
    175 => 
    array (
      'name' => 'Pakistan',
      'code' => 'PK',
      'states' => NULL,
    ),
    176 => 
    array (
      'name' => 'Poland',
      'code' => 'PL',
      'states' => NULL,
    ),
    177 => 
    array (
      'name' => 'Saint Pierre and Miquelon',
      'code' => 'PM',
      'states' => NULL,
    ),
    178 => 
    array (
      'name' => 'Pitcairn',
      'code' => 'PN',
      'states' => NULL,
    ),
    179 => 
    array (
      'name' => 'Puerto Rico',
      'code' => 'PR',
      'states' => NULL,
    ),
    180 => 
    array (
      'name' => 'Palestinian Territory, Occupied',
      'code' => 'PS',
      'states' => NULL,
    ),
    181 => 
    array (
      'name' => 'Portugal',
      'code' => 'PT',
      'states' => NULL,
    ),
    182 => 
    array (
      'name' => 'Palau',
      'code' => 'PW',
      'states' => NULL,
    ),
    183 => 
    array (
      'name' => 'Paraguay',
      'code' => 'PY',
      'states' => NULL,
    ),
    184 => 
    array (
      'name' => 'Qatar',
      'code' => 'QA',
      'states' => NULL,
    ),
    185 => 
    array (
      'name' => 'Reunion',
      'code' => 'RE',
      'states' => NULL,
    ),
    186 => 
    array (
      'name' => 'Romania',
      'code' => 'RO',
      'states' => NULL,
    ),
    187 => 
    array (
      'name' => 'Serbia',
      'code' => 'RS',
      'states' => NULL,
    ),
    188 => 
    array (
      'name' => 'Russian Federation',
      'code' => 'RU',
      'states' => NULL,
    ),
    189 => 
    array (
      'name' => 'Rwanda',
      'code' => 'RW',
      'states' => NULL,
    ),
    190 => 
    array (
      'name' => 'Saudi Arabia',
      'code' => 'SA',
      'states' => NULL,
    ),
    191 => 
    array (
      'name' => 'Solomon Islands',
      'code' => 'SB',
      'states' => NULL,
    ),
    192 => 
    array (
      'name' => 'Seychelles',
      'code' => 'SC',
      'states' => NULL,
    ),
    193 => 
    array (
      'name' => 'Sudan',
      'code' => 'SD',
      'states' => NULL,
    ),
    194 => 
    array (
      'name' => 'Sweden',
      'code' => 'SE',
      'states' => NULL,
    ),
    195 => 
    array (
      'name' => 'Singapore',
      'code' => 'SG',
      'states' => NULL,
    ),
    196 => 
    array (
      'name' => 'Saint Helena',
      'code' => 'SH',
      'states' => NULL,
    ),
    197 => 
    array (
      'name' => 'Slovenia',
      'code' => 'SI',
      'states' => NULL,
    ),
    198 => 
    array (
      'name' => 'Svalbard and Jan Mayen',
      'code' => 'SJ',
      'states' => NULL,
    ),
    199 => 
    array (
      'name' => 'Slovakia',
      'code' => 'SK',
      'states' => NULL,
    ),
    200 => 
    array (
      'name' => 'Sierra Leone',
      'code' => 'SL',
      'states' => NULL,
    ),
    201 => 
    array (
      'name' => 'San Marino',
      'code' => 'SM',
      'states' => NULL,
    ),
    202 => 
    array (
      'name' => 'Senegal',
      'code' => 'SN',
      'states' => NULL,
    ),
    203 => 
    array (
      'name' => 'Somalia',
      'code' => 'SO',
      'states' => NULL,
    ),
    204 => 
    array (
      'name' => 'Suriname',
      'code' => 'SR',
      'states' => NULL,
    ),
    205 => 
    array (
      'name' => 'Sao Tome and Principe',
      'code' => 'ST',
      'states' => NULL,
    ),
    206 => 
    array (
      'name' => 'El Salvador',
      'code' => 'SV',
      'states' => NULL,
    ),
    207 => 
    array (
      'name' => 'Sint Maarten',
      'code' => 'SX',
      'states' => NULL,
    ),
    208 => 
    array (
      'name' => 'Syrian Arab Republic',
      'code' => 'SY',
      'states' => NULL,
    ),
    209 => 
    array (
      'name' => 'Eswatini',
      'code' => 'SZ',
      'states' => NULL,
    ),
    210 => 
    array (
      'name' => 'Turks and Caicos Islands',
      'code' => 'TC',
      'states' => NULL,
    ),
    211 => 
    array (
      'name' => 'Chad',
      'code' => 'TD',
      'states' => NULL,
    ),
    212 => 
    array (
      'name' => 'French Southern Territories',
      'code' => 'TF',
      'states' => NULL,
    ),
    213 => 
    array (
      'name' => 'Togo',
      'code' => 'TG',
      'states' => NULL,
    ),
    214 => 
    array (
      'name' => 'Thailand',
      'code' => 'TH',
      'states' => NULL,
    ),
    215 => 
    array (
      'name' => 'Tajikistan',
      'code' => 'TJ',
      'states' => NULL,
    ),
    216 => 
    array (
      'name' => 'Tokelau',
      'code' => 'TK',
      'states' => NULL,
    ),
    217 => 
    array (
      'name' => 'Timor-Leste',
      'code' => 'TL',
      'states' => NULL,
    ),
    218 => 
    array (
      'name' => 'Turkmenistan',
      'code' => 'TM',
      'states' => NULL,
    ),
    219 => 
    array (
      'name' => 'Tunisia',
      'code' => 'TN',
      'states' => NULL,
    ),
    220 => 
    array (
      'name' => 'Tonga',
      'code' => 'TO',
      'states' => NULL,
    ),
    221 => 
    array (
      'name' => 'Turkey',
      'code' => 'TR',
      'states' => NULL,
    ),
    222 => 
    array (
      'name' => 'Trinidad and Tobago',
      'code' => 'TT',
      'states' => NULL,
    ),
    223 => 
    array (
      'name' => 'Tuvalu',
      'code' => 'TV',
      'states' => NULL,
    ),
    224 => 
    array (
      'name' => 'Taiwan',
      'code' => 'TW',
      'states' => NULL,
    ),
    225 => 
    array (
      'name' => 'Tanzania',
      'code' => 'TZ',
      'states' => NULL,
    ),
    226 => 
    array (
      'name' => 'Ukraine',
      'code' => 'UA',
      'states' => NULL,
    ),
    227 => 
    array (
      'name' => 'Uganda',
      'code' => 'UG',
      'states' => NULL,
    ),
    228 => 
    array (
      'name' => 'United States Minor Outlying Islands',
      'code' => 'UM',
      'states' => NULL,
    ),
    229 => 
    array (
      'name' => 'United States',
      'code' => 'US',
      'states' => 
      array (
        0 => 
        array (
          'code' => 'AA',
          'name' => 'Armed Forces Americas (except Canada)',
        ),
        1 => 
        array (
          'code' => 'AE',
          'name' => 'Armed Forces',
        ),
        2 => 
        array (
          'code' => 'AK',
          'name' => 'Alaska',
        ),
        3 => 
        array (
          'code' => 'AL',
          'name' => 'Alabama',
        ),
        4 => 
        array (
          'code' => 'AP',
          'name' => 'Armed Forces Pacific',
        ),
        5 => 
        array (
          'code' => 'AR',
          'name' => 'Arkansas',
        ),
        6 => 
        array (
          'code' => 'AS',
          'name' => 'American Samoa',
        ),
        7 => 
        array (
          'code' => 'AZ',
          'name' => 'Arizona',
        ),
        8 => 
        array (
          'code' => 'CA',
          'name' => 'California',
        ),
        9 => 
        array (
          'code' => 'CO',
          'name' => 'Colorado',
        ),
        10 => 
        array (
          'code' => 'CT',
          'name' => 'Connecticut',
        ),
        11 => 
        array (
          'code' => 'DC',
          'name' => 'District of Columbia',
        ),
        12 => 
        array (
          'code' => 'DE',
          'name' => 'Delaware',
        ),
        13 => 
        array (
          'code' => 'FL',
          'name' => 'Florida',
        ),
        14 => 
        array (
          'code' => 'FM',
          'name' => 'Federated States of Micronesia',
        ),
        15 => 
        array (
          'code' => 'GA',
          'name' => 'Georgia',
        ),
        16 => 
        array (
          'code' => 'GU',
          'name' => 'Guam',
        ),
        17 => 
        array (
          'code' => 'HI',
          'name' => 'Hawaii',
        ),
        18 => 
        array (
          'code' => 'IA',
          'name' => 'Iowa',
        ),
        19 => 
        array (
          'code' => 'ID',
          'name' => 'Idaho',
        ),
        20 => 
        array (
          'code' => 'IL',
          'name' => 'Illinois',
        ),
        21 => 
        array (
          'code' => 'IN',
          'name' => 'Indiana',
        ),
        22 => 
        array (
          'code' => 'KS',
          'name' => 'Kansas',
        ),
        23 => 
        array (
          'code' => 'KY',
          'name' => 'Kentucky',
        ),
        24 => 
        array (
          'code' => 'LA',
          'name' => 'Louisiana',
        ),
        25 => 
        array (
          'code' => 'MA',
          'name' => 'Massachusetts',
        ),
        26 => 
        array (
          'code' => 'MD',
          'name' => 'Maryland',
        ),
        27 => 
        array (
          'code' => 'ME',
          'name' => 'Maine',
        ),
        28 => 
        array (
          'code' => 'MH',
          'name' => 'Marshall Islands',
        ),
        29 => 
        array (
          'code' => 'MI',
          'name' => 'Michigan',
        ),
        30 => 
        array (
          'code' => 'MN',
          'name' => 'Minnesota',
        ),
        31 => 
        array (
          'code' => 'MO',
          'name' => 'Missouri',
        ),
        32 => 
        array (
          'code' => 'MP',
          'name' => 'Northern Mariana Islands',
        ),
        33 => 
        array (
          'code' => 'MS',
          'name' => 'Mississippi',
        ),
        34 => 
        array (
          'code' => 'MT',
          'name' => 'Montana',
        ),
        35 => 
        array (
          'code' => 'NC',
          'name' => 'North Carolina',
        ),
        36 => 
        array (
          'code' => 'ND',
          'name' => 'North Dakota',
        ),
        37 => 
        array (
          'code' => 'NE',
          'name' => 'Nebraska',
        ),
        38 => 
        array (
          'code' => 'NH',
          'name' => 'New Hampshire',
        ),
        39 => 
        array (
          'code' => 'NJ',
          'name' => 'New Jersey',
        ),
        40 => 
        array (
          'code' => 'NM',
          'name' => 'New Mexico',
        ),
        41 => 
        array (
          'code' => 'NV',
          'name' => 'Nevada',
        ),
        42 => 
        array (
          'code' => 'NY',
          'name' => 'New York',
        ),
        43 => 
        array (
          'code' => 'OH',
          'name' => 'Ohio',
        ),
        44 => 
        array (
          'code' => 'OK',
          'name' => 'Oklahoma',
        ),
        45 => 
        array (
          'code' => 'OR',
          'name' => 'Oregon',
        ),
        46 => 
        array (
          'code' => 'PA',
          'name' => 'Pennsylvania',
        ),
        47 => 
        array (
          'code' => 'PR',
          'name' => 'Puerto Rico',
        ),
        48 => 
        array (
          'code' => 'PW',
          'name' => 'Palau',
        ),
        49 => 
        array (
          'code' => 'RI',
          'name' => 'Rhode Island',
        ),
        50 => 
        array (
          'code' => 'SC',
          'name' => 'South Carolina',
        ),
        51 => 
        array (
          'code' => 'SD',
          'name' => 'South Dakota',
        ),
        52 => 
        array (
          'code' => 'TN',
          'name' => 'Tennessee',
        ),
        53 => 
        array (
          'code' => 'TX',
          'name' => 'Texas',
        ),
        54 => 
        array (
          'code' => 'UT',
          'name' => 'Utah',
        ),
        55 => 
        array (
          'code' => 'VA',
          'name' => 'Virginia',
        ),
        56 => 
        array (
          'code' => 'VI',
          'name' => 'Virgin Islands',
        ),
        57 => 
        array (
          'code' => 'VT',
          'name' => 'Vermont',
        ),
        58 => 
        array (
          'code' => 'WA',
          'name' => 'Washington',
        ),
        59 => 
        array (
          'code' => 'WI',
          'name' => 'Wisconsin',
        ),
        60 => 
        array (
          'code' => 'WV',
          'name' => 'West Virginia',
        ),
        61 => 
        array (
          'code' => 'WY',
          'name' => 'Wyoming',
        ),
      ),
    ),
    230 => 
    array (
      'name' => 'Uruguay',
      'code' => 'UY',
      'states' => NULL,
    ),
    231 => 
    array (
      'name' => 'Uzbekistan',
      'code' => 'UZ',
      'states' => NULL,
    ),
    232 => 
    array (
      'name' => 'Vatican City',
      'code' => 'VA',
      'states' => NULL,
    ),
    233 => 
    array (
      'name' => 'Saint Vincent and the Grenadines',
      'code' => 'VC',
      'states' => NULL,
    ),
    234 => 
    array (
      'name' => 'Venezuela',
      'code' => 'VE',
      'states' => NULL,
    ),
    235 => 
    array (
      'name' => 'Virgin Islands, British',
      'code' => 'VG',
      'states' => NULL,
    ),
    236 => 
    array (
      'name' => 'Virgin Islands, U.S.',
      'code' => 'VI',
      'states' => NULL,
    ),
    237 => 
    array (
      'name' => 'Vietnam',
      'code' => 'VN',
      'states' => NULL,
    ),
    238 => 
    array (
      'name' => 'Vanuatu',
      'code' => 'VU',
      'states' => NULL,
    ),
    239 => 
    array (
      'name' => 'Wallis and Futuna',
      'code' => 'WF',
      'states' => NULL,
    ),
    240 => 
    array (
      'name' => 'Samoa',
      'code' => 'WS',
      'states' => NULL,
    ),
    241 => 
    array (
      'name' => 'Yemen',
      'code' => 'YE',
      'states' => NULL,
    ),
    242 => 
    array (
      'name' => 'Mayotte',
      'code' => 'YT',
      'states' => NULL,
    ),
    243 => 
    array (
      'name' => 'South Africa',
      'code' => 'ZA',
      'states' => NULL,
    ),
    244 => 
    array (
      'name' => 'Zambia',
      'code' => 'ZM',
      'states' => NULL,
    ),
    245 => 
    array (
      'name' => 'Zimbabwe',
      'code' => 'ZW',
      'states' => NULL,
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'treeman',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'mysql',
        'port' => '3306',
        'database' => 'treeman',
        'username' => 'root',
        'password' => 'root',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'old' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'mysql',
        'port' => '3306',
        'database' => 'forge',
        'username' => 'forge',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'mysql',
        'port' => '3306',
        'database' => 'treeman',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'mysql',
        'port' => '3306',
        'database' => 'treeman',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'treeman_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => 'redis',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => 'redis',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'directoryTypes' => 
  array (
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => '/home/deployer/www/TreeMan/storage/framework/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'filemanager' => 
  array (
    'base_route' => 'admin/filemanager',
    'middleware' => 
    array (
      0 => 'web',
      1 => 'auth',
    ),
    'allow_format' => 'jpeg,jpg,png,gif,webp',
    'max_size' => 500,
    'max_image_width' => 1024,
    'image_quality' => 80,
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/deployer/www/TreeMan/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/deployer/www/TreeMan/storage/app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      '/home/deployer/www/TreeMan/public/storage' => '/home/deployer/www/TreeMan/storage/app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'lfm' => 
  array (
    'use_package_routes' => false,
    'allow_private_folder' => true,
    'private_folder_name' => 'UniSharp\\LaravelFilemanager\\Handlers\\ConfigHandler',
    'allow_shared_folder' => true,
    'shared_folder_name' => 'shares',
    'folder_categories' => 
    array (
      'file' => 
      array (
        'folder_name' => 'files',
        'startup_view' => 'list',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
          5 => 'application/pdf',
          6 => 'text/plain',
        ),
      ),
      'image' => 
      array (
        'folder_name' => 'photos',
        'startup_view' => 'grid',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
    ),
    'paginator' => 
    array (
      'perPage' => 30,
    ),
    'disk' => 'public',
    'rename_file' => false,
    'rename_duplicates' => false,
    'alphanumeric_filename' => false,
    'alphanumeric_directory' => false,
    'should_validate_size' => false,
    'should_validate_mime' => false,
    'over_write_on_duplicate' => false,
    'should_create_thumbnails' => true,
    'thumb_folder_name' => 'thumbs',
    'raster_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
    ),
    'thumb_img_width' => 200,
    'thumb_img_height' => 200,
    'file_type_array' => 
    array (
      'pdf' => 'Adobe Acrobat',
      'doc' => 'Microsoft Word',
      'docx' => 'Microsoft Word',
      'xls' => 'Microsoft Excel',
      'xlsx' => 'Microsoft Excel',
      'zip' => 'Archive',
      'gif' => 'GIF Image',
      'jpg' => 'JPEG Image',
      'jpeg' => 'JPEG Image',
      'png' => 'PNG Image',
      'ppt' => 'Microsoft PowerPoint',
      'pptx' => 'Microsoft PowerPoint',
    ),
    'php_ini_overrides' => 
    array (
      'memory_limit' => '256M',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/deployer/www/TreeMan/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/deployer/www/TreeMan/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/home/deployer/www/TreeMan/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'encryption' => 'tls',
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -t',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => 'njermizashvili@gmail.com',
      'name' => 'Example',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/deployer/www/TreeMan/resources/views/vendor/mail',
      ),
    ),
  ),
  'menuTypes' => 
  array (
    0 => 'mainMenu',
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sectionAttr' => 
  array (
    'additional' => 
    array (
      0 => 'color',
    ),
    'translateable_additional' => 
    array (
    ),
  ),
  'sectionTypes' => 
  array (
    'home' => 
    array (
      'id' => 0,
      'type' => 0,
      'fields' => 
      array (
        'title' => 
        array (
          'type' => 'text',
          'reqired' => 'required',
          'max' => '100',
          'min' => '3',
          'name' => 'title',
          'translateble' => true,
        ),
        'parent' => 
        array (
          'type' => 'select',
          'reqired' => 'required',
          'options' => 'sections',
          'max' => '20000',
          'name' => 'parent_id',
        ),
        'type' => 
        array (
          'type' => 'select',
          'reqired' => 'required',
          'options' => 'sectionTypes',
          'name' => 'type',
        ),
        'active' => 
        array (
          'type' => 'checkbox',
          'options' => 'sections',
          'translateble' => true,
        ),
      ),
    ),
    'section_constructor' => 
    array (
      'id' => 1,
      'type' => 2,
      'fields' => 
      array (
        'title' => 
        array (
          'type' => 'text',
          'reqired' => 'required',
          'max' => '100',
          'min' => '3',
          'name' => 'title',
          'translateble' => true,
        ),
        'parent' => 
        array (
          'type' => 'select',
          'reqired' => 'required',
          'options' => 'sections',
          'max' => '20000',
          'name' => 'parent_id',
        ),
        'type' => 
        array (
          'type' => 'select',
          'reqired' => 'required',
          'options' => 'sectionTypes',
          'name' => 'type',
        ),
        'active' => 
        array (
          'type' => 'checkbox',
          'options' => 'sections',
          'translateble' => true,
        ),
      ),
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/deployer/www/TreeMan/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'treeman_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'settings' => 
  array (
    'settings' => 
    array (
    ),
  ),
  'sluggable' => 
  array (
    'source' => NULL,
    'maxLength' => NULL,
    'maxLengthKeepWords' => true,
    'method' => NULL,
    'separator' => '-',
    'unique' => true,
    'uniqueSuffix' => NULL,
    'firstUniqueSuffix' => 2,
    'includeTrashed' => false,
    'reserved' => NULL,
    'onUpdate' => false,
    'slugEngineOptions' => 
    array (
    ),
  ),
  'submissionAttr' => 
  array (
    'additional' => 
    array (
      0 => 'name',
      1 => 'lastname',
      2 => 'phone',
      3 => 'email',
      4 => 'message',
      5 => 'subject',
      6 => 'post_id',
    ),
  ),
  'translatable' => 
  array (
    'locales' => 
    array (
      0 => 'ka',
      1 => 'en',
    ),
    'locale_separator' => '-',
    'locale' => NULL,
    'use_fallback' => false,
    'use_property_fallback' => true,
    'fallback_locale' => 'en',
    'translation_model_namespace' => NULL,
    'translation_suffix' => 'Translation',
    'locale_key' => 'locale',
    'to_array_always_loads_translations' => true,
    'rule_factory' => 
    array (
      'format' => 1,
      'prefix' => '%',
      'suffix' => '%',
    ),
  ),
  'userTypes' => 
  array (
    1 => 'superuser',
    2 => 'admin',
    3 => 'manager',
    4 => 'employ',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/deployer/www/TreeMan/resources/views',
    ),
    'compiled' => '/home/deployer/www/TreeMan/storage/framework/views',
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/home/deployer/www/TreeMan/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'duration_background' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'lfm-config' => 
  array (
    'use_package_routes' => true,
    'allow_private_folder' => true,
    'private_folder_name' => 'UniSharp\\LaravelFilemanager\\Handlers\\ConfigHandler',
    'allow_shared_folder' => true,
    'shared_folder_name' => 'shares',
    'folder_categories' => 
    array (
      'file' => 
      array (
        'folder_name' => 'files',
        'startup_view' => 'list',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'application/pdf',
          5 => 'text/plain',
        ),
      ),
      'image' => 
      array (
        'folder_name' => 'photos',
        'startup_view' => 'grid',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
        ),
      ),
    ),
    'paginator' => 
    array (
      'perPage' => 30,
    ),
    'disk' => 'public',
    'rename_file' => false,
    'rename_duplicates' => false,
    'alphanumeric_filename' => false,
    'alphanumeric_directory' => false,
    'should_validate_size' => false,
    'should_validate_mime' => true,
    'over_write_on_duplicate' => false,
    'item_columns' => 
    array (
      0 => 'name',
      1 => 'url',
      2 => 'time',
      3 => 'icon',
      4 => 'is_file',
      5 => 'is_image',
      6 => 'thumb_url',
    ),
    'should_create_thumbnails' => true,
    'thumb_folder_name' => 'thumbs',
    'raster_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
    ),
    'thumb_img_width' => 200,
    'thumb_img_height' => 200,
    'file_type_array' => 
    array (
      'pdf' => 'Adobe Acrobat',
      'doc' => 'Microsoft Word',
      'docx' => 'Microsoft Word',
      'xls' => 'Microsoft Excel',
      'xlsx' => 'Microsoft Excel',
      'zip' => 'Archive',
      'gif' => 'GIF Image',
      'jpg' => 'JPEG Image',
      'jpeg' => 'JPEG Image',
      'png' => 'PNG Image',
      'ppt' => 'Microsoft PowerPoint',
      'pptx' => 'Microsoft PowerPoint',
    ),
    'php_ini_overrides' => 
    array (
      'memory_limit' => '256M',
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
