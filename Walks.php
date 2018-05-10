<meta charset=utf-8>
<link rel=stylesheet href=style.css>


<html>
<head>
<title>Walks </title>
<style>
	table {
		overflow: auto;
	}
	td {
		text-align: left;
		border-bottom: 1px solid #ddd;
	}
</style>
<center><h1 id="header1">No zone selected</h1>
<center><h3>on Thursday 14th January 2016<br>
</h3>
</center>
</head>
<nav>
	<a href="http://balrog.wu.ac.at/~h0325904/project/persons.php">Manage persons</a>
	<a href="http://balrog.wu.ac.at/~h0325904/project/dogs.php">Manage dogs</a>
	<a href="http://balrog.wu.ac.at/~h0325904/project/selectInstance.php">Select zone</a>
	<a href="http://balrog.wu.ac.at/~h0325904/project/allWalks.php">Walks</a>

</nav>
<body>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script>

	google.load("visualization", "1.1", {packages:["timeline"]});
        google.setOnLoadCallback(drawTimeline);

	function drawTimeline(){

	if(document.getElementById("header1").innerHTML == "No zone selected") document.getElementById("addForm").style.display = "none";

	myTimeline = new google.visualization.Timeline(document.getElementById('timeline'));
        timeDataTable = new google.visualization.DataTable();

        timeDataTable.addColumn({type: 'string', id: 'Person' });
	timeDataTable.addColumn({type: 'string', id: 'Dog' });
        timeDataTable.addColumn({type: 'date', id: 'Start' });
        timeDataTable.addColumn({type: 'date', id: 'End' });

	var rowsEmpty = "";
	
	if(rowsEmpty === "y") document.getElementById("p1").innerHTML = "There are no walks scheduled for that selection yet!<br><br>";

	PersonSelected();
	}

	function selectWalk(){
		if(myTimeline.getSelection().length > 0){ 
			document.getElementById("selWO").value = timeDataTable.getValue(myTimeline.getSelection()[0].row, 0);
			document.getElementById("selWSt").value = timeDataTable.getValue(myTimeline.getSelection()[0].row, 2).getHours() + ":" + timeDataTable.getValue(myTimeline.getSelection()[0].row, 2).getMinutes() ;
                } else {
			document.getElementById("selWO").value = "";
			document.getElementById("selWSt").value = "";
                }
	}

	function PersonSelected(){
		var selectedPerson = document.getElementById("selP").value;
		var dogsCell = document.getElementById("dogs");
		var OwnersWithDogs = [{owner:'22', dogname:'Niky', did:24},{owner:'27', dogname:'Nike', did:26},{owner:'28', dogname:'Derb', did:28},{owner:'33', dogname:'Bal', did:29},{owner:'28', dogname:'Fluffy', did:36},{owner:'36', dogname:'Rex', did:37},{owner:'45', dogname:'Beethoven', did:38},];

		dogsCell.innerHTML = "";
		for(i = 0; i < OwnersWithDogs.length; i++){
			if(OwnersWithDogs[i]["owner"] == selectedPerson){
				dogsCell.innerHTML += "<input type='checkbox' name='" + OwnersWithDogs[i]["dogname"] + "' value='" + OwnersWithDogs[i]["did"] + "'>" + OwnersWithDogs[i]["dogname"] + "<br>";
			}
		}
	}

	function checkTime(){
		var from = document.forms["addWalk"]["from"].value;
		var to = document.forms["addWalk"]["to"].value;
		var timeRegEx = /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
		var failed = 0;


		document.getElementById("errFrom").innerHTML = "";
		document.getElementById("errTo").innerHTML = "";

		if(from.match(timeRegEx) == null) { document.getElementById("errFrom").innerHTML = "Wrong format!"; failed = 1; }
		if(to.match(timeRegEx) == null) { document.getElementById("errTo").innerHTML = "Wrong format!"; failed = 1; }

		if(failed == 1) return false;

		var fromMinutes = Number(from.substring(from.search(":") + 1));
		var fromHours = Number(from.slice(0, from.search(":")));
		var toMinutes = Number(to.substring(to.search(":") + 1));
		var toHours = Number(to.slice(0, to.search(":")));

		if((fromHours * 60 + fromMinutes) >= (toHours * 60 + toMinutes)){ 
			document.getElementById("errFrom").innerHTML = "Error:";
			document.getElementById("errTo").innerHTML = '"From" has to be before "To"';
			return false;
		}

		return true;
	}

	</script>

	<br>
	<div id="timeline"></div>
	 <form method="POST">
                <input type="hidden" name="selWO" id = "selWO" value ="">
		<input type="hidden" name="selWSt" id = "selWSt" value ="">
		<input type="hidden" name="selZoneID" value="">
                <input type="hidden" name="selZoneName" value="">
                <input type="hidden" name="wDate" value="">
                <center><input type="submit" value="Delete selected"></center>
        </form>


	<center><p><h3></h3></p><center>

	<center><div id="p1"></div>

	<form name ="addWalk" id="addForm" action="Walks.php" method="POST" onsubmit="return checkTime()">
	<table id="addTable">
	<tr>
		<th colspan="3">Add walk</th>
	</tr>
	<tr>
		<td>Select person:</td><td><select id ="selP" name ="owner" onchange="PersonSelected()"><option value='22'>Georg Prohaska</option>
<option value='27'>Gabi Gran</option>
<option value='28'>Franz Maier</option>
<option value='33'>Alf Alfons</option>
<option value='36'>Alois Gruber</option>
<option value='45'>John Doe</option>
</select></td>
	</tr>
	<tr>
		<td>Select dog(s):</td><td id="dogs"></td>
	</tr>
	<tr>
		<td>From (HH:MM):</td><td><center><input type="time" name="from" required></center></td><td id="errFrom" style="color:red;"></td>
	</tr>
	<tr>
		<td>To (HH:MM):</td><td><center><input type="time" name="to" required></center></td><td id="errTo" style="color:red;"></td>
	</tr>
	<tr>
		<td colspan="2"><center><input type="submit" value="Add walk"></center></td>
	</tr>
	</table>

		<input type="hidden" name="selZoneID" value="">
		<input type="hidden" name="selZoneName" value="">
		<input type="hidden" name="wDate" value="">
	</form>
</center>

</body>
</html>



