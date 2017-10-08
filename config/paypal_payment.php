<?php

return array(
	# Account credentials from developer portal
	'Account' => array(
		'ClientId' => env('PAYPAL_CLIENT_ID', 'AaJysbRV1_a42Nqsn3AIVwPuzX7nmbL0A60NUmdM0_u3I61iKnn3_0x0kpUTPbn7pS9q26jv2wATnFuQ'),
		'ClientSecret' => env('PAYPAL_CLIENT_SECRET', 'EEgyJrHmuRMwBjbcz21FWQNmh1DeIOcQhbXiwfhJPFhcDUO7pd1boAiG0E-cjw5jOBt6qYIX6EGJW0E9'),
	),

	# Connection Information
	'Http' => array(
		// 'ConnectionTimeOut' => 30,
		'Retry' => 1,
		//'Proxy' => 'http://[username:password]@hostname[:port][/path]',
	),

	# Service Configuration
	'Service' => array(
		# For integrating with the live endpoint,
		# change the URL to https://api.paypal.com!
		'EndPoint' => 'https://api.sandbox.paypal.com',
	),


	# Logging Information
	'Log' => array(
		//'LogEnabled' => true,

		# When using a relative path, the log file is created
		# relative to the .php file that is the entry point
		# for this request. You can also provide an absolute
		# path here
		'FileName' => '../PayPal.log',

		# Logging level can be one of FINE, INFO, WARN or ERROR
		# Logging is most verbose in the 'FINE' level and
		# decreases as you proceed towards ERROR
		//'LogLevel' => 'FINE',
	),

	# Define your application mode here
	'mode' => 'sandbox'
);
