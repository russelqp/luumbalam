
<?php include('inc/header.php'); ?>



<article>

			<div id="mainContener2">
				
				<!-- title -->
				<div id="page-title">
                	<h1>Contactanos</h1>
				<br />
                </div>
                
              
				<!-- ENDS title -->
					
				<!-- column (left)-->
				<div class="one-column">
					<!-- form -->
					<h2>Formulario de contacto</h2>
					<script type="text/javascript" src="js/form-validation.js"></script>
					<form id="contactForm" action="#" method="post" >
						
							<div>
								<label>Nombre</label>
								<input name="name"  id="name" type="text" class="form-poshytip" placeholder="Escribe tu nombre completo" title="Escribe tu nombre completo"/>
							</div>
							<div>
								<label>Email</label>
								<input name="email"  id="email" type="text" class="form-poshytip" placeholder="Escribe tu dirección de correo" title="Escribe tu dirección de correo"/>
							</div>
							<div>
								<label>Website</label>
								<input name="web"  id="web" type="text" class="form-poshytip"  placeholder="Escribe la url de tu sitio web" title="Escribe la url de tu sitio web"/>
							</div>
							<div>
								<label>Comentarios</label>
								<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip"  placeholder="Escribe tus comentarios" title="Escribe tus comentarios"></textarea>
							</div>
							
							<!-- send mail configuration -->
							<input type="hidden" value="your_email@your_server.com" name="to" id="to" />
							<input type="hidden" value="youremail@luiszuno.com" name="from" id="from" />
							<input type="hidden" value="From torn wordpress online" name="subject" id="subject" />
							<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
							<!-- ENDS send mail configuration -->
							
							<p><input type="button" value="ENVIAR" name="submit" id="submit" class="clean-gray2" /></p>
					
					
					</form>
					<p id="success" class="success">Gracias por sus comentarios.</p>
					<!-- ENDS form -->
				</div>
				<!-- ENDS column -->
				
				<!-- column (right)-->
				<div class="one-column">
					<!-- content -->
					<p><img src="img/dummies/map.jpg" alt="map"></p>
					<p></p>					
					<p>Carretera federal Km 100, Playa del Carmen, Quintana Roo, M&eacute;xico.<br/>
					CP. 77712<br/>
					01800 - 2055896<br/>
					<a href="mailto:email@server.com">buzon@luumbalam.com.mx</a></p>
					<!-- ENDS content -->
                    		</div>
				<!-- ENDS column -->							

			<div class="fixclear"></div>

</div>
</article>

<?php include('inc/footer.php'); ?>