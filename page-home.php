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
		<div class="cover-photo" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('cover_photo')); ?>);">
            <div id="slogan-wrapper">
                <h1 id="slogan"></h1>
            </div>
        </div>

		<main role="main" class="container">
            <div class="row introduction">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3><?php echo get_theme_mod('home_headline');?></h3>
                    <p><?php echo get_theme_mod('home_subtext');?></p>
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <section class="regular slider">
                    <?php
                        $args = array(
                            'post_type' => 'isap_companies',
                            'post_per_page' => '-1',
                            'orderby' => 'menu_order',
                            'order'   => 'ASC'
                        );

                        $query = new WP_Query( $args ); // custom wp_query

                        if ( $query->have_posts() ) :

                            while( $query->have_posts() ):
                                $query->the_post();
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile; // End of the loop.
                        endif;
                        wp_reset_postdata();
                    ?>
                </section>
            </div>
        </main>

        <div class="after-article">
            <div class="upcoming-events-wrapper" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('events_photo')); ?>);">
                <div class="upcoming-events">
                    <h3 class="upcoming-events-title">Upcoming Events</h3>
                    <table>
                      <tbody>
                      <?php
                        $args = array(
                            'post_type' => 'isap_events',
                            'post_per_page' => '-1',
                            'orderby' => 'menu_order',
                            'order'   => 'ASC'
                        );

                        $query = new WP_Query( $args ); // custom wp_query

                        if ( $query->have_posts() ) :

                            while( $query->have_posts() ):
                                $query->the_post();
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile; // End of the loop.
                        endif;
                        wp_reset_postdata();
                    ?>
                    </tbody></table>
                </div>
            </div>
            
            <div class="contact-wrapper">
                <div class="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 home-info ">
                                <h3>Information</h3>
                                <table class="contact-us-table">
                                    <tbody><tr>
                                        <td>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mail-icon.svg">
                                        </td>
                                        <td><?php echo get_theme_mod('contact_email'); ?></td>
                                    </tr>
                                    <tr class="tbl-spacer"></tr>
                                    <tr>
                                        <td>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/group.svg">
                                        </td>
                                        <td>Meeting Location<br><?php echo get_theme_mod('meeting_loc'); ?></td>
                                    </tr>
                                    <tr class="tbl-spacer"></tr>
                                    <tr>
                                        <td>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/ou-icon.png">
                                        </td>
                                        <td>Ohio University<br>College of Business</td>
                                    </tr>
                                </tbody></table>
                            </div>

                            <div class="col-md-7 home-contact ">
                                <h3>Contact Us</h3>
                                <form action="https://formspree.io/contact@ouisap.com" method="POST">
                                    <input type="text" name="name" placeholder="Name">
                                    <input type="email" name="email" placeholder="Email">
                                    <select name="concerning">
                                    <option value="Anyone">Send To</option>
                                    <option value="President">President</option>
                                    <option value="Vice-President">Vice-President</option>
                                    <option value="Treasurer">Treasurer</option>
                                    <option value="PR-1">Professional Relations</option>
                                    <option value="DOSE-1">Director of Special Events</option>
                                    <option value="DOSE-2">Director of Membership</option>
                                    <option value="Web-Admin">Web Admin</option>
                                    <option value="Diversity and Inclusion">Director of Diversity and Inclusion</option>
                                    <option value="Recruitment">Director of Recruitment</option>
                                    <option value="Marketing">Marketing</option>
                                </select>
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <input type="submit" value="Send">
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
