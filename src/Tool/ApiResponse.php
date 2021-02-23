<?php
declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace GiocoPlus\PrismConst\Tool;

use GiocoPlus\PrismConst\State\ApiState;

/**
 * API 返回格式
 * Class ApiResponse
 * @package GiocoPlus\PrismConst\Tool
 */
class ApiResponse {
    /**
     * API結果返回
     * @param $data
     * @param array $status
     * @return array
     */
    public static function result($data = [], array $status = ApiState::SUCCESS) {
        $result = [
            'status' => $status['code'],
            'message' => __("ts.{$status['msg']}")
        ];

        $result['data'] = $data;

        return $result;
    }
}