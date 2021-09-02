<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Termination</title>

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

<!--Termination-->

    <div class="w3" style="margin-left:0vw;">
    <div class="w3-container" style="background-color:#E5E4E2; color:#808080; width: 1600vw; ">
    <p style="float:left; font-size:1.5vw; color:#000;"><b>Notice:</b> Only those who have scholarship can terminate.</p>
    </div>
        
        <br><br><br>
  
    <div class="w3-card-4" style="width: 60vw; height:25vw; margin-left:20vw;">
    <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
    <h2 style="color:#fff; font-weight:bolder;">Termination of Scholarship</h2>
    </div>
    
    <form class="w3-container" action="/termination" method="POST"><br><br>
    @csrf
    <label class="w3-text-black" style="font-size:1.5vw;"><b>Reason of Termination:</b></label><br>
    <input type="radio" id="age1" name="age" value="30">
    <label style="font-size:1vw;" for="reason1">Graduated</label><br>
    <input type="radio" id="age2" name="age" value="60">
    <label for="reason2">Did not qualify to eligibility requirements</label><br>  
    <input type="radio" id="age3" name="age" value="100">
    <label for="reason3">Change of Scholarship Program</label><br> 
    <input type="radio" id="age3" name="age" value="100">

    <script type="text/javascript">
    function EnableDisableTextBox(ddlModels) {
        var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
        var txtOther = document.getElementById("txtOther");
        txtOther.disabled = selectedValue == 4 ? false : true;
        if (!txtOther.disabled) {
            txtOther.focus();
        }
    }
    </script>

    <label class="w3-text-black">Stopped Schooling</label><br>
    <select id = "ddlModels" style="width:20vw;" onchange = "EnableDisableTextBox(this)">
    <option value = "1">Sickness/Health Conditions</option>
    <option value = "2">Family Concerns</option>
    <option value = "3">Personal Concerns</option>
    <option value = "4">Others</option>
    </select>
    <br>
    Other(please specify): <br>
    <input type="text" id="txtOther" disabled="disabled"> <br><br><br><br>

</div><br><br><br>

    <a href="scholarshipdetails"><button type="button" class="greenbutton" style="  margin-top:-2vw; margin-right:28vw;margin-left:0vw">CANCEL</button></a>
    <button type="submit" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:-2vw;margin-right:12vw;"> UPDATE</button>

</form>
</body>
</html>