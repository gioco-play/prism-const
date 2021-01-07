<?php

declare(strict_types=1);

namespace GiocoPlus\PrismConst;


class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                CacheInterface::class => Cache::class,
                ConfigInterface::class => Config::class,
                EventDispatcherInterface::class => EventDispatcher::class
            ],
            'commands' => [
            ],
            'listeners' => [

            ],
            // 合并到  config/autoload/annotations.php 文件
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'scan' => [
                'paths' => [
                    __DIR__,
                ],
            ],
            'publish' => [
                [
                    'id'          => 'consul',
                    'description' => 'consul', // 描述
                    // 建议默认配置放在 publish 文件夹中，文件命名和组件名称相同
                    'source'      => __DIR__ . '/../publish/consul.php',  // 对应的配置文件路径
                    'destination' => BASE_PATH . '/config/autoload/consul.php', // 复制为这个路径下的该文件
                ],
                [
                    'id'          => 'guzzle',
                    'description' => 'guzzle', // 描述
                    // 建议默认配置放在 publish 文件夹中，文件命名和组件名称相同
                    'source'      => __DIR__ . '/../publish/guzzle.php',  // 对应的配置文件路径
                    'destination' => BASE_PATH . '/config/autoload/guzzle.php', // 复制为这个路径下的该文件
                ],
                [
                    'id'          => 'mongodb',
                    'description' => 'mongodb', // 描述
                    // 建议默认配置放在 publish 文件夹中，文件命名和组件名称相同
                    'source'      => __DIR__ . '/../publish/mongodb.php',  // 对应的配置文件路径
                    'destination' => BASE_PATH . '/config/autoload/mongodb.php', // 复制为这个路径下的该文件
                ],
                [
                    'id'          => 'services',
                    'description' => 'services', // 描述
                    // 建议默认配置放在 publish 文件夹中，文件命名和组件名称相同
                    'source'      => __DIR__ . '/../publish/services.php',  // 对应的配置文件路径
                    'destination' => BASE_PATH . '/config/autoload/services.php', // 复制为这个路径下的该文件
                ],
                [
                    'id'          => 'cors',
                    'description' => 'hyperf cors component', // 描述
                    // 建议默认配置放在 publish 文件夹中，文件命名和组件名称相同
                    'source'      => __DIR__ . '/../publish/cors.php',  // 对应的配置文件路径
                    'destination' => BASE_PATH . '/config/autoload/cors.php', // 复制为这个路径下的该文件
                ]
            ],
        ];
    }
}
