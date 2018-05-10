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


        <center><h1>Dogs</h1></center>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable(){
        data = new google.visualization.DataTable();
        data.addColumn('string', 'Name', 'name');
        data.addColumn('string', 'Race', 'race');
        data.addColumn('string', 'Gender', 'gender');
        data.addColumn('boolean', 'Desexed', 'desexed');
        data.addColumn('string', 'Owner', 'owner');

        data.addRows([['Derb','Husk','M',true,'Franz Maier'],['Fluffy','Shepperd','F',true,'Franz Maier'],['Bal','Rot','M',true,'Alf Alfons'],['Beethoven','Berhardiner','M',false,'John Doe'],['Rex','shepherd','M',false,'Alois Gruber'],['Nike','Border','F',false,'Gabi Gran'],['Niky','Dfcvasdf','M',false,'Georg Prohaska'], ]);

        table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data);

        google.visualization.events.addListener(table, 'select', selectDog);

        }

        function selectDog() {
                if(table.getSelection().length > 0){
			document.getElementById("selDog").value = data.getValue(table.getSelection()[0].row, 0);
			document.getElementById("selOwner").value = data.getValue(table.getSelection()[0].row, 4);

                } else {
                        document.getElementById("selDog").value = "";
			document.getElementById("selOwner").value = "";
                }
        }


    </script>

  </head>

        <nav>
                <a href="http://balrog.wu.ac.at/~h0325904/project/persons.php">Manage persons</a>
		<a href="http://balrog.wu.ac.at/~h0325904/project/selectInstance.php">Select zone</a>
		<a href="http://balrog.wu.ac.at/~h0325904/project/allWalks.php">Walks</a>
        </nav>

  <body>
    <center><p><h3>Current dogs</h3></p><div id="table_div"></div></center>
         <form method="POST">
                <input type="hidden" name="selectedDog" id = "selDog" value = "">
		<input type="hidden" name="selectedOwner" id = "selOwner" value = "">
                <center><input type="submit" onClick="return confDel()" value="Delete selected"></center>
        </form>

        <script>
         function confDel(){
                if(table.getSelection().length > 0) { return confirm('Are you sure you want to delete ' + data.getValue(table.getSelection()[0].row, 0) + '?');
                } else {
                        return false;
                }
        }

	function CheckForm(){
		var failed = 0;

		if(document.getElementById("name").value.length > 30){
                        document.getElementById("errName").innerHTML = "Too long (max 30 characters)";
                        failed = 1;
                }

		if(document.getElementById("race").value.length > 40){
                        document.getElementById("errRace").innerHTML = "Too long (max 40 characters)";
                        failed = 1;
                }
		if(failed == 0) return true;
		return false;

	}
        </script>


	<center>
	<p><h3></h3></p>
        <form method="POST" onsubmit="return CheckForm()">
        <table>
	<tr><th colspan="2">Add dog</th></tr>
        <tr><td>Name:</td><td><input type="text" id="name" name="name" required></td><td id="errName" style="color:red;"></td></tr>
        <tr><td>Race:</td><td> <input type="text" id="race" name="race"></td><td id="errRace" style="color:red;"></td></tr>
        <tr><td>Gender:</td><td>  <select required name="gender"> <option value="F" selected>female</option><option value="M">male</option></select></td></tr>
	<tr><td>Desexed:</td><td>  <select required name="desexed"> <option value="true" selected>yes</option><option value="false">no</option></select></td></tr>
	<tr><td>Owner:</td><td><select required name="owner"><option value='22'>Georg Prohaska</option>
<option value='27'>Gabi Gran</option>
<option value='28'>Franz Maier</option>
<option value='33'>Alf Alfons</option>
<option value='36'>Alois Gruber</option>
<option value='45'>John Doe</option>
</select></td></tr>
        <tr><td></td><td><input type="submit" value="Add Dog"></td>
        </table>
        </form>
	</center>

  </body>
</html>


