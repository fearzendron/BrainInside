		<!-- Esta pagina carrega um unico post quando selecionado, tb permite a navegação para o próximo e o anterior -->
		<?php get_header(); ?>
		
		<!-- A abertura das tags estão no header -->
			
			<div id="canvas_post">
				<div id="title_post">
					Artigos<font color="#ffba00">.</font>
				</div>
			
				<div id="search" class="img_box_search box_search_size">
					<input id="txtsearch" type="text" name="txtsearch" class="img_search_input search_input_size box_message" />
					<div class="img_search_magnifier search_magnifier_size magnifier"></div>
				</div>
			
				<div id="tweet_post" class="box_tweet_post img_box_tweet_post box_tweet_post_size">
					<div id="circle_tweet_post" class="img_circle_tweet"></div>
					<p class="title_position_tweet_post">Último tweet</p>
					<div class="img_quotes quote_position"></div>
					<div style="width:350px; margin-top:75px; margin-left:70px;">
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
			
		</div> <!-- Interno cabeçalho -->
	</div> <!-- Cabeçalho -->
	
	<div id="post" style="margin:auto 50%; left:-478px; top:100px; position:relative;">
		<div id="post_content">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id="post_content_title"><?php the_title(); ?></div>
					
					<br /><br />

					<div id="post_content_text">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					
					<br />
					
					<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="fearzendron" data-related="rafbueno">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

					<div id="post_content_pagination">
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div>

					<br />

					<div id="author-description">
						<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
						<?php the_author_meta( 'description' ); ?>
						<div id="author-link">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
							</a>
						</div><!-- #author-link	-->
					</div><!-- #author-description -->

					<br />

					<div class="entry-utility">
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</div>
	</div>
	
<br /><br /><br />
	
<?php get_footer();?>
