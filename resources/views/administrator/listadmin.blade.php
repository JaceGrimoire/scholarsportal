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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="/images/mmsu logo.png">



    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
        
<div class="w3-container" style="background-color:#E5E4E2; color:#808080; width: 1600vw; ">
        <p style="float:left; font-size:2vw; font-weight:bolder; color:#000;">List of Scholars</p>
        </div>

  <div class="topnavvv">
  <div class="search-container" style="float:right; margin-top:-3vw;">
    <form action="/action_page.php">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">
    </form>
  </div>
</div>


<table id="myTable">
        <thead>
          <tr>
            <th>NAME</th>
            <th>STUDENT NO.</th>
            <th>COLLEGE</th>
            <th>COURSE</th>
            <th>YEAR</th>
            <th>SCHOLARSHIP PROGRAMS<br>(Government and Private)</th>
            <th></th><th></th> 
          </tr>
        </thead>
        <tbody>
  
        @foreach($scholars as $scholar)

        <tr>
        <td>{{ $scholar->first_name }} {{ $scholar->middle_name }} {{ $scholar->last_name }} {{ $scholar->suffix }}</td>
        <td>{{ $scholar->student_id }}</td>
        <td>{{ $scholar->college }}</td>
        <td>{{ $scholar->course }}</td>
        <td>{{ $scholar->year_level }}</td>
        <td>{{ $scholar->scholarship_program}}<br>{{ $scholar->private}} </td>
        <td><a href="/administrator/scholarsprofileadmin/{{$scholar->student_id}}">
        <button type="button" class="downloadbutton" style="width:5vw;">VIEW</button></a></td>
        <form action="/administrator/listadmin/{{ $scholar->student_id }}" method="POST">
        @csrf
        <td><button type="submit" class="downloadbutton" style="width:5vw;">DELETE</button></a></td>
      </form>  
      </tr>
        
        @endforeach

        </tbody>
      </table>
    </div>
</div>

<!-- PDF CPNVERSION: Hidden  -->
<div id="tab" style="visibility:hidden;height:0; width:0;">
<table id="myTable">
        <thead>
          <tr>
            <th>NAME</th>
            <th>STUDENT NUMBER</th>
            <th>COLLEGE</th>
            <th>COURSE</th>
            <th>SCHOLARSHIP PROGRAM</th>
          </tr>
        </thead>
        <tbody>
  
        @foreach($scholars as $scholar)

        <tr>
            <td>{{ $scholar->first_name }} {{ $scholar->middle_name }} {{ $scholar->last_name }} {{ $scholar->suffix }}</td>
            <td>{{ $scholar->student_id }}</td>
            <td>{{ $scholar->college }}</td>
            <td>{{ $scholar->course }}</td>
            <td>{{ $scholar->scholarship_program}}</td>
        </tr>
        
        @endforeach
        </tbody>
      </table>
</div>
<br>
<input type="button" class="downloadbutton" value="DOWNLOAD" style="margin-top:-1vw; margin-left:35vw;"
id="btPrint" onclick="createPDF()" />

<a href="/coordinator/dashboard"><button type="button" class="greenbutton" style="margin-top:-3vw; margin-left:30vw; margin-right:30vw;">CANCEL</button></a>
    
</body>
<script>
    function createPDF() {
        var sTable = document.getElementById('tab').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Times New Roman;}";
        style = style + "table, th, td {border: solid 3px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<h2>List of Scholars</h2>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
</script>

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the        search query
        for (i = 1; i < tr.length; i++) {
  td = tr[i];
  if (td) {
    txtValue = td.textContent || td.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}

    }</script>


  
    </body>
</html>