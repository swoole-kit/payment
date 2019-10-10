<?php

namespace SwooleKit\Payment\Helpers\HttpClient\Structure;

use EasySwoole\Spl\SplBean;

/**
 * Request Cookie
 * Class Cookie
 * @package SwooleKit\Payment\Helpers\HttpClient\Structure
 */
class Cookie extends SplBean
{
    public $name;
    public $value;
    public $expire;
    public $maxAge;
    public $secure;
    public $httpOnly;
    public $domain;
    public $path;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Cookie
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return Cookie
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * @param mixed $expire
     * @return Cookie
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * @param mixed $maxAge
     * @return Cookie
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * @param mixed $secure
     * @return Cookie
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHttpOnly()
    {
        return $this->httpOnly;
    }

    /**
     * @param mixed $httpOnly
     * @return Cookie
     */
    public function setHttpOnly($httpOnly)
    {
        $this->httpOnly = $httpOnly;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param mixed $domain
     * @return Cookie
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     * @return Cookie
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }


}