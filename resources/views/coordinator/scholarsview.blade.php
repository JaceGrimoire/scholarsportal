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
        <link rel="icon" href="/images/mmsu logo.png">

        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 0vw;
}

td, th {
  border: 0.1vw solid #000;
  text-align: center;
  padding: 1vw;
}

td:hover{
    background-color: #0c4b05;
    color: #FFCD00; 
}

.button {
  background-color: #F3EEED;
  border-style: solid;
  color: #0C4B05;
  border-color: #0C4B05;
  padding: 0vw 2vw;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 1vw;
  margin-left: 3vw;
  margin-right: -3vw;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #F3EEED;
  border-style: solid;
  color: #0C4B05;
  border-color: #0C4B05;
  border: -1vw solid #0C4B05;
  border-radius: 4vw;
}

.button1:hover {
    background-color: #FFCD00;
    color: #0c4b05;
}

</style>

    </head>
    
    <body class="antialiased" style="overflow:hidden;">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
        
       <!-- Sidebar -->
       <div class="123" style="overflow-x:hidden; width:20%; height:130vw; background: #E8E8E8;">
       <a href="#" class="w3-bar-item w3-button" style="font-size:2vw;"></i>Coordinator</a><br><br>
  <a href="/coordinator/dashboard" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-home" style="font-size:2vw; left:-0.5vw;color:black;"></i>Home</a><br><br>
  <a href="/coordinator/calendarcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-calendar" style="font-size:2vw; left:-0.5vw;color:black;"></i>Calendar of Events</a><br><br>
  <a href="/coordinator/applicants" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-user" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Applicants</a><br><br>
  <a href="/coordinator/listcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-list" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Scholars</a><br><br>
  <a href="/coordinator/scholarshipprogramcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-education" style="font-size:2vw; left:-0.5vw;color:black;"></i>Scholarship Programs</a><br><br>
  <form style="display:block;" method="POST" action="{{ route('coordinator.logout') }}">
  @csrf
  <li>
  <button type="submit" style="margin-left:0.2vw; font-size:1.4vw; color:red; width:19vw;">{{ __('Log Out') }}</button></li>
  </form>
</div><br><br>


    <!-- Page Content -->



<!--Scholar's Profile-->
<div class="w3-card-4" style="width: 65vw; margin-left:28vw; margin-top:-132vw;">
    <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00; margin-top:-2vw;">
