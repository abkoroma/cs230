<?php 
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>
<link rel="stylesheet" href="css/admin.css">
<script src="js/upload-display.js"></script>
<?php
if (isset($_SESSION['uid'])) {
?>    
<div class="h-50 center-me text-center">
    <div class="my-auto upload-container">
        <form action="includes/gallery-helper.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <img src="image/ap.jpg" onclick="triggered();" id="prof-display">
                <input type="file" class="form-control" name="gallery-image" id="prof-image" onchange="preview(this)" style="display: none;">
                <input type="text" class="form-control" name="title"  id="title" placeholder="title" require>
            </div>
            <div class="form-group">
                <textarea name="descript" id="descript" cols="30" rows="3" placeholder="Description" style="text-align: center;"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="gallery-submit" class="btn btn-outline-success btn-lg btn-block"></button>
            </div>
        </form>
        
    </div>
</div>

<div class="gallery-upload">

</div>


<?php 
}else{
    header("Location: ../login.php?error=Login");
    exit();
}
?>
</main>