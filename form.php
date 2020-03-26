
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>
		<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/menu.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<script>

			function dateValid() {
			 "use strict";
			  var dateValid = false;

				var dateVisited = document.getElementById("dateOfVisit").value;
				console.log("User Entered: " + dateVisited);

				var todaysDate = new Date();
				var dd = todaysDate.getDate();
				var mm = todaysDate.getMonth() + 1;
				var yyyy = todaysDate.getFullYear();

				if(dd < 10){
					dd = "0" + dd;
				}
				if(mm < 10){
					mm = "0" + mm;
				}
				var td = "" + yyyy + "-" + mm + "-" + dd;
				console.log("Todays Date:  " + td);

				if(dateVisited == ""){
					document.getElementById("dateOfVisit").style.borderColor="red";
					document.getElementById("dateOfVisit").style.backgroundColor='pink';
					dateValid = false;
				}else if(dateVisited < td){
					document.getElementById("dateOfVisit").style = null;
					dateValid = true;
					document.getElementById("errorMessage").innerHTML = "";
				}else{
					document.getElementById("dateOfVisit").style.borderColor="red";
					document.getElementById("dateOfVisit").style.backgroundColor='pink';
					dateValid = false;
					document.getElementById("errorMessage").innerHTML = "**Date must be before today's date**";
					document.getElementById("errorMessage").style.backgroundColor = "pink";
				}


				console.log("Date OK?: " + dateValid);
		    return (dateValid);
			}

			//  function to validate visitor name
			function nameValid()
			     {
			    "use strict";
			    var nameValid = false;

			    var fullName = document.getElementById("fullname").value;
			   //alert(fullName);
			    if(fullName == "")
			    {
				       document.getElementById("fullname").style.borderColor="red";
				       document.getElementById("fullname").style.backgroundColor = 'pink';
				       nameValid = false;
			    }
			    else  {
			            document.getElementById("fullname").style = null;
			            nameValid = true;
			       }// end of else path

					console.log("The user entered: " + fullName);
					console.log("Checking if name is valid: " + nameValid);
			    return (nameValid);
			}//end of function to check if name was changed

			//  function to validate stay length
			function stayLengthValid()
			     {
			    "use strict";
			    var daysValid = false;

			    var stayLength = document.getElementById("staylength").value;
			   //alert(fullName);
			    if(stayLength == "")
			    {
				       document.getElementById("staylength").style.borderColor="red";
				       document.getElementById("staylength").style.backgroundColor = 'pink';
				       daysValid = false;
			    }else if(stayLength <= 0){
						document.getElementById("staylength").style.borderColor="red";
						document.getElementById("staylength").style.backgroundColor = 'pink';
						daysValid = false;
						document.getElementById("errorForStayLength").innerHTML = "***Stay length CAN NOT be less than or equal to 0!***";
						document.getElementById("errorForStayLength").style.backgroundColor = "pink";
					}
			    else  {
			            document.getElementById("staylength").style = null;
			            daysValid = true;
									document.getElementById("errorForStayLength").innerHTML = "";
									document.getElementById("errorForStayLength").style = null;
			       }// end of else path

					console.log("The user entered: " + stayLength);
					console.log("Checking if stay length is valid: " + daysValid);
			    return (daysValid);
			}//end of function to check if stay length was changed



			function validRadioButtons(){
				"use strict"
				var isChecked = false;
				var arrLength = document.getElementsByName("native").length;
				var choices = new Array();

				for(var i = 0; i < arrLength; i++){
					if(document.getElementsByName("native")[i].checked){
						choices.push(document.getElementsByName("native")[i].value);
				  }

				}

				if(choices.length > 0){
					document.getElementById("areYouNative").style = null;
					isChecked=true;
				}else{
					document.getElementById("areYouNative").style.borderColor="red";
					document.getElementById("areYouNative").style.backgroundColor = 'pink';
					isChecked=false;
				}
				console.log("Checking if the radio buttons are checked is valid: " + isChecked);
				return(isChecked);
			}

			 function validateForm()
			 	  {
			 	  "use strict";

					var checkDate =  dateValid();
					var nameOK =  nameValid();
					var checkRadioButtons = validRadioButtons();
					var stayLengthOK = stayLengthValid();

					console.log("In the JavaScript function validateForm()");
					console.log("testing in validateForm validRadioButtons() "+ checkRadioButtons +" \n");
					console.log("testing in validateForm nameValid() " + nameOK +" \n");
					console.log("testing in validateForm dateValid() " + checkDate +" \n");
					console.log("testing in validateForm stayLengthValid() " + stayLengthOK +" \n");


			    return (checkRadioButtons &&  nameOK && checkDate && stayLengthOK);
			   }// end of validate Frorm
			 </script>

