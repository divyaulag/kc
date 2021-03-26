<?php include 'navi-page.php'; ?>

<!DOCTYPE html>
<html>
<head>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: -50px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 10px;
}

.about-section {
  padding: 16px;
  text-align: center;
  background-color: grey;
  color: black;
  margin:20px;
  font-size: 20px;
  line-height: 30px;
}

.container {
  padding: 50px ;
  width:1200px;
  margin-left:150px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 80%;
  margin-left:110px;
   box-shadow:  0 0 5px #33ffff,
               0 0 10px #66ffff;
}

.button:hover {
  
  color:#1ABC9C;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.form-popup .overlay{
  display: none;
  position: fixed;
  text-align:center;
  border: 3px solid #f1f1f1;
  z-index: 1;
  top: 50%;
  left:50%;
  background-color: rgba(0,0,0,0.7);
  -webkit-transition: 0.5s;
}
.is-blurred {
  filter: blur(2px);
  -webkit-filter: blur(2px);
}
.form-popup .form-container {
  max-width: 350px;
  padding: 10px;
  background-color: #fff;
  transform:translate(-50%,-50%) scale(0);
  z-index:2;
  top:50%;
  left:50%;
  position:absolute;
  font-family: Times New Roman;
}
.form-popup.active .overlay{
  display:block;
}
.form-popup.active .form-container{
transition: all 300ms ease-in-out;
transform:translate(-50%,-50%) scale(1);
}
.form-container input[type=text], .form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
.form-container input[type=text]:focus, .form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.form-container .cancel {
  background-color: red;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.msg{
  margin-top: 15px;
}
.p
{
 margin-left: -110px;
 line-height:40px;  
}
</style>
</head>
<body>
<div class="container">
<div class="msg">
    <?php displayMessage(); ?>
  </div>

<div class="about-section">
  <h5>Contact Us</h5>
  <h5 style="color:white;">Your Suggestions can be Shared here!</h5>
</div>

<h4 style="text-align:center; padding-top:10px;">Our Team</h4>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <div class="p">
        <h3>Jaison S</h3>
        <p class="title">Associate-Engineer</p>

        <p>jaison8940@gmail.com</p>
      </div>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <div class="p">
        <h3>Divya U</h3>
        <p class="title">Associate-Engineer</p>

        <p>divyayou17@gmail.com</p>
      </div>
        <!-- <p><button class="button" id="but1" onclick="openForm()">Contact</button></p> -->
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <div class="p">
        <h3>Abinaya S M</h3>
        <p class="title">Associate-Engineer</p>

        <p>abinaya.sm28@gmail.com</p>
      </div>
        <!-- <p><button class="button" id="but1" onclick="openForm()">Contact</button></p> -->
      </div>
    </div>
  </div>
  <button class="button" id="but1" onclick="openForm()">Send us a message!</button>
</div>
</div>

<div class="form-popup" id="myForm">
 <div class="overlay"></div>
 
  <form action="action_page.php" method="post" class="form-container">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="text"><b>Comments</b></label>
    <textarea placeholder="Enter Comments" name="comment" rows="4" cols="32" required>
     </textarea>
    <button type="submit" name="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";  
  document.getElementById("myForm").classList.toggle("active");

}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}



</script>  <script type="text/javascript"> (function(d, m){ var kommunicateSettings = 
            {"appId":"93cc55227ab05c5fe305c32581e0ad03","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = 
        "https://widget.kommunicate.io/v2/kommunicate.app"; var h = document.getElementsByTagName("head")[0]; h.appendChild(s); window.kommunicate = 
        m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
</body>
</html>
