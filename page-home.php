<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ISAP_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="cover-photo">
            <div id="slogan-wrapper">
                <h1 id="slogan"></h1>
            </div>
        </div>

		<main role="main" class="container">
            <div class="row introduction">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>Introduction</h3>
                    <p>ISAP is a student-run organization geared toward MIS and data analytics majors within Ohio University's College of Business. We host weekly meetings that members network with industry professionals, learn about technological trends, and gain insights about the skills sought by employers. ISAP helps to develop passionate young adults who are ready to learn and share their knowledge to help businesses leverage technology in a dynamic environment.</p>
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <section class="regular slider">
                    <div><a target="_blank" href="https://google.com"><img src="templates/ouisap/assets/img/home/official-sponsors/deloitte.png"></a></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/cardinal.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/ey.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/fifth-third-bank.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/hyland.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/infoverity.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/kpmg.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/marathon.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/parker.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/pwc.png"></div>
                    <div><img src="templates/ouisap/assets/img/home/official-sponsors/wendys.png"></div>
                </section>
            </div>
        </main>

		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', 'page' );

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
