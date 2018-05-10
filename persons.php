<meta charset=utf-8>
<link rel=stylesheet href=style.css>



<html>
  <head>

<style>
	nav {
                line-height:30px;
                background-color:#eeeeee;
                padding:5px;
                text-align:center;
        }
        a {
                padding:5px;
                padding-right: 20px;
                text-decoration: none;
        }

        table {
                overflow: auto;
	}
        td {
                text-align: left;
                border-bottom: 1px solid #ddd;
        }
</style>


	<center><h1>Persons</h1></center>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable(){
        data = new google.visualization.DataTable();
        data.addColumn('string', 'Name', 'name');
        data.addColumn('string', 'Address', 'address');
	data.addColumn('string', 'Postal code', 'postalcode');
	data.addColumn('string', 'Gender', 'gender');
	data.addColumn('date', 'Birthday', 'birthday');
 	data.addColumn('string', 'Telephone', 'telnr');

        data.addRows([['Georg Prohaska','Wehlistraße 174/8','1220','M', new Date('1983-11-14'),'+4369910975766'],['Gabi Gran','Wehlistraße 174/8','1020','F', new Date('1986-04-04'),''],['Franz Maier','Baldstraße 3','1050','M', new Date('1993-03-02'),'+4368058922'],['Alf Alfons','','1234','M', new Date('1979-02-03'),''],['Alois Gruber','','1020','M', ,''],['John Doe','','1020','F', new Date('1950-04-03'),''], ]);

        table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data);

	google.visualization.events.addListener(table, 'select', selectPerson);

        }

	function selectPerson() {
		if(table.getSelection().length > 0){ document.getElementById("sel").value = data.getValue(table.getSelection()[0].row, 0); 
		} else {
			document.getElementById("sel").value = "";
		}
	}

	function CheckForm(){
		var postRegEx = /\b[0-9]{4}\b/;
		var failed = 0;

		document.getElementById("errBd").innerHTML = "";
		document.getElementById("errFn").innerHTML = "";
		document.getElementById("errAdd").innerHTML = "";
		document.getElementById("errSn").innerHTML = "";
		document.getElementById("errTel").innerHTML = "";
		document.getElementById("errPost").innerHTML = "";


		if(document.getElementById("bday").value != ""){
			var Bday = new Date(document.getElementById("bday").value);

			if(Bday == "Invalid Date"){
				document.getElementById("errBd").innerHTML = "Wrong format or date does not exist";
				failed = 1;
			}
		}

		if(document.getElementById("fname").value.length > 30){
			document.getElementById("errFn").innerHTML = "Too long (max 30 characters)";
			failed = 1;
		}

		if(document.getElementById("address").value.length > 30){
                        document.getElementById("errAdd").innerHTML = "Too long (max 80 characters)";
                        failed = 1;
                }

		if(document.getElementById("sname").value.length > 30){
                        document.getElementById("errSn").innerHTML = "Too long (max 40 characters)";
                        failed = 1;
                }

		if(document.getElementById("telnr").value.length > 20){
                        document.getElementById("errTel").innerHTML = "Too long (max 20 characters)";
                        failed = 1;
                }

		if(document.getElementById("postalcode").value.match(postRegEx) == null){
                        document.getElementById("errPost").innerHTML = "Wrong format - must be 4 digit number";
                        failed = 1;
                }

		if(failed == 0) return true;

		return false;
	}


    </script>

  </head>

	<nav>
                <a href="http://balrog.wu.ac.at/~h0325904/project/dogs.php">Manage dogs</a>
		<a href="http://balrog.wu.ac.at/~h0325904/project/selectInstance.php">Select zone</a>
		<a href="http://balrog.wu.ac.at/~h0325904/project/allWalks.php">Walks</a>
        </nav>

  <body>
    <center><p><h3>Current persons</h3></p><div id="table_div"></div></center>
	 <form method="POST">
		<input type="hidden" name="selectedPerson" id = "sel" value ="">
                <center><input type="submit" onClick="return confDel()" value="Delete selected"></center>
        </form>

	<script>
	 function confDel(){
                if(table.getSelection().length > 0) { return confirm('Are you sure you want to delete ' + data.getValue(table.getSelection()[0].row, 0) + '? All dogs owned by that person will be deleted!');
                } else {
                        return false;
                }
	}
	</script>

	<center>
	<p><h3></h3></p>
	<form method="POST" onsubmit="return CheckForm()">
	<table>
	<tr><th colspan=3>Add Person</th>
	<tr><td>First Name:</td><td><input type="text" id="fname" name="fname"></td><td id="errFn" style="color:red;"></td></tr>
	<tr><td>Surname:</td><td> <input type="text" id="sname" name="sname" required></td><td id="errSn" style="color:red;"></td></tr>
	<tr><td>Address:</td><td> <input type="text" id="address" name="address"></td><td id="errAdd" style="color:red;"></td></tr>
	<tr><td>Postal code:</td><td> <input type="text"  id="postalcode" name="postalcode" required></td><td id="errPost" style="color:red;"></td></tr>
	<tr><td>Gender:</td><td>  <select name="gender"> <option value="F">female</option><option value="M">male</option></select></td></tr>
	<tr><td>Birthday (yyyy-mm-dd):</td><td>  <input type="date" name="bday" id="bday"></td><td id="errBd" style="color:red;"></td></tr>
	<tr><td>Telephone:</td><td>  <input type="tel" id="telnr" name="telnr"></td><td id="errTel" style="color:red;"></td></tr>
	<tr><td></td><td><input type="submit" value="Add person"></td>
	</table>
	</form>
	</center>
  </body>
</html>

