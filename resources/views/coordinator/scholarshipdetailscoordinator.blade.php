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

    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
        
       <!-- Sidebar -->
       <div class="123" style="width:20%; height:50vw; background: #E8E8E8;">
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
  </div><br>

  <table id="nametable4">
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
</table><br><br><br><br>


<!--Scholar's Profile--->

<div class="w3-card-4" style="width: 70vw; margin-left:25vw; height: 34.7vw; margin-top:-49vw;">


  <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
  <h2 style="color:#fff; font-weight:bolder;">Scholarship Details</h2>
  </div>

  <div id="tab">
  <form class="w3-container" action="/coordinator/scholarshipdetailscoordinator/{{ $scholarshipdetails->student_id }}" method="POST"><br><br>
  @csrf
  <a href="{{URL::previous()}}"><button type="button" class="greenbutton" style="  margin-top:-0vw; margin-right:3vw;margin-left:5vw">BACK</button></a>

<label class="w3-text-black" style="font-size:1.5vw;">Scholarship Program</label><br>
<label class="w3-text-black" style="font-size:1.2vw;">Government Funded</label><br>
<select id = "ddlModels" style="width:67vw;" onchange = "EnableDisableTextBox(this)" disabled="true">
<option selected disable hidden value="{{ $scholarshipdetails->scholarship_program }}">{{ $scholarshipdetails->scholarship_program }}</option>

    <option value = "University Scholar">University Scholar</option>
    <option value = "College Scholar">College Scholar</option>
    <option value = "Incentive for USC Officers and SC Presidents">Incentive for USC Officers and SC Presidents</option>
    <option value = "4">Training Allowance for Athletes and Artists</option>
    <option value="5">Student Assistanship Program</option>
    <option value="6">Special Program for Employment of Students (SPES)</option>
    <option value="7">ATI Scholarship - Youth in Agriculture and Fisheries Program (YAFP)</option>
    <option value="8">Cash Grant to Medical Students enrolled in State Universities and Colleges (CGMS-SUCs)</option>
    <option value="9">CHED Expanded Grants-in-Aid Program for Poverty Alleviation (ESGPPA)</option>
    <option value="10">CHED FDP II</option>
    <option value="11">CHED K12 Scholarship</option>
    <option value="12">CHED SUC-Tulong Dunong</option>
    <option value="13">CHED Universal Access to Quality Education Tertiary Education (TES2)</option>
    <option value="14">Department of Agriculture-Agricultural Competitiveness Enhancement Fund Grants-in-Aid in Higher Educational (DA-ACEF GIAHEP) Scholarship</option>
    <option value="15">DAR Apayao</option>
    <option value="16">DA BFAR Scholarship</option>
    <option value="17">DOH Pre-Service Scholarship Program</option>
    <option value="18">DOST-Science Education Institute Undergraduate Scholarship/Junior Level Science Scholarship</option>
    <option value="19">Landbank Gawad Patnubay Scholarship Program</option>
    <option value="20">CHED Partylist/SSGP/Congressional/ Senate</option>
    <option value="21">CHED State Scholarship Program (Full/Half Merit)</option>
    <option value="22">CHED SAFE</option>
    <option value="23">CHED Student Financial Assistance Program (STUFAP)</option>
    <option value="24">City Government of Batac Sirib Mannalon</option>
    <option value="25">LGU Scholarships (City of Batac, City of Laoag, Bacarra, Cabugao, Dingras)</option>
    <option value="26">GSIS Scholarship Program</option>
    <option value="27">NCIP Merit-based Scholarship and Educational Assistance Program</option>
    <option value="28">OWWA Scholarship</option>
    <option value="29">Sirib Scholarship (Academic, Youth)</option>
</select>

<label class="w3-text-black" style="font-size:1.2vw;">Privately Funded</label><br>
<select id = "ddlModels" style="width:67vw;" onchange = "EnableDisableTextBox(this)" disabled="true">
<option selected disable hidden value="{{ $scholarshipdetails->private }}">{{ $scholarshipdetails->private }}</option>
    <option value = "None">None</option>
    <option value="PBED Step-up Scholarship">PBED Step-up Scholarship</option>
    <option value="Toyota Motor Philippine Foundation, Inc. Scholarship">Toyota Motor Philippine Foundation, Inc. Scholarship</option>
    <option value="Gokongwei Scholarship Program">Gokongwei Scholarship Program</option>
</select>


        <label class="w3-text-black" style="font-size:1.5vw;">Inclusive Year/Semester</label><br>
        <select name="room" id="room" style="width:100%;"class="inputapp" disabled="true">
        <option selected disable hidden value="{{ $scholarshipdetails->inclusive_year}}">{{ $scholarshipdetails->inclusive_year}}</option>

            <option value="yearsem1">2024-2025 / Second Semester</option>
            <option value="yearsem2">2024-2025 / First Semester</option>
            <option value="yearsem3">2023-2024 / Second Semester</option>
            <option value="yearsem4">2023-2024 / First Semester</option>
            <option value="yearsem5">2022-2023 / Second Semester</option>
            <option value="yearsem6">2022-2023 / First Semester</option>
            <option value="yearsem7">2021-2022 / Second Semester</option>
            <option value="yearsem8">2021-2022 / First Semester</option>
        </select>
   
    <p>      
    <label class="w3-text-black" style="font-size:1.5vw;">GWA</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="{{ $scholarshipdetails->gwa}}" readonly></p><br>
    <label class="w3-text-indigo" style="margin-top:-2vw; font-size:1.5vw;"><a href="/coordinator/proofcoordinator/{{ $scholarshipdetails->student_id }}">Proof of Scholarship</a></label>
    <button type="submit" name="submit" value="DENY" onclick="denyscholar()" class="greenbutton" style=" margin-bottom:1vw; margin-top:2vw; margin-right:22vw;margin-left:5vw">DENY</button></a>
<button type="submit" name="submit" value="ACCEPT" onclick="acceptscholar()" class="greenbutton" style=" margin-bottom:1vw; margin-top:-0vw; margin-right:-4vw;margin-left:10vw">ACCEPT</button></a>

</form></div>

  </div><br>


</body>


</html>