<?php


namespace SwooleKit\Payment\Provider;

/**
 * 微信支付供应商
 * Class WechatProvider
 * @package SwooleKit\Payment\Provider
 */
class WechatProvider extends AbstractProvider
{

    function pay(string $channel, array $requestParams = [])
    {
        // TODO: Implement pay() method.
    }

    function refund(array $requestParams)
    {
        // TODO: Implement refund() method.
    }

    function cancel(array $requestParams)
    {
        // TODO: Implement cancel() method.
    }

    function close(array $requestParams)
    {
        // TODO: Implement close() method.
    }

    function tradeQuery(array $requestParams)
    {
        // TODO: Implement tradeQuery() method.
    }

    function refundQuery(array $requestParams)
    {
        // TODO: Implement refundQuery() method.
    }

    function billDownload(array $requestParams)
    {
        // TODO: Implement billDownload() method.
    }

}