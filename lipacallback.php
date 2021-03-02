<?php
	//Saving response to the database
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mpesa";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
	if (mysqli_connect_errno()) {
	echo "Error connecting to db: " . mysqli_connect_error();
	exit();
	}
	else{
	//DATA
	$CallbackResponse = file_get_contents('php://input');

	//Logging the response
	$LogFile= "LipaResponse.txt";
	$JsonMpesaResponse = json_decode($CallbackResponse, true);

	//write to file
	$log = fopen($LogFile, "a");
	fwrite($log, $CallbackResponse);
	fclose($log);
	
	MerchantRequestID = $JsonMpesaResponse['MerchantRequestID'];
	CheckoutRequestID = $JsonMpesaResponse['CheckoutRequestID'];
	ResultCode = $JsonMpesaResponse['ResultCode'];
	ResultDesc = $JsonMpesaResponse['ResultDesc'];
		
$sql = "INSERT INTO mpesa_payments (TransactionType, TransID, TransTime, TransAmount, BusinessShortCode, BillRefNumber,MSISDN,FirstName, MiddleName,LastName,OrgAccountBalance)
VALUES ('$TransactionType', '$TransID', '$TransTime', '$TransAmount', '$BusinessShortCode', '$BillRefNumber', '$MSISDN', '$FirstName', '$MiddleName', '$LastName', '$OrgAccountBalance')";

		if ($conn->query($sql) === TRUE) {
		echo $response;
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}
		$conn->close();
	?>