</head>

<body id="main">
	<div id="box">
    <div id="mySidenav" class="sidenav">
  	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  			<ul class="nav">
  		  	<li><a class="nav" href="index.php">Home</a></li>
  		  	<li><a class="nav" href="activities.php">Activites</a></li>
  		  	<li><a class="nav" href="food.php">Food</a></li>
  		  	<li><a class="nav" href="travel.php">Travel</a></li>
  				<li><a class="nav" href="nature.php">Nature Spots</a></li>
          <li><a class="nav" href="sightseeing.php">Sighteeing</a></li>
          <li><a class="nav" id="active" href="form.php">Feedback Form</a></li>
          <li><a class="nav" href="about.php">About</a></li>
          <li><a class="nav" href="grading.php">Grading Rubric</a></li>
  				<li><a class="nav" href="reference.php">References</a></li>
  		  </ul>
  	</div>
		<div id="townLogo">
				<img class="logo" src="images/nyc.png" alt="New York City Logo" title="New York City Logo">
		</div>
    <span id="span" class="sticky" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  </div>

  <h1 id="visitHeader"> Tell Us About Your Visit! </h1>

  <!-- <form action="d" method="POST" onsubmit="return validateForm();"> -->
	<!-- process.php is the action -->
	<form action = "process.php"  method = "POST"
					 onsubmit="return validateForm();">

<div>
  Enter your name<span class="asteric"> * </span>:
    <input type="text" id="fullname" name="fullname" placeholder="Required Entry">
    <br>
</div>

    Date of Visit<span class="asteric"> * </span>:
      <input type="date" id="dateOfVisit" name="dateOfVisit">
			<p id="errorMessage"></p>
    <br>

		How many days did you stay?<span class="asteric"> * </span>:
	    <input type="number" id="staylength" name="staylength" placeholder="Required Entry">
			<p id="errorForStayLength"></p>
	    <br>



    <p id="areYouNative">Are you a Native of New York? <span class="asteric"> * </span>:</p>


    <input id="yes" type="radio" name="native" value="yes"> Yes<br>
    <input id="no" type="radio" name="native" value="no"> No<br>

		<br>
		<fieldset>
    What was your Favorite Place?:<br>
    <input type="checkbox" name="timesSquare" value="Times Square"> Times Square<br>
    <input type="checkbox" name="theVessel" value="The Vessel"> The Vessel<br>
    <input type="checkbox" name="centralPark" value="Central Park"> Central Park<br>
    <input type="checkbox" name="sol" value="Statue of Liberty"> Statue of Liberty<br>
	</fieldset>
   <br>

<div class="slidecontainer">
  <p>Rate Your Experience:</p>
  0<input type="range" name="rating" min="0" max="10" value="5" step="1" list="dataList">10
	<datalist id="dataList">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	</datalist>

</div>

<div id="button">
    <input type = "submit"  >
</div>


</form>

<footer>
	<a href= "https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fform.html"  target="_blank"><img class="icon" src="images/w3cHTML.png" alt="HTML Validator"></a>
	<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fcss%2Fstyle.css"  target="_blank"><img class="icon" src="images/w3cCSS.png" alt="CSS Validator"></a>
	<?php
		echo "<br>";
		echo "Content last changed: ".date("F d Y H:i:s.", filemtime("form.php"));
	?>
</footer>

</body>
</html>
