<?php 
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>

<?php
if (isset($_SESSION['uid'])) {
    $prof_user = $_SESSION['uname'];
    $sqlpro = "SELECT * FROM profile WHERE uname='prof_user';";

    $res = mysqli_query($conn, $sqlipro);
    $row = mysqli_fetch_array($res);
    $photo = $row['picpath'];
  
?>
    
<script>
    function triggered(){
        document.querySelector("#prof-image").click();
    }
    
    function preview(e){
        if(e.files[0]){
            var reader = new FileReader();
    
            reader.onload = function(e){
                document.querySelector('#prof-display').setAttribute('src',e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
    
        }
    }
</script>

    <div class="h-100 container center-me">
        <div class="my-auto">
            <form action="includes/signup-helper.php" method="post" enctype="multipart/form-part">
                <div class="form-group">
                    <img src="<?php echo $photo;?>" onclick="triggered();" id="prof-display">
                    <label for="prof-image" id="uname-style"><?php echo $prof_user;?></label>
                    <input type="file" class="form-control" name="prof-image" id="prof-image" onchange="preview(this)" style="display: none;">
                </div>
                <div class="form-group">
                    <textarea name="bio" id="bio" cols="30" rows="10" placeholder="bio..." style="text-align:center"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" name="prof-submit" class="btn btn-outline-success btn-lg btn-block"></button>
                </div>
            </form>
        </div>
    </div>

  <?php
  
}else {
    header("Location: login.php");
    exit();
  }
   ?>

</main>