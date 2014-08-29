<?php

	require_once('LeLogger.php');
	
	/*
	 *  User - Defined Variables
	 */

	$LOGENTRIES_TOKEN = "6710c1fb-2ed8-405a-8aee-90f7b3508dee";
	
	
// TO ENABLE DATAHUB SET 1.  IP ADDRESS OF YOUR DATAHUB   2. SET THE PORT (10000 default) 3 . $datahubEnables = true;	
		
	$DATAHUB_IP_ADDRESS = "54.76.20.7";
	$DATAHUB_PORT = 10000;	
	$DATAHUB_ENABLED = false;
	
	
	

	// Whether the socket is persistent or not
	$Persistent = true;

	// Whether the socket uses SSL/TLS or not
	$SSL = false;
	
	// Set the minimum severity of events to send
	$Severity = LOG_DEBUG;
	/*
	 *  END  User - Defined Variables
	 */

	// Ignore this, used for PaaS that support configuration variables
	$ENV_TOKEN = getenv('LOGENTRIES_TOKEN');
	
	// Check for environment variable first and override LOGENTRIES_TOKEN variable accordingly
	if ($ENV_TOKEN != false && $LOGENTRIES_TOKEN === "")
	{
		$LOGENTRIES_TOKEN = $ENV_TOKEN;
	}
	
	echo "logentries.php file here\n";
	
//	$log = LeLogger::getLogger($LOGENTRIES_TOKEN, $Persistent, $SSL, $Severity);
	$log = LeLogger::getLogger($LOGENTRIES_TOKEN, $DATAHUB_IP_ADDRESS, $Persistent, $SSL, $Severity, $DATAHUB_ENABLED, $DATAHUB_PORT);
