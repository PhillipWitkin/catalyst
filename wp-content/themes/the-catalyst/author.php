/*
Template Name: Authors
*/

<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content" class="narrowcolumn">

<!-- This sets the $curauth variable -->

    <?php
    //$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    $curauth =  get_userdata(intval($author));
    $disp_auth = get_user_by('slug', $author);
    
    ?>

    <div id="articles">
    
        <h3 class="archive_title"><?php _e( ' Articles written by: ', 'wpzoom' ); echo $curauth->display_name; ?> </h3>
        

        <div class="author-info">
                <?php echo get_avatar( get_the_author_meta('ID'), 65 ); ?>
                <p><?php the_author_meta( 'description' ); ?></p>
                <div class="clear"></div>
        </div>



        <ul>
        <!-- The Loop -->
        <?php 
        // global $post;
        // $args = array(
        //     // 'posts_per_page'   => 5,
        //     'meta_key'         => 'author',
        //     'meta_value'       => $curauth->display_name,
        //     'suppress_filters' => true 
        // );
        //$posts_array = get_posts( $args ); 

        //$my_query = new WP_Query($args); 
        //while($my_query->have_posts() ) : $my_query->the_post(); 
        // query_posts($args);
        query_posts_by_author($curauth, $disp_auth);
        
        get_template_part('loop');

        wp_reset_postdata();
            
        ?>

        <!-- End Loop -->
        
        </ul>

    </div>
</div>

<?php get_footer(); ?>
