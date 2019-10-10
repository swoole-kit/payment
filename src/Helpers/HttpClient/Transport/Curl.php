<?php

namespace SwooleKit\Payment\Helpers\HttpClient\Transport;
use SwooleKit\Payment\Helpers\HttpClient\Structure\Request;
use SwooleKit\Payment\Helpers\HttpClient\Structure\Response;

/**
 * CURL传输层
 * Class Curl
 * @package SwooleKit\Payment\Helpers\HttpClient\Transport
 */
class Curl extends AbstractTransport
{

    /**
     * 执行一个请求并返回响应
     * @param Request $request
     * @return Response
     */
    function execute(Request $request): Response
    {
        // TODO: Implement execute() method.
    }
}