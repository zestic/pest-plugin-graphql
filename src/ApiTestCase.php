<?php

declare(strict_types=1);

namespace Pest\GraphQl;

use Tests\TestCase;

class ApiTestCase extends TestCase
{
    public function __construct()
    {
        $url = get_env('TEST_GRAPHQL_URL');
        Client::url($url);
    }
}
