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
		width: 500px;
		columnWidth: 250px;
		table-layout: fixed;
	}
	td {
		text-align: left;
		border-bottom: 1px solid #ddd;
	}
	</style>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["map"]});
      google.setOnLoadCallback(drawMap);

      function drawMap(){
        data = new google.visualization.DataTable();
        data.addColumn('number', 'Lat', 'Lat');
        data.addColumn('number', 'Long', 'Long');
	data.addColumn('string', 'Name', 'Name');
	data.addColumn('number', 'Area');
	data.addColumn('string', 'Enclosure');
	data.addColumn('number', 'ID');


        data.addRows([[48.2777516252551,16.423841546464118,'Parkanlage Pfendlergasse',965,'Stabilgitterzaun 1m 2 Schwingflügeltüren 1 Tor',94379],[48.1878265697868,16.30907558375052,'Hadikpark',17988,'Stabilgitterzaun 1m 3 Schwingflügeltüren 3 Tore, Wienflußgeländer',94380],[48.23445176587006,16.337528286149976,'Türkenschanzpark (Gregor-Mendel-Straße)',1374,'Stabilgitterzaun 1m',94399],[48.234261061555955,16.329932600967318,'Türkenschanzpark (Hasenauerstraße)',1844,'Stabilgitterzaun 1m',94400],[48.232089985957785,16.438630553131016,'Lagerwiese Rehlacke',4355,'eingezäunt',94401],[48.170513054747694,16.37801620270419,'Antonspark',957,'keine Einfriedung',94402],[48.170557349713185,16.377484042838415,'Antonspark',730,'keine Einfriedung',94403],[48.17893434917446,16.375202309746474,'Parkanlage Keplerplatz',297,'Stabilgitterzaun mit 2 Toren',94404],[48.15673205150993,16.462224595007253,'Hofgartel',1961,'Gitterzaun, Holzzaun 1-5m',94405],[48.18936286538523,16.333203478135527,'Parkanlage Kranzgasse',635,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94406],[48.24870033191785,16.37816962216694,'Schmetterlingspark',385,'Stabilgitterzaun 1m',94407],[48.249356084382875,16.4375848016339,'Parkanlage Schrickgasse',798,'Stabilgitterzaun 1m 2 Schwingflügeltüren 1 Tor',94408],[48.16998133664308,16.303685927167628,'Parkanlage Fasangartengasse',896,'Stabilgitterzaun 1m 2 Schwingflügeltüren, 1 Tor',94409],[48.220273007670365,16.480519740064,'Grünanlage Aspernstraße',323,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94410],[48.239533260917085,16.333211594070942,'Hugo-Wolf-Park',8169,'keine Einfriedung',94411],[48.196192351508174,16.30197257630076,'Matzner-Park',5584,'Stabilgitterzaun 1m',94412],[48.19844413687685,16.330510472652744,'Reithofferpark',671,'Stabilgitterzaun 1m 2 Schwingflügeltüren 2 Tore',94413],[48.212795604992685,16.339829977793936,'Hernalser Gürtel 2',672,'Stabilgitterzaun 1m',94414],[48.169477439596214,16.428878104344506,'Parkanlage Blériotgasse',1850,'Stabilgitterzaun 1m',94415],[48.27239862421664,16.4477655571944,'Parkanlage Gitlbauergasse',1983,'Stabilgitterzaun 1m',94416],[48.28713841730587,16.45001369321029,'Parkanlage Illgasse',1193,'Stabilgitterzaun 1m',94417],[48.194968543813346,16.28542464820289,'Gustav-Klimt-Park',179,'Stabilgitterzaun 1m 1 Schwingflügeltür, 1 Tor',94377],[48.21325792599666,16.47687679319577,'Parkanlage Asperner Wies´n',1313,'Stabilgitterzaun 1m',94378],[48.172482121372674,16.339520021364333,'Unter-Meidlinger Straße',2058,'keine Angabe',94381],[48.15193368185283,16.287017099465917,'Parkanlage Pölleritzergasse',4191,'Stabilgitterzaun 1m , Chestnutzaun',94382],[48.215646704953485,16.41687229797557,'Parkanlage Offenbachgasse',1608,'Stabilgitterzaun 1m',94383],[48.21462365349107,16.414924137720043,'Parkanlage Engerthstraße',798,'Stabilgitterzaun 1m',94384],[48.171142002628514,16.414084048030844,'Braunhuberpark',423,'Stabilgitterzaun 1m',94370],[48.15309403298041,16.291500448717215,'Parkanlage Endemanngasse',496,'Stabilgitterzaun 1m 1 Schwingflügeltür, 1 Tor',94371],[48.24117650757253,16.44219011475951,'Dolfi-Gruber-Weg',1228,'Stabilgitterzaun 1m 2 Schwingflügeltüren, 1 Tor',94372],[48.2386922026101,16.43814591988038,'Parkanlage Donaustadtstraße',749,'Stabilgitterzaun 1m',94373],[48.23533193031272,16.371006539907228,'Hugo-Gottschlich-Park',684,'Stabilgitterzaun 1m',94374],[48.13962542065117,16.278193845993126,'Parkanlage Theophil-Hansen-Gasse',5260,'Stabilgitterzaun 1m 4 Schwingflügeltüren 2 Tore',94375],[48.2063469395582,16.314334999738787,'Rohrauerpark',343,'Stabilgitterzaun 1m',94376],[48.19618903316883,16.267895069906498,'Parkanlage Cossmanngasse',2058,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94385],[48.13102696247046,16.31268411632047,'Parkanlage Siedlung Wienerflur ',1239,'Stabilgitterzaun 1m',94386],[48.13680111839953,16.276510828821,'Herbert-Mayr-Park',2676,'Stabilgitterzaun 1m',94387],[48.14581603021973,16.28244347435851,'Fridtjof-Nansen-Park',1610,'Stabilgitterzaun 1m 3 Schwingflügeltüren',94388],[48.19693835567791,16.319141233479005,'Forschneritschpark',651,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94458],[48.18147600546866,16.35566068370872,'Parkanlage Leopold-Rister-Gasse',354,'Stabilgitterzaun 1m',94460],[48.184821509247364,16.362598610733514,'Klieberpark',101,'Stabilgitterzaun 1m',94461],[48.18284995811661,16.350519129849587,'Ernst-Lichtblau-Park',238,'keine Einfriedung',94459],[48.18801109446679,16.3634766245338,'Rudolf-Sallinger-Park',182,'Stabilgitterzaun 1m',94462],[48.18745617065349,16.3548115257786,'Bacherpark',354,'Metallzaun 1m, Metallzaun 0,6 m',94463],[48.19479126965552,16.354539469365474,'Ernst-Arnold-Park',364,'keine Einfriedung',94464],[48.186849305175606,16.343241976401366,'Parkanlage Mittelzone (Margaretengürtel)',463,'Stabilgitterzaun 1m',94465],[48.18079424256957,16.348653559573453,'Parkanlage Mittelzone (Gaudenzdorfer Gürtel)',2933,'Stabilgitterzaun 1m',94466],[48.20566255451668,16.356454532884086,'Weghuberpark',239,'Stabilgitterzaun 1m',94467],[48.21241061281588,16.351119661171943,'Schönbornpark',1117,'Stabilgitterzaun 2 m',94468],[48.211196012004116,16.34475330337862,'Hamerlingpark',319,'Stabilgitterzaun 1m, Holzzaun 1m',94469],[48.22153190492011,16.353904793132696,'Arne-Carlsson-Park',623,'Stabilgitterzaun 1m',94470],[48.22631064141469,16.358362617988217,'Lichtentalerpark',701,'Stabilgitterzaun 1m',94471],[48.18992310198684,16.328444788535204,'Dadlerpark',1874,'Stabilgitterzaun 1 m, Maschendrahtzaun 2 m, 1 Schwingflügeltür',94472],[48.18812639449547,16.31650228653397,'Auer-Welsbach-Park',10064,'Stahlpollerabgrenzung 1m',94473],[48.20401838101965,16.332603961242075,'Vogelweidpark',2059,'Stabilgitterzaun 1m',94474],[48.17885265609874,16.334596519069702,'Parkanlage Vierthalergasse',707,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94475],[48.1568327241765,16.32786936438963,'Parkanlage Lichtensterngasse',9368,'keine Einfriedung',94476],[48.17856409179806,16.31668145052767,'Parkanlage Steinweisweg',922,'Stabilgitterzaun 1m 3 Schwingflügeltüren',94477],[48.21564196717142,16.374740970505723,'Wilhelm-Kienzl-Park',3653,'keine Einfriedung',94478],[48.15896971948552,16.371975044223984,'Parkanlage Heuberggstätten',136406,'keine Einfriedung',94479],[48.176685342001214,16.425635678789114,'Parkanlage Lautenschlägergasse',997,'Stabilgitterzaun 1m und 1,6m',94480],[48.16886143479013,16.418208705743957,'Parkanlage Haugerstraße',399,'Stabilgitterzaun 1m und 4m',94481],[48.22259889286566,16.499098451628047,'Madame-d&#39; Ora-Park',1000,'Stabilgitterzaun 1m',94482],[48.22578125397978,16.509930526856238,'Seepark',2942,'Stabilgitterzaun 1m, Chestnutzaun 90cm',94483],[48.13837026861807,16.291122665015706,'Parkanlage Gaulgasse',6522,'Stabilgitterzaun 1m 3 Schwingflügeltüren',94484],[48.19808876436009,16.361616975041162,'Alfred-Grünwald-Park',656,'Stabilgitterzaun 1m',94485],[48.21010140956497,16.327418852419974,'Richard-Wagner-Park',587,'Metallzaun 0,5 m, Stabilgitterzaun 1,6 m',94486],[48.25827044415628,16.442910986282488,'Ingeborg-Bachmann-Park',420,'Stabilgitterzaun 1m',94487],[48.24445631769474,16.373538922128176,'Forsthauspark',2392,'keine Einfriedung',94488],[48.23893031841095,16.384276668101354,'Allerheiligenpark',2272,'Stabilgitterzaun 1m',94489],[48.16774461297077,16.383976224491263,'Alfred-Böhm-Park',2674,'Stabilgitterzaun 1m',94490],[48.24898085114457,16.399586796235873,'Parkanlage Angeliwiese',14552,'Stabilgitterzaun 1m',94491],[48.26851261838736,16.382731172295937,'Parkanlage Überfuhrstraße  ',2419,'Stabilgitterzaun 1m',94492],[48.197945100213865,16.352246823966045,'Esterházypark',433,'Stabilgitterzaun 1m',94493],[48.1819868268459,16.327268321457154,'Theresienbadpark',477,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94494],[48.15233337749841,16.34375761676781,'Draschepark',50008,'keine Angabe',94495],[48.20214476982344,16.24955765326228,'Ferdinand-Wolf-Park',2641,'keine Angabe',94496],[48.14590010433852,16.252454502409854,'Hundeauslauf Anton-Krieger-Gasse (MA49)',6320,'keine Angabe',94497],[48.219367566013844,16.39420197834907,'Venediger-Au-Park',1803,'Stabilgitterzaun 1m',94498],[48.179507803926,16.378518227419477,'Humboldtpark',230,'Chestnutzaun, Stabilgitter, Sezzessionsgitter',94499],[48.243386815342596,16.361002124202898,'Wertheimsteinpark',1485,'keine Angabe',94500],[48.206185195374744,16.361624979730077,'Heldenplatz',904,'Stabilgitterzaun 1m',94501],[48.215115851095995,16.39499156296016,'Prater - Laufbergerwiese',1020,'Stabilgitterzaun 1,2 m',94502],[48.15146397630357,16.45560571444649,'keine Angabe',1551,'Wildzaun',94503],[48.248209598212355,16.413105539327827,'Parkanlage Mühlschüttel',402,'Stabilgitter 1m',94504],[48.167811133624575,16.33821186644649,'keine Angabe',1788,'keine Angabe',94505],[48.14106772542535,16.34675985830713,'keine Angabe',1900,'keine Angabe',94506],[48.122382808918175,16.307733782660012,'keine Angabe',3057,'keine Angabe',94507],[48.18137558278605,16.339047264932848,'Steinbauerpark',507,'Stabilgitterzaun 1m und 4m, 1 Schwingflügeltür, 1 Tor',94508],[48.162696626048465,16.355517938196726,'keine Angabe',8736,'keine Angabe',94509],[48.2486839580513,16.4922353074964,'Feuerwehrspielplatz',953,'Stabilgitterzaun 1m',94510],[48.20154040576865,16.51432971460629,'keine Angabe',3346,'keine Angabe',94511],[48.25500469004491,16.43739362177249,'keine Angabe',1804,'keine Angabe',94512],[48.1959577037493,16.40397657033724,'Bock-Park',228,'Stabilgitterzaun 1,1m 2 Schwingflügeltüren',94513],[48.19591469416864,16.404117332281803,'Bock-Park',0,'Stabilgitterzaun 1,1m 2 Schwingflügeltüren',94514],[48.22760640508256,16.241354613277686,'keine Angabe',25443,'keine Angabe',94515],[48.246131122446926,16.27861429941863,'keine Angabe',79701,'keine Angabe',94516],[48.26126379641527,16.317580714163245,'keine Angabe',12940,'keine Angabe',94517],[48.21639208992412,16.450752881125904,'keine Angabe',4283,'keine Angabe',94518],[48.17944840557979,16.38242795375144,'Helmut-Zilk-Park',457,'Chestnutzaun 1,20m',94520],[48.22461049584755,16.379033336202582,'keine Angabe',2002,'Maschendrahtzaun 1,7m',94521],[48.22641859454977,16.371045901198084,'keine Angabe',1161,'Maschendrahtzaun 1,7m, Mauer',94522],[48.26064608947865,16.430092033113898,'Theresa-Tauscher-Park',1345,'66lfm Stabilgittermattenzaun,78,5lfm Maschendrahtzaun ',94523],[48.203918823475995,16.411701500085726,'Prater - Rustenschacher',228924,'keine Angabe',94524],[48.15286745290936,16.38690495825825,'Volkspark Laaerberg',772,'Stabilgitterzaun 1,2m',94525],[48.17271845249137,16.370743347210716,'Arthaberpark',499,'Stabilgitterzaun 1,5m',94526],[48.16732461574554,16.415536781916458,'Luise-Montag-Park',1772,'Stabilgitterzaun 1m',94527],[48.17129711298947,16.40907222246861,'Herderpark',2073,'Stabilgitterzaun 1,2m',94528],[48.154543829230946,16.469972326818404,'Parkanlage Flammweg',1928,'Stabilgitterzaun 1m',94418],[48.181435949927916,16.41306228465547,'Hyblerpark',342,'Stabilgitterzaun 1m',94419],[48.19960899118692,16.373036456882485,'Resselpark',707,'Stabilgitterzaun 1m, 2 Schwingflügeltüren',94420],[48.14037739760119,16.31594448950611,'PaN-Park',658,'Stabilgitterzaun 1m',94519],[48.207385078762194,16.338023022798843,'Lerchenfelder Gürtel 30-32',463,'Stabilgitterzaun 1m',94421],[48.181136956136214,16.3669999513533,'Waldmüllerpark',5195,'Secessionsgitter 1m',94422],[48.188923538490855,16.339453848720424,'Gumpendorfer Gürtel 2',209,'Stabilgitterzaun 1m 2 Schwingflügeltüren 1 Tor',94423],[48.23970429052522,16.38215864010609,'Parkanlage Durchlaufstraße',1780,'keine Einfriedung',94424],[48.23399857453538,16.38717974996629,'Mortarapark',460,'Stabilgitterzaun 1,6 m 2 Schwingflügeltüren',94425],[48.24451888464442,16.38033931250056,'Parkanlage Friedrich-Engels-Platz',328,'Stabilgitterzaun 1m',94426],[48.21372842242081,16.37801585269588,'Manes-Sperber-Park',320,'Stabilgitterzaun 1,2 m',94427],[48.19121505785798,16.405436919865878,'Parkanlage Baumgasse',1395,'Stabilgitterzaun 1m, Gitterzaun 3 m',94428],[48.208453295792786,16.396007228455225,'Treppelweg - Weißgerberlände (Höhe Hunderwasser-Haus)',550,'Stabilgitterzaun 1m',94429],[48.20622038099947,16.39670377866858,'Treppelweg - Weißgerberlände (Rotundenbrücke)',435,'Stabilgitterzaun 1m',94430],[48.21524548436157,16.373103479470224,'Franz-Josefs-Kai',1994,'Stabilgitterzaun 1m',94431],[48.16037488671999,16.268766103620198,'Napoleonwald',6000,'keine Einfriedung',94432],[48.19852874689739,16.390564853594903,'Arenbergpark',1157,'Stabilgitterzaun 1m',94433],[48.197481720977706,16.400974523529218,'Kardinal-Nagl-Park',597,'Stabilgitterzaun 1m',94434],[48.19061548805562,16.39943799687828,'Waisenhauspark',763,'Stabilgitterzaun 1m, Stabilgitterzaun 2,5 m',94435],[48.18794476890216,16.385839646439795,'Schweizergarten (Landstraßer Gürtel/Schweizer-Garten-Straße)',1427,'Gitterzaun 1,6 m',94436],[48.18486120485743,16.384610783744176,'Schweizergarten (Arsenalstraße/Ghegastraße)',4184,'Gitterzaun 1m, Gitterzaun 2 m, Stabilgitterzaun 1m',94437],[48.20052444524077,16.384862151466677,'Grünanlage Linke Bahngasse',2725,'Stabilgitterzaun 1m, Holzzaun 1m',94438],[48.20392626620707,16.380047874866168,'Stadtpark - Wienflusspromenade',1899,'keine Einfriedung',94439],[48.17079278392781,16.32320957012833,'Parkanlage Breitenfurter Straße ',3505,'keine Einfriedung',94440],[48.14989762817516,16.2684269463152,'Ölzeltpark',355,'Stabilgitterzaun 1m 1Flügeltüre',94441],[48.14832071007472,16.309270310106516,'Michael-Bausback-Park',3834,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94442],[48.1529899436455,16.3168988101181,'Wohnparkstraße',1327,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94443],[48.15565397758558,16.329832879393983,'Parkanlage Wilhelm-Erben-Gasse',6427,'keine Einfriedung',94444],[48.18179545747922,16.274415325214633,'Parkanlage Roter Berg',8155,'Stabilgitterzaun 1m, Jägerzaun, frei',94445],[48.219673725278625,16.40055850023137,'Max-Winter-Park',464,'Metallzaun 1,6 m',94446],[48.22539594565428,16.397111550219073,'Rudolf-Bednar-Park',296,'Stabilgitterzaun 1m',94447],[48.17111027569614,16.36860771746415,'Parkanlage Paltramplatz',481,'Einfriedung teilweise',94448],[48.17126852559016,16.320550502325816,'Parkanlage Schwenkgasse',1976,'Stabilgitterzaun 1m',94449],[48.23177305675622,16.449767543365574,'Otto-Affenzeller-Park',2401,'Gitterzaun 1m',94450],[48.24163171270632,16.476812719335317,'Teich Hirschstetten',27295,'keine Einfriedung',94451],[48.191369380718726,16.36543121943322,'Rubenspark',345,'Metallzaun 1m',94452],[48.18739868219405,16.347665232670053,'Parkanlage Am Hundsturm',212,'Metallzaun 1m, Metallzaun 0,6 m',94453],[48.18622332653168,16.350552647669964,'Einsiedlerpark',213,'Stabilgitterzaun 1m ',94454],[48.22582929538119,16.339053815050278,'Schubertpark',1336,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94455],[48.173577503771554,16.327872191206446,'Edelsinnstraße ggü. 8',1451,'Stabilgitterzaun 1m mit 2 Toren',94456],[48.19043457818734,16.32101451594461,'Parkanlage Winckelmannstraße',1382,'Stabilgitterzaun 1m 4 Schwingflügeltüren',94457],[48.25438654108994,16.443511723475655,'Grünanlage Eipeldauer Straße',903,'Stabilgitterzaun 1m',94337],[48.1764942266524,16.38010470968884,'Parkanlage Wielandplatz',310,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94338],[48.17454650618906,16.368512572280874,'Laubepark',110,'Stabilgitterzaun 1m',94339],[48.17342321395465,16.40757928251955,'Herderpark/Am Kanal',3221,'keine Einfriedung',94340],[48.17219113823456,16.408625401159682,'Herderpark',432,'Gitterzaun 2 m, Stabilgitterzaun 1m',94341],[48.2255470387046,16.496286621936157,'Yella-Hertzka-Park',540,'Stabilgitterzaun 1m',94342],[48.156780303116236,16.42505201274687,'Parkanlage Pretschgasse',3045,'Stabilgitterzaun 1m, Stabilgitterzaun 1,4 m',94343],[48.225952227655235,16.366577328951735,'Treppelweg - Roßauer Lände',526,'Stabilgitterzaun 1m',94344],[48.13600866190528,16.280414264807966,'Grünanlage Liesinger Platz',150,'Stabilgitterzaun 1 m',94345],[48.278337768422105,16.382806507351862,'Parkanlage Schlossergasse',800,'Stabilgitterzaun 1m, 3 Schwingflügeltüren',94346],[48.161120640343526,16.443920313535333,'Schloß Neugebäude - Unterer Garten',1821,'Wildzaun 2m, Stabilgitterzaun 1m ',94347],[48.252499121366036,16.359496900183082,'Heiligenstädter Park',1886,'Stabilgitterzaun 1m mit 2 Toren',94348],[48.227031226564456,16.311637187681978,'Alszeile (ggü Sportclubplatz)',877,'Stabilgitterzaun 1m 2 Schwingflügeltüren, 1 Tor',94349],[48.252783735560314,16.38127384238385,'Donauinsel Nord (MA45)',12796,'Kennzeichnung mittels Pflöcken',94350],[48.22557080536232,16.40376704919644,'Mexikopark - Rosenpark',4653,'Gitterzaun 1,4 m',94351],[48.16313516069745,16.32572511832731,'Miep-Gies-Park',710,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94352],[48.187168893168476,16.33819150145887,'Parkanlage Harthausergasse',644,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94353],[48.172469705301054,16.385758005186183,'Puchsbaumpark',632,'Stabilgitterzaun 1m 2 Schwingflügeltüren',94354],[48.27451286559231,16.405642849731738,'Parkanlage Thomagasse',745,'Stabilgitterzaun 1m 2 Schwingflügeltüren, 1 Tor',94355],[48.20880989039713,16.410857969225315,'Prater - Pelzmais',121721,'keine Einfriedung',94356],[48.14848351687315,16.32123575559638,'Altmannsdorfer Straße vor ONr. 168-170',463,'keine Angabe',94357],[48.14563581216397,16.322067973000756,'Altmannsdorfer Straße vor ONr. 178-182',411,'keine Angabe',94358],[48.206914457759666,16.445743717629462,'Neue Donau Süd (MA45)',19005,'Kennzeichnung mittels Pflöcken',94359],[48.224283551886906,16.42136196709036,'Kaisermühlen (MA45)',3173,'keine Angabe',94360],[48.166834170699914,16.377330317726145,'Hebbelpark',855,'Stabilgitterzaun 1,2 m 2 Schwingflügeltüren',94361],[48.1698086187709,16.38211099818587,'Parkanlage Wieselburger Gasse',1204,'Stabilgitter 1m',94362],[48.198803269450984,16.283680371644177,'Parkanlage Pachmanngasse',442,'Stabilgitterzaun 1m',94363],[48.25121111166182,16.372877471155693,'Treppelweg - Brigittenauer Lände',1059,'Stabilgitterzaun 1m',94364],[48.22262947734259,16.311375307313167,'Kongreßpark',3278,'Stabilgitterzaun 1m',94365],[48.16410490543551,16.406137199575504,'Parkanlage Löwygrube',222433,'keine Einfriedung',94389],[48.2733311828853,16.394214414457856,'Denglerpark',2691,'Stabilgitterzaun 1m',94390],[48.25737894947396,16.38855470938943,'Floridsdorfer Aupark',2502,'Stabilgitterzaun 1m',94391],[48.22516494458259,16.324641675704164,'Lidlpark',1215,'Stabilgitterzaun 1m',94392],[48.1720783803397,16.35925112245928,'Fortunapark',400,'Stabilgitterzaun 1,3 m',94393],[48.174861071242255,16.353903078370873,'Martin-Luther-King-Park',734,'Stabilgitterzaun 1m,1,8 m, Ziegelmauer 2 m',94394],[48.147696230864526,16.298527136733313,'Parkanlage Riegermühle',704,'Stabilgitterzaun 1m 4 Schwingflügeltüren',94395],[48.23265428010613,16.35029430255721,'Währinger Park',4483,'Maschendrahtzaun 1m, Ziegelmauer 2,5m',94396],[48.245276462339945,16.34836659839509,'Saarpark',1292,'Gitterzaun 1,6 m teilweise',94397],[48.24486705733371,16.3391346618781,'Olympiapark',3582,'Gitterzaun 1m',94398],[48.20114099888549,16.307584028563934,'Ordeltpark',1653,'Stabilgitterzaun 1m 2 Schwingflügeltüren 2 Tore',94366],[48.21446440847176,16.325858026331655,'Lorenz-Bayer-Park',541,'Stabilgitterzaun 2 m',94367],[48.20617836819964,16.279433252894183,'Steinhofer Park',11787,'Einfriedung teilweise',94368],[48.20022969991071,16.43959226948922,'Prater - Wehlistraße-Ostbahn',4540,'keine Angabe',94369], ]);

	var options = { zoomLevel: 12, enableScrollWheel: true, showTip: true, mapType: 'normal', useMapTypeControl: true};

	map = new google.visualization.Map(document.getElementById('chart_div'));

	var drawData = data.clone();
	drawData.removeColumns(3, 3);

	map.draw(drawData, options);

	google.visualization.events.addListener(map, 'select', selectZone);

      }

	function selectZone(){
		document.getElementById("zoneName").innerHTML = "<b>" + data.getValue(map.getSelection()[0].row, 2) + "</b>";
		document.getElementById("zoneArea").innerHTML = "Square footage: " + data.getValue(map.getSelection()[0].row, 3) + " m²";
		document.getElementById("enclosure").innerHTML = "Enclosure: " +  data.getValue(map.getSelection()[0].row, 4);
		document.getElementById("selZ").value = data.getValue(map.getSelection()[0].row, 5);
		document.getElementById("selZN").value = data.getValue(map.getSelection()[0].row, 2);
	}

	function checkSelection(){
		if(document.getElementById("zoneName").innerHTML == "") return false;
		var selDate = new Date(document.getElementById("wDate").value);

		if(selDate == "Invalid Date") {
			document.getElementById("datecell").innerHTML =
				"<div style='color:red;'>Wrong format or date does not exist</div><input type='date' id='wDate' name='wDate' value='" + document.getElementById("wDate").value + "' id ='wDate' required>";
			return false;
		}
		return true;
	}

    </script>
	<h1><center>Scheduled walks</center></h1>
  </head>

	<nav>
		<a href="http://balrog.wu.ac.at/~h0325904/project/persons.php">Manage persons</a>
		<a href="http://balrog.wu.ac.at/~h0325904/project/dogs.php">Manage dogs</a>
		<a href="http://balrog.wu.ac.at/~h0325904/project/allWalks.php">Walks</a>

	</nav>

  <body>
	<form action="Walks.php" method="POST" onsubmit="return checkSelection()">
   <center> <table>
	<tr>
		<th colspan="2">Select location</th>
	</tr>
	<tr>
		<td colspan="2"><div id="chart_div"></div></td>
	</tr>
	<tr>
		<td id="zoneName"></td><td><b>Select date (yyyy-mm-dd)</b></td>
	</tr>
	<tr>
		<td id="zoneArea"></td><td id="datecell"><input type="date" name="wDate" id ="wDate" value='2016-01-14' required></td>
		<input type="hidden" name="selZoneID" id ="selZ" value="">
		<input type="hidden" name="selZoneName" id ="selZN" value = "">
	</tr>
	<tr>
		<td id="enclosure"></td><td><input type="submit" value = "Show Walks for selection"></td>
	</tr>
	</table></center>

	</form>
  </body>
</html>


