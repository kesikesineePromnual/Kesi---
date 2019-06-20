<?php 


	$photo_id = rand( 1, 10000 );

	$curl = curl_init();
	curl_setopt_array( $curl, [
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL            => 'https://jsonplaceholder.typicode.com/photos/' . $photo_id,
	] );
	$response = curl_exec( $curl );
	curl_close( $curl );

	$data = var_dump(json_decode($response,true));
	echo "$data->url";

 ?>