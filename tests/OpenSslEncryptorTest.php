<?php

declare(strict_types=1);

namespace DarkDevLab\Encryptor\Tests;

use DarkDevLab\Encryptor\Cipher;
use DarkDevLab\Encryptor\OpenSslEncryptor;
use PHPUnit\Framework\TestCase;

/**
 * Class OpenSslEncryptorTest
 * @package DarkDevLab\Encryptor\Tests
 */
class OpenSslEncryptorTest extends TestCase
{
    /**
     * @var string
     */
    private $sourceString;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->sourceString = '{"data":"to", "encode":12345}';
    }

    /**
     * @param string $key
     * @param string $cipher
     * @throws \Exception
     * @dataProvider dataProvider
     */
    public function testEncryptDecrypt(string $key, string $cipher)
    {
        $encryptor = new OpenSslEncryptor($key, Cipher::get($cipher));
        $encryptedString = $encryptor->encrypt($this->sourceString);
        $decryptedString = $encryptor->decrypt($encryptedString);

        $this->assertNotEmpty(
            $encryptedString,
            'Encrypted string cannot be empty!'
        );

        $this->assertNotSame(
            $this->sourceString,
            $encryptedString,
            'Encrypted string cannot be the same with source string'
        );

        $this->assertSame(
            $this->sourceString,
            $decryptedString,
            'Decrypted string must be the same with source string'
        );
    }

    public function dataProvider(): array
    {
        $cipherDataProvider = [];
        foreach (Cipher::getList() as $algorithm) {
            $cipherDataProvider[] = [
                md5($algorithm), // Cipher key
                $algorithm       // Cipher algorithm
            ];
        }

        return $cipherDataProvider;
    }
}