<h2 style="color:#fff; font-weight:bolder;">Personal Data Sheet</h2>
    </div>
  
    <div id="tab">

    <form class="w3-container" action="/action_page.php" >

    <p> <br>     
    <label class="w3-text-black" style="font-size:1.3vw;"><b>FULL NAME</b></label><br><br>
    <a href="/coordinator/formscoordinator/{{ $details->student_id }}"><button type="button" class="greenbutton" style="  margin-top:-4vw; margin-right:10vw;margin-left:5vw">FORMS</button></a>
    <a href="/coordinator/scholarsdetails/{{ $details->student_id }}"><button type="button" class="greenbutton" style="  margin-top:-4vw; margin-right:-0vw;margin-left:5vw">SCHOLARSHIP</button></a>
    <label class="w3-text-black">First Name</label>
    <input class="w3-input w3-border w3-sand" style="width:62vw;" name="first" type="text" value="{{ $details->first_name }}"></p>
   
    <p>      
    <label class="w3-text-black">Middle Name</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->middle_name }}" readonly></p>

    <p>      
    <label class="w3-text-black">Last Name</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->last_name }}" readonly></p>

    <p>      
    <label class="w3-text-black">Suffix</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->suffix }}" readonly></p><br>


    <p>      
    <label class="w3-text-black">Student Number</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->student_id }}" readonly></p>
    
    <p>      
    <label class="w3-text-black">Mobile Number</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->mobile_num }}" readonly></p>

    <label class="w3-text-black">Sex</label><br>
    <select name="sex" id="sex" style="width:100%;"class="inputapp" disabled="true" >
    <option selected disable hidden value="{{ $details->sex}}">{{ $details->sex}}</option>
            <option value="female">Male</option>
            <option value="male">Female</option>
        </select>


    <label class="w3-text-black">College</label><br>
    <select name="college" id="college" style="width:100%;"class="inputapp"disabled="true">
    <option selected disable hidden value="{{ $details->college}}">{{ $details->college}}</option>
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
            <option value="cit">CIT</option>
            <option value="cte">CTE</option>
            <option value="casat">CASAT</option>
            <option value="cafsd">CAFSD</option>
            <option value="col">COL</option>
            <option value="gs">GRADUATE SCHOOL</option>
            <option value="com">COM</option>
        </select>


        <label class="w3-text-black">Course</label><br>
    <select name="course" id="course" style="width:100%;"class="inputapp"disabled="true">
    <option selected disable hidden value="{{ $details->course}}">{{ $details->course}}</option>

    <!--CAS-->
            <option value="1">AB in Communication</option>
            <option value="2">AB in English Language</option>
            <option value="3">AB in Sociology</option>
            <option value="4">BS in Biology</option>
            <option value="5">BS in Computer Science</option>
            <option value="6">BS in Information Technology</option>
            <option value="7">BS in Mathematics</option>
            <option value="8">BS in Meteorology</option>

    <!--COE-->
            <option value="9">BS in Agricultural and Biosystems Engineering</option>
            <option value="10">BS in Civil Engineering</option>
            <option value="11">BS in Electrical Engineering</option>
            <option value="12">BS in Mechanical Engineering</option>
            <option value="13">BS in Chemical Engineering</option>
            <option value="14">BS in Ceramic Engineering</option>
            <option value="15">BS in Computer Engineering</option>
            <option value="16">BS in Elect. and Comm. Engineering</option>

    <!--CBEA-->

            <option value="17">BS in Accountancy</option>
            <option value="18">BS in Economics</option>
            <option value="19">BS in Business Administration</option>
            <option value="20">BS in Cooperative Management</option>
            <option value="21">BS in Accounting Technology</option>
            <option value="22">BS in Entrepreneurship</option>
            <option value="23">BS in Hospitality Management</option>
            <option value="24">BS in Tourism Management</option>

    <!--CHS-->

            <option value="25">BS in Nursing</option>
            <option value="25">BS in Physical Therapy</option>
            <option value="27">BS in Pharmacy</option>

    <!--CIT-->

            <option value="28">Bachelor in Automotive Technology (Ladder-type)</option>
            <option value="29">BS in Industrial Education</option>
            <option value="30">BS in Industrial Technology</option>

    <!--CTE-->

            <option value="31">Bachelor in Secondary Education</option>
            <option value="32">Bachelor in Elementary Education</option>

    <!--CASAT-->

            <option value="33">BS in Marine Biology</option>
            <option value="34">BS in Fisheries</option>

    <!--CAFSD-->

            <option value="35">BS in Agriculture</option>
            <option value="36">BS in Forestry</option>
            <option value="37">BS in Development Communication</option>
            <option value="38">BS in Home Technology</option>
            <option value="39">BS in Environmental Science</option>
            <option value="40">BS in Agricultural Technology</option>

        </select>

    <label class="w3-text-black">Year Level</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp"disabled="true">
    <option selected disable hidden value="{{ $details->year_level}}">{{ $details->year_level}}</option>
            <option value="1st">1st Year</option>
            <option value="2nd">2nd Year</option>
            <option value="3rd">3rd Year</option>
            <option value="4th">4th Year</option>
        </select>

    <p><br>
    <label class="w3-text-black" style="font-size:1.2vw;"><b>ADDRESS</b></label><br><br>
    <label class="w3-text-black">House/Block/Lot No.</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->house_num }}" readonly></p>

    <p>      
    <label class="w3-text-black">Street</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->street }}" readonly></p>

    <p>      
    <label class="w3-text-black">Brgy.</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->barangay }}"readonly></p>

    <p>      
    <label class="w3-text-black">City/Municipality</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->city }}" readonly></p>

    <p>      
    <label class="w3-text-black">Province</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ $details->province }}" readonly></p><br><br>


  </form></div>
</div><br><br>

<input type="button" class="downloadbutton" value="DOWNLOAD" style="width:15vw; height:2.5vw; margin-left:45vw; margin-bottom:5vw;"  
id="btPrint" onclick="createPDF()" />

<a href="/coordinator/dashboard"><button type="button" class="greenbutton" style="  margin-top:-0vw; margin-right:18vw;margin-left:5vw">CANCEL</button></a>
  
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
        win.document.write('<h2>Scholar Profile</h2>');   // <title> FOR PDF HEADER.
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