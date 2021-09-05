<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Admin.css"> 
        <!-- SCRIPT -->
        <script src="/js/Admin.js"></script>
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

/* Clearfix (clear floats) **/
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>
        
    </head>
    
    <body class="antialiased"  style="background:#f3ebeb;">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:71vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
        

       <!-- Sidebar -->
       <div class="w3-sidebar w3-bar-block" style="width:20%; background: #E8E8E8; border-color: black;">
  <a href="#" class="w3-bar-item w3-button" style="font-size:2vw;"></i>Admin</a><br>
  <a href="/administrator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-home" style="font-size:2vw; left:-0.5vw;color:black;"></i>Home</a><br>
  <a href="/administrator/calendaradmin" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-calendar" style="font-size:2vw; left:-0.5vw;color:black;"></i>Calendar of Events</a><br>
  <a href="/administrator/listadmin" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-list" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Scholars</a><br>
  <a href="/administrator/scholarshipprogramadmin" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-education" style="font-size:2vw; left:-0.5vw;color:black;"></i>Scholarship Programs</a><br>
  <form style="display:block;" method="POST" action="{{ route('administrator.logout') }}">
  @csrf
  <li>
  <button type="submit" style="margin-left:0.2vw; font-size:1.4vw; color:red; width:19vw;">{{ __('Log Out') }}</button></li>
  </form>
</div><br><br>

    <!-- Page Content  -->

<div class="analytics" style="overflow-x: hidden; overflow-y: hidden;">
    <h2 style="margin-left:-28vw; margin-top:-2.2vw; font-weight:bolder;">SCHOLARS STATISTICS</ht>
</div>

<div class="statistics1">
    <div class="col-md-3" style="margin-left:3vw;"> 
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <div class="count-name">Total Scholars
        <input type="text" id="total" name="total" value="{{ $scholars }}"></p></div>
        </div>

      </div>
    </div>
  </div>

<br><br><br><br><br><br>

  <div class="collegestats">
        <div class="collegetable">
        <table id="collegetable">
          <tr>
            <thead style="background-color:#3e8e41;">
            <th>COLLEGE</th>
            <th>SCHOLARS</th>
            </thead>
          </tr>
          <tr>
            <td>CAS</td>
            <td>{{ $scholars_cas }}</td>
          </tr>
          <tr>
            <td>COE</td>
            <td>{{ $scholars_coe }}</td>
          </tr>
          <tr>
            <td>CHS</td>
            <td>{{ $scholars_chs }}</td>
          </tr>
          <tr>
            <td>CAFSD</td>
            <td>{{ $scholars_cafsd }}</td>
          </tr>
          <tr>
            <td>CBEA</td>
            <td>{{ $scholars_cbea }}</td>
          </tr>
          <tr>
            <td>CASAT</td>
            <td>{{ $scholars_casat }}</td>
          </tr>
          <tr>
            <td>CTE</td>
            <td>{{ $scholars_cte }}</td>
          </tr>
          <tr>
            <td>CIT</td>
            <td>{{ $scholars_cit }}</td>
          </tr>
          </table>
      </div>
    </body>
</html>