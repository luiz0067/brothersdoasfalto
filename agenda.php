
<div class="conteudo">
<div class="letra30calibra" style="font-size:18px;font-family:Myriad Pro;">
								Agenda brothers do asfalto
									
									</div>
									
							<div class="clear" ></div>
									<div class="conteudo_agenda">
									<?php		
												$sql = "SELECT id,imagem,video,facebook,curtir,data_evento,titulo,conteudo FROM agenda order by id desc"; //altere (clientes) para o nome de sua tabela.
												$result = mysql_query($sql) or die ("N�o foi poss�vel realizar a consulta!!!");
												while ($row = mysql_fetch_assoc($result)){	
											?>
										<div class="data_agenda">
										<?php echo $row['facebook']?>						
										</div>
										<div class="text_agenda"style="font-size:16;">
										- <?php echo $row['titulo']?>				
										</div>
										<div class="clear" ></div>
															<?php
							}
						?>
									</div>
						
						
	
</div>

						<div class="clear" ></div>