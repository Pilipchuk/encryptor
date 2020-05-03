<?php

declare(strict_types=1);

namespace DarkDevLab\Encryptor;

/**
 * Interface EncryptorInterface
 * @package DarkDevLab\Encryptor
 */
interface EncryptorInterface
{
    /**
     * Encrypt string
     *
     * @param string $stringToEncrypt
     *
     * @return string
     */
    public function encrypt(string $stringToEncrypt): string;

    /**
     * Decrypt string
     *
     * @param string $stringToDecrypt
     *
     * @return string
     */
    public function decrypt(string $stringToDecrypt): string;
}
