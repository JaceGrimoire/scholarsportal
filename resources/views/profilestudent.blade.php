<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p class="LogoName2">MMSU SCHOLAR'S PORTAL</p>
        </div>  

        <div class="menu">   
        <ul><li>
        <a href="#" style="float:right;margin:0vw 0vw 0vw 0vw;">{{ Auth::user()->student_id }}</a>
        <ul>
        <li><a href="profilestudent">Profile</a></li><br>
        <li><a href="calendar">Calendar</a></li><br>
        <li><a href="scholarshipprograms">Scholarship Programs</a></li><br>
        <form style="display:block;" method="POST" action="{{ route('logout') }}">
        @csrf
        <li><button type="submit" class="LogOut">{{ __('Log Out') }}</button></li>
        </form>
        </ul>
        </ul></li>
        </div><br>

<!--Profile-->
  
        <div class="w3-card-4" style="width: 65vw; margin-left:20vw;">
        <div id="ProfileContainer" class="w3-container">
        <h2 style="color:#fff; font-weight:bolder;">Personal Data Sheet</h2>
        </div>
  
        <form class="w3-container" action="/profilestudent" method="POST" >
        @csrf

        <p> <br>     
        <label class="w3-text-black" style="font-size:1.3vw;"><b>FULL NAME</b></label><br><br>
        <label class="w3-text-black">First Name</label>
        <input class="w3-input w3-border w3-sand" style="width:62vw;" name="first" type="text" value="{{ Auth::user()->first_name }}" required="required" /></p>
   
        <p>      
        <label class="w3-text-black">Middle Name</label>
        <input class="w3-input w3-border w3-sand" name="middle" type="text" value="{{ Auth::user()->middle_name }}" required="required"/></p>

        <p>      
        <label class="w3-text-black">Last Name</label>
        <input class="w3-input w3-border w3-sand" name="last" type="text" value="{{ Auth::user()->last_name }}" required="required"/></p>

        <p>      
        <label class="w3-text-black">Suffix</label>
        <input class="w3-input w3-border w3-sand" name="suffix" type="text" value="{{ Auth::user()->suffix }}"></p><br>


        <p>      
        <label class="w3-text-black">Student ID/Examinee Number</label>
        <input class="w3-input w3-border w3-sand" type="text" value="{{ Auth::user()->student_id }}"></p>
    
        <p>      
        <label class="w3-text-black">Mobile Number</label>
        <input class="w3-input w3-border w3-sand" name="mobile_num" type="text" value="{{ Auth::user()->mobile_num }}"></p>

        <label class="w3-text-black">Sex</label><br>
        <select name="sex" id="room" style="width:100%;"class="inputapp">
        <option selected disable hidden value="{{ Auth::user()->sex }}">{{ Auth::user()->sex }}</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>

        <label class="w3-text-black">College</label><br>
        <select name="college" style="width:100%;" id="college" onchange="myFunction()" class="inputapp">
        <option selected disable hidden value="{{ Auth::user()->college }}">{{ Auth::user()->college }}</option>
        <option value="CAS">CAS</option>
        <option value="COE">COE</option>
        <option value="CBEA">CBEA</option>
        <option value="CHS">CHS</option>
        <option value="CTE">CTE</option>
        <option value="CASAT">CASAT</option>
        <option value="CAFSD">CAFSD</option>
        <option value="CIT">CIT</option>
        </select>


        <label class="w3-text-black">Course</label><br>
        <select name="course" style="width:100%;" id="course" class="inputapp">
        <option selected disable hidden value="{{ Auth::user()->course }}">{{ Auth::user()->course }}</option>
        <option data-tag="CAS" value="BS Computer Science">BS Computer Science</option>
        <option data-tag="CAS" value="BS Information Technology">BS Information Technology</option>
        <option data-tag="CAS" value="AB Communication">AB Communication</option>
        <option data-tag="CAS" value="AB English Language">AB English Language</option>
        <option data-tag="CAS" value="AB Sociology">AB Sociology</option>
        <option data-tag="CAS" value="BS Biology">BS Biology</option>
        <option data-tag="CAS" value="BS Mathematics">BS Mathematics</option>
        <option data-tag="CAS" value="BS Meteorology">BS Meteorology</option>
        <option data-tag="COE" value="BS in Civil Engineering">BS in Civil Engineering</option>
        <option data-tag="COE" value="BS in Electrical Engineering">BS in Electrical Engineering</option>
        <option data-tag="COE" value="BS in Mechanical Engineering">BS in Mechanical Engineering</option>
        <option data-tag="COE" value="BS in Chemical Engineering">BS in Chemical Engineering</option>
        <option data-tag="COE" value="BS in Ceramic Engineering">BS in Ceramic Engineering</option>
        <option data-tag="COE" value="BS in Computer Engineering">BS in Computer Engineering</option>
        <option data-tag="COE" value="BS in Elect. and Comm. Engineering">BS in Elect. and Comm. Engineering</option>
        <option data-tag="CHS" value="BS in Nursing">BS in Nursing</option>
        <option data-tag="CHS" value="BS in Physical Therapy">BS in Physical Therapy</option>
        <option data-tag="CHS" value="BS in Pharmacy">BS in Pharmacy</option>
        <option data-tag="CBEA" value="BS in Accountancy">BS in Accountancy</option>
        <option data-tag="CBEA" value="BS in Economics">BS in Economics</option>
        <option data-tag="CBEA" value="BS in Business Administration">BS in Business Administration</option>
        <option data-tag="CBEA" value="BS in Cooperative Management">BS in Cooperative Management</option>
        <option data-tag="CBEA" value="BS in Accounting Technology">BS in Accounting Technology</option>
        <option data-tag="CBEA" value="BS in Entrepreneurship">BS in Entrepreneurship</option>
        <option data-tag="CBEA" value="BS in Hospitality Management">BS in Hospitality Management</option>
        <option data-tag="CBEA" value="BS in Tourism Management">BS in Tourism Management</option>
        <option data-tag="CASAT" value="BS in Agriculture">BS in Agriculture</option>
        <option data-tag="CASAT" value="BS in Forestry">BS in Forestry</option>
        <option data-tag="CAFSD" value="BS in Development Communication">BS in Development Communication</option>
        <option data-tag="CAFSD" value="BS in Home Technology">BS in Home Technology</option>
        <option data-tag="CAFSD" value="BS in Environmental Science">BS in Environmental Science</option>
        <option data-tag="CAFSD" value="BS in Agricultural Technology">BS in Agricultural Technology</option>
        <option data-tag="CAFSD" value="BS in Fisheries">BS in Fisheries</option>
        <option data-tag="CIT" value="Bachelor in Automotive Technology">Bachelor in Automotive Technology</option>
        <option data-tag="CIT" value="BS in Industrial Education">BS in Industrial Education</option>
        <option data-tag="CIT" value="BS in Industrial Technology">BS in Industrial Technology</option>
        <option data-tag="CTE" value="Bachelor in Secondary Education">Bachelor in Secondary Education</option>
        <option data-tag="CTE" value="Bachelor in Elementary Education">Bachelor in Elementary Education</option>
        <option data-tag="CTE" value="Short-Term Programs">Short-Term Programs</option>
        </select>

        <label class="w3-text-black">Year Level</label><br>
        <select name="year_level" id="room" style="width:100%;"class="inputapp">
        <option selected disable hidden value="{{ Auth::user()->year_level }}">{{ Auth::user()->year_level }}</option>
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
        </select>

        <p><br>
        <label class="w3-text-black" style="font-size:1.2vw;"><b>ADDRESS</b></label><br><br>
        <label class="w3-text-black">House/Block/Lot No.</label>
        <input class="w3-input w3-border w3-sand" name="house_num" type="text" value="{{ Auth::user()->house_num }}"></p>

        <p>      
        <label class="w3-text-black">Street</label>
        <input class="w3-input w3-border w3-sand" name="street" type="text" value="{{ Auth::user()->street }}"></p>

        <p>      
        <label class="w3-text-black">Brgy.</label>
        <input class="w3-input w3-border w3-sand" name="barangay" type="text" value="{{ Auth::user()->barangay }}"></p>

        <p>      
        <label class="w3-text-black">City/Municipality</label>
        <input class="w3-input w3-border w3-sand" name="city" type="text" value="{{ Auth::user()->city }}"></p>

        <p>      
        <label class="w3-text-black">Province</label>
        <input class="w3-input w3-border w3-sand" name="province" type="text" value="{{ Auth::user()->province }}"></p><br><br>

        </div>

        <a href="/dashboard"><button type="button" class="greenbutton" style="  margin-top: 2vw; margin-bottom:2vw; margin-right:25vw;margin-left:0vw">CANCEL</button></a>
        <button type="submit" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:2vw;margin-right:12vw;"> UPDATE</button>

        </form>

<!--COLLEGE AND COURSE-->
    <script>
	$('#college').on('change', function() {
		var selected = $(this).val();
		$("#course option").each(function(item){
			console.log(selected) ;  
			var element =  $(this) ; 
			console.log(element.data("tag")) ; 
			if (element.data("tag") != selected){
				element.hide() ; 
			}else{
				element.show();
			}
		}) ; 
		
		$("#course").val($("#course option:visible:first").val());
		
    });
    </script>

</body>
</html>