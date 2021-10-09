
<div class="conteudo">
	<b><div class="letra30calibra" style="margin-left:10px;margin-top:10px;  ">
	 Fotos recentes:
	</div></b>
		<div class="clear" ></div>
						<?php		
							$sql = "SELECT id,imagem,titulo,data_emissao FROM albuns order by id desc limit 0,04"; //altere (clientes) para o nome de sua tabela.
							$result = mysql_query($sql) or die ("N�o foi poss�vel realizar a consulta!!!");
							while ($row = mysql_fetch_assoc($result)){	
						?>
	<div class="produto" style=":margin-top:10px;">
		<div class="imagem_produto">
			<a href="./uploads/fotos/g_<?php echo $row['imagem'];?>" rel="lightbox[roadtrip]">
					<img src="./uploads/fotos/g_<?php echo $row['imagem'];?>" alt="Brothers" title="Brothers" name="Brothers" border="0" width="138px" height="120px" />
					</a>
		</div>
		<div class="coteudo_text">
			<div class="data_home">
				<?php echo $row['data_emissao']?>
			</div>
			<div class="clear" ></div>
			<div class="text_foto">
				<?php echo $row['titulo']?>
			</div>
				<div class="clear" ></div>
			<div class="	">
				
			<a href="?pg=categoria_foto&id_categoria=<?php echo $row['id']?>">
				<div class="letra_mais">
				Ver fotos
				</div>
				</a>
			</div>
		</div>
		
	</div>
				
											<?php
							}
						?>
	
</div>

						<div class="clear" ></div>