<?php
// setup the page items
$title = 'Home';
$description = '';
ob_start();
// everything below this line, up until the ob_get_contents() call is the pages content
?>

<h1>Mini PHP Framework</h1>
<h3>By <a href="http://www.subooa.com.au">Subooa Studios</a></h3>
<p>This is a simple PHP framework, to make new pages just add a new file in the pages folder, and base its contents off any existing file in there.</p>
<p>You will then be able to access that page via youriste.com/whateveryounamedthatfile</p>
<p>You can add it to the menu by editing themes/example/includes/main_menu.php</p>
<p>Most of the config stuff is broken out into the mpf_config.php file</p>
<p>At this stage, there is no documentation.</p>

<?php 
// grab the page content
$content = ob_get_contents();
ob_end_clean();