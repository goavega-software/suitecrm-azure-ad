<?php

function post_install()
{
    require_once 'modules/Configurator/Configurator.php';
    $cfg = new Configurator();

    /** Your setting to save in config_override.php */
    $cfg->config['azuread_signin_clientid'] = '';
    $cfg->config['azuread_signin_tenantid'] = '';
    // LBL_AzureAD_SIGN_IN_ADMIN_REDIRECT_URI
    $cfg->config['azuread_signin_redirecturi'] = '';
    $cfg->handleOverride();
}
