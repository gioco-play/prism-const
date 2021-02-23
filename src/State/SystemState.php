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

namespace GiocoPlus\PrismConst\State;

/**
 * 系统错误常数
 * Class ApiState
 * @package GiocoPlus\PrismConst\Constant
 */
class SystemState {

    const MONGODB_CONNECT_FAIL  = [
        'code' => 9999,
        'msg' => 'MONGODB 连结失败'
    ];

    const POSTGRES_CONNECT_FAIL  = [
        'code' => 9998,
        'msg' => 'POSTGRES 连结失败'
    ];
}