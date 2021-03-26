<?php include 'navi-page.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Forum</title>
  

  
  
  <style type="text/css">   
  * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  font-family: "Lato";
  background-color:black ;

}
.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color:#1ABC9C;
}
.container
{
  margin: 50px;
  background-color:white;

  box-shadow: 0 0 5px #33ffff,
               0 0 10px #66ffff;
  border-radius: 3px;
  width:1000px;
  
}
.btn
{
  margin:30px;
  width:150px;
  height:50px;
  border-color:#1ABC9C;
  font-size: 20px;
  background-color: black;
  color:white;

}
.form-control
{
  margin:20px;
 width:800px;
  height:45px;
  border-color:#1ABC9C;
  font-size: 15px;
}    
.label
{
  margin:20px;
  font-size: 20px;
  font-weight:30px;
}    
.textarea
{
  margin:20px;
  width:800px;
  height:200px;
  border-color:#1ABC9C;
  font-size:15px;
}
.bn
{
   margin:30px;
  width:150px;
  height:50px;
  border-color:#1ABC9C;
  font-size: 20px;
}
  </style>
 </head>

 <body>

    <div class="wrapper">
       <div class="container">
        <button class="bn"><a  href="createtopic.php">Discussion Forum</a></button><br>
   
            
        <button class="bn"><a id="a"href="mainforum.php">Current Topics</a></button>
    

   
   <h2 style="text-align:center;font-style:bold;font-family: timesnewroman;">Discussion Forum</h2>

      <form action="add_topic.php" method="POST">

          
            <label class="label" for="topic">Topic Name:</label><br>
            <input type="text"  class="form-control" id="topic" name="topic"><br>
          
          
            <label class="label" for="comment">Details:</label><br>
            <textarea  class="textarea"  id="detail" name="detail" ></textarea><br>
         

         
            <label class="label" for="username">Name:</label><br>
            <input type="text"  class="form-control" id="username" name="name"><br>
         
         
            <label  class="label" for="email">Email address:</label><br>
            <input type="email"  class="form-control" id="email" name="email"><br>
                   

          
            <input type="submit" name="submit_post" value="Post topic" class="btn">
                 
      </form>
     </div>
   </div>

  

 </body>
