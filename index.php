<!-- including the file for handling the form -->
<?php include "action.php";?>
<!DOCTYPE>
<html lang="en-us">

      <head>
           <title>My First Website</title>
           <meta charset= "utf-8" >
           <link rel="stylesheet" type="text/css" href="css/style.css">
      </head>

      <body>
<h1 id="welcome-address"><em>Welcome to The Fullness Scholarship Program.</em></h1>
<div>
<p><h2>Please fill the forms below:</h2></p>

<form action="" method="post" enctype="multipart/form-data">
<fieldset id="field"><legend><h3>Provide Your Personal Details</h3></legend>

<div id ="name">
       <p>First Name: <input class="shapen" type="text" name="fname" placeholder="Enter First Name" required/></p><br>

       <p>Second Name: <input class="shapen" type="text" name="sname" placeholder="Enter Second Name" required/></p><br> 

</div id="name">

<div id ="second-space">
       <p>Gender: <input type="radio" name= "gender" value="M" required />Male<input type="radio" name= "gender" value="F"/>Female</p><br>

       <p>Date of Birth:<input class="shapen" type="date" name="date" required/></p><br>
</div id ="second-space">

<div id ="third-space">
       <p>Email: <input class="shapen" type="email" name="email" placeholder="Enter Email Adress"/></p><br>

       <p>Phone Number: <input class="shapen" type="number" name="Phone-Number" placeholder="Enter Phone Number" required/></p><br>
</div id ="third-space">
<p>SHS attended: <input class="shapen" type="text" name="shs" placeholder="Enter SHS attended" required/></p><br>

<p>Upload your Wassce Result: <input type="file" name="wassce"/></p><br>

<p>Upload your transcript: <input type="file" name="transcript"/></p><br>

</fieldset>

<p>Write a short note explaining why you need this scholarship.</p>
<textarea name="note" rows="10" cols="50" placeholder="Write a short note here."></textarea>

<br>

 <p><input id="button" type="submit" name="submit"/> 
</div>
</form>
<marquee>YOU'VE GOT ALL IT TAKES TO MAKE IT.  WE BELIEVE IN YOUR FUTURE!!! </marquee><br><br>

      </body>
</html>