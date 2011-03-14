<?php get_header('home'); ?>
	 

				<div id="top-container" >
					<div id="left-top-container">
				
						<p class="font_title space_between_word">O que é?</p>
						<br /><br />
						<p class="font_text espacamento_entre_linhas">Nosso objetivo é propagar a informação e a colaboração entre os profissionais da área de tecnologia de forma clara e objetiva. Aqui no site você encontrará artigos sobre desenvolvimento de software.
							<br /><br />
							Caso você queira entrar em contato para uma possivel consultoria ou desenvolvimento de alguma solução por favor entre em contato conosco <a href="#"><b>clicando aqui</b></a>.
						</p>
				
						<br /><br /><br /><br />
				
						<p class="font_title">Por que não somos iguais?</p>
						<br /><br />
						<p class="font_text espacamento_entre_linhas">Por que gostamos de inovar, não só nos artigos que escrevemos mas em nossos trabalhos do dia-a-dia. Para evoluir o ser humano precisa estar em constante movimento.</p>
				
					</div>


					<div id="right-top-container">
						<div id="box-links" class="img_box">
							<div id="box_lines" class="img_box_lines"></div>
							<div id="circle_artigos" class="img_circle_artigos"></div>
							<p class="right_titles articles_position">Novidades</p>
								<div class="ultimas_novidades">
								<?php query_posts('posts_per_page=3'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<p>
										<a href="<?php the_permalink() ?>" rel="bookmark" 
											title="Permanent Link to <?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
									</p>
								<?php endwhile; else: ?>
									<p><?php _e('Por enquanto não há posts.'); ?></p>
								<?php endif; ?>
								</div>
							<div id="circle_tweet" class="img_circle_tweet"></div>
							<p class="right_titles tweet_position">Último tweet</p>
							<div class="img_quotes quote_position"></div>
							<div class="ultimo_tweet">
								<p>
									<?php
									//Pega o endereço do twitter como rss e mostra na nossa pagina
									 $url = "http://twitter.com/statuses/user_timeline/45864219.rss?count=1";
									try {
										 $xml = simplexml_load_file($url); //Objeto ja incluido no php
										foreach ($xml->channel->item as $node) {
											printf('<a href="%s" target="_BLANCK">%s</a>', $node->link, $node->title);
										}
									} catch (Exception $e) {
										echo "Erro ao carregar tweet!";
									}
									?>
								</p>
							</div>
						</div>
					</div>

				</div><!-- #top-container -->

			<!-- A abertura das tags estão no header -->
			</div> <!-- Interno cabeçalho -->
		</div> <!-- Cabeçalho -->

<div id="white_area" class="img_bg_ground" >
	<div id="bottom-container" class="centralizarCorpo">
		<form method="POST" action="mailer.php">
			<div id="left-bottom-container">
			
				<p class="font_title color_title_bottom space_between_word">Quem somos?</p>
				<br /><br />
				<p class="font_text espacamento_entre_linhas color_title_bottom">
					Somos uma empresa com a idéia de que um cérebro não pode ser industrializado.
				</p><br />
				<p class="font_text espacamento_entre_linhas color_title_bottom">
					Os melhores trabalhos partem de equipes integradas e criativas com o único objetivo de fazer sempre o melhor e buscar a satisfação plena dos clientes.
				</p><br />
				<p class="font_text espacamento_entre_linhas color_title_bottom">
					Nosso objetivo é realizar trabalhos em consultoria e desenvolvimento de softwares e soluções na internet, assim como levar conhecimento para os profissionais da área.
				</p><br />
				<p class="font_text espacamento_entre_linhas color_title_bottom">
					Trabalhamos de maneira diferente com nossos parceiros, toda a etapa de trabalho pode ser acompanhado, isso faz com que o resultado seja exatamente o esperado pelo cliente.
				</p>
			
				<br /><br /><br /><br />
			
				<p class="font_title color_title_bottom space_between_word">Mande uma mensagem</p>
				<br /><br />
				<p class="font_text espacamento_entre_linhas color_title_bottom">Entre em contato conosco e tire seus projetos do papel</p>
				<br /><br />
				<p>
					<textarea rows="14" cols="67" class="img_box_message box_message font_inputs" name="txtmessage">Digite a mensagem aqui ...</textarea>
				</p>
				<br /><br /><br />
			
				<div id="menu_bottom" class="img_moldura_menu_bottom tamanhoMenu tamanhoMenuBottom">
	            	<ul class="menu_bottom">
						<li><a href="#">HOME</a></li>
						<li><a href="#"><img border="0" src="wp-content/themes/braininside/images/m_sep.png" /></a></li>
					
						<li><a href="#">ARTIGOS</a></li>
						<li><a href="#"><img border="0" src="wp-content/themes/braininside/images/m_sep.png" /></a></li>
					
						<li><a href="#">PROJETOS</a></li>
						<li><a href="#"><img border="0" src="wp-content/themes/braininside/images/m_sep.png" /></a></li>
					
						<li><a href="#">CONTATO</a></li>
					</ul>
	            </div>
			
			</div>


			<div id="right-bottom-container">
				<div id="box-links">
				
					<div id="rafael" class="img_box_people">
						<div id="foto_rafael" class="img_rafael"></div>
						<div id="description_rafael">
							<p class="size_name color_title_bottom">Rafael Bueno</p>
							<p class="ocupation color_title_bottom">Engenheiro de Software</p>
							<p><a class="color_link_of_us" href="#">artigos escritos (0)</a><p>
							<p><a class="color_link_of_us" href="http://localhost/braininside/?page_id=52">ver curriculo</a></p>
							<div id="links_network" class="img_box_people_icons">
								<div class="pos_links">
									<a href="#"><div class="img_ico1 ico_size"></div></a>
									<a href="#"><div class="img_ico2 ico_size"></div></a>
									<a href="#"><div class="img_ico3 ico_size"></div></a>
									<a href="#"><div class="img_ico4 ico_size"></div></a>
									<a href="#"><div class="img_ico5 ico_size"></div></a>
									<a href="#"><div class="img_ico6 ico_size"></div></a>
									<a href="#"><div class="img_ico7 ico_size"></div></a>
								</div>
							</div>
						</div>
					</div>
					<br /><br />
					<div id="zendron" class="img_box_people">
						<div id="foto_zendron" class="img_zendron"></div>
						<div id="description_zendron">
							<p class="size_name color_title_bottom">Fernando Zendron</p>
							<p class="ocupation color_title_bottom">Engenheiro de Software</p>
							<p><a class="color_link_of_us" href="#">artigos escritos (0)</a><p>
							<p><a class="color_link_of_us" href="http://localhost/braininside/?page_id=50">ver curriculo</a></p>
							<div id="links_network" class="img_box_people_icons">
								<div class="pos_links">
									<a href="#"><div class="img_ico1 ico_size"></div></a>
									<a href="#"><div class="img_ico2 ico_size"></div></a>
									<a href="#"><div class="img_ico3 ico_size"></div></a>
									<a href="#"><div class="img_ico4 ico_size"></div></a>
									<a href="#"><div class="img_ico5 ico_size"></div></a>
									<a href="#"><div class="img_ico6 ico_size"></div></a>
									<a href="#"><div class="img_ico7 ico_size"></div></a>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			
				<div id="form_names">
					<div class="img_box_form box_form_size">
						<INPUT TYPE=TEXT id="txtname" NAME="txtname" VALUE="Nome." size="62" class="img_box_form_input box_message font_inputs" />
						<INPUT TYPE=TEXT id="txtemail" NAME="txtemail" VALUE="E-mail." size="62" class="img_box_form_input box_message font_inputs" />
					</div>
					<div id="form_names_button">
						<input type="submit" value="Enviar Mensagem" class="img_submit submit" name="submit" />
					</div>
				</div>
			
				<div id="rights">
					<font class="copyright">&copy; 2010 BrainInside.</font><br />
					<font class="copyright_local">Todos os direitos reservados<br />
					São Paulo - Brasil</font>
					<div id="foca" class="img_foca img_foca_size">
					
					</div>
					<br />
					<br />
					<br />
					<br />

				</div>
			</div>
		</form>
	</div><!-- #top-container -->
</div>	

</body>
</html>
