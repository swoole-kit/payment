<?php


namespace SwooleKit\Payment\Helpers\Crypto;

use Exception;
use SwooleKit\Payment\Helpers\Constant\AesMethods;

/**
 * AES加解密操作类
 * Class AesEncrypt
 * @package SwooleKit\Payment\Helpers\Crypto
 */
class AesEncryptor
{
    private $key;
    private $iv;
    private $method;

    /**
     * AesEncrypt constructor.
     * @param string $key 密钥
     * @param string $iv 初始向量
     * @param string $method 加密算法
     * @throws Exception
     */
    public function __construct(string $key = '', string $iv = '', string $method = AesMethods::AES_128_ECB)
    {
        $method = strtoupper($method);
        if (!AesMethods::isValidValue($method)) {
            throw new Exception('AES encrypt method "' . $method . '" is not allow');
        }

        $this->iv = $iv;
        $this->key = $key;
        $this->method = $method;
    }

    /**
     * 加密数据
     * @param string $data 待加密数据
     * @param int $options openssl_encrypt options
     * @return string
     * @throws Exception
     */
    public function encrypt(string $data, int $options = OPENSSL_RAW_DATA): string
    {
        $encrypted = openssl_encrypt($data, $this->method, $this->key, $options, $this->iv);
        if ($encrypted === false) {
            throw new Exception(openssl_error_string());
        }
        return $encrypted;
    }

    /**
     * 解密数据
     * @param string $data 待解密数据
     * @param int $options openssl_decrypt options
     * @return string
     * @throws Exception
     */
    public function decrypt(string $data, int $options = OPENSSL_RAW_DATA): string
    {
        $decrypted = openssl_decrypt($data, $this->method, $this->key, $options, $this->iv);
        if ($decrypted === false) {
            throw new Exception(openssl_error_string());
        }
        return $decrypted;
    }
}