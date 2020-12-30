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

namespace GiocoPlus\PrismConst\Constant;

/**
 * 通用常數
 * Class GlobalConst
 * @package GiocoPlus\PrismConst\Constant
 */
class GlobalConst {

    /**
     * 正常
     */
    const ONLINE = 'online';

    /**
     * 維護
     */
    const MAINTAIN = 'maintain';

    /**
     * 停用
     */
    const DECOMMISSION = 'decommission';

    /**
     * 轉帳錢包
     */
    const WALLET_TRANSFER = 'transfer';

    /**
     * 無縫錢包
     */
    const WALLET_SEAMLESS = 'seamless';
}