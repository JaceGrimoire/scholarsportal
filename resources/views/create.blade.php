<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Apply</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Scholar.css">  
        <!-- SCRIPT -->
        <script src="js/proof.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="fonts/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/material-design-icons/material-icon.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">
    
<style>

  .btnCompression .btn  .active {
      background: #EB6A5A;
      color:white;
    }
  
  i {
    text-align: center;
    font-size: 10em;  
    color:#fff;
    margin-top: 0vw;
  }
  .selectFile {
    height: 5vw;
    margin: 1vw auto;
    position: relative;
    width: 13vw;          
  }

  label, input {
    cursor: pointer;
    display: block;
    height: 3.2vw;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    border-radius: 0vw;          
  }

  label {
    display: inline-block;
    font-size: 1.2vw;
    line-height: 3vw;
    padding: 0;
    text-align: center;
    white-space: nowrap;
    font-weight: 400;   
  }

  input[type=file] {
    opacity: 0;
}

</style>

    </head>
    
    <body class="antialiased">
        
<!--Navigation-->

<div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  

      <div class="menu">   
        <ul><li>
        <a href="#" style="float:right;margin:0vw 0vw 0vw 0vw;">18-020007</a>
        <ul>
        <li><a href="profilestudent">Profile</a></li><br>
        <li><a href="calendar">Calendar</a></li><br>
        <li><a href="scholarshipprograms">Scholarship Programs</a></li><br>
        <li><a href="loginstudent">Log Out</a></li>
        </ul>
        </ul></li>
        </div>
      
<!--Application for TES-->

<div class="w3" style="margin-left:0vw;">
        <div class="w3-container" style="background-color:#E5E4E2; color:#808080; width: 1600vw; ">
        <p style="float:left; font-size:2.2vw; font-weight:bolder; color:#000;">Application for TES </p>
        </div>

<div class="zone">

<div id="dropZ"><br><br><br><br>
  <div>Drag and drop your file/s here</div> <br>                   
  <div class="selectFile">       
  <form enctype='multipart/form-data' method='POST' action='submitFormTo.php'> 
    <input type='file' name='files[]' multiple />
    <label style="margin-top:-1vw; margin-left:0vw; background-color: #fff; color:#000;"  for="files">SELECT FILES:</label>
  <input type="file" id="files" name="files" multiple>
    <button type='submit' style="width:13vw; height: 2vw; background:#FFF; color:black; border:none; margin-top:3.2vw;">Submit</button>
</form>
  </div>
</div>

</div>

<a href="home"><button type="button" class="greenbutton" style="  margin-top:32vw; margin-right:10vw;">CANCEL</button></a>

</body>
</html>
