<?php

declare(strict_types=1);

namespace DarkDevLab\Encryptor;

use DarkDevLab\Enum\Enum;

/**
 * Class Cipher
 * @package DarkDevLab\Encryptor
 */
class Cipher extends Enum
{
    public const AES_128_CBC = 'AES-128-CBC';
    public const AES_128_CBC_HMAC_SHA1 = 'AES-128-CBC-HMAC-SHA1';
    public const AES_128_CFB = 'AES-128-CFB';
    public const AES_128_CFB1 = 'AES-128-CFB1';
    public const AES_128_CFB8 = 'AES-128-CFB8';
    public const AES_128_CTR = 'AES-128-CTR';
    public const AES_128_ECB = 'AES-128-ECB';
    public const AES_128_OFB = 'AES-128-OFB';
    public const AES_128_XTS = 'AES-128-XTS';
    public const AES_192_CBC = 'AES-192-CBC';
    public const AES_192_CFB = 'AES-192-CFB';
    public const AES_192_CFB1 = 'AES-192-CFB1';
    public const AES_192_CFB8 = 'AES-192-CFB8';
    public const AES_192_CTR = 'AES-192-CTR';
    public const AES_192_ECB = 'AES-192-ECB';
    public const AES_192_OFB = 'AES-192-OFB';
    public const AES_256_CBC = 'AES-256-CBC';
    public const AES_256_CBC_HMAC_SHA1 = 'AES-256-CBC-HMAC-SHA1';
    public const AES_256_CFB = 'AES-256-CFB';
    public const AES_256_CFB1 = 'AES-256-CFB1';
    public const AES_256_CFB8 = 'AES-256-CFB8';
    public const AES_256_CTR = 'AES-256-CTR';
    public const AES_256_ECB = 'AES-256-ECB';
    public const AES_256_OFB = 'AES-256-OFB';
    public const AES_256_XTS = 'AES-256-XTS';
    public const BF_CBC = 'BF-CBC';
    public const BF_CFB = 'BF-CFB';
    public const BF_ECB = 'BF-ECB';
    public const BF_OFB = 'BF-OFB';
    public const CAMELLIA_128_CBC = 'CAMELLIA-128-CBC';
    public const CAMELLIA_128_CFB = 'CAMELLIA-128-CFB';
    public const CAMELLIA_128_CFB1 = 'CAMELLIA-128-CFB1';
    public const CAMELLIA_128_CFB8 = 'CAMELLIA-128-CFB8';
    public const CAMELLIA_128_ECB = 'CAMELLIA-128-ECB';
    public const CAMELLIA_128_OFB = 'CAMELLIA-128-OFB';
    public const CAMELLIA_192_CBC = 'CAMELLIA-192-CBC';
    public const CAMELLIA_192_CFB = 'CAMELLIA-192-CFB';
    public const CAMELLIA_192_CFB1 = 'CAMELLIA-192-CFB1';
    public const CAMELLIA_192_CFB8 = 'CAMELLIA-192-CFB8';
    public const CAMELLIA_192_ECB = 'CAMELLIA-192-ECB';
    public const CAMELLIA_192_OFB = 'CAMELLIA-192-OFB';
    public const CAMELLIA_256_CBC = 'CAMELLIA-256-CBC';
    public const CAMELLIA_256_CFB = 'CAMELLIA-256-CFB';
    public const CAMELLIA_256_CFB1 = 'CAMELLIA-256-CFB1';
    public const CAMELLIA_256_CFB8 = 'CAMELLIA-256-CFB8';
    public const CAMELLIA_256_ECB = 'CAMELLIA-256-ECB';
    public const CAMELLIA_256_OFB = 'CAMELLIA-256-OFB';
    public const CAST5_CBC = 'CAST5-CBC';
    public const CAST5_CFB = 'CAST5-CFB';
    public const CAST5_ECB = 'CAST5-ECB';
    public const CAST5_OFB = 'CAST5-OFB';
    public const CHACHA = 'ChaCha';
    public const DES_CBC = 'DES-CBC';
    public const DES_CFB = 'DES-CFB';
    public const DES_CFB1 = 'DES-CFB1';
    public const DES_CFB8 = 'DES-CFB8';
    public const DES_ECB = 'DES-ECB';
    public const DES_EDE = 'DES-EDE';
    public const DES_EDE_CBC = 'DES-EDE-CBC';
    public const DES_EDE_CFB = 'DES-EDE-CFB';
    public const DES_EDE_OFB = 'DES-EDE-OFB';
    public const DES_EDE3 = 'DES-EDE3';
    public const DES_EDE3_CBC = 'DES-EDE3-CBC';
    public const DES_EDE3_CFB = 'DES-EDE3-CFB';
    public const DES_EDE3_CFB1 = 'DES-EDE3-CFB1';
    public const DES_EDE3_CFB8 = 'DES-EDE3-CFB8';
    public const DES_EDE3_OFB = 'DES-EDE3-OFB';
    public const DES_OFB = 'DES-OFB';
    public const DESX_CBC = 'DESX-CBC';
    public const GOST_28147_89 = 'GOST 28147-89';
    public const GOST89 = 'gost89';
    public const GOST89_CNT = 'gost89-cnt';
    public const GOST89_ECB = 'gost89-ecb';
    public const RC2_40_CBC = 'RC2-40-CBC';
    public const RC2_64_CBC = 'RC2-64-CBC';
    public const RC2_CBC = 'RC2-CBC';
    public const RC2_CFB = 'RC2-CFB';
    public const RC2_ECB = 'RC2-ECB';
    public const RC2_OFB = 'RC2-OFB';
    public const RC4 = 'RC4';
    public const RC4_40 = 'RC4-40';
    public const RC4_HMAC_MD5 = 'RC4-HMAC-MD5';
}
