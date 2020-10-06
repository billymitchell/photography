<?php
$path = ".";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
		
        echo "<img style='width:100%;height:auto;' src='$path/$file'><br /><br />";
        $i++;
    }
	//elseif (pathinfo($path, PATHINFO_EXTENSION) == "mp4") {
		//echo "<video src='$path/$file' style='width:100%;height:auto;' playsinline controls></video><br />";
	//}
}
closedir($dh);
?> 