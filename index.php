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



		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>

			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
		<header id="homeCarousel" class="header-carousel header-fixed carousel slide">
	    <ol class="carousel-indicators">
	      <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
	      <li class="" data-target="#homeCarousel" data-slide-to="1"></li>
	      <li class="" data-target="#homeCarousel" data-slide-to="2"></li>
	    </ol>

	    <div class="carousel-inner">
	      <div class="item active">
	        <div class="fill" style="background-image:url('<?php bloginfo('template_url'); ?>/img/bg-slider.png');"></div>
	        <div class="carousel-content-bottom">
	          <div class="container">
	            <div class="row">
	              <div class="col-md-12">
	                <div class="center text-center">
	                  <div style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay025" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-60%&quot;}" data-to-animate="fadeInDown delay025">
	                    <div class="outside-border block-center">
	                      <p class="intro">Seja bem-vindo</p>
	                    </div>
	                  </div>
	                  <h1 style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay05" data-to-animate="fadeInDown delay05" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-80%&quot;}">Lorem ipsum dolor sit amet</h1>
	                  <h2 style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay075" data-to-animate="fadeInDown delay075" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-300%&quot;}">Great solution for your business, portfolio, blog or any other purpose website</h2>
	                  <div style="animation-name: no-animation;" class="doscrollmagic buttons animated fadeInDown delay1" data-to-animate="fadeInDown delay1" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-200%&quot;}">
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="item">

	        <div class="fill" style="background-image:url('assets/media/slide-02.jpg');"></div>
	        <div class="carousel-content-bottom">
	          <div class="container">
	            <div class="row">
	              <div class="col-md-12">
	                <div class="center text-center">
	                  <div style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay025" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-60%&quot;}" data-to-animate="fadeInDown delay025">
	                    <div class="outside-border block-center">
	                      <p class="intro">Seja bem-vindo</p>
	                    </div>
	                  </div>
	                  <h1 style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay05" data-to-animate="fadeInDown delay05" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-80%&quot;}">Lorem ipsum dolor sit amet</h1>
	                  <h2 style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay075" data-to-animate="fadeInDown delay075" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-300%&quot;}">Great solution for your business, portfolio, blog or any other purpose website</h2>
	                  <div style="animation-name: no-animation;" class="doscrollmagic buttons animated fadeInDown delay1" data-to-animate="fadeInDown delay1" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-200%&quot;}">
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="item">

	        <div class="fill" style="background-image:url('assets/media/slide-03.jpg');"></div>
	        <div class="carousel-content-bottom">
	          <div class="container">
	            <div class="row">
	              <div class="col-md-12">
	                <div class="center text-center">
	                  <div style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay025" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-60%&quot;}" data-to-animate="fadeInDown delay025">
	                    <div class="outside-border block-center">
	                      <p class="intro">Seja bem-vindo</p>
	                    </div>
	                  </div>
	                  <h1 style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay05" data-to-animate="fadeInDown delay05" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-80%&quot;}">Lorem ipsum dolor sit amet</h1>
	                  <h2 style="animation-name: no-animation;" class="doscrollmagic animated fadeInDown delay075" data-to-animate="fadeInDown delay075" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-300%&quot;}">Great solution for your business, portfolio, blog or any other purpose website</h2>
	                  <div style="animation-name: no-animation;" class="doscrollmagic buttons animated fadeInDown delay1" data-to-animate="fadeInDown delay1" data-scrollmagic="{&quot;opacity&quot;:0,&quot;y&quot;:&quot;-200%&quot;}">
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

	    <a class="left carousel-control" href="#homeCarousel" data-slide="prev">
	      <span class="icon-prev"></span>
	    </a>
	    <a class="right carousel-control" href="#homeCarousel" data-slide="next">
	      <span class="icon-next"></span>
	    </a>
	  </header>





	  <div id="quemsomos" class="about-2">
	  <section  class="common-section common-section-theme-text-img first-section" >
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <h1>Nosso diferencial</h1>
	        </div>
	        <div class="col-md-6 padding-bottom">
	          <p>Utilizamos os melhores softwares disponíveis no mercado como o TQS, SAP2000 e Revit. Temos uma equipe técnica extremamente preparada, experiente e em contínua melhoria através de especializações, mestrados e demais cursos. Procuramos também frequentar diversos eventos e seminários que tenham alguma atualização que poderá se refletir em ganho de qualidade de nossos projetos. Sempre preocupados em estar plenamente atualizados, terminamos de desenvolver no primeiro semestre de 2015, juntamente com a MRV, um projeto estrutural em alvenaria de um prédio residencial em “REVIT”, para a plataforma BIM, que acreditamos que será o início de uma nova e importante fase no setor de projetos residenciais de nossa empresa. Temos uma estrutura interna de verificação de projetos muito eficiente, para que os projetos não apresentem erros. E conseguimos manter essa qualidade sem prejudicar um de nossos maiores diferenciais que são os curtos prazos de entrega do serviço. Todos os nossos clientes podem testemunhar nossa abnegada preocupação em cumprir a risca todos os prazos estipulados, por mais curtos que sejam.</p>
	        </div>
	        <div class="col-md-6 padding-bottom">
	          <img src="<?php bloginfo('template_url'); ?>/img/eng-01.png">
	        </div>
	      </div>
	    </div>
	  </section>
	  </div>

	  <section class="common-section common-section-theme-text-text whowe" >
	    <div class="container">
	      <div class="row">
	        <div class="col-md-6 ">
	          <h1>Quem somos</h1>
	          <p>O responsável técnico da E. Bicalho Rodrigues Engenharia Civil e Estrutural é o Engenheiro Estêvão Bicalho Pinto Rodrigues, CREA 13.753/D-MG. Ele é graduado em engenharia civil pela UFMG (1975), pela qual tem também o título de “Especialista em Estruturas” (1982) e o título de “Mestre em Estruturas” (2003). Foi professor do Departamento de Engenharia de Estruturas da Escola de Engenharia da UFMG de julho de 1975 a julho de 2012, portanto durante 37 anos. Neste período, lecionou também na FUMEC (3 semestres) e na PUC (1 semestre).</p>
	        </div>
	        <div class="col-md-6 ">
	          <h1>O que fazemos</h1>
	          <p>A empresa foi fundada em 1979 e desenvolve projetos em concreto armado e alvenaria estrutural. Sempre tivemos a preocupação de desenvolver projetos estruturais em várias áreas, para não ficarmos reféns de eventuais oscilações do mercado. Projetamos estruturas hidráulicas, estruturas industriais, prédios comerciais, prédios residenciais, instituições de ensino e casas. Temos equipes especializadas em todas estas áreas, com profissionais qualificados que utilizam os mais modernos softwares para que possamos desenvolver a melhor estrutura para cada caso específico.</p>        </div>
	      </div>
	    </div>
	  </section>

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
	                  <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="3" class="active"></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="4" class="active"></li>
	                  <li data-target="#fade-quote-carousel" data-slide-to="5" class="active"></li>
	                </ol>
	                <!-- Carousel items -->
	                <div class="carousel-inner">
	                  <div class="item">
	                    <div class="row ">
	                      <div class="col-md-12">
	                        <div class="img" style="background-image: url(assets/media/about-us-CEO.png)"></div>
	                        <p class="sub">Geraldo Henrique</p>
	                        <p class="prof"><i>Engenheira Civil | UFMG 1990</i></p>
	                        <p style="color: #FFF">.</p>
	                      </div>
	                      <div class="col-md-6">
	                      </div>
	                    </div>
	                  </div>
	                  <div class="item">
	                    <div class="row ">
	                      <div class="col-md-12">
	                        <div class="img" style="background-image: url(assets/media/about-us-CEO.png)"></div>
	                        <p class="sub">Luciana Sampaio Câmara</p>
	                        <p class="prof"><i>Engenheira Civil | UFMG 1990</i></p>
	                        <p>Especialização em Redes de Telecomunicações (UFMG 2001), Mestrado em Estruturas (UFMG 2008).</p>
	                      </div>
	                      <div class="col-md-6">
	                      </div>
	                    </div>
	                  </div>
	                  <div class="active item">
	                    <div class="row ">
	                      <div class="col-md-12">
	                        <div class="img" style="background-image: url(assets/media/about-us-CEO.png)"></div>
	                        <p class="sub">Fabiano Queiroz Gomes</p>
	                        <p class="prof"><i>Engenheira Civil | UFMG 2001</i></p>
	                        <p>Especialização em Estruturas (UFMG 2004).</p>
	                      </div>
	                      <div class="col-md-6">
	                      </div>
	                    </div>
	                  </div>
	                  <div class=" item">
	                    <div class="row ">
	                      <div class="col-md-12">
	                        <div class="img" style="background-image: url(assets/media/about-us-CEO.png)"></div>
	                        <p class="sub">Marcelo Paixão Pinto Rodrigues </p>
	                        <p class="prof"><i>Engenheira Civil | UFMG 2005</i></p>
	                        <p>Mestrado em Estruturas (UFMG 2009), MBA Executivo (IBMEC 2011).</p>
	                      </div>
	                      <div class="col-md-6">
	                      </div>
	                    </div>
	                  </div>

	                  <div class=" item">
	                    <div class="row ">
	                      <div class="col-md-12">
	                        <div class="img" style="background-image: url(assets/media/about-us-CEO.png)"></div>
	                        <p class="sub">Tânia Albuquerque</p>
	                        <p class="prof"><i>Engenheira Civil | UFMG 2007</i></p>
	                        <p>Especialização em Estruturas (UFMG 2013).</p>
	                      </div>
	                      <div class="col-md-6">
	                      </div>
	                    </div>
	                  </div>

	                  <div class=" item">
	                    <div class="row ">
	                      <div class="col-md-12">
	                        <div class="img" style="background-image: url(assets/media/about-us-CEO.png)"></div>
	                        <p class="sub">Lucas Thomaz Mourão</p>
	                        <p class="prof"><i>Engenheira Civil | UFMG 2009</i></p>
	                        <p>Especialização em Estruturas (UFMG 2013).</p>
	                      </div>
	                      <div class="col-md-6">
	                      </div>
	                    </div>
	                  </div>

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

	      <div class="services">
	        <div class="row">
	          <div class="col-md-12 text-center">
	            <h3>Áreas de Atuação</h3>
	          </div>
	        </div>
	      </div>

	      <div class="row padding-top">
	        <div class="col-sm-4 ">
	          <img src="<?php bloginfo('template_url'); ?>/img/atuacao01.png" class="full-responsive" alt="">
	          <h2>Alvenaria 01</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales.</p>
	        </div>
	        <div class="col-sm-4 ">
	          <img src="<?php bloginfo('template_url'); ?>/img/atuacao02.png" class="full-responsive" alt="">
	          <h2>Alvenaria 02</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales.</p>
	        </div>
	        <div class="col-sm-4 ">
	          <img src="<?php bloginfo('template_url'); ?>/img/atuacao03.png" class="full-responsive" alt="">
	          <h2>Alvenaria 03</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales.</p>
	        </div>
	      </div>
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
	                          <div class="item">
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>

	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>


	                          <!--finrow-->
	                          </div>
	                          <div class=" active item">

	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>

	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>
	                            <div class="col-md-2 col-xs-4 col-md-4">
	                              <img src="assets/media/cliente.png" alt=""  />
	                            </div>

	                          </div>
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
	                    <a class="filters" data-filter=".concreto">Concreto</a>
	                    <a class="filters" data-filter=".alvenaria">Alvenaria de estrutura</a>
	                  </div>
	                </div>
	              </div>

								<section id="post-<?php the_ID(); ?>" <?php post_class(array('projetos', $slug)); ?>>

								  <?php while ( have_posts() ) : the_post(); ?>

								    <?php the_content(); ?>

								  <?php endwhile; // end of the loop. ?>

								</section><!-- #post-## -->

	              <div id="secondfilter" class="ui-group">
	                <div class="button-group" data-filter-group="predio">
	                  <a class="filters filtro is-checked" data-filter="">Todos</a>
	                  <a class="filters filtro" data-filter=".casas">casas</a>
	                  <a class="filters filtro" data-filter=".residenciais">Edificios Residenciais</a>
	                  <a class="filters filtro" data-filter=".comerciais">Edificios comerciais</a>
	                  <a class="filters filtro" data-filter=".industriais">Projetos Industriais</a>
	                  <a class="filters filtro" data-filter=".paalvenariaconcreto">Paalvenariaes de Concreto</a>
	                  <a class="filters filtro" data-filter=".institucoes">Instituções de Ensino </a>
	                </div>
	              </div>



	            </div>

	            <div class="grid">
	              <div class="product  casas alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-1.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                  <h3>Lorem ipsum</h3>
	                  <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  residenciais concreto">
	                <div class="img">
	                  <img src="assets/media/product3-2.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  industriais alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-3.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  paalvenariaconcreto alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-4.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  residenciais concreto">
	                <div class="img">
	                  <img src="assets/media/product3-5.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  institucoes alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-6.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  industriais alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-7.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  paalvenariaconcreto concreto">
	                <div class="img">
	                  <img src="assets/media/product3-8.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  industriais alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-1.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  comerciais alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-2.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  industriais concreto">
	                <div class="img">
	                  <img src="assets/media/product3-3.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  comerciais alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-4.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  institucoes alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-5.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  comerciais concreto">
	                <div class="img">
	                  <img src="assets/media/product3-6.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  institucoes alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-7.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
	              <div class="product  casas alvenaria">
	                <div class="img">
	                  <img src="assets/media/product3-8.png">
	                  <a href="products-single.html" class="view-more">Saiba mais</a>
	                </div>
	                <div class="legend">
	                    <h3>Lorem ipsum</h3>
	                    <h4>Categoria</h4>
	                </div>
	              </div>
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
	        <div class="col-md-3 text-center">
	          <img src="<?php bloginfo('template_url'); ?>/img/logo_estadao.png" alt="" width="60%"/>
	        </div>
	        <div class="col-md-3 text-center">
	          <img src="<?php bloginfo('template_url'); ?>/img/logo_startse_portal.png" alt="" width="60%"/>
	        </div>
	        <div class="col-md-3 text-center">
	          <img src="<?php bloginfo('template_url'); ?>/img/logo_estadao.png" alt="" width="60%"/>
	        </div>
	        <div class="col-md-3 text-center">
	          <img src="<?php bloginfo('template_url'); ?>/img/logo_startse_portal.png" alt="" width="60%"/>
	        </div>
	      </div>
	    </div>
	  </section>


	  <section id="contato" class="contact-simple contact-with-map">
	    <form action="" method="POST" accept-charset="utf-8" class="">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	            <div class="row">
	              <div class="col-md-12 text-center">
	                <h3>Fale conosco</h3>
	                <p>Lorem ipsum dolor sit amet.</p>
	              </div>
	            </div>
	        </div>

	        <div class="col-md-7">

	            <div class="row">
	              <div class="col-md-4">
	                <div class="form-group">
	                  <label for="NameField">Nome</label>
	                  <input class="form-control" id="NameField" placeholder="" type="text">
	                </div>
	              </div>
	              <div class="col-md-4">
	                <div class="form-group">
	                  <label for="EmailField">Email</label>
	                  <input class="form-control" id="EmailField" placeholder="" type="email">
	                </div>
	              </div>
	              <div class="col-md-4">
	                <div class="form-group">
	                  <label for="PhoneField">Telefone</label>
	                  <input class="form-control" id="PhoneField" placeholder="" type="text">
	                </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-md-8">
	                <div class="form-group">
	                  <label for="SubjectField">Assunto</label>
	                  <input class="form-control" id="SubjectField" placeholder="" type="text">
	                </div>
	              </div>
	              <div class="col-md-4">
	                <div class="form-group">
	                  <label for="ServicesField">Área de interesse</label>
	                  <select class="form-control" id="ServicesField" name="ServicesField">
	                    <option value="">Service 1</option>
	                    <option value="">Service 2</option>
	                    <option value="">Service 3</option>
	                    <option value="">Service 4</option>
	                  </select>
	                </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-md-8">
	                <div class="form-group">
	                  <label for="MessageField">Mensagem</label>
	                  <textarea class="form-control" id="MessageField" name="MessageField" cols="4"></textarea>
	                </div>
	              </div>
	              <div class="col-md-4 text-right">
	                <div class="form-group buttonPadding">
	                  <button type="submit" class="btn btn-squared btn-blue">Enviar mensagem</button>
	                </div>
	              </div>
	            </div>

	        </div>

	        <div class="col-md-5">
	          <div class="gmap" data-coord-x="49.49099" data-coord-y="11.10704" data-zoom="13" style="width: 100%; height: 280px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 38px; top: -157px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 38px; top: 99px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -218px; top: -157px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -218px; top: 99px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 294px; top: -157px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 294px; top: 99px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 458px; height: 300px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i1113050&amp;2i715677&amp;2e1&amp;3u13&amp;4m2&amp;1u458&amp;2u300&amp;5m5&amp;1e0&amp;5sen&amp;6sus&amp;10b1&amp;12b1&amp;token=40259" style="width: 458px; height: 300px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 38px; top: -157px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i13!2i4348!3i2795!2m3!1e0!2sm!3i318325605!3m9!2sen!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;"></div><div style="position: absolute; left: 38px; top: 99px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i13!2i4348!3i2796!2m3!1e0!2sm!3i318325605!3m9!2sen!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;"></div><div style="position: absolute; left: -218px; top: -157px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i13!2i4347!3i2795!2m3!1e0!2sm!3i318325605!3m9!2sen!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;"></div><div style="position: absolute; left: -218px; top: 99px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i13!2i4347!3i2796!2m3!1e0!2sm!3i318325605!3m9!2sen!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;"></div><div style="position: absolute; left: 294px; top: -157px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i13!2i4349!3i2795!2m3!1e0!2sm!3i318312647!3m9!2sen!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;"></div><div style="position: absolute; left: 294px; top: 99px; width: 256px; height: 256px; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i13!2i4349!3i2796!2m3!1e0!2sm!3i318318410!3m9!2sen!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" style="-moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 256px; height: 256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a title="Click to see this area on Google Maps" href="https://maps.google.com/maps?ll=49.49099,11.10704&amp;z=13&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=apiv3" target="_blank" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img draggable="false" src="http://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 79px; top: 60px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2015 GeoBasis-DE/BKG (©2009), Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img draggable="false" src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div></div><div style="z-index: 1000001; position: absolute; right: 161px; bottom: 0px; width: 54px;" class="gmnoprint"><div class="gm-style-cc" style="-moz-user-select: none;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer;">Map Data</a><span style="display: none;">Map data ©2015 GeoBasis-DE/BKG (©2009), Google</span></div></div></div><div style="position: absolute; right: 0px; bottom: 0px;" class="gmnoscreen"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2015 GeoBasis-DE/BKG (©2009), Google</div></div><div draggable="false" style="z-index: 1000001; -moz-user-select: none; position: absolute; right: 92px; bottom: 0px;" class="gmnoprint gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_blank" href="https://www.google.com/intl/en_US/help/terms_maps.html" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div class="gm-style-cc" style="-moz-user-select: none; position: absolute; right: 0px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="https://www.google.com/maps/@49.49099,11.10704,13z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" title="Report errors in the road map or imagery to Google" target="_new">Report a map error</a></div></div><div controlheight="39" controlwidth="20" draggable="false" style="margin: 5px; -moz-user-select: none; position: absolute; left: 0px; top: 0px;" class="gmnoprint"><div controlheight="0" controlwidth="0" style="opacity: 0.6; display: none; position: absolute;" class="gmnoprint"><div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img draggable="false" src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div></div><div style="position: absolute; left: 0px; top: 0px;" controlheight="39" controlwidth="20" class="gmnoprint"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img draggable="false" src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div title="Zoom in" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Zoom out" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div></div></div>
	        </div>
	      </div>
	    </div>
	    </form>
	  </section>



<?php get_footer(); ?>
