<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Scholar.css">  
        <!-- SCRIPT -->
        <script src="/js/Scholar.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">
        
 
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

<!--Scholarship Details-->

    <div class="w3" style="margin-left:0vw;">
    <div class="w3-container" style="background-color:#E5E4E2; color:#808080; width: 1600vw; ">
    <p style="float:left; font-size:2vw; font-weight:bolder; color:#000;">Update Existing Scholarship</p>
    </div>
    
        <br>
  
    <div class="w3-card-4" style="width: 70vw; height:40vw; margin-left:15vw;">
    <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
    <h2 style="color:#fff; font-size:1.6vw;font-weight:bolder;">Scholarship Details</h2>
    </div>

    <div class="alert" style="font-size:1.5vw;">
    <b>Notice:</b>
    Wait for the confirmation from your College Coordinator.
    </div>

    <form class="w3-container" action="/scholarshipdetails" method="POST" ><br>
    @csrf

    <label class="w3-text-black" style="font-weight:bolder; font-size:1.4vw;">Scholarship Program</label><br>
    <label class="w3-text-black" style="font-size:1.2vw;">Government Funded</label><br>
    <select name="program" id = "ddlModels" style="width:67vw;" onchange = "EnableDisableTextBox(this)">
    <option selected disable hidden value="{{ $scholar->scholarship_program }}">{{ $scholar->scholarship_program }}</option>
    <option value = "None">None</option>
    <option value = "University Scholar">University Scholar</option>
    <option value = "College Scholar">College Scholar</option>
    <option value = "Incentive for USC Officers and SC Presidents">Incentive for USC Officers and SC Presidents</option>
    <option value = "Training Allowance for Athletes and Artists">Training Allowance for Athletes and Artists</option>
    <option value="Student Assistanship Program">Student Assistanship Program</option>
    <option value="Special Program for Employment of Students (SPES)">Special Program for Employment of Students (SPES)</option>
    <option value="ATI Scholarship - Youth in Agriculture and Fisheries Program (YAFP)">ATI Scholarship - Youth in Agriculture and Fisheries Program (YAFP)</option>
    <option value="Cash Grant to Medical Students enrolled in State Universities and Colleges (CGMS-SUCs)">Cash Grant to Medical Students enrolled in State Universities and Colleges (CGMS-SUCs)</option>
    <option value="CHED Expanded Grants-in-Aid Program for Poverty Alleviation (ESGPPA)">CHED Expanded Grants-in-Aid Program for Poverty Alleviation (ESGPPA)</option>
    <option value="CHED FDP II">CHED FDP II</option>
    <option value="CHED K12 Scholarship">CHED K12 Scholarship</option>
    <option value="CHED SUC-Tulong Dunong">CHED SUC-Tulong Dunong</option>
    <option value="CHED Universal Access to Quality Education Tertiary Education (TES2)">CHED Universal Access to Quality Education Tertiary Education (TES2)</option>
    <option value="Department of Agriculture-Agricultural Competitiveness Enhancement Fund Grants-in-Aid in Higher Educational (DA-ACEF GIAHEP) Scholarship">Department of Agriculture-Agricultural Competitiveness Enhancement Fund Grants-in-Aid in Higher Educational (DA-ACEF GIAHEP) Scholarship</option>
    <option value="DAR Apayao">DAR Apayao</option>
    <option value="DA BFAR Scholarship">DA BFAR Scholarship</option>
    <option value="DOH Pre-Service Scholarship Program">DOH Pre-Service Scholarship Program</option>
    <option value="DOST-Science Education Institute Undergraduate Scholarship/Junior Level Science Scholarship">DOST-Science Education Institute Undergraduate Scholarship/Junior Level Science Scholarship</option>
    <option value="Landbank Gawad Patnubay Scholarship Program">Landbank Gawad Patnubay Scholarship Program</option>
    <option value="CHED Partylist/SSGP/Congressional/ Senate">CHED Partylist/SSGP/Congressional/ Senate</option>
    <option value="CHED State Scholarship Program (Full/Half Merit)">CHED State Scholarship Program (Full/Half Merit)</option>
    <option value="CHED SAFE">CHED SAFE</option>
    <option value="CHED Student Financial Assistance Program (STUFAP)">CHED Student Financial Assistance Program (STUFAP)</option>
    <option value="City Government of Batac Sirib Mannalon">City Government of Batac Sirib Mannalon</option>
    <option value="LGU Scholarships (City of Batac, City of Laoag, Bacarra, Cabugao, Dingras)">LGU Scholarships (City of Batac, City of Laoag, Bacarra, Cabugao, Dingras)</option>
    <option value="GSIS Scholarship Program">GSIS Scholarship Program</option>
    <option value="NCIP Merit-based Scholarship and Educational Assistance Program">NCIP Merit-based Scholarship and Educational Assistance Program</option>
    <option value="OWWA Scholarship">OWWA Scholarship</option>
    <option value="Sirib Scholarship (Academic, Youth)">Sirib Scholarship (Academic, Youth)</option>
    </select>

    <label class="w3-text-black" style="font-size:1.2vw;">Privately Funded</label><br>
    <select name="private" id = "ddlModels" style="width:67vw;" onchange = "EnableDisableTextBox(this)">
    <option selected disable hidden value="{{ $scholar->private }}">{{ $scholar->private }}</option>
    <option value = "None">None</option>
    <option value="PBED Step-up Scholarship">PBED Step-up Scholarship</option>
    <option value="Toyota Motor Philippine Foundation, Inc. Scholarship">Toyota Motor Philippine Foundation, Inc. Scholarship</option>
    <option value="Gokongwei Scholarship Program">Gokongwei Scholarship Program</option>
    </select>

    <label class="w3-text-black" style="font-weight:bolder; font-size:1.4vw;">Inclusive Year/Semester</label><br>
    <select name="year" id="room" style="width:100%;"class="inputapp">
    <option selected disable hidden value="{{ $scholar->inclusive_year }}">{{ $scholar->inclusive_year }}</option>
    <option value="2024-2025 Second Semester">2024-2025 Second Semester</option>
    <option value="2024-2025 First Semester">2024-2025 First Semester</option>
    <option value="2023-2024 Second Semester">2023-2024 Second Semester</option>
    <option value="2023-2024 First Semester">2023-2024 First Semester</option>
    <option value="2022-2023 Second Semester">2022-2023 Second Semester</option>
    <option value="2022-2023 First Semester">2022-2023 First Semester</option>
    <option value="2021-2022 Second Semester">2021-2022 Second Semester</option>
    <option value="2021-2022 First Semester">2021-2022 First Semester</option>
    </select>
   
    <p>      
    <label class="w3-text-black" style="font-weight:bolder; font-size:1.4vw;">GWA</label>
    <input class="w3-input w3-border w3-sand" name="gwa" type="text" value="{{ $scholar->gwa }}"></p><br><br>

    <ul style="margin-top:-2vw;">
    <li><label class="w3-text-indigo" style="margin-top:200vw; font-size:1.4vw; font-weight:bolder;"><a href="file-upload">Upload Proof of Scholarship</a></label></li>
    <li><label class="w3-text-indigo" style="margin-top:200vw; font-size:1.4vw; font-weight:bolder;"><a href="termination">Terminate Scholarship</a></label></li>
    </ul>

    <label class="w3-text-black" style="font-weight:bolder; font-size:1.4vw;">Status</label>
    <input class="w3-input w3-border w3-sand" name="status" value="{{ $status }}" type="text" value="Waiting for Approval" readonly></p><br>

    </div><br>

    <a href="/dashboard"><button type="button" class="greenbutton" style="  margin-top:0vw; margin-right:28vw;margin-left:0vw; margin-bottom:1vw;">CANCEL</button></a>
    <button type="submit" onclick="updateProfileFunction()" class="greenbutton" style="margin-top:0vw;margin-right:12vw; margin-bottom:1vw;"> UPDATE</button>
    </form>

</body>

<script>
        var process = document.getElementById('status').value;
        }
    </script>


</html>