<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Admin.css"> 
        <!-- SCRIPT -->
        <script src="/css/Admin.js"></script>
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
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
        
       <!-- Sidebar -->
       <div class="w3-sidebar w3-bar-block" style="width:20%; background: #E8E8E8; border-color: black;">
         <a href="#" class="w3-bar-item w3-button" style="font-size:2vw;"></i>Admin</a><br>
       <a href="/administrator/dashboard" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-home" style="font-size:2vw; left:-0.5vw;color:black;"></i>Home</a><br>
  <a href="/administrator/calendaradmin" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-calendar" style="font-size:2vw; left:-0.5vw;color:black;"></i>Calendar of Events</a><br>
  <a href="/administrator/listadmin" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-list" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Scholars</a><br>
  <a href="/administrator/scholarshipprogramadmin" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-education" style="font-size:2vw; left:-0.5vw;color:black;"></i>Scholarship Programs</a><br>
  <form style="display:block;" method="POST" action="{{ route('administrator.logout') }}">
  @csrf
  <li>
  <button type="submit" style="margin-left:0.2vw; font-size:1.4vw; color:red; width:19vw;">{{ __('Log Out') }}</button></li>
  </form>
</div><br><br>

<table id="nametable2">
  <tbody>
    <tr>
      <td>
      <strong>STUDENT No.</strong>
      </td>
      <td>: {{$student->student_id}}</td>
    </tr>

    <tr>
      <td>
      <strong>NAME</strong>
      </td>
      <td>: {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</td>
    </tr>

    <tr>
      <td>
      <strong>COLLEGE</strong>
      </td>
      <td>: {{$student->college}}</td>
    </tr>

    <tr>
      <td>
      <strong>COURSE</strong>
      </td>
      <td>: {{$student->course}}</td>
    </tr>

    <tr>
      <td>
      <strong>YEAR</strong>
      </td>
      <td>: {{$student->year_level}}</td>
    </tr>
</tbody>
</table><br><br>

<!--Scholar's Profile-->
<div class="w3-card-4" style="width: 70vw; margin-left:25vw; height:25vw; margin-top:-2vw;">
  <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
  <h2 style="color:#fff; font-weight:bolder;">Proof of Scholarship</h2>
  </div>

  <form class="w3-container" action="/action_page.php" ><br><br>
  <ul>
    @foreach($proof as $proofs)
  <li style="margin-top:-2vw; margin-left: 2vw; font-size:1.5vw; font-weight:bolder;"><a href="/files/{{$proofs->name}}">{{$proofs->inclusive_year}}</li><br><br>
    @endforeach
</ul>
   
</form>
</div><br>

</body>
</html>