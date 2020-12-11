<?php

function upload($dir,$CMND,$what){
    foreach ($_FILES[$what]["error"] as $key => $error){
       if ($error == UPLOAD_ERR_OK) {
           $tmp_name2 = $_FILES[$what]["tmp_name"][$key];
               // basename() may prevent filesystem traversal attacks;
               // further validation/sanitation of the filename may be appropriate
           $name2 = basename($CMND.$what.'.pdf');
           move_uploaded_file($tmp_name2, "$dir/$name2");
           $nameFile2 = "$dir/$name2";
        //    echo $nameFile2 ;
       



       }
    
    }
 
 }

?>