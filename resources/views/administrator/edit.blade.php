<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | List of Scholarship Programs</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Admin.css"> 
        <!-- SCRIPT -->
        <script src="/js/Admin.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">
        


        <style>

      table{
        width: 98.2vw;
        margin: 2vw auto;
        border-collapse: collapse;
        text-align: center;
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
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  


    <!--Scholarship Programs-->
<hr>
    <p style="font-size:2vw; background-color:#dcdcdc; font-weight:bolder; text-align:center;"> List of Scholarship Programs </p>
<hr>

    <form action="/administrator/edit/{{$details->id}}" method="POST" style="background-color:#f2f2f2; width:60vw; ">

      @csrf

      <div class="input-row">
        <label style="font-weight:bolder;" for="scholarship">Scholarship/Assistantship Program</label>
        <input type="text" name="scholarship" id="scholarship" value="{{$details->scholarship_program}}" />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="policy">Applicable policy</label>
        <input type="text" name="policy" id="policy" value="{{$details->policy}}" />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="qualification">Qualification</label>
        <input type="text" name="qualification" id="qualification" value="{{$details->qualification}}" />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="stipend">Amount of Grant/Stipend</label>
        <input type="text" name="stipend" id="stipend" value="{{$details->stipend}}" />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="guidelines">General Guidelines</label>
        <textarea type="text" name="guidelines" id="guidelines" style="font-size:1vw;" rows="2" cols="70">{{$details->guidelines}}</textarea>
      </div>

      
      <button type="submit" style="margin-left:47vw;">Save</button>
      </form>
     




  </body>
</html>