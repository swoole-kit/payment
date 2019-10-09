<?php

namespace SwooleKit\Payment\Helpers\HttpClient\Transport;

use SwooleKit\Payment\Helpers\HttpClient\Structure\Request;
use SwooleKit\Payment\Helpers\HttpClient\Structure\Response;

/**
 * 抽象传输层
 * Class AbstractTransport
 * @package SwooleKit\Payment\Helpers\HttpClient\Transport
 */
abstract class AbstractTransport
{
    /**
     * 执行一个请求并返回响应
     * @param Request $request
     * @return Response
     */
    abstract function execute(Request $request): Response;

}