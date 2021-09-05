<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Coordinator.css">  
        <!-- SCRIPT -->
        <script src="/js/Coordinator.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="fonts/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/material-design-icons/material-icon.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="icon" href="/images/mmsu logo.png">

<style>

.column {
  float: left;
  width: 33.33%;
  padding: 1vw;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>
        
    </head>
    
    <body class="antialiased" style="background:#f3ebeb;">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:71vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
        

       <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block" style="width:20%; background: #E8E8E8; border-color: black;">
  <a href="#" class="w3-bar-item w3-button" style="font-size:2vw;"></i>Coordinator</a><br>
  <a href="/coordinator/dashboard" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-home" style="font-size:2vw; left:-0.5vw;color:black;"></i>Home</a><br>
  <a href="/coordinator/calendarcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-calendar" style="font-size:2vw; left:-0.5vw;color:black;"></i>Calendar of Events</a><br>
  <a href="/coordinator/applicants" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-user" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Applicants</a><br>
  <a href="/coordinator/listcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-list" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Scholars</a><br>
  <a href="/coordinator/scholarshipprogramcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-education" style="font-size:2vw; left:-0.5vw;color:black;"></i>Scholarship Programs</a><br>

  <form style="display:block;" method="POST" action="{{ route('coordinator.logout') }}">
  @csrf
  <li>
  <button type="submit" style="margin-left:0.2vw; font-size:1.4vw; color:red; width:19vw;">{{ __('Log Out') }}</button></li>
  </form>
</div><br><br>



<div class="statistics1">
    <div class="col-md-3" style="margin-left:3vw;">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <div class="count-name"><a href="/coordinator/listcoordinator" style="color:#fff;">Total Scholars</a>
        <input type="text" id="total" name="total" value="{{$scholars}}"></p></div>
        </div>

      </div>
    </div>
  </div>

  <div class="statistics2">
    <div class="col-md-3" style="margin-left:15vw;">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <div class="count-name2"><a href="/coordinator/applicants" style="color:#fff;">Total Applicants</a>
        <input type="text" id="total" name="total" value="{{$pending}}"></p></div>
        </div>

      </div>
    </div>
  </div>
<br><br><br><br><br><br>



    <div class="row">
  <div class="column">
    <img src="/images/left.jpg" alt="Snow" style="width:70%; margin-left:30vw; border-radius:2vw;">
  </div>
  <a href="/coordinator/calendarcoordinator"><button type="button" class="homebutton" style="top: 85%; left: 34%;">Calendar of Events</button></a>

  <div class="column">
    <img src="/images/middle.jpg" alt="Forest" style="width:70%; margin-left:30vw; border-radius:2vw;">
  </div>
  <a href="/coordinator/listcoordinator"><button type="button" class="homebutton" style="top: 85%; left: 68%;">List of Scholars</button></a>
</div>






</div>
            
  
    </body>
</html>
