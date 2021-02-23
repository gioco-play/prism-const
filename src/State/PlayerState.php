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
 * Player常数
 * Class ApiState
 * @package GiocoPlus\PrismConst\Constant
 */
class PlayerState {

    const FREEZE = [
        'code' => 6004,
        'msg' => '玩家冻结'
    ];

    const BLOCK = [
        'code' => 6005,
        'msg' => '玩家封锁'
    ];

    const EXISTS = [
        'code' => 6006,
        'msg' => '玩家帐号已存在'
    ];

    const NOT_EXISTS = [
        'code' => 6007,
        'msg' => '玩家帐号不存在'
    ];

}