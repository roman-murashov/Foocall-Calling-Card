<div id="callrates" class="drop-shadow gradient-red">
    
<h3>Check our rates...</h3>
<img src="css/images/call-rates-badge.png" class="call-rates-badge" />
    
<select id="countries" class="country-select">
<option value="default">Please select</option>
<?php
if (($handle = fopen("callrates/callrates.csv", "r")) !== FALSE) {

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          print "<option value=\"$data[1]\">$data[0]</option>\n";
    }
    fclose($handle);
}
?>
</select>


<div id="boxes">

<div id="default" style="display:none">
<h4>Please select</h4>
<div id="costs">
<p class="landline">Landline <span>p/min</span></p>
<p class="landline-cost">-</p>
<p class="mobile">Mobile <span>p/min</span></p>
<p class="mobile-cost">-</p>
</div>
</div>

<?php
if (($handle = fopen("callrates/callrates.csv", "r")) !== FALSE) {

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

$countryname = $data[0];
$countrycode = $data[1];
$landlinecost = $data[2];
$mobilecost = $data[3];

if ($landlinecost == "-") {
$landlinecost = $data[2];
} else {
$landlinecost = $data[2]."p";
}

if ($mobilecost == "-") {
$mobilecost = $mobilecost;
} else {
$mobilecost = $mobilecost."p";
}
	


if (strlen($countryname) < 14) {
$headingsize = "medium";
} elseif 
(strlen($countryname) >= 14)
$headingsize = "small";
else {
$headingsize = "";
}
	
print "<div id=\"$countrycode\" style=\"display:none\">
<h4 class=\"$countrycode $headingsize\">$countryname</h4>
<div id=\"costs\">
<p class=\"landline\">Landline <span>p/min</span></p>
<p class=\"landline-cost\">$landlinecost</p>
<p class=\"mobile\">Mobile <span>p/min</span></p>
<p class=\"mobile-cost\">$mobilecost</p>
</div>
</div>\n\n";
}
fclose($handle);
}
?>
</div>
<p class="connection-fee">+4p connection fee per call</p>
</div><!-- end callrates -->
