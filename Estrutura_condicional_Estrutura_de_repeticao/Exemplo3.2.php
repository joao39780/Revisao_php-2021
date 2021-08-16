<?php
$logged_in = false;
print "This is always printed<br>";
if($logged_in)
{
	print "Welcome aboard trusted user";
	print 'This is only print if $logged_in is true.';
}

print "This is also always printed";

?>