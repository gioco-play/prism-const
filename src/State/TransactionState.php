<?php
declare(strict_types = 1);

namespace GiocoPlus\PrismConst\State;


class TransactionState
{

    const FAIL  = [
        'code' => 0,
        'msg' => '失敗'
    ];

    const SUCCESS = [
        'code' => 1,
        'msg' => '成功'
    ];

    const ORDER_NOT_EXIST = [
        'code' => 6000,
        'msg' => '訂單不存在'
    ];

    const ORDER_EXISTED = [
        'code' => 6001,
        'msg' => '訂單已存在'
    ];

    const BET_NOT_EXIST = [
        'code' => 6002,
        'msg' => '下注紀錄不存在'
    ];

    const BET_EXISTED = [
        'code' => 6003,
        'msg' => '下注紀錄已存在'
    ];

    const PRODUCT_NEED_ACK = [
        'code' => 7100,
        'msg' => '產品尚未配置'
    ];

    const VENDOR_REQUEST_FAIL = [
        'code' => 7200,
        'msg' => '產品商來源請求異常'
    ];

    const WALLET_CODE_ERROR = [
        'code' => 7300,
        'msg' => '錢包代碼錯誤'
    ];

    const WALLET_CODE_DEPRECATED = [
        'code' => 7301,
        'msg' => '錢包代碼已棄用'
    ];

    const VENDOR_SEAMLESS_ERROR = [
        'code' => 7400,
        'msg' => '遊戲商類單一未啟用'
    ];

    const TRANS_CURRENCY_RATE_EMPTY = [
        'code' => 8101,
        'msg' => '交易幣值轉換不存在'
    ];

    const TRANS_BALANCE_SHORT = [
        'code' => 8102,
        'msg' => '錢包餘額不足'
    ];

    const TRANS_WALLET_EMPTY = [
        'code' => 8103,
        'msg' => '錢包初始化失敗'
    ];

    const TRANS_AMOUNT_ERROR = [
        'code' => 8104,
        'msg' => '交易金額有誤'
    ];

    const TRANS_SEAMLESS_ERROR = [
        'code' => 8105,
        'msg' => '請檢查類單一配置'
    ];

    const TRANS_BALANCE_FAIL = [
        'code' => 8106,
        'msg' => '錢包交易失敗'
    ];

    const TRANS_WALLET_INIT_FAIL = [
        'code' => 8107,
        'msg' => '錢包初始化失敗'
    ];

    const TRANS_TRANSFER_IN_OFF = [
        'code' => 8108,
        'msg' => '上分接口關閉'
    ];

    const TRANS_TRANSFER_OUT_OFF = [
        'code' => 8109,
        'msg' => '下分接口關閉'
    ];

    const MAINTAIN = [
        'code' => 9500,
        'msg' => '維護中'
    ];

    const DECOMMISSION = [
        'code' => 9501,
        'msg' => '已停用'
    ];

}