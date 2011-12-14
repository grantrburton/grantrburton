<!-- PayPal donation form -->
<form method="post"
action="https://www.paypal.com/cgi-bin/webscr">
Amount to donate: 
<input type="text" name="amount"> GBP &nbsp; 
<input type="submit" name="Submit" value="Donate">
<input type="hidden" name="return" 
value="http://www.tele-pro.co.uk/e-commerce/charity.htm">
<input type="hidden" name="cancel_return" 
value="http://www.tele-pro.co.uk/e-commerce/charity.htm">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="item_name" value="Test Donation">
<input type="hidden" name="item_number" value="TEST-DONATE">
<input type="hidden" name="business" value="<!-- paypal email address-->">
<input type="hidden" name="currency_code" value="GBP">
</form> 