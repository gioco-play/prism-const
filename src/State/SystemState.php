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
 * 系統錯誤常數
 * Class ApiState
 * @package GiocoPlus\PrismConst\Constant
 */
class SystemState {

    const MONGODB_FAIL_CONNECT  = [
        'code' => 9999,
        'msg' => 'MONGODB 連結失敗'
    ];

    const POSTGRES_FAIL_CONNECT  = [
        'code' => 9998,
        'msg' => 'POSTGRES 連結失敗'
    ];
}