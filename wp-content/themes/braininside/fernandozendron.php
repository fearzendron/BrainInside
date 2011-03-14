<?php
/*
Template Name: Fernando Zendron
*/
?>

<?php get_header(); ?>

	<!-- A abertura das tags estão no header -->
		
		<div id="canvas_post">
			<div id="title_post">
				Fernando Zendron<font color="#ffba00">.</font>
			</div>
		
			<div id="tweet_post" class="box_tweet_post img_box_tweet_post box_tweet_post_size">
				<div id="circle_tweet_post" class="img_circle_tweet"></div>
				<p class="title_position_tweet_post">Último tweet</p>
				<div class="img_quotes quote_position"></div>
				<div style="width:350px; margin-top:75px; margin-left:70px;">
					<p>
						<?php
						//Pega o endereço do twitter como rss e mostra na nossa pagina
						 $url = "http://twitter.com/statuses/user_timeline/16948131.rss?count=1";
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
		
	</div> <!-- Interno cabeçalho -->
</div> <!-- Cabeçalho -->

<br /><br /><br /><br /><br />