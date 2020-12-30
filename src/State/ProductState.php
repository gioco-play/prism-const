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
 *
 * 遊戲 返回常數
 *
 * Class ApiResponse
 * @package App\Helper
 */
class ProductState {

    const GAME_LAUNCH_FAIL = [
        'code' => 7200,
        'msg' => '遊戲啟動失敗'
    ];

    const GAME_MAINTAIN = [
        'code' => 7201,
        'msg' => '遊戲維護'
    ];

    const GAME_DECOMMISSION = [
        'code' => 7202,
        'msg' => '遊戲停用'
    ];

    const GAME_BLOCKED = [
        'code' => 7203,
        'msg' => '遊戲已封鎖'
    ];

}