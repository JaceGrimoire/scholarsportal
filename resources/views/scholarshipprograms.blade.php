<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | List of Scholarship Programs</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Scholar.css"> 
        <!-- SCRIPT -->
        <script src="/js/Admin.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">


        <style>

      table{
        width: 98.2vw;
        margin: 2vw auto;
        border-collapse: collapse;
        text-align: justify;
      }

      table td,
      table th {
        border: solid 0.1vw black;
      }

      label,
      input {
        display: block;
        margin: 0vw 0;
        font-size: 1.2vw;
        
        width:100vw;
      }

      button {
        display: block;
        background-color:#0C4B05; 
        color: #FFCD00;
        border-radius: 2vw;
        height:3vw; 
        font-size:1.5vw; 
        width:10vw;
      }
    </style>
     
    </head>
    
    <body class="antialiased">
        
<!--Navigation-->

<div class="topnav" id="myTopnav">
    <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"height="6%" width="6%">
    <p class="LogoName2">MMSU SCHOLAR'S PORTAL</p>
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


<!--Scholarship Programs-->
  <hr>
  <p style="font-size:2vw; background-color:#dcdcdc; font-weight:bolder; text-align:center;"> List of Scholarship Programs </p>
  <hr>

<!-- PDF CPNVERSION: Hidden  -->
  <div id="tab">
  <table id="myTable">
  
  <thead>
  <tr style="text-align:center;">
  <th>Scholarship/Assistantship Program</th>
  <th>Applicable policy</th>
  <th>Qualification</th>
  <th>Amount of Grant/Stipend</th>
  <th>General Guidelines</th>
  <th></th>
  </tr>

  </thead>
  <tbody>

  @foreach($scholarshipprogram as $scholarshipprogram )
  <tr>
  <td>{{ $scholarshipprogram ->scholarship_program }}</td>
  <td>{{ $scholarshipprogram ->policy }}</td>
  <td>{{ $scholarshipprogram ->qualification }}</td>
  <td>{{ $scholarshipprogram ->stipend }}</td>
  <td>{{ $scholarshipprogram ->guidelines}}</td>
      
  </tr>
  @endforeach
  
  </tbody>
  </table>
  </div>
  
  <p>
  <input type="button" class="downloadbutton" value="Download" style="width:20vw; margin-left:40vw;" 
  id="btPrint" onclick="createPDF()" />
  </p>

</body>
<script>
    function createPDF() {
        var sTable = document.getElementById('tab').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 3px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<h2>List of Scholarship Programs</h2>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
</script>
</html>

<a href="/dashboard"><button type="button" class="greenbutton" style=" margin-top:-1vw; margin-right:2vw; margin-bottom:1vw;">CANCEL</button></a>

</body>
</html>