<?php

namespace SwooleKit\Payment\Helpers\Constant;

use EasySwoole\Spl\SplEnum;

/**
 * 微信支付渠道
 * Class WechatChannels
 * @package SwooleKit\Payment\Helpers\Constant
 */
class WechatChannels extends SplEnum
{
    const WECHAT_CHANNEL_APP = 'app';            // APP支付
    const WECHAT_CHANNEL_WAP = 'wap';            // H5支付
    const WECHAT_CHANNEL_SCAN = 'scan';          // native支付
    const WECHAT_CHANNEL_FACE = 'face';          // 人脸支付
    const WECHAT_CHANNEL_JSAPI = 'jsapi';        // JSAPI支付
    const WECHAT_CHANNEL_BARCODE = 'barcode';    // 付款码支付
    const WECHAT_CHANNEL_TRANSFER = 'transfer';  // 企业付款到零钱
}