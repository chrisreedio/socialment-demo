<?php

// config for ChrisReedIO/Socialment
return [
	'view' => [
		// Set the text above the provider list
		'prompt' => 'Or Login Via',
		// Or change out the view completely with your own
		'providers-list' => 'socialment::providers-list',
	],
	'routes' => [
		'home' => 'filament.admin.pages.dashboard',
	],
	'models' => [
		// If you want to use a custom user model, you can specify it here.
		'user' => \App\Models\User::class,
	],
	'providers' => [
        'azure' => [
        	'icon' => 'fab-microsoft',
        	'label' => 'Azure Active Directory',
        ]
	],
];
