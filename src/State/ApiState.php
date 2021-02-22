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
 * API 返回常數
 * Class ApiState
 * @package GiocoPlus\PrismConst\Constant
 */
class ApiState {

    const FAIL  = [
        'code' => 0,
        'msg' => '失敗'
    ];

    const SUCCESS  = [
        'code' => 1,
        'msg' => '成功'
    ];

    const FIELD_MISSING = [
        'code' => 2,
        'msg' => '資料欄位有誤'
    ];

    const DATA_EXIST = [
        'code' => 3,
        'msg' => '資料已存在'
    ];

    const DATA_NOT_EXIST = [
        'code' => 4,
        'msg' => '資料不存在'
    ];

    const UPDATE_FAIL = [
        'code' => 5,
        'msg' => '更新失敗, 請檢查資料（若資料無異動視為更新失敗）'
    ];

    const GAME_URL_EXPIRED = [
        'code' => 6,
        'msg' => '遊戲連結已失效'
    ];

    const OPERATOR_NOT_FOUND = [
        'code' => 6000,
        'msg' => '商戶不存在或密鑰錯誤'
    ];

    const PRODUCT_NEED_ACK = [
        'code' => 7100,
        'msg' => '產品尚未配置'
    ];

    const VENDOR_REQUEST_FAIL = [
        'code' => 7200,
        'msg' => '產品商來源請求異常'
    ];

    const ROUTER_NOT_FOUND = [
        'code' => 9100,
        'msg' => '找不到路由'
    ];

    const HTTP_METHOD_NOT_ALLOWED = [
        'code' => 9101,
        'msg' => '請求方法不允許'
    ];

    const REQUEST_TOO_FREQUENT  = [
        'code' => 9102,
        'msg' => '請求過於頻繁'
    ];

    const IP_NOT_ALLOWED = [
        'code' => 9201,
        'msg' => 'IP存取限制'
    ];

    const IP_BLOCKED = [
        'code' => 9202,
        'msg' => '黑名單IP存取限制'
    ];

    const ACT_PERMIT_DENY = [
        'code' => 9203,
        'msg' => '操作權限不足'
    ];

    const JWT_AUTH_FAIL = [
        'code' => 9300,
        'msg' => 'JWT認證失敗'
    ];

    const ADMIN_AUTH_FAIL = [
        'code' => 9400,
        'msg' => '帳號或密碼錯誤'
    ];

    const ADMIN_OLD_PASS_FAIL = [
        'code' => 9401,
        'msg' => '舊密碼錯誤'
    ];

    const ADMIN_FORBIDDEN = [
        'code' => 9402,
        'msg' => '帳號停權'
    ];

    const MAINTAIN = [
        'code' => 9500,
        'msg' => '維護中'
    ];

    const DECOMMISSION = [
        'code' => 9501,
        'msg' => '已停用'
    ];

    const PLATFORM_VENDOR_MAINTAIN = [
        'code' => 9502,
        'msg' => '全平台遊戲維護中'
    ];

    const PLATFORM_OPERATOR_MAINTAIN = [
        'code' => 9503,
        'msg' => '全平台商戶維護中'
    ];

}