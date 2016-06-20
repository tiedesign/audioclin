                <h1>Contato</h1>
                
                <p id="intro">
                    Deixe sua mensagem abaixo: 
				</p>

				<form id="fsend" action="email.php" target="wmail" method="POST" onsubmit="$('#intro').html('<br/>Sua mensagem foi enviada com sucesso! <br/><br/>Aguarde o nosso retorno. <br/><br/>Muito obrigado.'); $('#fsend').hide();">
					<table cellspacing="10">
						<tr>
							<td valign="top" width="240px">
								<label for="contact_name">Nome:</label>
								<br/>
								<input type="text" name="contact_name" id="contact_name" value="" maxlength="100"/>
								<br/>
								<label for="contact_email">E-mail:</label>
								<br/>
	
								<input type="text" name="contact_email" id="contact_email" value="" maxlength="100"/>
								<br/>
								<label for="contact_phone">Telefone:</label>
								<br/>
								<input type="text" name="contact_phone" id="contact_phone" value="" maxlength="100"/>
							</td>
							<td valign="top">
								<label for="contact_message">Mensagem:</label>
								<br/>
								<textarea name="contact_message" id="contact_message" rows="7"></textarea>
							</td>
						</tr>
						<tr>
							<td align="right" colspan="2">
								<button type="submit" class="bt" id="send">
									Enviar
								</button>
							</td>
						</tr>
					</table>
	
				</form>

				<iframe id="wmail" name="wmail" src="" style="display:none;"></iframe>