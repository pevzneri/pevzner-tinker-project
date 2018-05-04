<?php

//Retrieve post variables.
$postfname = $_Post['First_name'];
$postlname = $_Post['Last_name'];
$postemail = $_Post['Email'];
$postphone = $_Post['Phone'];
$postzip = $_Post['Zip'];

//MC Auth Call via Postman
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://auth.exacttargetapis.com/v1/requestToken",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n    \"clientId\":\"gq06990hdl7ojq40y79njfuw\",\n    \"clientSecret\":\"UfRqKvtyJKvg6adGzGRRPbvc\"\n}",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

//MC Trigger

//SDO Auth

//SDO Create Contact
?>

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
				<h3>Email: <?php echo $postemail ?>
				</div>
			</div>
		</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</body>
</html>
