

<form id="ConfigureGoogleSignInSettings" name="ConfigureGoogleSignInSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=AzureADSignInAdmin&do=save">

    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                {$BUTTONS}
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td  scope="row" width="200">{$MOD.LBL_AzureAD_SIGN_IN_ADMIN_CLIENT_ID}: </td>
            <td  >
                <input type='text' size='100'name='azuread_signin_clientid' value='{$config.azuread_signin_clientid}' >
            </td>
        </tr>
        <tr>
            <td  scope="row" width="200">{$MOD.LBL_AzureAD_SIGN_IN_ADMIN_TENANT_ID}: </td>
            <td  >
                <input type='text' size='100' name='azuread_signin_tenantid' value='{$config.azuread_signin_tenantid}' >
            </td>
        </tr>
        <tr>
            <td  scope="row" width="200">{$MOD.LBL_AzureAD_SIGN_IN_ADMIN_REDIRECT_URI}: </td>
            <td  >
                <input type='text' size='100'name='azuread_signin_redirecturi' value='{$config.azuread_signin_redirecturi}' >
            </td>
        </tr>        
    </table>
    
    <div style="padding-top: 2px;">
        {$BUTTONS}
    </div>
</form>
