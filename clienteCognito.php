<?php
	require_once('vendor/autoload.php');
	use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
	$region = 'us-east-1'; //REGION
    $version = 'latest';
    $client = new CognitoIdentityProviderClient([
        'version' => $version,
        'region' => $region,
        'credentials' => [
                //CREDENTIALS
                'key'    => 'AKIA2ZMXNYJPOJCWYCLH',
                'secret' => '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',
            ],
    ]);
?>