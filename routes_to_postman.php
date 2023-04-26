<?php

$routesJson = file_get_contents('php://stdin');
$routes = json_decode($routesJson, true);

$postmanCollection = [
    'info' => [
        'name' => 'Laravel Project Routes',
        'schema' => 'https://schema.getpostman.com/json/collection/v2.1.0/collection.json',
    ],
    'item' => [],
];

foreach ($routes as $route) {
    $methods = explode('|', $route['method']);

    foreach ($methods as $method) {
        if ($method === 'HEAD') {
            continue;
        }

        $postmanCollection['item'][] = [
            'name' => "{$route['uri']} ({$method})",
            'request' => [
                'method' => $method,
                'header' => [],
                'url' => [
                    'raw' => '{{base_url}}/' . $route['uri'],
                    'host' => ['{{base_url}}'],
                    'path' => explode('/', $route['uri']),
                ],
            ],
        ];
    }
}

echo json_encode($postmanCollection, JSON_PRETTY_PRINT);
