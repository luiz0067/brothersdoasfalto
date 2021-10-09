
<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
<style type="text/css"></style>
				<div class="letra30calibra1">
				Banner destaque
				</div>
				<div id="banner">
				<div id="slides">
						<?php		
							$sql = "SELECT id,imagem,titulo FROM slide order by id desc"; //altere (clientes) para o nome de sua tabela.
							$result = mysql_query($sql) or die ("N�o foi poss�vel realizar a consulta!!!");
							while ($row = mysql_fetch_assoc($result)){	
						?>
						
				  
							<a href="<?php echo $row['titulo']?>" target="_self"> 
								<img src="./uploads/banner/g_<?php echo $row['imagem']?>" width="715px" height="247px" alt="1" alt="brothersdoasfaltodoasfalto"  
								title="brothersdoasfaltodoasfalto" name="brothersdoasfaltodoasfalto" 
								border="0" /> 
							</a>
						
						<?php
							}
						?>
					
					</div>
				
				</div>

	
						<div class="conteudo">
							<div class="conteudo_home">
							
									<div class="letra30calibra">
									Fotos Recentes:
									
										</div>
											<div class="clear" ></div>
									<div class="conteudo_fotos">
									<?php		
							$sql = "SELECT id,imagem,titulo,data_emissao FROM albuns order by id desc limit 0,04"; //altere (clientes) para o nome de sua tabela.
							$result = mysql_query($sql) or die ("N�o foi poss�vel realizar a consulta!!!");
							while ($row = mysql_fetch_assoc($result)){	
						?>
						
	
										<div class="conteiner_fotos">
									
											<div class="foto">
							
													<a href="?pg=categoria_foto&id_categoria=<?php echo $row['id']?>">
													<img src="./uploads/fotos/g_<?php echo $row['imagem'];?>" alt="brothersdoasfalto" title="brothersdoasfalto" name="brothersdoasfalto" border="0" width="132px" height="93px" />
												
												</div>
												
											<div class="coteudo_text">
												<div class="data_home">
												<?php echo $row['data_emissao']?>
												</div>
												<div class="clear" ></div>
												<div class="text_home">
												<?php echo $row['titulo']?>
												</div>
												
											
													
												
													
												
													
												
												</div>
											
										
										</div>
										
											<?php
							}
						?>
										<div class="clear" ></div>
										<a href="?pg=fotos">
										<div class="ver_todos">
										 ver todos
										</div>
										</a>
									
									
									</div>
										<div class="clear" ></div>
									<div class="letra30calibra">
									Últimas posts:
									</div>
										<div class="clear" ></div>
									<div class="conteudo_agenda_home">
											<?php		
												$sql = "SELECT id,imagem,video,facebook,curtir,data_evento,titulo,conteudo FROM agenda order by id desc limit 0,04"; //altere (clientes) para o nome de sua tabela.
												$result = mysql_query($sql) or die ("N�o foi poss�vel realizar a consulta!!!");
												while ($row = mysql_fetch_assoc($result)){	
											?>
										<div class="conteudo_text_agenda" >
											<div class="data_agenda_home" >
											<?php echo $row['facebook']?>					
											</div>
											<div class="text_agenda_home">
											- <?php echo $row['titulo']?>			
											</div>
										</div>
								
														<?php
							}
						?>
										
										<a href="?pg=agenda">
										
										<div class="ver_todos1">
										 ver todos
										</div>
										</a>
									
									</div>
									
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
							</div>
						
						</div>
		<div class="clear" ></div>