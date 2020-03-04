<?php
    function CheckFileType($file){ // check file type
        $allowed = array('jpeg', 'png');
        $fileExt = explode("/",$file);
        return in_array(end($fileExt),$allowed) ? true : false;
    }


    function CheckSize($file){ //file size
        return ($file <= 1000000) ? true : false;
    }

    function CheckFile($file){ //check the file size
        return (!file_exists($file)) ? true : false;
    }

    function ChangeDirectory($file,$target){
        return move_uploaded_file($file,$target);
    }
?>