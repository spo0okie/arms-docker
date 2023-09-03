<?php
return [
	'class'=>'Edvlerblog\Adldap2\Adldap2Wrapper',
	'providers'=> [
		'default'=>[
			'autoconnect'=>true,
			//'schema' => new \Adldap\Schemas\ActiveDirectory(),
			'config'=>[
				'port'      => 636,
				'hosts'     => ['dc1.domain.local','dc2.domain.local'],
				'account_suffix'=> '@domain.local',
				'base_dn'   => 'DC=domain,DC=local',
				'username'  => 'inventory_auth@domain.local',
				'password'  => 'inventory_pass',
				'use_ssl'   => true,
				'use_tls'   => true,
				'custom_options'   => [
					// See: http://php.net/ldap_set_option
					LDAP_OPT_X_TLS_REQUIRE_CERT => LDAP_OPT_X_TLS_NEVER
				]
			]
		],
	],
];

