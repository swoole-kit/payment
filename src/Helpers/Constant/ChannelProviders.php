<?php

namespace SwooleKit\Payment\Helpers\Constant;

use EasySwoole\Spl\SplEnum;

/**
 * 支付产品供应商
 * Class ChannelProviders
 * @package SwooleKit\Payment\Helpers\Constant
 */
class ChannelProviders extends SplEnum
{
    const ALIPAY = 'alipay';
    const WECHAT = 'wechat';
}