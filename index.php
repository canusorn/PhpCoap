<?php

require( __DIR__ . '/vendor/autoload.php' );


$loop = React\EventLoop\Factory::create();

$client = new PhpCoap\Client\Client( $loop );

$client->get( 'coap://192.168.2.50/examples/server.php', function( $data ) {
	var_dump( json_decode( $data ));
} );

$loop->run();

?>