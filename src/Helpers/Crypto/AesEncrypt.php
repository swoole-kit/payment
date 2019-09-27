<?php


namespace SwooleKit\Payment\Helpers\Crypto;
use const null;

/**
 * AES加解密操作类
 * Class AesEncrypt
 * @package SwooleKit\Payment\Helpers\Crypto
 */
class AesEncrypt
{
    // Electronic Codebook Book
    const AES_128_ECB = 'AES-128-ECB';
    const AES_192_ECB = 'AES-192-ECB';
    const AES_256_ECB = 'AES-256-ECB';

    // Cipher Block Chaining
    const AES_128_CBC = 'AES-128-CBC';
    const AES_192_CBC = 'AES-192-CBC';
    const AES_256_CBC = 'AES-256-CBC';
    const AES_128_CBC_HMAC_SHA1 = 'AES-128-CBC-HMAC-SHA1';
    const AES_256_CBC_HMAC_SHA1 = 'AES-256-CBC-HMAC-SHA1';

    // Counter
    const AES_128_CTR = 'AES-128-CTR';
    const AES_192_CTR = 'AES-192-CTR';
    const AES_256_CTR = 'AES-256-CTR';

    // Cipher FeedBack
    const AES_128_CFB = 'AES-128-CFB';
    const AES_128_CFB1 = 'AES-128-CFB1';
    const AES_128_CFB8 = 'AES-128-CFB8';
    const AES_192_CFB = 'AES-192-CFB';
    const AES_192_CFB1 = 'AES-192-CFB1';
    const AES_192_CFB8 = 'AES-192-CFB8';
    const AES_256_CFB = 'AES-256-CFB';
    const AES_256_CFB1 = 'AES-256-CFB1';
    const AES_256_CFB8 = 'AES-256-CFB8';

    // Output FeedBack
    const AES_128_OFB = 'AES-128-OFB';
    const AES_192_OFB = 'AES-192-OFB';
    const AES_256_OFB = 'AES-256-OFB';

    // XOR-ENCRYPT-XOR Tweakable Codebook mode
    const AES_128_XTS = 'AES-128-XTS';
    const AES_256_XTS = 'AES-256-XTS';

    private $key;
    private $iv;
    private $method;

    /**
     * AesEncrypt constructor.
     * @param $key 密钥
     * @param string $iv 初始向量
     * @param string $method 加密算法
     */
    public function __construct($key,$iv='',$method='AES-128-CBC')
    {
        $this->key = $key;
        $this->iv = $iv;
        $this->method = $method;
    }

    /**
     * 加密
     * @param $data 待加密数据
     * @param int $options
     * @return string
     */
    public function encrypt($data,$options=1)
    {
        return openssl_encrypt($data, $this->method, $this->key, $options, $this->iv);
    }

    /**
     * 解密
     * @param $data 待解密数据
     * @param int $options
     * @return string
     */
    public function decrypt($data,$options=1)
    {
        return openssl_decrypt ($data, $this->method, $this->key, $options, $this->iv);
    }
}