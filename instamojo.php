<?php
if(empty($_POST)){
    echo"it is an empty post";
}

else{
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Mobile = $_POST['phone'];

    $key = "test_1174f6d38d79bda9d1665942eaa";
    $token = "test_8172ba8b7a91212c2d0db2bfc41";
    $mojoURL = "test.instamojo.com";
    

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://$mojoURL/api/1.1/payment-requests/");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:$key",
                  "X-Auth-Token:$token"));
$payload = Array(
    'purpose' => 'testing',
    'amount' => '10',
    'phone' => "$Mobile",
    'buyer_name' => "$Name",
    'redirect_url' => '',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => "$Email",
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;


}
?>