<?php
// setup the page items
$title = 'Contact';
$description = '';
$masthead_text = '';
ob_start();
// everything below this line, up until the ob_get_contents() call is the pages content
?>
<div class="padded">
<h1>Contact Subooa Studios</h1>
<p>For a fee, I can help you out with your site build, you can get to me via the below:</p>
<p>
Email: <a href="mailto:info@subooa.com.au">info@subooa.com.au</a></a>
</p>
<p>
Web: <a href="http://www.subooa.com.au">www.subooa.com.au</a>
</p>
</div>


<?php 
// grab the page content
$content = ob_get_contents();
ob_end_clean();