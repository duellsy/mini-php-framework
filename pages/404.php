<?php
// setup the page items
$title = 'Page not found';
$config['layout'] = '404';
$description = '';
ob_start();
// everything below this line, up until the ob_get_contents() call is the pages content
?>


<h1>Page not found</h1>
<p>Sorry, the page you are looking for doesn't seem to exist.</p>



<?php 
// grab the page content
$content = ob_get_contents();
ob_end_clean();