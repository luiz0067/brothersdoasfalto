<?php include('./adm/conecta.php')


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery.cycle.all.2.72.js" type="text/javascript"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />
<link href="css/lightbox.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
<style type="text/css"></style>
<script>
 function trocardecor (elemento,cor){
 elemento.style.color=cor;}
</script>
<script>
var $j = jQuery.noConflict();
	$j('#lightbox').css("background","red");
	
	var jQuery = $;
	$(function(){
			$('#slides').cycle({
					fx: 'zoom', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
					pager:  '#paginador',
					speed: 300,
					timeout: 5000,
					cleartype: false,
					pause: true
			});
	});
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onload="MM_preloadImages('imagens/layout/menus/home-hover.png','imagens/layout/menus/contato-hover.png')">

<div id="tudo">
<div id="topo_tudo">
  <div class="topo">
	<a href="?pg=home">
    <div class="logo"></div></a>
	<div class="data">
	
	<script>
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
// -->
                </script>
    </div>
    <ul id="menu-cima">
    	<li class="menu-cima"><a href="?pg=home" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img1','','imagens/layout/menus/home-hover.png',1)"><img src="imagens/layout/menus/home.png" width="128" height="144" id="menu_img1" /></a></li>
        <li class="menu-cima"><a href="?pg=agenda" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img2','','imagens/layout/menus/agenda-hover.png',1)"><img src="imagens/layout/menus/agenda.png" width="128" height="144" id="menu_img2" /></a></li>
        <li class="menu-cima"><a href="?pg=grupo" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img3','','imagens/layout/menus/grupo-hover.png',1)"><img src="imagens/layout/menus/grupo.png" width="128" height="144" id="menu_img3" /></a></li>
        <li class="menu-cima"><a href="?pg=fotos" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img4','','imagens/layout/menus/fotos-hover.png',1)"><img src="imagens/layout/menus/fotos.png" width="128" height="144" id="menu_img4" /></a></li>
        <li class="menu-cima"><a href="?pg=contato" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img5','','imagens/layout/menus/contato-hover.png',1)"><img src="imagens/layout/menus/contato.png" width="128" height="144" id="menu_img5" /></a></li>
    </ul>
	
    </div>
  <div class="rodape_topo"> </div>
</div>
<div class="clear" ></div>
<div id="meio_tudo">
  <div id="meio">
    <div class="conteudo_classificados">
      <div class="classificados_img">
        <div class="letra_classificado"> </div>
      </div>
      <?php
						
								
								$sql    = 'SELECT id,titulo FROM categoria ;';
								$result = mysql_query($sql, $link);
								while ($row = mysql_fetch_assoc($result)){
						
							?>
      <div class="conteudo_categoria"> <a href="?pg=categoria_produto&id_categoria=<?php echo $row['id'];?>">
        <div class="menuletra16calibra"> <?php echo $row['titulo'];?> </div>
        </a> </div>
      <?php
								}
							
							?>
    </div>
    <div class="clear" ></div>
    <div id="marcas">
	<div class="letra30calibra2"style="margin-right:30px;">
	  Parceiros
     </div>
	 <div class="clear" ></div>
	  <div class="imagem_marcas">
	  
        <div style="float:left;margin-left:7px;maring-top:10px margin-bottom:10px;">
          <div style="margin-top:10px; margin-bottom:10px;"> </div>
          <!--patrocinios--> 
          <script> 
								
								$(function(){
										$('#patrocinio').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio"  > <a href="http://www.midiamix.com.br" target="_blank"><img src="./parceiros/midiamix.jpg" width="157" height="83" alt="1" /></a> </div>
          </div>
		  <script> 
								
								$(function(){
										$('#patrocinio1').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio1" style="margin-top:15px;">  <img src="parceiros/DR SOM.jpg" width="157" height="83" alt="1" />  </div>
          </div>	
			 <script> 
								
								$(function(){
										$('#patrocinio2').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio2" style="margin-top:15px;" > <img src="parceiros/casacor.jpg" width="157" height="83" alt="1" /> </div>
          </div>	
         <script> 
								
								$(function(){
										$('#patrocinio2').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio3" style="margin-top:15px;" ><img src="./parceiros/mangoni.jpg" width="157" height="83" alt="1" /> </div>
          </div>	
		  <script> 
								
								$(function(){
										$('#patrocinio3').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>
          <div id="slider">
            <div id="patrocinio4" style="margin-top:15px;" ><a href="http://www.samukarmultimarcas.com.br" target="_blank"><img src="./parceiros/samukar.jpg" width="157" height="83" alt="1" /></a></div>
          </div>
			<script> 
								
								$(function(){
										$('#patrocinio4').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>		
<div id="slider">
            <div id="patrocinio5" style="margin-top:15px; "> </div>
          </div>
			<script> 
								
								$(function(){
										$('#patrocinio5').cycle({
												fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
												
												speed: 500,
												timeout: 2000,
												cleartype: false,
												pause: true
										});
								});
						</script>							
        </div>
      </div>
    </div>
    <?php 
				$pg=$_GET["pg"];
				if($pg=="home")
					include('home.php');
				else if($pg=="contato")
					include('contato.php');
				else if($pg=="categoria_produto")
					include('categoria_produto.php');
				else if($pg=="categoria_foto")
					include('categoria_foto.php');
				else if($pg=="produto")
					include('produto.php');
				else if($pg=="fotos")
					include('fotos.php');
				else if($pg=="agenda")
					include('agenda.php');
				else if($pg=="grupo")
					include('grupo.php');
				else
					include('home.php');
				?>
  </div>
  <div class="clear" ></div>
  <div class="clear" ></div>
  <div class="clear" ></div>
</div>
<div class="clear" ></div>
<div id="rodape">
  <div class="borda_fundo"> </div>
  <div class="fundo"> 
   <ul id="menu-baixo">
    	<li class="menu-baixo"><a href="?pg=home" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img1','','imagens/layout/menus/home-hover.png',1)"><img src="imagens/layout/menus/home.png" width="45" height="60px" id="menu_img1" /></a></li>
        <li class="menu-baixo"><a href="?pg=agenda" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img2','','imagens/layout/menus/agenda-hover.png',1)"><img src="imagens/layout/menus/agenda.png" width="45" height="60px" id="menu_img2" /></a></li>
        <li class="menu-baixo"><a href="?pg=grupo" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img3','','imagens/layout/menus/grupo-hover.png',1)"><img src="imagens/layout/menus/grupo.png" width="45" height="60px" id="menu_img3" /></a></li>
        <li class="menu-baixo"><a href="?pg=foto" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img4','','imagens/layout/menus/fotos-hover.png',1)"><img src="imagens/layout/menus/fotos.png" width="45" height="60px" id="menu_img4" /></a></li>
        <li class="menu-baixo"><a href="?pg=contato" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('menu_img5','','imagens/layout/menus/contato-hover.png',1)"><img src="imagens/layout/menus/contato.png" width="45" height="60px" id="menu_img5" /></a></li>
    </ul>
	<div class="text_fundo">
	<img src="./imagens/layout/texto_fundo.png" style="widht:445px;height:25px;"/>
		<a href="http://www.studiomidiamix.com.br/">
		<div style="float:right;margin-top:15px;">
			<img src="./imagens/layout/midiamix.png"/>
		
		
		</div>
		</a>
	
	
	</div>
	
	
	
  </div>
</div>
</body>
