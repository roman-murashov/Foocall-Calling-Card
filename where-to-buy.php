<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Low cost, high quality international calls. Over 50 countries 2p per minute or less" />
<title>Where to buy | Foocall International Calling Card</title>

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
<li class="active"><a href="where-to-buy.php">Where to buy</a></li>
<li><a href="faq.php">FAQs and Help</a></li>
<li id="last"><a href="customer-care.php">Customer Care</a></li>
</ul>
</div><!-- end nav -->
</div><!-- end header -->

<div id="page">

<?php include("callrates.php") ?>

<h1>Where to buy</h1>
<h2>The FooCall International Calling Card is available from a number of local high street retailers</h2>


<div class="retailer">
<div class="left">
<a href="http://www.spar.co.uk/StoreFinder/"><img src="images/spar.png" alt="Spar" /></a>
</div>
<div class="right">
<a href="http://www.spar.co.uk/StoreFinder/" class="round-button grey" title="Spar store locator">Store Locator <span>&#x25BA;</span></a>
</div>
</div>

<div class="retailer">
<div class="left">
<a href="http://www.clintoncards.co.uk/store-locator/"><img src="images/clinton-cards.png" alt="Clinton Cards" /></a>
</div>
<div class="right">
<a href="http://www.clintoncards.co.uk/store-locator/" class="round-button grey" title="Clinton Cards store locator">Store Locator <span>&#x25BA;</span></a>
</div>
</div>

<div class="retailer last">
<div class="left">
<a href="http://storefinder.superdrug.com/"><img src="images/superdrug.png" alt="Superdrug" /></a>
</div>
<div class="right">
<a href="http://storefinder.superdrug.com/" class="round-button grey" title="Superdrug store locator">Store Locator <span>&#x25BA;</span></a>
</div>
</div>

</div><!-- end page -->
</div><!-- end page-bg -->
</div><!-- end pagewrap -->

<div id="footer">

<div id="right">
<h3>FAQs and Help</h3>
<h4>The FooCall International Calling Card has been designed to be easy to use</h4>

<p>This website contains some additional information on using the card, including a set of frequently asked questions. Occasionally though, you may have a question that we haven’t thought of or simply want to contact us.</p>

<a href="faq.php" class="round-button red button-find-out-more">Find out more <span>&#x25BA;</span></a>

</div>

<div id="left">
<img src="images/foocall-cards.png" alt="FooCall calling cards" />
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