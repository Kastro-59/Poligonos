<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Zeno-Nuevo</title>
<style type="text/css" src="https://kastro-59.github.io/Poligonos/stream/css/lunaaudioplayer.css"></style>
<script src="https://kastro-59.github.io/Poligonos/stream/js/jquery.min.js"></script>
<script type="text/javascript" src="https://kastro-59.github.io/Poligonos/stream/js/lunaradio.min.js"></script>			
</head>
<body> 

<center>
 <style> 
   <!-- 
   body { background:url() repeat-x, url('') }*{ cursor:url(https://i.imgur.com/QpftHmt.png),auto} 
   -->
</style>
</center> 
<div align="center">
 <div class="player" id="miplayer">
 <div class="a" style="background-image:url(https://i.imgur.com/kLDcWI6.png)">

 <div id="kastroplayer" style="width:420px; height:364px;background: transparent url() bottom / cover no-repeat;">loading...</div>	
 
 <div class="disc">  
</div>
</head>
<body>
&nbsp;&nbsp; <span id="Clock">12:57:05</span>


<script language="JavaScript">
<!--
var Elem = document.getElementById("Clock");
function Horario(){
var Hoje = new Date();
var Horas = Hoje.getHours();
if(Horas < 10){
Horas = "0"+Horas;
}
var Minutos = Hoje.getMinutes();
if(Minutos < 10){
Minutos = "0"+Minutos;
}
var Segundos = Hoje.getSeconds();
if(Segundos < 10){
Segundos = "0"+Segundos;
}
Elem.innerHTML = Horas+":"+Minutos+":"+Segundos;
}
window.setInterval("Horario()",1000);
//-->
</script>
<div id="data" class="data">
<script language="javascript">

var fecha=new Date();
var diames=fecha.getDate();
var diasemana=fecha.getDay();
var mes=fecha.getMonth() +1 ;
var ano=fecha.getFullYear();

var textosemana = new Array (7);
textosemana[0]="Dom";
textosemana[1]="Lun";
textosemana[2]="Mar";
textosemana[3]="Mie";
textosemana[4]="Jue";
textosemana[5]="Vie";
textosemana[6]="Sab";

var textomes = new Array (12);
textomes[1]="Ene";
textomes[2]="Feb";
textomes[3]="Mar";
textomes[4]="Abr";
textomes[5]="May";
textomes[6]="Jun";
textomes[7]="Jul";
textomes[8]="Ago";
textomes[9]="Sep";
textomes[10]="Oct";
textomes[11]="Nov";
textomes[12]="Dic";

document.write("" + textosemana[diasemana] + " " + diames + " de " + textomes[mes] + " de " + ano + "<br>");

</script>


<script>
jQuery(document).ready(function($) {
	$("#kastroplayer").lunaradio({
		token: "ZFNWW2FiXlNrV2QgXltgXQ==",
  userinterface: "big",
  backgroundcolor: "transparent",
  fontcolor: "#6a0311",
  hightlightcolor: "#fa225b",
  fontname: "Saira Condensed",
  googlefont: "Saira+Condensed:wght@100",
  fontratio: "0.5",
  radioname: "DINARAMA-RADIO",
  scroll: "false",
  coverimage: "https://i.imgur.com/TSc5ws2.gif",
  usevisualizer: "fake",
  coverstyle: "animated",
  visualizertype: "4",
  multicolorvisualizer: "true",
    color1: "#f6f6f6",
    color2: "#323edd",
    color3: "#fc5404",
    color4: "#fa225b",
		visualizeropacity: "0.4",
		itunestoken: "1000lIPN",
		metadatatechnic: "stream-icy-meta",
		ownmetadataurl: "",
		streamurl: "https://stream.zeno.fm/emertvc73mruv",
		streamtype: "radiojar",
		icecastmountpoint: "",
		radionomyid: "",
		radionomyapikey: "",
		radiojarid: "",
		radiocoid: "",
		shoutcastpath: "",
		shoutcastid: "",
		streamsuffix: "",
		metadatainterval: "10000",
		volume: "50",
		debug: "false",
		autoplay: "",
		displayliveicon: "true",
		displayvisualizericon: "true",
	usestreamcorsproxy: "true", 
	corsproxy: "",
	});
});
</script>
</body>		
</html>