<?php
    //header
    get_header();

$contries_args = array(
    'post_type' => 'post',
    'category__in' => array(2), //include only countries
    'order' => 'ASC',
    'posts_per_page' => -1,
);
$cities_args = array(
    'post_type' => 'post',
    'category__in' => array(3), //include only cities
    'order' => 'ASC',
    'posts_per_page' => -1,
);


$countries = new WP_Query($contries_args);
$cities = new WP_Query($cities_args);
 
?>

<div>
    <div>Countries:</div>    
    <?php
    if ( $countries->have_posts() ) {
        while( $countries->have_posts() ) {
            $countries->the_post(); ?>
            <div>
                <div>
                    - <?php the_title(); ?>
                </div>
                <div class="description">
                    <?php the_content();?>
                </div>
            </div>
        <?php
        } //endwhile
    } //endif ?>
</div>

<br>

<div>
    <div>Cities:</div>
    <?php
    if ( $cities->have_posts() ) {
        while( $cities->have_posts() ) {
            $cities->the_post(); ?>
            <div>
                <div>
                    - <?php the_title(); ?>
                </div>
                <div class="description">
                    <?php the_content();?>
                </div>
            </div>
        <?php
        } //endwhile
    } //endif ?>
</div>

<br>

<div>
    <div>Belarus cities:</div>
    <?php
    $balarus_id = 27;
    $belarus_args = array(
        'post_type' => 'post',
        'category__in' => array(3),     //include only cities
        'posts_per_page' => -1,
        'order' => 'ASC',
        'meta_query' => array(          //include only Belarus cities
            //'relation' => 'OR',
            array(
                'key' => 'country',
                'value' => "27",
                //'compare' => 'NOT LIKE'
            )
            /*
            array(
                'key' => 'country_2',
                'value' => "27",
                'compare' => 'LIKE'
            )
            */
        )
    );
    $belarus_cities = new WP_Query($belarus_args);

    if ( $belarus_cities->have_posts() ) {
        while( $belarus_cities->have_posts() ) {
            $belarus_cities->the_post(); ?>
            <div>
                <div>
                    - <?php the_title(); ?>
                    <?php
                        $country_id = get_post_meta($post->ID, "country", true);
                        $country_name = get_the_title($country_id);
                        echo " ($country_name)";
                    ?>
                </div>
                <div class="description">
                    <?php the_content();?>
                </div>
            </div>
        <?php
        } //endwhile
    } //endif
    wp_reset_postdata(); ?>
</div>

<?php
    //footer
    get_footer();
?>