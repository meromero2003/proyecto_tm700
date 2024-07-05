<?php

/**
 * Template Name: Projects Page
 * The template for displaying Projects
 */

get_header();
?>

<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                // Define a custom query to get 'projects' post type
                $args = array(
                    'post_type' => 'project',
                    'post_status' => 'publish',
                    'posts_per_page' => 10, // Adjust the number of posts per page if needed
                );
                $projects_query = new WP_Query($args);
                ?>

                <?php if ($projects_query->have_posts()) : ?>
                    <div class="projects-wrapper row">

                        <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
                            <div class="project-item col-md-3 m-5 " style="background-color: #252424; border-radius: 1rem; padding:2rem;">
                                <h2 class="project-title" style=" color:white;"><?php the_title(); ?></h2>
                                <p class="project-title" style=" color:white;"><?php the_field('description'); ?></>
                                <div class="project-thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="project-content">
                                    <?php the_content(); ?>
                                    
                                </div>
                                <div class="project-meta">
                                    <?php

                                    ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <p><?php esc_html_e('No projects found.', 'text-domain'); ?></p>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>