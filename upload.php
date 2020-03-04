<?php
     include_once('functions.php');

     $files = $_FILES['fileToUpload'];
     //echo '<pre>',print_r($files),'</pre>';
     $fileNames = $files['name'];
     $filetypes = $files['type'];
     $filetmpNames = $files['tmp_name'];
     $fileErrors = $files['error'];
     $fileSizes = $files['size'];
     $dir = "uploads/";
     

     foreach($fileNames as $index => $name){
         if(CheckFileType($filetypes[$index])){
             if(Checksize($filetypes[$index])){
                 $fixDir = $dir.basename($fileNames[$index]);
                // if($files($fixDir)){
                     if(ChangeDirectory($filetmpNames[$index],$fixDir)){

                        // echo "<img scr=\"$fixDir\"/>",$fixDir;
                         
                     }
                 }
             }
         }

$folder="uploads";
$results=scandir("uploads");
 foreach($results as $result){
     if($result === '.' or $result==='..') continue;

     if(is_file($folder . '/' .$result)){
         echo '
            <div class="col-md-3">
                <img src="'.$folder . '/' .$result. '"alt="..." style="width:250px; height:auto;"> </div>';
     }
 }
     
?>