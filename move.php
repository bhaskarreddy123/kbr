<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
// Example of accessing data for a newly uploaded file
$fileName = $_FILES["uploaded_file"][""]; 
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"];
// Path and file name
$pathAndName = "uploads/".$fileName;
// Run the move_uploaded_file() function here
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
// Evaluate the value returned from the function if needed
if ($moveResult == true) 
{
    echo "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
} else {
     echo "ERROR: File not moved correctly";
}
?>
</body>
</html>
