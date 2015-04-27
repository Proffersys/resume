<?php
//require_once '../core/init.php'; !!! require connection file according to you by just changing path !!!
require_once 'connection.php'; 
//session_start(); !!! HANDLE SESSION HERE !!!
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    Test
  </title>
<style type="text/css">
body,textarea{font-family: Segoe UI, Verdana, Arial;}
body,ul,h1,h2,h3,h4,h5,p,form{margin:0;padding:0;}
.clearfix{clear: both;}
#left{width:655px;height:auto;margin:0 auto;}
#left h3{margin: 10px 0;}
#left form textarea{width:100%;height:50px;resize:none;padding:5px;}
#left form input[type="text"]{width:100%;padding: 5px;margin-bottom: 6px;}
.article{border-bottom: 1px solid #999;padding-bottom: 20px;position: relative;}
.article h2{margin: 15px 0 10px 0;}
.article p{font-size: 14px;color: #444;}
.article form input[type="text"],textarea{padding:5px;border:1px solid #999;width:400px;}
.delete{font-size: 12px;color: red;position: absolute;right: 0;}
</style>
</head>

<body>
<div id="left">
  <form id="status1">
    <textarea name="post_body" id="post_body" placeholder="Hi,What's going on?!"></textarea>
    <input type="submit" name ="submit" value="Add New Post" id="post" />
  </form>
  <div id="ajax">
    <?php
    $ssn=4;
    //$ssn=$_SESSION['ssn'];
    $query=mysqli_query($con,"SELECT * from posts where ssn='$ssn' ORDER BY created DESC limit 10") or die('fail1');
    while($fetch=mysqli_fetch_assoc($query)){
      $user_query=mysqli_query($con,"SELECT * from dir_user WHERE ssn='$ssn'") or die('fail2');
      $username=mysqli_fetch_assoc($user_query);
      echo "
      <div class='article'>
      ";
      echo "<a href='#' class='delete' id='del' data-id='".$fetch['id']."'>Delete</a>";
      echo "
      <h2 style='display:inline-block;'>Posted By : ".$username['fname'].", on ".date("l,d-F,Y h:i:s a",strtotime($fetch['created'])).
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
 //alert('45'); !!!FOR DEBUGGING !!!
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
          //alert(resp);  !!! FOR DEBUGGING !!!
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
    $(document).on("click",".delete",function(e){   //works on ajax returned data
      e.preventDefault();
      if(confirm("Do you really want to delete this post?\nThis cannot be undone!")){
        var a=$(this);
        var id=a.attr("data-id");
       //alert(id); !!! FOR DEBUGGING !!!
        if(id!=""){
          $.ajax({
            url:"delete_post.php",
            type:"GET",
            data:{"post_id":id},
            success:function(resp){
              //alert(resp);  !!! FOR DEBUGGING !!!
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
