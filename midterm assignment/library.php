<?php
function loadxml()
{
	global $auth;
	//$xml=simplexml_load_file("login.xml") or die("Error: Cannot create object");
	$xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
	foreach($xml->user as $u)
	{
		$auth[(string)$u->email]=(string)$u->password;
	}
}
?>
<?php