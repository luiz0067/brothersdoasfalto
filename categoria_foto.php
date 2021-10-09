
<?php 
	include('./adm/conecta.php');
	
?>
<div class="conteudo">


		
	
		<?php		
		if (($_GET["id_categoria"]!=null)){
			$sql	= "SELECT id,titulo,imagem,id_categoria FROM cadastro_foto where (id_categoria=0".$_GET["id_categoria"].")";
		}
				$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
				while ($row = mysql_fetch_assoc($result)){	
				?>		

<div class="imagem_produto_pequena" style="margin-left:7px; margin-top:70px;float:left;width:auto;">

		<a href="./uploads/fotos/g_<?php echo $row ['imagem'];?>" rel="lightbox[roadtrip]">
				<img src="./uploads/fotos/g_<?php echo $row ['imagem'];?>" alt="brothers" title="brothers" name="brothers" border="0"  width="187" height="137"  />
			</a>
			</div>
		<?php 
		}

	
	?>	
	


	</div>
		
<div class="clear" ></div>