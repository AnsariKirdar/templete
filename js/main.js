function ENC(string, action = 'encrypt') {
  var encrypt_method = 'AES-256-CBC';
  var secret_key = 'ZvOLdaDY4222yxiAVQuD3xg9bjbJ'; // user define private key
  var secret_iv = 'B7hm482C0zj'; // user define secret key
  var key = hash('sha256', secret_key);
  var iv = substr(hash('sha256', secret_iv), 0, 16); // sha256 is hash_hmac_algo
  var output;
  if (action == 'encrypt') {
    output = openssl_encrypt(string, encrypt_method, key, 0, iv);
    output = base64_encode(output);
  } else if ($action == 'dec') {
    output = openssl_decrypt(base64_decode(string), encrypt_method, key, 0, iv);
  }

  return output;
}

console.log(ENC(ENC));
