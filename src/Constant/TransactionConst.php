<?php
declare(strict_types=1);

namespace GiocoPlus\PrismConst\Constant;

/**
 * 交易類別對照
 * Class TransactionConst
 * @package App\Repository
 */
class TransactionConst
{
    /**
     * 調整 玩家餘額異常
     */

    const ADJUST = 'adjust';
    /**
     * 下注
     */
    const STAKE = 'stake';

    /**
     * 派彩
     */
    const PAYOFF = 'payoff';

    /**
     * 上分遊戲場館
     */
    const GAME_TRANSFER_IN = 'game_transfer_in';

    /**
     * 下分遊戲場館
     */
    const GAME_TRANSFER_OUT = 'game_transfer_out';

    /**
     * 上分GF平台錢包
     */
    const TRANSFER_IN = 'transfer_in';

    /**
     * 下分GF平台錢包
     */
    const TRANSFER_OUT = 'transfer_out';

    /**
     * 取消下注
     */
    const CANCEL_STAKE = 'cancel_stake';

    /**
     * 取消派彩
     */
    const CANCEL_PAYOFF = 'cancel_payoff';

    /**
     * 錢包之間 - 轉入
     */
    const WALLET_TRANSFER_IN = 'wallet_transfer_in';

    /**
     * 錢包之間 - 轉出
     */
    const WALLET_TRANSFER_OUT = 'wallet_transfer_out';

    /**
     * BONUS_TYPE
     */
    const BT_ACTIVITY = 'activity';
    const BT_JACKPOT = 'jackpot';
    const BT_TIP = 'tip';
}