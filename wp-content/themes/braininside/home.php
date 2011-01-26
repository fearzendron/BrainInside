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
						<p>Primeiros passos com Java</p>
						<p>Primeiros passos com Ruby</p>
						<p>Primeiros passos com .NET</p>
						<?php
						/* Loop dos ultimos 3 posts */
						 //get_template_part( 'loop', 'index' );
						?>
					<div id="circle_tweet" class="img_circle_tweet"></div>
					<p class="right_titles tweet_position">Último tweet</p>
					<p>
						<?php /*TWEET*/ ?>
					</p>
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
				<div>NOVIDADES</div>
					<?php
					/* Loop dos ultimos 3 posts */
					 //get_template_part( 'loop', 'index' );
					?>
				<p>Último tweet</p>
				<p>
					<?php /*TWEET*/ ?>
				</p>
			</div>
		</div>

	</div><!-- #top-container -->
</div>

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
