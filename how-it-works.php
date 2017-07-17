<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Low cost, high quality international calls. Over 50 countries 2p per minute or less" />
<title>How it works | FooCall International Calling Card</title>

<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#countries").change(function(){
$("#" + this.value).show().siblings().hide();
});

$("#countries").change();
});
</script>
</head>

<body id="level1">

<div id="wrap">
<div id="page-bg">
<div id="pagewrap">

<div id="header">
<a href="/" id="logo"><p>Foocall International Calling Card</p></a>
<div id="nav">
<ul>
<li id="first"><a href="/">Home</a></li>
<li class="active"><a href="how-it-works.php">How it works</a></li>
<li><a href="where-to-buy.php">Where to buy</a></li>
<li><a href="faq.php">FAQs and Help</a></li>
<li id="last"><a href="customer-care.php">Customer Care</a></li>
</ul>
</div><!-- end nav -->
</div><!-- end header -->

<div id="page" class="swirls">

<?php include("callrates.php"); ?>

<h1>How it works</h1>
<h2>Making low cost international calls using the FooCall International Calling Card is incredibly easy</h2>

<h2 class="steps step1"><span>Step 1</span></h2>
<p><strong>If you haven’t already done so purchase a FooCall International Calling Card - they are available from many <a href="where-to-buy.php">well known retail outlets across the UK</a>.</strong> Once you’ve selected your card, you will need to take it to the till to purchase and activate it.</p>
<h2 class="steps step2"><span>Step 2</span></h2>
<p><strong>Once you have your card, scratch off the panel on the back to find your PIN number.</strong></p>

<img src="images/foocall-international-calling-card-back.png" alt="Foocall International Calling Card" />


<h2 class="steps step3"><span>Step 3</span></h2>
<p><strong>Call one of the access numbers - which one you choose may depend on where you are calling from.</strong></p>

<table class="rounded grey borders drop-shadow">
<tr>
<th>Where are you calling from?</th>
<th>Access number to call</th>
</tr>
<tr>
<td>From a UK landline or mobile</td>
<td>0207 097 7798</td>
</tr>
<tr>
<td>Alternative UK access number, also from a landline or mobile</td>
<td>0330 001 7798</td>
</tr>
<tr>
<td>Freephone or Payphone</td>
<td>0800 097 7798</td>
</tr>
</table>

<p>The call to an access number may be included in your inclusive minutes or charged by your phone provider.</p>
<p> Calls to 0800 access numbers include a 1p/min surcharge.</p>
<p>Calls from a BT payphone are subject to a 20p/min surcharge</p>
<p><strong>Enter your PIN number followed by the international number you want to call when prompted.</strong></p>
<p>The international number should be entered in the following format:

<table class="grey drop-shadow">
<tr>
<td>00</td>
<td>Country code</td>
<td>Area code</td>
<td>Phone number</td>
<td>#</td>
</tr>
</table>

<p>e.g. 00 91 22 4444 8888 #</p>


<h2 class="steps step4"><span>Step 4</span></h2>

<table class="rounded grey borders drop-shadow">
<tr>
<th>When you have finished your call...</th>
<th>Press...</th>
</tr>
<tr>
<td>To make another call</td>
<td># #</td>
</tr>
<tr>
<td>To save your PIN</td>
<td>* * *</td>
</tr>
<tr>
<td>To remove your saved PIN</td>
<td>* * 0</td>
</tr>
</table>

</div><!-- end page -->
</div><!-- end page-bg -->
</div><!-- end pagewrap -->

<div id="footer">

<div id="right">
<h3>Where to buy?</h3>
<h4>The FooCall International Calling Card is available from a number of local high street retailers.</h4>

<div class="retailers drop-shadow">
<img src="images/clinton-cards.png" /><img src="images/spar.png" /><img src="images/superdrug.png" class="last" />
</div>

<a href="where-to-buy.php" class="round-button red button-find-out-more">Find out more <span>&#x25BA;</span></a>

</div>

<div id="left">
<img src="images/foocall-card.png" />
</div>


<div id="foocall-app">
<a href="http://www.foocall.com/" target="_blank"><img src="images/foocall-app.png" /></a>
</div><!-- end foocall-app -->

<div id="copyright">
<p>&copy; <?php print date("Y") ?> Ghost Telecom Limited. All rights reserved.</p>
<p><a href="terms-of-service.php">Terms of Service</a> |  <a href="privacy-policy.php">Privacy Policy</a></p>
</div><!-- end copyright -->

</div><!-- end footer -->

</div><!-- end wrap -->

</body>
</html>