<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Scholar.css">  
        <!-- SCRIPT -->
        <script src="/js/Scholar.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="fonts/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/material-design-icons/material-icon.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">
    </head>
    
    <body class="antialiased">
        
<!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"height="6%" width="6%">
        <p class="LogoName">MMSU SCHOLAR'S PORTAL</p>
        </div>  

        <div class="menu">   
        <ul><li>
        <a href="#" style="float:right;margin:0vw 0vw 0vw 0vw;">{{ Auth::user()->student_id }}</a>
        <ul style="margin-top:3vw;">
        <li><a href="profilestudent">Profile</a></li><br>
        <li><a href="calendar">Calendar</a></li><br>
        <li><a href="scholarshipprograms">Scholarship Programs</a></li><br>
        <form style="display:block;" method="POST" action="{{ route('logout') }}">
        @csrf
        <li><button type="submit" class="LogOut">{{ __('Log Out') }}</button></li>
        </form>
        </ul>
        </ul></li>
        </div>

<!-- Page Content -->

      <div class="alert" style="font-size:1.5vw;">
      <b>Notice:</b>
      All scholars must update their <a href="profilestudent"><b>
      <u>profile</u></b></a> first before proceeding to update scholarship.
      </div>


      <div class="columnhome">
      <img class="square" src="/images/apply.jpg" style="width:70%; margin-left:-3vw;">
      </div>
      <a href="apply"><button type="button" id="TES" class="homebutton">Apply for TES</button></a>

      <div class="columnhome">
      <img class="square" src="/images/update.jpg" style="width:70%; margin-left:-16vw;">
      <a href="scholarshipdetails"><button type="button" id="UPDATE" class="homebutton">Update Scholarship</button></a>
      </div>

      <div class="columnhome">
      <img class="square" src="/images/upload.jpg" style="width:70%; margin-left:62vw; margin-top:-30vw;">
      </div>
      <a href="upload"><button type="button" id="FREEHIGHER" class="homebutton">Upload Free Higher Education Form</button></a>


</body>
</html>
