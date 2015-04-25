<?php
require_once '../core/init.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    Test
  </title>
</head>
<body>
<div id="left">
  <form id="status1">
    <textarea name="post_body" id="post_body" placeholder="Enter Post Body"></textarea>
    <input type="submit" name ="submit" value="Add New Post" id="post" />
  </form>
  <div id="ajax">
    <?php
    $ssn=2;  
    $query=mysqli_query($con,"SELECT * from posts where ssn='$ssn' ORDER BY created DESC limit 10") or die('fail1');
    while($fetch=mysqli_fetch_assoc($query)){
      $user_query=mysqli_query($con,"SELECT fname from user WHERE ssn='$ssn'") or die('fail2');
      $username=mysqli_fetch_assoc($user_query);
      echo "
      <div class='article'>
      ";
      echo "<a href='#' class='delete' id='del' data-id='".$fetch['id']."'>Delete</a>";
      echo "
      <h2 style='display:inline-block;'>Posted By : ".$username['fname'].", on ".date("l,d-M-Y,h:i:s a",strtotime($fetch['created'])).
      "</h2>
      <p>
      ".$fetch['body']."
      </p>
      </div>
      ";
    }
    ?>
  </div>
</div>
    <div class="clearfix"></div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
// alert('45');
$(function(){
  $("#status1").submit(function(e){
    e.preventDefault();
    var body=$("#post_body").val();
    if(body!=""){
      $.ajax({
        url:"insert_post.php",
        type:"POST",
        data:{"post_body":body},
        success:function(resp){
          var obj=$(resp);
          obj.hide();
          $("#ajax").prepend(obj);
          obj.slideDown("slow");
          $("#post_body").val("");
        }
      });
    }else{
      alert("Please Enter Status");
    }
  });
  //$(".delete").click(function(e){ //does not work on ajax returned data
    $(document).on("click",".delete",function(e){//works on ajax returned data
      e.preventDefault();
      if(confirm("Do you really want to delete this post?\nThis cannot be undone!")){
        var a=$(this);
        var id=a.attr("data-id");
        //alert(id);
        if(id!=""){
          $.ajax({
            url:"delete_post.php",
            type:"GET",
            data:{"postid":id},
            success:function(resp){
              //alert(resp);
              if(resp==1){
                a.parents("div.article").slideUp(function(){
                  $(this).remove();
                });
              }else{
                alert('There was an error deleting this post, please try again.')
              }
            }
          });
        }
      }
    });
  }); 
</script>





</body>
</html>