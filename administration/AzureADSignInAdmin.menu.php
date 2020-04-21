<?php 
$admin_option_defs = array();
$admin_option_defs['AzureADSignInAdmin'] = array(
	'AzureAD Sign-In Configuration', 'LBL_AzureAD_SIGN_IN_ADMIN', 'LBL_AzureAD_SIGN_IN_ADMIN_DESCRIPTION', './index.php?module=Administration&action=AzureADSignInAdmin'
	);

// Loop through the menus and add to the Users group
$tmp_menu_set = false;
foreach ($admin_group_header as $key => $values)
{
	if ($values[0] == 'LBL_STUDIO_TITLE')
	{
		if ($sugar_config['sugar_version'] < 5.2)
			$admin_group_header[$key][3]['AzureADSignInAdmin'] = $admin_option_defs['AzureADSignInAdmin'];
		else
			$admin_group_header[$key][3]['Administration']['AzureADSignInAdmin'] = $admin_option_defs['AzureADSignInAdmin'];
		$tmp_menu_set = true;
	}
}

// Else create new group
if (!$tmp_menu_set)
	if ($sugar_config['sugar_version'] < 5.2)
		$admin_group_header[] = array('AzureAD_SIGN_IN_ADMIN_TITLE','',false,$admin_option_defs,'AzureAD_SIGN_IN_ADMIN_DESC');
	else
		$admin_group_header[] = array('AzureAD_SIGN_IN_ADMIN_TITLE','',false,array('Administration' => $admin_option_defs),'AzureAD_SIGN_IN_ADMIN_DESC');
?>
