<?php 
    include_once("header.php")
?>
    <div class="container">
        <div class="card p-2 mt-2">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <div class="card p-2">
                    <input type="file" name="fileToUpload[]" multiple>
                </div>              
                <button class="btn btn-primary mt-2" type="submit">
                    <i class="fas fa-upload"></i></span> Upload
                </button>
            </form>
        </div>  
    </div>
