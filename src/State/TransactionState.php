<?php
declare(strict_types = 1);

namespace GiocoPlus\PrismConst\State;


class TransactionState
{

    const FAIL  = [
        'code' => 0,
        'msg' => '失败'
    ];

    const SUCCESS = [
        'code' => 1,
        'msg' => '成功'
    ];

    const ORDER_NOT_EXIST = [
        'code' => 6000,
        'msg' => '订单不存在'
    ];

    const ORDER_EXISTED = [
        'code' => 6001,
        'msg' => '订单已存在'
    ];

    const BET_NOT_EXIST = [
        'code' => 6002,
        'msg' => '下注纪录不存在'
    ];

    const BET_EXISTED = [
        'code' => 6003,
        'msg' => '下注纪录已存在'
    ];

    const PRODUCT_NEED_ACK = [
        'code' => 7100,
        'msg' => '产品尚未配置'
    ];

    const VENDOR_REQUEST_FAIL = [
        'code' => 7200,
        'msg' => '产品商来源请求异常'
    ];

    const WALLET_CODE_ERROR = [
        'code' => 7300,
        'msg' => '钱包代码错误'
    ];

    const WALLET_CODE_DEPRECATED = [
        'code' => 7301,
        'msg' => '钱包代码已弃用'
    ];

    const VENDOR_SEAMLESS_ERROR = [
        'code' => 7400,
        'msg' => '游戏商类单一未启用'
    ];

    const TRANS_CURRENCY_RATE_EMPTY = [
        'code' => 8101,
        'msg' => '交易币值转换不存在'
    ];

    const TRANS_BALANCE_SHORT = [
        'code' => 8102,
        'msg' => '钱包馀额不足'
    ];

    const TRANS_WALLET_EMPTY = [
        'code' => 8103,
        'msg' => '钱包不存在'
    ];

    const TRANS_AMOUNT_ERROR = [
        'code' => 8104,
        'msg' => '交易金额有误'
    ];

    const TRANS_SEAMLESS_ERROR = [
        'code' => 8105,
        'msg' => '请检查类单一配置'
    ];

    const TRANS_BALANCE_FAIL = [
        'code' => 8106,
        'msg' => '钱包交易失败'
    ];

    const TRANS_WALLET_INIT_FAIL = [
        'code' => 8107,
        'msg' => '钱包初始化失败'
    ];

    const TRANS_TRANSFER_IN_OFF = [
        'code' => 8108,
        'msg' => '上分接口关闭'
    ];

    const TRANS_TRANSFER_OUT_OFF = [
        'code' => 8109,
        'msg' => '下分接口关闭'
    ];

    const MAINTAIN = [
        'code' => 9500,
        'msg' => '维护中'
    ];

    const DECOMMISSION = [
        'code' => 9501,
        'msg' => '已停用'
    ];

}