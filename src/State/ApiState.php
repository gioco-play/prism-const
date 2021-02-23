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
 * API 返回常数
 * Class ApiState
 * @package GiocoPlus\PrismConst\Constant
 */
class ApiState {

    const FAIL  = [
        'code' => 0,
        'msg' => '失败'
    ];

    const SUCCESS  = [
        'code' => 1,
        'msg' => '成功'
    ];

    const FIELD_MISSING = [
        'code' => 2,
        'msg' => '资料栏位有误'
    ];

    const DATA_EXIST = [
        'code' => 3,
        'msg' => '资料已存在'
    ];

    const DATA_NOT_EXIST = [
        'code' => 4,
        'msg' => '资料不存在'
    ];

    const UPDATE_FAIL = [
        'code' => 5,
        'msg' => '更新失败, 请检查资料（若资料无异动视为更新失败）'
    ];

    const GAME_URL_EXPIRED = [
        'code' => 6,
        'msg' => '游戏连结已失效'
    ];

    const OPERATOR_NOT_FOUND = [
        'code' => 6000,
        'msg' => '商户不存在或密钥错误'
    ];

    const PRODUCT_NEED_ACK = [
        'code' => 7100,
        'msg' => '产品尚未配置'
    ];

    const VENDOR_REQUEST_FAIL = [
        'code' => 9000,
        'msg' => '产品商来源请求异常'
    ];

    const ROUTER_NOT_FOUND = [
        'code' => 9100,
        'msg' => '找不到路由'
    ];

    const HTTP_METHOD_NOT_ALLOWED = [
        'code' => 9101,
        'msg' => '请求方法不允许'
    ];

    const REQUEST_TOO_FREQUENT  = [
        'code' => 9102,
        'msg' => '请求过于频繁'
    ];

    const IP_NOT_ALLOWED = [
        'code' => 9201,
        'msg' => 'IP存取限制'
    ];

    const IP_BLOCKED = [
        'code' => 9202,
        'msg' => '黑名单IP存取限制'
    ];

    const ACT_PERMIT_DENY = [
        'code' => 9203,
        'msg' => '操作权限不足'
    ];

    const JWT_AUTH_FAIL = [
        'code' => 9300,
        'msg' => 'JWT认证失败'
    ];

    const ADMIN_AUTH_FAIL = [
        'code' => 9400,
        'msg' => '帐号或密码错误'
    ];

    const ADMIN_OLD_PASS_FAIL = [
        'code' => 9401,
        'msg' => '旧密码错误'
    ];

    const ADMIN_FORBIDDEN = [
        'code' => 9402,
        'msg' => '帐号停权'
    ];

    const ONLINE = [
        'code' => 9500,
        'msg' => '正常'
    ];

    const MAINTAIN = [
        'code' => 9501,
        'msg' => '维护中'
    ];

    const DECOMMISSION = [
        'code' => 9502,
        'msg' => '已停用'
    ];

    const PLATFORM_VENDOR_MAINTAIN = [
        'code' => 9503,
        'msg' => '平台游戏维护中'
    ];

    const PLATFORM_OPERATOR_MAINTAIN = [
        'code' => 9504,
        'msg' => '平台商户维护中'
    ];

    const GET_RECORD_TIME_RANGE = [
        'code' => 9601,
        'msg' => '超出拉取时间范围'
    ];

    const GET_RECORD_TIME_EARLY = [
        'code' => 9602,
        'msg' => '拉取时间须小于当前时间'
    ];

}