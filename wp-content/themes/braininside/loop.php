<div id="artigos" class="centralizarCorpo larguraMaxima">
<?php
query_posts('&posts_per_page=5' );

if (have_posts()) :
   while (have_posts()) : the_post();
		?>
		<div id="artigo">

			<table style="height:130px; width:960px;">
				<tr>
					<td style="width:60px; top:30px;">
						<span class="post_day">
							<?php the_time('d') ?>
						</span>
						<span class="post_month_year">
							<small><?php the_time('D'); ?>  <b><?php the_time('Y'); ?></b></small>
						</span>
					</td>
					<td style="width:120px;">
						
					</td>
					<td style="width:780px;">
						<span class="title_post">
							<?php the_title(); ?>
						</span>
					</td>
				</tr>
			</table>

		</div>
		<?php
   endwhile;
endif;

wp_reset_postdata();
?>
</div>