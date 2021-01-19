<?php
$ref = $GET['reference'];
if ($ref == "") {
  # code...
  header("Location:Javascript://history.go(-1)");
}
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_3c0531866b3e3981890c8ad12e64a62297ece4ec",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
  $result = json_decode($response);
  }
  if ($result->data->status == 'success') {
    # code...
    $status = $result->data->status;
     $reference = $result->data->reference;
     $lname = $result->data->customer->last_name;
     $fname = $result->data->customer->first_name;
     $fullname = $lname .' '.$fname;
     $Cus_email = $result->data->customer->email;
     date_default_timezone_get('Africa/Lagos');
     $Date_time date('m/d/Y h:i:s a', time());

     include('database/mydb.php');
     $stmt = $con->prepare("INSERT INTO customer_details(status, reference, fullname, date_purchased, email) VALUES (?, ?, ?, ?, ?)");
     $stmt->bind_param("sssss", $status, $reference, $fullname,  $Date_time, $Cus_email);
     $stmt->execute();
     if(!$stmt){
      echo 'There was a problem on your code' . mysqli_error($con);
     }
     else{
      header("Location: success.php?status=success");
     }
  }
  else{
    header("Location: error.html");
  }
?>