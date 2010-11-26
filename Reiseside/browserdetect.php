<?php
// Redirect visitors using IE6(+/-) to another location
// Rudi Visser - 19/01/10 17:43

// Configuration
{
	// Default Redirection Page (If not overriden by $IERedirectTo) (string)
	$DefaultRedirection = "http://cube.iu.hio.no/~s171667/reiseside/IE/";
	// Also redirect browsers with a version lower than IE6? (true / false)
	$LTIE6 = true;
	// Also redirect browsers with a version higher than IE6? If $LTIE6 also true, detect all (current) IE (true / false)
	$GTIE6 = true;
}

// Do the do...
/* NOTE: Right, there's a lot of ways to do this, but let's go for a very
 * specific way, grab the exact part of the user agent we require and
 * check it with in_array.
 * By constructing a complete array manually, it also lets us add other
 * versions easily. */
 
// Construct the check array
{
	$ToCheck = array(
		'MSIE 6.1',
		'MSIE 6.0'
	);
	if($LTIE6) {
		$ToCheck[] = 'MSIE 5.5';
		$ToCheck[] = 'MSIE 5.2';
		$ToCheck[] = 'MSIE 5.1';
		$ToCheck[] = 'MSIE 5.0';
		$ToCheck[] = 'MSIE 4.5';
		$ToCheck[] = 'MSIE 4.0';
		$ToCheck[] = 'MSIE 3.0';
		$ToCheck[] = 'MSIE 2.0';
	}
	if($GTIE6) {
		$ToCheck[] = 'MSIE 8.0';
		$ToCheck[] = 'MSIE 7.0';
	}
}

// Where are we going to redirect?
$IERedirectTo = ( !empty($IERedirectTo) ? $IERedirectTo : $DefaultRedirection );

// Do the actual checking
{
	// First get the comparison string
	preg_match('~compatible; (MSIE [0-9].[0-9])~', $_SERVER['HTTP_USER_AGENT'], $Matches);
	// If this isn't IE... Byebye
	if(!count($Matches)) return;
	$ComparisonString = $Matches[1];
	// If we are in the list of IEs to check, redirect
	if(in_array($ComparisonString, $ToCheck)) {
		// Make it a temporary redirection incase, somehow, a search engine has a random IE string in it
		header("HTTP/1.1 307 Temporary Redirect");
		// Redirect!
		header("Location: " . $IERedirectTo);
		// Stop the script from executing anymore
		die();
	}
}
?>