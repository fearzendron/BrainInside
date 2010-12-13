<?php get_header(); ?>

		<div id="top-container" >
			<div id="left-top-container">
				
				<p class="font_title">O que é?</p>
				<br /><br />
				<p class="font_text espacamento_entre_linhas">Nosso objetivo é propagar a informação e a colaboração entre os profissionais da área de tecnologia de forma clara e objetiva. Aqui no site você encontrará artigos sobre desenvolvimento de software.
					<br /><br />
					Caso você queira entrar em contato para uma possivel consultoria ou desenvolvimento de alguma solução por favor entre em contato conosco <a href="#">clicando aqui</a>
				</p>
				
				<br /><br /><br /><br />
				
				<p class="font_title">Por que não somos iguais?</p>
				<br /><br />
				<p class="font_text espacamento_entre_linhas">Por que gostamos de inovar, não só nos artigos que escrevemos mas em nossos trabalhos do dia-a-dia. Para evoluir o ser humano precisa estar em constante movimento.</p>
				
			</div>


			<div id="right-top-container">
				<div id="box-links" class="img_box">
					<p>NOVIDADES</p>
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

	</div><!-- FECHAMENTO DA TAG HEADER DA HEADER INCLUDED -->
</div><!-- FECHAMENTO DA TAG HEADER DA HEADER INCLUDED -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
