<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since ebicalho 1.0
 */

get_header(); ?>




		<header id="homeCarousel" class="header-carousel header-fixed carousel slide">
	    <ol class="carousel-indicators">
	      <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
	      <li class="" data-target="#homeCarousel" data-slide-to="1"></li>
	      <li class="" data-target="#homeCarousel" data-slide-to="2"></li>
	    </ol>

	    <div class="carousel-inner">

				<?php
						$i=1;
						$slider = array( 'post_type' => 'slider', 'posts_per_page' => 18 );
						query_posts( $slider );
						while ( have_posts() ) : the_post();
								if($i==1 ){echo "<div class='item active'>";}else {echo "<div class='item'>";}
								$fundo = types_render_field('fundo', array('raw' => 'true'));
								$cabecal = types_render_field('cabecal', array('raw' => 'true'));

								$subtitulo = types_render_field('subtitulo', array('raw' => 'true'));
								?>

								<div class="fill" style="background-image:url('<?php echo $fundo ?>');"></div>
				        <div class="carousel-content-bottom">
				          <div class="container">
				            <div class="row">
				              <div class="col-md-12">
				                <div class="center text-center">
				                  <div style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay025" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-60%&quot;}" data-to-animate="fadeInDown delay025">
				                    <div class="outside-border block-center">
				                      <p class="intro"><?php echo $cabecal ?></p>
				                    </div>
				                  </div>
				                  <h1 style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay05" data-to-animate="fadeInDown delay05" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-80%&quot;}"><?php the_title(); ?></h1>
				                  <h2 style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay075" data-to-animate="fadeInDown delay075" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-300%&quot;}"><?php echo $subtitulo ?></h2>
				                  <div style="animation-name: no-animation;" class="doscrollmagic buttons animated fadeInDown delay1" data-to-animate="fadeInDown delay1" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-200%&quot;}">
				                  </div>
				                </div>
				              </div>
				            </div>
				          </div>
				        </div>
							<?php
								echo "</div>";
								$i++;
						endwhile;	?>
	    </div>

	    <a class="left carousel-control" href="#homeCarousel" data-slide="prev">
	      <span class="icon-prev"></span>
	    </a>
	    <a class="right carousel-control" href="#homeCarousel" data-slide="next">
	      <span class="icon-next"></span>
	    </a>
	  </header>
		<?php
		// Start the loop.
		$principal = array( 'post_type' => 'page', 'posts_per_page' => 1 );
		query_posts( $principal );
		while ( have_posts() ) : the_post();

			// Include the page content template.



				the_content( sprintf(
					__( 'Continue reading %s', 'twentyfifteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>





	  <div class="about-3">
	    <section class="common-section common-section-theme-circle-img-text SEO">
	      <div id="carousel">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-12">
	              <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
	                <!-- Carousel indicators -->
	                <div class="services">
	                  <div class="row">
	                    <div class="col-md-12 text-center">
	                      <h3>Equipe Técnica</h3>
	                    </div>
	                  </div>
	                </div>
	                <ol class="carousel-indicators">
	                  <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="2" ></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="3" ></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="4" ></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
	                </ol>
	                <!-- Carousel items -->
	                <div class="carousel-inner">
										<?php
												$i=1;
												$equipe = array( 'post_type' => 'pessoa', 'posts_per_page' => 18 );
												query_posts( $equipe );
												while ( have_posts() ) : the_post();
														if($i==1 ){echo "<div class='item active'>";}else {echo "<div class='item'>";}
														$foto = types_render_field('foto', array('raw' => 'true'));
														$professao = types_render_field('professao', array('raw' => 'true'));
														?>
														<div class="row ">
				                      <div class="col-md-12">
				                        <div class="img" style="background-image: url(<?php echo $foto;?>)"></div>
				                        <p class="sub"><?php the_title();?></p>
				                        <p class="prof"><i><?php echo $professao;?></i></p>
				                        <p style="color: #FFF"><?php the_content();?></p>
				                      </div>
				                      <div class="col-md-6">
				                      </div>
				                    </div>
													<?php
														echo "</div>";
														$i++;
												endwhile;	?>


	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>

	    </section>
	  </div>

	  <section id="areas" class="about about-topics">
	    <div class="container">
				<?php
						query_posts('p=83');
						while ( have_posts() ) : the_post();?>
						<div class="services">
			        <div class="row">
			          <div class="col-md-12 text-center">
			            <h3><?php the_title(); ?></h3>
			          </div>
			        </div>
			      </div>

						<?php the_content();?>

						<?php endwhile;	?>      
	    </div>
	  </section>



	  <section id="clientes" class="clientes">

	            <div class="container">
	              <div class="services">
	                <div class="row">
	                  <div class="col-md-12 text-center">
	                    <h3>Clientes</h3>
	                  </div>
	                </div>
	              </div>
	            </div>
	          <div class="container">
	            <div class="row text-center">
	              <div id="carouselcliente">
	                <div class="container">
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="carousel slide" id="fade-quote-carouselcliente" data-ride="carousel" data-interval="3000">
	                        <!-- Carousel indicators -->
	                        <ol class="carousel-indicators">
	                          <li data-target="#fade-quote-carouselcliente" data-slide-to="0"></li>
	                          <li data-target="#fade-quote-carouselcliente" data-slide-to="1" class="active"></li>
	                        </ol>
	                        <!-- Carousel items -->
	                        <div class="carousel-inner">

															<?php
																	$i=0;
																	$clientes = array( 'post_type' => 'cliente', 'posts_per_page' => 24 );

																	query_posts( $clientes );
																	while ( have_posts() ) : the_post();
																			if($i==1 ){echo "<div class='item active'>";}elseif($i%12==0) {echo "<div class='item'>";}
																			?>
																			<div class="col-md-2 col-xs-4 col-md-4">
																				<a href="<?php echo types_render_field('link-cliente', array('raw' => 'true')); ?>" target="_blank"><img src="<?php echo types_render_field('logo-cliente', array('raw' => 'true')); ?>" alt=""  /></a>
																			</div>

																		<?php
																			if($i % 12==0){echo "</div>";}
																			$i++;

																	endwhile;	?>


	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	  </section>



	  <div id="projetos" class="products-3">
	    <section   class="products-list-section">
	      <div class="container">
	        <div class="services">
	          <div class="row">
	            <div class="col-md-12 text-center">
	              <h3>Projetos</h3>
	            </div>
	          </div>
	        </div>
	            <div class="filters">

	              <div id="firstfilter" class="ui-group">
	                <div class="ui-group">
	                  <div class="button-group " data-filter-group="tipo">
	                    <a class="filters is-checked" data-filter="">Todos</a>
											<?php $querystr = "SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key='wpcf-categoria-1'  ORDER BY meta_value ASC";
													$categoria1_names =  $wpdb->get_results($querystr, OBJECT);
													 foreach ( $categoria1_names as $categoria1_name ){ ?>
													   <a class="filters" data-filter=".<?php echo str_replace(' ','',$categoria1_name->meta_value); ?>"><?php echo $categoria1_name->meta_value; ?></a>
													<?php } ?>
	                  </div>
	                </div>
	              </div>



	              <div id="secondfilter" class="ui-group">
	                <div class="button-group" data-filter-group="predio">
	                  <a class="filters filtro is-checked" data-filter="">Todos</a>
										<?php $querystr = "SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key='wpcf-categoria-2'  ORDER BY meta_value ASC";
												$categoria2_names =  $wpdb->get_results($querystr, OBJECT);
												foreach ( $categoria2_names as $categoria2_name ){ ?>
													<a class="filters" data-filter=".<?php echo str_replace(' ','',$categoria2_name->meta_value); ?>"><?php echo $categoria2_name->meta_value; ?></a>
												<?php } ?>
	                </div>
	              </div>

	            </div>



	            <div class="grid">

								<?php

											$args = array( 'post_type' => 'projeto', 'posts_per_page' => 20 );
											query_posts( $args );
											while ( have_posts() ) : the_post();
													$categoria1 = types_render_field('categoria-1', array('raw' => 'true'));
													$categoria2 = types_render_field('categoria-2', array('raw' => 'true'));

													?>
											    <div class="product <?php echo str_replace(' ', '',$categoria1); echo ' '.str_replace(' ', '',$categoria2);?>">
														<div class="img">
						                  <img src="<?php echo types_render_field('imagem', array('url'=>'true' , 'size' => 'thumbnail')); ?>">

						                  <a href="products-single.html" class="view-more">Saiba mais</a>
						                </div>
														<div class="legend">
						                  <h3><?php the_title();?></h3>
															<h4><?php echo $categoria1?><br><?php echo $categoria2?></h4>
						                </div>
											    </div>


								<?php	endwhile;	?>

	            </div>
	          </div>
	    </section>
	  </div>



	  <section  id="namidia" class="namidia common-section common-section-theme-text-text " >
	    <div class="container">
	      <div class="services">
	        <div class="row">
	          <div class="col-md-12 text-center">
	            <h3>Na mídia</h3>
	          </div>
	        </div>
	      </div>

	      <div class="row">
					<?php

								$args = array( 'post_type' => 'link-na-midia', 'posts_per_page' => 4 );
								query_posts( $args );
								while ( have_posts() ) : the_post();?>
										<div class="col-md-3 text-center">
						          <a href="<?php echo types_render_field('link-da-midia', array('raw' => 'true'));?>" target="_blank"><img src="<?php echo types_render_field('imagem-midia', array('raw' => 'true'));?>" alt="" max-width="158px"/></a>
						        </div>
								<?php	endwhile;	?>

	      </div>
	    </div>
	  </section>


	  <section id="contato" class="contact-simple contact-with-map">

	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	            <div class="row">
	              <div class="col-md-12 text-center">
	                <h3>Fale conosco</h3>
	                <p></p>
	              </div>
	            </div>
	        </div>
					<?php if ( ! dynamic_sidebar( 'header-widget-zone' ) ) {} ?>




	      </div>
	    </div>

	  </section>



<?php get_footer(); ?>
