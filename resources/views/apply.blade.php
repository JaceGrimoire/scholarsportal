<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MMSU Scholar's Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="/css/Scholar.css">  
        <!-- SCRIPT -->
        <script src="js/Scholar.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="fonts/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/material-design-icons/material-icon.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">


    <style>
    .container {
    max-width: 500px;
    }
    
    dl, ol, ul {
    margin: 0;
    padding: 0;
    list-style: none;
    }
    </style>
    
    </head>

    <body class="antialised"  style="background:#F3EEED;">
    
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

<!--Apply for TES-->  

    <div class="w3" style="margin-left:0vw;">
    <div class="w3-container" style="background-color:#E5E4E2; color:#808080; width: 1600vw; ">
    <p style="float:left; font-size:2.2vw; font-weight:bolder; color:#000;">Application for TES</p>
    </div><br><br>

    <div class="container" style="background:#0c4b05; border:0.4vw dashed white; height:18vw;">
        <form action="{{route('apply')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <form action="/action_page.php"><br><br>
    
    <div class="custom-file" style="margin-left:4vw; margin-top:2vw;">
    <input type="file" name="file" class="custom-file-input" id="chooseFile" multiple="">
    <label class="custom-file-label" for="chooseFile">Select file</label>
    </div>

    <div class="uploadfiles"style="margin-left:8vw;"><br>
    <button type="submit" onsubmit="upload()" name="submit" class="btn btn-primary" style="width:15vw;">
    Upload Files
    </button>
    </div>
    </form>
    </div>

    <a href="dashboard"><button type="button" class="greenbutton" style="  margin-top:1vw;margin-left:6vw; margin-right:42vw;">CANCEL</button></a>

</body>
</html>