<?php
    if (isset(_FILES['upload']))
	 {
        //todo: handle the uploaded file
        echo "Your file was uploaded successfully";
    } 
	else 
	{
    ?>
        <form action="FileUpload.php" method="post" enctype="multipart/form-data">
            <label for="upload">File:</label>
            <input type="file" name="upload" id="upload"><br/>
            <input type="submit" name="submit" value="Upload">
        </form>
    <?php
    }
?>
