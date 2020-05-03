<?php

declare(strict_types=1);

namespace DarkDevLab\Encryptor;

use Exception;
use InvalidArgumentException;

/**
 * Class OpenSslEncryptor
 * @package DarkDevLab\Encryptor
 */
class OpenSslEncryptor implements EncryptorInterface
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var Cipher
     */
    private $cipher;

    /**
     * @var int
     */
    private $ivSize;

    /**
     * OpenSslEncryptor constructor.
     *
     * @param string $key
     * @param Cipher $cipher
     */
    public function __construct(string $key, Cipher $cipher)
    {
        if (empty($key)) {
            throw new InvalidArgumentException('`key` cannot be empty');
        }

        $this->key = $key;
        $this->cipher = $cipher;
        $this->ivSize = openssl_cipher_iv_length($this->cipher->getValue());
    }

    /**
     * @param string $stringToEncrypt
     *
     * @return string
     * @throws Exception
     */
    public function encrypt(string $stringToEncrypt): string
    {
        $iv = $this->ivSize > 0 ? bin2hex(random_bytes($this->ivSize / 2)) : '';
        $encryptedString = openssl_encrypt(
            $stringToEncrypt,
            $this->cipher->getValue(),
            $this->key,
            OPENSSL_RAW_DATA,
            $iv
        );

        return base64_encode($iv . bin2hex($encryptedString));
    }

    /**
     * Decrypt string
     *
     * @param string $stringToDecrypt
     *
     * @return string
     */
    public function decrypt(string $stringToDecrypt): string
    {
        $encryptedData = base64_decode($stringToDecrypt);
        $iv = substr($encryptedData, 0, $this->ivSize);
        $encryptedData = substr($encryptedData, $this->ivSize);
        $decryptedData = openssl_decrypt(
            hex2bin($encryptedData),
            $this->cipher->getValue(),
            $this->key,
            OPENSSL_RAW_DATA,
            $iv
        );

        return rtrim($decryptedData, "\0");
    }
}
