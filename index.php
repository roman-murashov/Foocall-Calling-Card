<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Low cost, high quality international calls. Over 50 countries 2p per minute or less" />
<title>Foocall International Calling Card</title>

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

<body id="home">

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
<li id="last"><a href="customer-care.php">Customer Care</a></li>
</ul>
</div><!-- end nav -->
</div><!-- end header -->

<div id="page">

<?php include("callrates.php"); ?>

<h1><span>International Calling Card</span></h1>
<h2><strong>Low cost, high quality international calls</strong><br />
Over <strong>50 countries</strong> 2p per minute or less</h2>
<h3>Available from...</h3>
<div class="retailers">
<img src="images/clinton-cards.png" /><img src="images/superdrug.png" /><a href="where-to-buy.php"><img src="images/button-more-retailers.png" class="button-more-retailers" /></a>
</div>

</div><!-- end page -->
</div><!-- end pagewrap -->
</div><!-- end page-bg -->

<div id="footer" class="globe">
<div id="right">
<h3>How it works</h3>
<h4>Making low cost international calls  is incredibly easy...</h4>
<ol class="steps">
<li class="one">Pick up a Foocall International Calling Card from retailers around the UK</li>
<li class="two">Scratch off the panel to reveal your PIN number</li>
<li class="three">Call 0207 097 7798 and enter your PIN when asked</li>
<li class="four">Dial your destination number</li>
</ol>

<a href="how-it-works.php" class="round-button red button-find-out-more">Find out more <span>&#x25BA;</span></a>

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