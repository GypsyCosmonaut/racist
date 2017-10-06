<?php
$x = $_SERVER['HTTP_USER_AGENT'];
function download($file)
{
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile('$file');
}

if (preg_match('/[wW]indows/',$x) && !preg_match('/[pP]hone/',$x))
	echo "not null"; //download("null.exe");
elseif (preg_match('/[wW]indows/',$x) && (preg_match('/[pP]hone/',$x) || preg_match('/[mM]obile/',$x)))
	echo "not null"; //download("null.xap"); || download("null.appx");s
elseif (preg_match('/[lL]inux/',$x) && !preg_match('/[aA]ndroid/',$x))
	echo "not null"; //download("null.elf");
elseif (preg_match('/[aA]ndroid/',$x))
	echo "not null"; //download("null.apk");
elseif (preg_match('/[mM][aA][cC][oO][sS]/',$x))
	echo "not null"; //download("null.dmg");
elseif (preg_match('/[iI][oO][sS]/',$x))
	echo "not null"; //download("null.ipa")
elseif (preg_match('/[bB]lackberry/',$x))
	echo "not null"; //download("");
else
?>
