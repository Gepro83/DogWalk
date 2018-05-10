<meta charset=utf-8>
<link rel=stylesheet href=style.css>

<html>
<head>
<center><h1>Walks</h1></center>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load("visualization", "1.1", {packages:["table"]});
	google.setOnLoadCallback(drawTable);

      	function drawTable(){

	data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('date', 'Date');
        data.addColumn('string', 'Start');
        data.addColumn('string', 'End');
        data.addColumn('string', 'Zone');
	data.addColumn('number', 'ZoneID');

        data.addRows([['Alf Alfons', new Date('2016-01-02'),'13:00', '14:00','Bock-Park',94514],['Alf Alfons', new Date('2016-05-02'),'13:00', '14:00','Bock-Park',94514],['Alf Alfons', new Date('2016-05-02'),'15:00', '17:00','Bock-Park',94514],['Alf Alfons', new Date('2016-01-04'),'09:10', '10:50','Prater - Wehlistraße-Ostbahn',94369],['Alf Alfons', new Date('2016-01-03'),'10:00', '13:34','Prater - Wehlistraße-Ostbahn',94369],['Alf Alfons', new Date('2016-01-04'),'02:03', '04:05','Neue Donau Süd (MA45)',94359],['Alf Alfons', new Date('2016-01-02'),'15:00', '23:00','Bock-Park',94514],['Alois Gruber', new Date('2016-01-03'),'08:00', '12:00','Prater - Wehlistraße-Ostbahn',94369],['Alois Gruber', new Date('2016-12-30'),'13:55', '15:00','Prater - Wehlistraße-Ostbahn',94369],['Franz Maier', new Date('2016-01-03'),'00:59', '23:00','Rudolf-Bednar-Park',94447],['Franz Maier', new Date('2016-01-04'),'15:00', '16:02','Prater - Wehlistraße-Ostbahn',94369],['Franz Maier', new Date('2016-01-06'),'05:00', '06:00','Prater - Wehlistraße-Ostbahn',94369],['Franz Maier', new Date('2016-01-12'),'12:00', '13:25','Venediger-Au-Park',94498],['Franz Maier', new Date('2016-05-02'),'15:00', '17:00','Bock-Park',94514],['Franz Maier', new Date('2016-01-02'),'05:00', '06:00','Bock-Park',94514],['Franz Maier', new Date('2016-05-02'),'06:00', '10:00','Bock-Park',94514],['Gabi Gran', new Date('2016-01-05'),'01:00', '02:00','Prater - Wehlistraße-Ostbahn',94369],['Gabi Gran', new Date('2016-01-03'),'22:03', '23:45','Prater - Wehlistraße-Ostbahn',94369],['Gabi Gran', new Date('2016-01-03'),'01:05', '02:05','Prater - Wehlistraße-Ostbahn',94369],['Gabi Gran', new Date('2016-01-04'),'12:00', '13:00','Prater - Wehlistraße-Ostbahn',94369],['Georg Prohaska', new Date('2016-01-03'),'12:03', '14:05','Kardinal-Nagl-Park',94434],['Georg Prohaska', new Date('2016-01-03'),'22:00', '22:30','Prater - Wehlistraße-Ostbahn',94369],['Georg Prohaska', new Date('2016-02-03'),'10:20', '11:00','Rudolf-Bednar-Park',94447],['Georg Prohaska', new Date('2016-01-03'),'10:00', '11:00','Prater - Wehlistraße-Ostbahn',94369],['Georg Prohaska', new Date('2016-01-06'),'05:05', '05:23','Prater - Wehlistraße-Ostbahn',94369],['Georg Prohaska', new Date('2016-01-04'),'10:00', '10:30','Prater - Wehlistraße-Ostbahn',94369],['Georg Prohaska', new Date('2016-01-04'),'14:00', '15:15','Prater - Wehlistraße-Ostbahn',94369],['Georg Prohaska', new Date('2016-01-05'),'01:00', '02:00','Prater - Wehlistraße-Ostbahn',94369],['Georg Prohaska', new Date('2016-01-03'),'18:00', '20:30','Kardinal-Nagl-Park',94434],['Georg Prohaska', new Date('2016-01-03'),'01:59', '02:14','Rudolf-Bednar-Park',94447],['Georg Prohaska', new Date('2016-05-02'),'01:01', '02:01','Bock-Park',94514],['Georg Prohaska', new Date('2016-05-02'),'03:04', '03:16','Bock-Park',94514],['John Doe', new Date('2016-01-04'),'15:00', '17:00','Prater - Wehlistraße-Ostbahn',94369], ]);

	var view = new google.visualization.DataView(data);
	view.hideColumns([5]);

        table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(view, { page:'enable' });

        google.visualization.events.addListener(table, 'select', selectWalk);

	}

	function selectWalk(){
		if(table.getSelection().length > 0){
			var selD = data.getValue(table.getSelection()[0].row, 1);
			var niceDate = new String(selD.getFullYear());

			if((selD.getMonth() + 1) < 10){
				niceDate += "-0" + new String(selD.getMonth() + 1);
			}else {
				niceDate += "-" + new String(selD.getMonth() + 1);
			}

			if(selD.getDate() < 10){
				niceDate += "-0" + selD.getDate();
			}else {
				niceDate += "-" + selD.getDate();
			}

	                document.getElementById("wDate").value = niceDate;
			document.getElementById("selZ").value = data.getValue(table.getSelection()[0].row, 5);
                	document.getElementById("selZN").value = data.getValue(table.getSelection()[0].row, 4);
		}else {
			document.getElementById("wDate").value = "";
                        document.getElementById("selZ").value = "";
                        document.getElementById("selZN").value = "";
		}
	}

	function checkSelection(){
		if(document.getElementById("selZN").value == "") return false;
	}
</script>
</head>
	<nav>
                <a href="http://balrog.wu.ac.at/~h0325904/project/dogs.php">Manage dogs</a>
		<a href="http://balrog.wu.ac.at/~h0325904/project/persons.php">Manage persons</a>
		<a href="http://balrog.wu.ac.at/~h0325904/project/selectInstance.php">Select zone</a>
        </nav>
<body>
<center><p><h3>Current walks</h3></p><div id="table_div"></div></center>
<form action="Walks.php" method="POST" onsubmit="return checkSelection()">
	<input type="hidden" name="selZoneID" id="selZ" value="">
	<input type="hidden" name="selZoneName" id="selZN" value="">
	<input type="hidden" name="wDate" id="wDate" value="">
	<p><center><input type="submit" value="Show selected Walk"></center></p>
</form>
<p>
<center>
<table>
<th colspan="2">Some statistics</th>
<tr>
	<td>Average duration per walk:</td><td style="text-align: right;">2h 15m 50s</td>
</tr>
<tr>
	<td>Average number of dogs per person:</td><td style="text-align: right;">1.17</td>
</tr>
<tr>
	<td>Average age of persons:</td><td style="text-align: right;">37 years</td>
</tr>
</table>
</center>
</p>
<br>
<center>Plot of the square meters of all dogzones
<br>
<img src="area.jpg">
</center>
</body>
</html>
