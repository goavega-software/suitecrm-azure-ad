# Azure AD SignIn
### Version 1.0

A SuiteCRM plugin to allow single signon using Azure Active Directory / Office 365.


### Prerequisite
Create an app in Azure AD to get client_id. As part of the registration, you will also need to add the Web platform, enable the Implicit flow, and add the redirectURI to your application. Redirect URI should be set to URL of SuiteCRM/index.php
More details here on app registration here - https://docs.microsoft.com/en-us/azure/active-directory/develop/scenario-spa-app-registration

### Important
* The plugin hides the default login box once it is enabled (JS only) so make sure that all users's primary email addresses (not username) match users in Azure AD.


#### Installing the Add-on

The ONLY step

Install plug-in using Module Loader, Admin > Module Loader.
The plugin bundle can be downloaded from ![Releases page](https://github.com/goavega-software/suitecrm-azure-ad/releases/download/1.0/SuiteCRMAzureAD1_0.zip)

#### Usage

After installation, you'll get to see the link on **admin** section under *Developer Tools*.

After selecting Azure AD Sign-In, following needs to be configured

* Client Id 
* Tenant Id (this should be same as authority which is in form of https://login.microsoftonline.com/{tenantId})
* Redirect URI

![Settings](https://github.com/goavega-software/suitecrm-azure-ad/raw/master/screeshots/settings.png)

#### Attribution
https://github.com/ChangezKhan/GoogleSignIn-SuiteCRM/

#### License
AGPL 3.0 (makes sense since SuiteCRM is AGPL)
