<?php

namespace SwooleKit\Payment;

use Exception;
use SwooleKit\Payment\Helpers\Constant\ChannelProviders;
use SwooleKit\Payment\Provider\AbstractProvider;

/**
 * 统一操作入口
 * Class Payment
 * @package SwooleKit\Payment
 */
class Payment
{

    /**
     * 获取支付实例
     * @param string $provider
     * @param $account
     * @return AbstractProvider
     * @throws Exception
     */
    public static function init(string $provider, $account)
    {
        if (!ChannelProviders::isValidValue($provider)) {
            throw new Exception('Payment provider "' . $provider . '" is not support');
        }

        $className = "SwooleKit\\Payment\\Provider\\" . ucfirst(strtolower($provider)) . 'Provider';
        if (!class_exists($className)) {
            throw new Exception('Payment provider class"' . $className . '" is not exists');
        }

        return new $className($account);
    }
}