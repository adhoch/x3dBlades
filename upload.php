<?php 

while(list($key,$value) = each($_FILES[image][name]))
{
    if(!empty($value)) // this will check if any blank field is entered
    {   
        $filename = $value;  // filename stores the value
        $add = "uploads/$filename";  // upload directory path is set
        //echo 'Uploaded file ' ;
        //echo $filename;  uncomment this line if you want to display the file type
        //echo ".<br>"; Display a line break
        copy($_FILES[image][tmp_name][$key], $add); //  upload the file to the server
        chmod("$add",0777);  // set permission to the file. 
        $url = 'https://iub.edu/~cyberdh/x3dBladeViewer/bladeViewer.php';
         echo "<script>window.location = '$url'</script>";

    }
}?>