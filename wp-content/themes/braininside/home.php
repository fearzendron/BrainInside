<?php get_header(); ?>

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
						<p><a href="#">Primeiros passos com Java</a></p>
						<p><a href="#">Primeiros passos com Ruby</a></p>
						<p><a href="#">Primeiros passos com .NET</a></p>
						</div>
						<?php
						/* Loop dos ultimos 3 posts */
						 //get_template_part( 'loop', 'index' );
						?>
					<div id="circle_tweet" class="img_circle_tweet"></div>
					<p class="right_titles tweet_position">Último tweet</p>
					<div class="img_quotes quote_position"></div>
					<div class="ultimo_tweet">
						<p>
							Google firma parcerias para serviço de TV info.abril.com.br/noticias/merca...via @info_plantao
							<?php /*TWEET*/ ?>
						</p>
					</div>
				</div>
			</div>

		</div><!-- #top-container -->

	</div><!-- FECHAMENTO DA TAG HEADER DA HEADER INCLUDED -->
</div><!-- FECHAMENTO DA TAG HEADER DA HEADER INCLUDED -->

<div id="white_area" class="img_bg_ground">
	<div id="bottom-container" class="centralizarCorpo">
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
				<textarea rows="16" cols="70" class="img_box_message box_message">Digite a mensagem aqui ...</textarea>
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
						<p class="color_link_of_us"><a href="#">artigos escritos (0)</a><p>
						<p class="color_link_of_us"><a href="#">ver curriculo</a></p>
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
						<p class="color_link_of_us"><a href="#">artigos escritos (0)</a><p>
						<p class="color_link_of_us"><a href="#">ver curriculo</a></p>
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
					<INPUT TYPE=TEXT id="txtname" NAME="txtname" VALUE="Nome." size="62" class="img_box_form_input box_message" />
					<INPUT TYPE=TEXT id="txtemail" NAME="txtemail" VALUE="E-mail." size="62" class="img_box_form_input box_message" />
				</div>
				<div id="form_names_button">
					<input type="button" value="Enviar Mensagem" onclick="#">
				</div>
			</div>
			
			<div id="rights">
				2010 BrainInside.<br />
				Todos os direitos reservados<br />
				São Paulo - Brasil
				
				<div id="foca">
					
				</div>
			</div>
			
		</div>

	</div><!-- #top-container -->
</div>

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
