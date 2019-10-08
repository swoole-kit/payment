<?php

namespace SwooleKit\Payment\Helpers\Constant;

use EasySwoole\Spl\SplEnum;

/**
 * 支付宝支付渠道
 * Class AlipayChannels
 * @package SwooleKit\Payment\Helpers\Constant
 */
class AlipayChannels extends SplEnum
{
    const ALIPAY_CHANNEL_APP = 'app';            // APP支付
    const ALIPAY_CHANNEL_WAP = 'wap';            // 手机网站支付
    const ALIPAY_CHANNEL_WEB = 'web';            // 电脑网站支付
    const ALIPAY_CHANNEL_SCAN = 'scan';          // 当面付扫码付
    const ALIPAY_CHANNEL_FACE = 'face';          // 当面付扫脸付
    const ALIPAY_CHANNEL_BARCODE = 'barcode';    // 当面付条码付
    const ALIPAY_CHANNEL_TRANSFER = 'transfer';  // 单笔资金转账
}