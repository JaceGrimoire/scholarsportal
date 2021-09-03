<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Admin.css"> 
        <!-- SCRIPT -->
        <script src="/js/Admin.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <style>

      table{
        width: 98.2vw;
        margin: 2vw auto;
        border-collapse: collapse;
        text-align: justify;
        font-size:1vw;
      }

      table td,
      table th {
        border: solid 0.1vw black;
      }

      label,
      input, textarea {
        display: block;
        margin: 0vw 0;
        font-size: 1vw;
        width:50vw;
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
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  


    <!--Scholarship Programs-->
<hr>
    <p style="font-size:2vw; background-color:#dcdcdc; font-weight:bolder; text-align:center;"> List of Scholarship Programs </p>
<hr>

    <form action="/administrator/scholarshipprogramadmin" method="POST" style="background-color:#F3EEED; width:60vw; ">

      @csrf

      <div class="input-row">
        <label style="font-weight:bolder;" for="scholarship">Scholarship/Assistantship Program</label>
        <input type="text" name="scholarship" id="scholarship" placeholder="Enter scholarship.." />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="policy">Applicable policy</label>
        <input type="text" name="policy" id="policy" placeholder="Enter policy.." />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="qualification">Qualification</label>
        <input type="text" name="qualification" id="qualification" placeholder="Enter qualification.." />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="stipend">Amount of Grant/Stipend</label>
        <textarea type="text" name="stipend" id="stipend" placeholder="Enter stipend.."rows="2" cols="70" ></textarea>
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="guidelines">General Guidelines</label>
        <textarea type="text" name="guidelines" id="guidelines" placeholder="Enter guidelines.." rows="2" cols="70" ></textarea>
      </div><br>

    
      <button type="submit" style="margin-left:19vw;">Add</button>
      </form>


      <div id="tab">
      <table id="myTablee">
      <thead>
        <tr style="text-align:center;">
          <th>Scholarship/Assistantship Program</th>
          <th>Applicable policy</th>
          <th>Qualification</th>
          <th>Amount of Grant/Stipend</th>
          <th>General Guidelines</th>
          <th>Edit</th>
          <th>Delete</th>
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
      
      
     <td><a href="/administrator/edit/{{ $scholarshipprogram->id }}"><button style="width:3vw; height:3vw;"><i class="fa fa-edit"></i></button></a></td>

      <form action="/administrator/scholarshipprogramadmin/{{ $scholarshipprogram->id }}" method="POST">
        @csrf
        <td><button style="width:3vw; height:3vw;" type="submit"><i class="fa fa-trash"></i></button></a></td>
      </form>  
    </tr>
      @endforeach

      </tbody>
    </table>
    </div>

    <p>
        <input type="button" class="downloadbutton" value="Download" style="width:20vw; margin-left:40vw;" 
            id="btPrint" onclick="createPDF()" />
    </p>

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



<a href="/administrator/dashboard"><button type="button" class="greenbutton" style=" margin-top:-1vw; margin-right:2vw; margin-bottom:1vw;">CANCEL</button></a>

  </body>
</html>