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

    const GAME_NOT_EXIST = [
        'code' => 7204,
        'msg' => '遊戲不存在'
    ];

    const GAME_LANGUAGE_NOT_EXIST = [
        'code' => 7206,
        'msg' => '遊戲語系不支援'
    ];

    const GAME_CURRENCY_NOT_EXIST = [
        'code' => 7207,
        'msg' => '遊戲幣別不支援'
    ];


    const LANGUAGE_NOT_EXIST = [
        'code' => 7301,
        'msg' => '語系不支援'
    ];

    const CURRENCY_NOT_EXIST = [
        'code' => 7302,
        'msg' => '幣別不支援'
    ];


    const VENDOR_MAINTAIN = [
        'code' => 7401,
        'msg' => '遊戲商維護'
    ];

    const VENDOR_DECOMMISSION = [
        'code' => 7402,
        'msg' => '遊戲商下架'
    ];

    const OPERATOR_GAME_LAUNCH_OFF = [
        'code' => 7403,
        'msg' => '商戶遊戲啟動關閉'
    ];
}