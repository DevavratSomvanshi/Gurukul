<?php

 $targetfolder = "testupload/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

 ?>
 <?php

$targetfolder = "testupload/";

$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

$ok=1;

$file_type=$_FILES['file']['type'];

if ($_FILES["file"]["size"] > 1) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

{

echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

}

else {

echo "Problem uploading file";

}

}

else {

echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}

?>

