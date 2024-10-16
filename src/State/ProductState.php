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
 * 游戏 返回常数
 *
 * Class ApiResponse
 * @package App\Helper
 */
class ProductState {

    const PRODUCT_NEED_ACK = [
        'code' => 7100,
        'msg' => '产品尚未配置'
    ];
    
    const GAME_LAUNCH_FAIL = [
        'code' => 7200,
        'msg' => '游戏启动失败'
    ];

    const GAME_MAINTAIN = [
        'code' => 7201,
        'msg' => '游戏维护'
    ];

    const GAME_DECOMMISSION = [
        'code' => 7202,
        'msg' => '游戏停用'
    ];

    const GAME_BLOCKED = [
        'code' => 7203,
        'msg' => '游戏已封锁'
    ];

    const GAME_NOT_EXIST = [
        'code' => 7204,
        'msg' => '游戏不存在'
    ];

    const GAME_CODE_IS_ONLY_FOR_BET_RECORD = [
        'code' => 7205,
        'msg' => '游戏代码仅用于投注记录'
    ];

    const GAME_LANGUAGE_NOT_EXIST = [
        'code' => 7206,
        'msg' => '游戏语系不支援'
    ];

    const GAME_CURRENCY_NOT_EXIST = [
        'code' => 7207,
        'msg' => '游戏币别不支援'
    ];


    const LANGUAGE_NOT_EXIST = [
        'code' => 7301,
        'msg' => '语系不支援'
    ];

    const CURRENCY_NOT_EXIST = [
        'code' => 7302,
        'msg' => '币别不支援'
    ];


    const VENDOR_MAINTAIN = [
        'code' => 7401,
        'msg' => '游戏商维护'
    ];

    const VENDOR_DECOMMISSION = [
        'code' => 7402,
        'msg' => '游戏商下架'
    ];

    const OPERATOR_GAME_LAUNCH_OFF = [
        'code' => 7403,
        'msg' => '商户游戏启动关闭'
    ];
}