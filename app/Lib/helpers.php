<?php
function get_db_config(){
    $db_config = [
        'connection' => env('DB_CONNECTION', 'mysql'),
        'host' => env('DB_HOST', 'localhost'),
        'database'  => env('DB_DATABASE', 'weibo'),
        'username'  => env('DB_USERNAME', 'root'),
        'password'  => env('DB_PASSWORD', ''),
    ];
    if (getenv('IS_IN_HEROKU')){
        $url = parse_url(getenv('DATABASE_URL'));
        $db_config = [
            'connection' => 'pgsql',
            'host' => $url["host"],
            'database'  => substr($url["path"], 1),
            'username'  => $url["user"],
            'password'  => $url["pass"],
        ];
    }
    return $db_config;
}
