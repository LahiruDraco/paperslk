<script type="text/javascript">
function change(h){
window.location.href=h;

function Redirect(){
window.location.href="/Past-Papers/";
}
}
</script>
<?php
//Obtaining the Exam Paper Path from route data.
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
for($i= 0;$i < sizeof($scriptName);$i++)
        {
      if (strcasecmp($requestURI[$i],$scriptName[$i]) == 0)
              {
                unset($requestURI[$i]);
            }
      }
 
$command = array_values($requestURI);
$paperPath = implode('/',$requestURI); //$paperPath contains the directory path 
									   //of the requested view or file. E.g. : GCE/OL/2012/Maths

//---------Printing Breadcrumbs------------
if ($paperPath == "")
{
	echo '<h3>You are at: Home </h3>'; $noPath= true;
}
else{
	echo '<h3>You are at: ' . str_replace('/',' > ',$paperPath) . '</h3>';
}
//------------------------------------------

// ---------------- Obtaining a list of files at the specified path and printing a list. --------------------
// ---------------- Also creating the hyperlinks to prgress further though the directory. --------------------

echo '<table>';

if (file_exists($relativeroot . $paperPath)==false){
	echo '<SCRIPT type="text/javascript">';
	echo 'window.location.href="/Past-Papers/";';
	echo '</SCRIPT>';
	exit();
}
$filelist = scandir($relativeroot . $paperPath);
$noFiles=true;
for ($i = 2; $i < count($filelist); $i++){
	//echo 'File ext assert: ' .substr(strrchr($filelist[$i], '.'), 1);
	if (substr(strrchr($filelist[$i], '.'), 1) != "")
	{
		$href =$paperroot . $paperPath . '/' . $filelist[$i];
		$size = round((filesize($relativeroot . $paperPath . '/' . $filelist[$i]))/1024,2) . ' KB';
		//echo ' isDetectedAsFileFlag ';
	}else
	{
		if ($noPath == true){
			$href = $filelist[$i];
		}else
		{
			$toScript = explode('/', $_SERVER['SCRIPT_NAME']);
			array_pop($toScript);
			$toScriptStr= implode('/', $toScript);
			$href = $toScriptStr . '/' . $paperPath .  '/' .  $filelist[$i];
		}
		$size = '[Dir]';
	}
	echo '<tr><td class="first_col" onclick="change(\'' . $href . '\');"><a href="'. $href .'"> ' . $filelist[$i] . '</a></td><td>' . $size . '</td></tr>';
	$noFiles=false;
}
if ($noFiles == true){echo '<br />Directory is empty :(';}
echo '</table>';
//---------------------------------------------------------------------------------------------------------------
?>