<?php
/**
 * Created by PhpStorm.
 * User: lw
 * Date: 2019/10/10
 * Time: 17:26
 */

namespace Helpers\Constant;


use EasySwoole\Spl\SplEnum;

class HttpMethod extends SplEnum
{
    const GET = 'GET';
    const HEAD = 'HEAD';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';
    const CONNECT = 'CONNECT';
    const OPTIONS = 'OPTIONS';
    const TRACE = 'TRACE';
    const PATCH = 'PATCH';
}