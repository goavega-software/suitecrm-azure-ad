<?php
/* * *******************************************************************************
* A simple implicit oauth2 grant flow for suiteCRM to integrate with AzureAD
*
* You can contact us at opensourceATgoavega.com
******************************************************************************* */
$manifest = array(
    'acceptable_sugar_versions' => array (
	'regex_matches' => array (
    	   0 => "6\\.5\\.*",
	   1 => "6\\.6\\.*",
	   2 => "6\\.7\\.*",
	),
    ),
    'acceptable_sugar_flavors' => array(
	    'CE'
    ),
    'latest_supported_version' => '7.1.0',
    'readme'=>'README.md',
    'key'=>'azuread',
    'author' => 'Goavega Open Souce Team',
    'description' => 'AzureAD SSO for SuiteCRM',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'AzureAD Sign-In',
    'published_date' => '2020-04-20 01:02:03',
    'type' => 'module',
    'version' => '1.0',
    'remove_tables' => '',
);

$installdefs = array(
    'id' => 'AzureADSignIn',
    'administration' => array (
        0 => array (
            'from' => '<basepath>/administration/AzureADSignInAdmin.menu.php',
        ),
    ),
    'language' => array(
        0 => array(
            'from' => '<basepath>/language/en_us.AzureADSignIn.php',
            'to_module'=> 'Administration',
			'language'=>'en_us'
        )
    ),
    'copy' => array(
    	0 => array(
            'from' => '<basepath>/SugarModules/modules/Administration',
            'to' => 'custom/modules/Administration'
        ),
        1 => array(
            'from' => '<basepath>/SugarModules/AzureADSignIn',
            'to' => 'custom/include/AzureADSignIn'
        ),
		2 => array(
			'from' => '<basepath>/SugarModules/modules/Users',
            'to' => 'custom/modules/Users'
		)
    ),
    'entrypoints' => array (
        0 => array (
            'from' => '<basepath>/SugarModules/EntryPointRegistry/AzureADSignInEntryPoint_registry.php',
            'to_module' => 'application',
        ),
    ),
);
