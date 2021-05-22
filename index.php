<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$speech = $json;
 
	$response = new \stdClass();
	$response->speech = "$speech";
	$response->displayText = "$speech";
	$response->source = 'source-of-the-response';
	$response->return = "$speech";
	$response->fulfillmentText = "$speech";
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

?>
