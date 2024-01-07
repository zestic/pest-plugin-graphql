<?php

declare(strict_types=1);

namespace Pest\GraphQl;

use GraphQL\SimpleClient\Client as SimpleClient;

final class Client
{
    protected static ?SimpleClient $client = null;
    protected static string $url = '';

    public static function url(string $url): void
    {
        self::$url = $url;
    }

    public static function client(): SimpleClient
    {
        if (null !== self::$client) {
            self::$client = new SimpleClient(self::$url);
        }

        return self::$client;
    }
}
