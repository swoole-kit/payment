<?php

namespace SwooleKit\Payment\Configs;

use EasySwoole\Spl\SplBean;

/**
 * 支付宝配置
 * Class AliPay
 * @package SwooleKit\Payment\Configs
 */
class AliPayAccount extends SplBean
{
    protected $appId;                 // 支付宝分配的应用ID
    protected $appSecret;             // 使用AES加密时 AES秘钥
    protected $serverCert;            // 支付宝公钥
    protected $clientCert;            // 应用公钥
    protected $clientCertKey;         // 应用私钥
    protected $isSandbox = false;     // 是否沙箱环境

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
     * @return AliPayAccount
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * AppSecret Getter
     * @return mixed
     */
    public function getAppSecret()
    {
        return $this->appSecret;
    }

    /**
     * AppSecret Setter
     * @param mixed $appSecret
     * @return AliPayAccount
     */
    public function setAppSecret($appSecret)
    {
        $this->appSecret = $appSecret;
        return $this;
    }

    /**
     * ServerCert Getter
     * @return mixed
     */
    public function getServerCert()
    {
        return $this->serverCert;
    }

    /**
     * ServerCert Setter
     * @param mixed $serverCert
     * @return AliPayAccount
     */
    public function setServerCert($serverCert)
    {
        $this->serverCert = $serverCert;
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
     * @return AliPayAccount
     */
    public function setClientCert($clientCert)
    {
        $this->clientCert = $clientCert;
        return $this;
    }

    /**
     * ClientCertKey Getter
     * @return mixed
     */
    public function getClientCertKey()
    {
        return $this->clientCertKey;
    }

    /**
     * ClientCertKey Setter
     * @param mixed $clientCertKey
     * @return AliPayAccount
     */
    public function setClientCertKey($clientCertKey)
    {
        $this->clientCertKey = $clientCertKey;
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
     * @return AliPayAccount
     */
    public function setIsSandbox($isSandbox)
    {
        $this->isSandbox = $isSandbox;
        return $this;
    }

}