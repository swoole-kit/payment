<?php

namespace SwooleKit\Payment\Configs;

use EasySwoole\Spl\SplBean;

/**
 * 微信支付配置
 * Class WeChat
 * @package SwooleKit\Payment\Configs
 */
class WeChatPayAccount extends SplBean
{
    protected $appId;
    protected $mchId;
    protected $apiKey;
    protected $clientCert;
    protected $clientKey;
    protected $isSandbox = false;

    /**
     * AppId Getter
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * AppId Setter
     * @param mixed $appId
     * @return WeChatPayAccount
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * MchId Getter
     * @return mixed
     */
    public function getMchId()
    {
        return $this->mchId;
    }

    /**
     * MchId Setter
     * @param mixed $mchId
     * @return WeChatPayAccount
     */
    public function setMchId($mchId)
    {
        $this->mchId = $mchId;
        return $this;
    }

    /**
     * ApiKey Getter
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * ApiKey Setter
     * @param mixed $apiKey
     * @return WeChatPayAccount
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * ClientCert Getter
     * @return mixed
     */
    public function getClientCert()
    {
        return $this->clientCert;
    }

    /**
     * ClientCert Setter
     * @param mixed $clientCert
     * @return WeChatPayAccount
     */
    public function setClientCert($clientCert)
    {
        $this->clientCert = $clientCert;
        return $this;
    }

    /**
     * ClientKey Getter
     * @return mixed
     */
    public function getClientKey()
    {
        return $this->clientKey;
    }

    /**
     * ClientKey Setter
     * @param mixed $clientKey
     * @return WeChatPayAccount
     */
    public function setClientKey($clientKey)
    {
        $this->clientKey = $clientKey;
        return $this;
    }

    /**
     * isSandbox Getter
     * @return bool
     */
    public function isSandbox()
    {
        return $this->isSandbox;
    }

    /**
     * IsSandbox Setter
     * @param bool $isSandbox
     * @return WeChatPayAccount
     */
    public function setIsSandbox($isSandbox)
    {
        $this->isSandbox = $isSandbox;
        return $this;
    }

}