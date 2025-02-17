<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'assets' => [
        'version' => 'SomeVersionScheme',
        'base_urls' => 'http://cdn.example.com',
        'version_format' => '%%s?version=%%s',
        'packages' => [
            'images_path' => [
                'base_path' => '/foo',
            ],
            'images' => [
                'version' => '1.0.0',
                'base_urls' => ['http://images1.example.com', 'http://images2.example.com'],
            ],
            'foo' => [
                'version' => '1.0.0',
                'version_format' => '%%s-%%s',
            ],
            'bar' => [
                'base_urls' => ['https://bar2.example.com'],
            ],
            'bar_version_strategy' => [
                'base_urls' => ['https://bar2.example.com'],
                'version_strategy' => 'assets.custom_version_strategy',
            ],
            'json_manifest_strategy' => [
                'json_manifest_path' => '/path/to/manifest.json',
            ],
            'remote_manifest' => [
                'json_manifest_path' => 'https://cdn.example.com/manifest.json',
            ],
            'var_manifest' => [
                'json_manifest_path' => '%var_json_manifest_path%',
            ],
            'env_manifest' => [
                'json_manifest_path' => '%env(env_manifest)%',
            ],
            'strict_manifest_strategy' => [
                'json_manifest_path' => '/path/to/manifest.json',
                'strict_mode' => true,
            ],
        ],
    ],
]);

$container->setParameter('var_json_manifest_path', 'https://cdn.example.com/manifest.json');
$container->setParameter('env(env_manifest)', 'https://cdn.example.com/manifest.json');
