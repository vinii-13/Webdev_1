<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/@vartika_21bcon128');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_1174f6d38d79bda9d1665942eaa",
                  "X-Auth-Token:test_8172ba8b7a91212c2d0db2bfc41"));
$payload = Array(
    'purpose' => 'Testing',
    'amount' => '10',
    'phone' => '9999999999',
    'buyer_name' => 'John Doe',
    'redirect_url' => 'http://127.0.0.1/Webdev_1/redirect.php',
    'send_email' => true,
    'send_sms' => true,
    'email' => 'vertikasharma21112@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);
echo '<pre>';
print_r($response);

?>


