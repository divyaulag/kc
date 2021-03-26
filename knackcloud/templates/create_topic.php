<?php include 'navi-page.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/loader.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <style type="text/css">   
.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color:#1ABC9C;
}
    .c
{
  margin: 50px;
  background-color:white;

  box-shadow: 0 0 5px #33ffff,
               0 0 10px #66ffff;
  border-radius: 3px;
  width:1000px;
  padding:50px;
  
}
    
    


  </style>
 </head>

 <body>
    <div class="wrapper">
     <div class="c">
    
        <a href="createtopic.php"><h4 style="color:blue; font-style:bold;text-align:left;margin-left:50px;margin-top:20px;padding:10px; margin-top:20px;"> &#9755<u> DiscussionForum </u></h4></a>
   
            
        <a href="mainforum.php"><h4 style="color:blue; font-style:bold;text-align:left;margin-left:50px;margin-top:20px;padding:10px; margin-top:20px;"> &#9755<u> Current Topics </u></h4></a><br>
    

  

   <h2 style="text-align:center;font-style:bold;font-family: timesnewroman;">Discussion Forum</h2>

      <form action="add_topic.php" method="POST">

          <div class="form-group" style="font-family: timesnewroman;font-size:20px;color:black;margin-left:20px">
            <label for="topic">Topic Name:</label>
            <input type="text" style="font-size: 17px;color:black; background-color:#E5E8E8   ;" class="form-control" id="topic" name="topic">
          </div>

          <div class="form-group" style="font-family: timesnewroman;font-size:20px;color:black;margin-left:20px">
            <label for="comment">Details:</label>
            <textarea class="form-control" rows="5" id="detail" name="detail" style="font-size: 17px;color:black;background-color:#E5E8E8 ;"></textarea>
          </div>

          <div class="form-group col-sm-6 col-lg-6 col-xs-12 col-md-6" style="font-family: timesnewroman;font-size:20px;color:black;" >
            <label for="username">Name:</label>
            <input type="text" style="font-size: 17px;color:black;background-color:#E5E8E8 ;" class="form-control" id="username" name="name">
          </div>

          <div class="form-group col-sm-6 col-lg-6 col-xs-12 col-md-6" style="font-family: timesnewroman;font-size:20px;color:black;">
            <label for="email">Email address:</label>
            <input type="email" style="font-size: 17px;color:black;background-color:#E5E8E8 ;" class="form-control" id="email" name="email">
          </div>          

          <div  style="padding-left: 20px;padding-bottom: 10px;margin-bottom:20px">
                          <input type="submit" name="submit_post" value="Post topic" class="btn btn-md btn-primary" style="margin-top:20px;margin-left:-10px;">
                   </form>
     
   </div>
 </div>
</form>
   


 </body>
