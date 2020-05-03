ENCRYPTOR
=========

### INSTALLATION:
```bash
composer require darkdevlab/encryptor
```

Supported cipher algorithms:
```php
use DarkDevLab\Encryptor\Cipher;

var_dump(
    Cipher::getList()
);
```
|  Algorithms |
|---|
| AES-128-CBC |
| AES-128-CBC-HMAC-SHA1 |
| AES-128-CFB |
| AES-128-CFB1 |
| AES-128-CFB8 |
| AES-128-CTR |
| AES-128-ECB |
| AES-128-OFB |
| AES-128-XTS |
| AES-192-CBC |
| AES-192-CFB |
| AES-192-CFB1 |
| AES-192-CFB8 |
| AES-192-CTR |
| AES-192-ECB |
| AES-192-OFB |
| AES-256-CBC |
| AES-256-CBC-HMAC-SHA1 |
| AES-256-CFB |
| AES-256-CFB1 |
| AES-256-CFB8 |
| AES-256-CTR |
| AES-256-ECB |
| AES-256-OFB |
| AES-256-XTS |
| BF-CBC |
| BF-CFB |
| BF-ECB |
| BF-OFB |
| CAMELLIA-128-CBC |
| CAMELLIA-128-CFB |
| CAMELLIA-128-CFB1 |
| CAMELLIA-128-CFB8 |
| CAMELLIA-128-ECB |
| CAMELLIA-128-OFB |
| CAMELLIA-192-CBC |
| CAMELLIA-192-CFB |
| CAMELLIA-192-CFB1 |
| CAMELLIA-192-CFB8 |
| CAMELLIA-192-ECB |
| CAMELLIA-192-OFB |
| CAMELLIA-256-CBC |
| CAMELLIA-256-CFB |
| CAMELLIA-256-CFB1 |
| CAMELLIA-256-CFB8 |
| CAMELLIA-256-ECB |
| CAMELLIA-256-OFB |
| CAST5-CBC |
| CAST5-CFB |
| CAST5-ECB |
| CAST5-OFB |
| ChaCha |
| DES-CBC |
| DES-CFB |
| DES-CFB1 |
| DES-CFB8 |
| DES-ECB |
| DES-EDE |
| DES-EDE-CBC |
| DES-EDE-CFB |
| DES-EDE-OFB |
| DES-EDE3 |
| DES-EDE3-CBC |
| DES-EDE3-CFB |
| DES-EDE3-CFB1 |
| DES-EDE3-CFB8 |
| DES-EDE3-OFB |
| DES-OFB |
| DESX-CBC |
| GOST 28147-89 |
| gost89 |
| gost89-cnt |
| gost89-ecb |
| RC2-40-CBC |
| RC2-64-CBC |
| RC2-CBC |
| RC2-CFB |
| RC2-ECB |
| RC2-OFB |
| RC4 |
| RC4-40 |
| RC4-HMAC-MD5 |

USAGE
=====
```php
use DarkDevLab\Encryptor\OpenSslEncryptor;
use DarkDevLab\Encryptor\Cipher;

$encryptor = new OpenSslEncryptor('secret_key', Cipher::get(AES_256_CBC));
$encryptedString = $encryptor->encrypt('{"data":"to", "encryption":12345}');
$decryptedString = $encryptor->decrypt($encryptedString);
```
