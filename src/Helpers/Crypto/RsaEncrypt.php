<?php

namespace SwooleKit\Payment\Helpers\Crypto;
use const false;
use function print_r;

/**
 * RSA加解密操作类
 * Class RsaEncrypt
 * @package SwooleKit\Payment\Helpers\Crypto
 */
class RsaEncrypt
{
    private static $instance;
    private $options = [];

    /**
     * RsaEncrypt constructor.
     * @param $options
     * @throws \Exception
     */
    private function __construct($options)
    {
        if (empty($options) || !is_array($options)){
            throw new \Exception('配置不能为空');
        }
        $this->checkExtension();
        $this->options = $options;
    }

    private function __clone() {}

    /**
     * 统一入口
     * @param array $options
     * @return RsaEncrypt
     */
    public static function instance($options = [])
    {
        return self::$instance ?: self::$instance = new self($options);
    }

    /**
     * 检测openssl扩展
     * @throws \Exception
     */
    private function checkExtension()
    {
        if(!extension_loaded('openssl')) throw new \Exception('需要openssl扩展支持');
    }

    /**
     * 获取私钥
     * @return mixed
     * @throws \Exception
     */
    public function getPrivateKey()
    {
        if (empty($this->options['private_key'])){
            throw new \Exception('私钥为空');
        }
        return $this->options['private_key'];
    }

    /**
     * 获取公钥
     * @return mixed
     * @throws \Exception
     */
    public function getPublicKey()
    {
        if (empty($this->options['public_key'])){
            throw new \Exception('请配置公钥');
        }
        return $this->options['public_key'];
    }

    /**
     * 私钥加密
     * @param $data
     * @return bool|string
     */
    public function privateKeyEncrypt($data)
    {
        $encrypted = '';
        $private_key = openssl_get_privatekey(self::getPrivateKey());
        try {
            openssl_private_encrypt($data, $encrypted, $private_key);
            return base64_encode($encrypted);
        }catch (\Exception $exception){
            return false;
        }
    }

    /**
     * 公钥加密
     * @param $data
     * @return bool|string
     */
    public function publicKeyEncrypt($data)
    {
        $encrypted = '';
        $public_key = openssl_get_publickey(self::getPublicKey());
        try {
            openssl_public_encrypt($data, $encrypted, $public_key);
            return base64_encode($encrypted);
        }catch (\Exception $exception){
            return false;
        }
    }

    /**
     * 公钥解密私钥加密内容
     * @param $data
     * @return bool|string
     */
    public function privateKeyDecrypt($data)
    {
        $decrypted = '';
        $public_key = openssl_get_publickey(self::getPublicKey());
        try {
            openssl_public_decrypt(base64_decode($data), $decrypted, $public_key);
            return $decrypted;
        }catch (\Exception $exception){
            return false;
        }
    }

    /**
     * 私钥解密公钥加密内容
     * @param $data
     * @return bool|string
     */
    public function publicKeyDecrypt($data)
    {
        $decrypted = '';
        $private_key = openssl_get_privatekey(self::getPrivateKey());
        try{
            openssl_private_decrypt(base64_decode($data), $decrypted, $private_key);
            return $decrypted;
        }catch (\Exception $exception){
            return false;
        }
    }

    /**
     * 签名
     * @param $data
     * @return bool|string
     */
    public function sign($data)
    {
        $private_key = openssl_get_privatekey(self::getPrivateKey());
        $res=openssl_sign($data, $sign, $private_key);
        openssl_free_key($private_key);
        return $res?base64_encode($sign):false;
    }

    /**
     * 验证签名
     * @param $data
     * @param $sign
     * @return int
     * @throws \Exception
     */
    public function verify($data,$sign)
    {
        $public_key = openssl_get_publickey(self::getPublicKey());
        $res=openssl_verify($data, base64_decode($sign), $public_key);
        openssl_free_key($public_key);
        if($res==-1)  throw new \Exception('内部发生错误');
        return $res;
    }
}