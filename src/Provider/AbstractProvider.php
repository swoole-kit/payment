<?php

namespace SwooleKit\Payment\Provider;

use Exception;

/**
 * 抽象供应商
 * Class AbstractProvider
 * @package SwooleKit\Payment\Provider
 */
abstract class AbstractProvider
{
    /**
     * 发起一笔支付请求
     * @param string $channel 支付渠道
     * @param array $requestParams 请求参数
     * @return mixed|array
     */
    abstract function pay(string $channel, array $requestParams = []);

    /**
     * 发起一笔退款请求
     * @param array $requestParams 请求参数
     * @return mixed
     */
    abstract function refund(array $requestParams);

    /**
     * 发起取消交易请求
     * @param array $requestParams 请求参数
     * @return mixed
     */
    abstract function cancel(array $requestParams);

    /**
     * 发起关闭交易请求
     * @param array $requestParams 请求参数
     * @return mixed
     */
    abstract function close(array $requestParams);

    /**
     * 发起支付查询请求
     * @param array $requestParams 请求参数
     * @return mixed
     */
    abstract function tradeQuery(array $requestParams);

    /**
     * 发起退款查询请求
     * @param array $requestParams 请求参数
     * @return mixed
     */
    abstract function refundQuery(array $requestParams);

    /**
     * 发起账单查询请求
     * @param array $requestParams
     * @return mixed
     */
    abstract function billDownload(array $requestParams);

    /**
     * 不支持此方法
     * @param $methodName
     * @throws Exception
     */
    private function notSupport($methodName)
    {
        $payProviderName = basename(str_replace(static::class, '\\', '/'));
        throw new Exception("{$payProviderName} not support this method: {$methodName}");
    }
}