<?php
return [
    'consumers' => value(function(){
        $consumers = [];

        $services = [
            'TransactionService' => \GiocoPlus\Transaction\Contract\TransactionServiceInterface::class,
            'RecordService' => \GiocoPlus\Record\Contract\RecordServiceInterface::class
        ];
        foreach ($services as $name => $interface) {
            $consumers[] = [
                'name' => $name,
                'service' => $interface,
                'protocol' => 'jsonrpc-http',
                'load_balancer' => 'random',
                // 這個消費者要從哪個服務中心獲取節點資訊，如不配置則不會從服務中心獲取節點資訊
                'registry' => [
                    'protocol' => 'consul',
                    'address' => env('CONSUL_HOST'),
                ]
            ];
        }
        return $consumers;
    }),
];