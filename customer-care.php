<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Low cost, high quality international calls. Over 50 countries 2p per minute or less" />
<title>Customer Care | Foocall International Calling Card</title>

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
<li><a href="how-it-works.php">How it works</a></li>
<li><a href="where-to-buy.php">Where to buy</a></li>
<li><a href="faq.php">FAQs and Help</a></li>
<li id="last" class="active"><a href="customer-care.php">Customer Care</a></li>
</ul>
</div><!-- end nav -->
</div><!-- end header -->

<div id="page">

<?php include("callrates.php"); ?>

<h1>Customer Care</h1>

<h2>The FooCall International Calling Card has been designed to be easy to use</h2>

<p>This website contains some additional information on using the card, including a set of <a href="faq.php">frequently asked questions</a>. Occasionally though, you may have a question that we haven’t thought of or simply want to contact us.</p>

<p class="email"><a href="mailto:help@foocallcard.com">help@foocallcard.com</a></p>
<p class="phone">0330 001 0100 <span>(from the UK)</span></p>

</div><!-- end page -->
</div><!-- end page-bg -->
</div><!-- end pagewrap -->

<div id="footer" class="globe">

<div id="right">
<h3>How it works</h3>
<h4>Making low cost international calls is incredibly easy...</h4>
<ol class="steps">
<li class="one">Pick up a Foocall International Calling Card from retailers around the UK</li>
<li class="two">Scratch off the panel to reveal your PIN number</li>
<li class="three">Call 0207 097 7798 and enter your PIN when asked</li>
<li class="four">Dial your destination number</li>
</ol>

<a href="how-it-works.php" class="round-button black button-find-out-more">Find out more <span>&#x25BA;</span></a>

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