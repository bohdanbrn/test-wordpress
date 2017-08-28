<?php
    $country = get_the_title();
    $flag = get_field("flag");
    $emblem = get_field("emblem");
    $short_desc = get_field("short_description");
    $population = get_field("population");
    $capital = get_field("capital");
    $time_zone = get_field("time_zone");
    $currency = get_field("currency");
    $busines_index = get_field("busines_index");
    $unemployment_ratio = get_field("unemployment_ratio");
    $it_headcount = get_field("it_headcount");
    $it_graduates = get_field("it_graduates");
    $salary_jun = get_field("salary_jun");
    $salary_mid = get_field("salary_mid");
    $salary_sen = get_field("salary_sen");
    $salary_lead = get_field("salary_lead");
    $income_tax = get_field("income_tax");
    $social_tax = get_field("social_tax");
    $employer_tax = get_field("employer_tax");
    $notice_period = get_field("notice_period");
    $dismissal_conditions = get_field("dismissal_conditions");
    $turnover_ratio = get_field("turnover_ratio");
    $english_level = get_field("english_level");
    $office_rent = get_field("office_rent");
    $stability = get_field("stability");
?>

<div class="country">
    <div>Country: <?php echo !empty($country) ? $country: "<span class='not-filled'>not filled</span>";?></div>
    <div>Flag: <?php echo !empty($flag) ? "<img src='$flag' class='flag'>" : "<span class='not-filled'>not filled</span>";?></div>
    <div>Emblem: <?php echo !empty($emblem) ? "<img src='$emblem' class='emblem'>" : "<span class='not-filled'>not filled</span>";?></div>
    <div>Short description: <?php echo !empty($short_desc) ? $short_desc : "<span class='not-filled'>not filled</span>";?></div>
    <div>Population: <?php echo !empty($population) ? $population : "<span class='not-filled'>not filled</span>";?></div>
    <div>Capital: <?php echo !empty($capital) ? $capital : "<span class='not-filled'>not filled</span>";?></div>
    <div>Time Zone: <?php echo !empty($time_zone) ? $time_zone : "<span class='not-filled'>not filled</span>";?></div>
    <div>Currency: <?php echo !empty($currency) ? $currency : "<span class='not-filled'>not filled</span>";?></div>
    <div>Ease of Doing Busines Index (series of articles): <?php echo !empty($busines_index) ? $busines_index : "<span class='not-filled'>not filled</span>";?></div>
    <div>Unemployment ratio: <?php echo !empty($unemployment_ratio) ? $unemployment_ratio: "<span class='not-filled'>not filled</span>";?></div>
    <div>IT Headcount: <?php echo !empty($it_headcount) ? $it_headcount : "<span class='not-filled'>not filled</span>";?></div>
    <div>IT Graduates: <?php echo !empty($it_graduates) ? $it_graduates : "<span class='not-filled'>not filled</span>";?></div>
    <div>Salary Jun: <?php echo !empty($salary_jun) ? $salary_jun : "<span class='not-filled'>not filled</span>";?></div>
    <div>Salary Mid: <?php echo !empty($salary_mid) ? $salary_mid : "<span class='not-filled'>not filled</span>";?></div>
    <div>Salary Sen: <?php echo !empty($salary_sen) ? $salary_sen : "<span class='not-filled'>not filled</span>";?></div>
    <div>Salary Lead: <?php echo !empty($income_tax) ? $income_tax : "<span class='not-filled'>not filled</span>";?></div>
    <div>Income Tax: <?php echo !empty($social_tax) ? $social_tax : "<span class='not-filled'>not filled</span>";?></div>
    <div>Social Tax: <?php echo !empty($social_tax) ? $social_tax : "<span class='not-filled'>not filled</span>";?></div>
    <div>Employer Tax: <?php echo !empty($employer_tax) ? $employer_tax : "<span class='not-filled'>not filled</span>";?></div>
    <div>Notice Period: <?php echo !empty($notice_period) ? $notice_period : "<span class='not-filled'>not filled</span>";?></div>
    <div>Dismissal Conditions: <?php echo !empty($dismissal_conditions) ? $dismissal_conditions : "<span class='not-filled'>not filled</span>";?></div>
    <div>Turnover Ratio: <?php echo !empty($turnover_ratio) ? $turnover_ratio : "<span class='not-filled'>not filled</span>";?></div>
    <div>English Level: <?php echo !empty($english_level) ? $english_level : "<span class='not-filled'>not filled</span>";?></div>
    <div>OfficeRent: <?php echo !empty($office_rent) ? $office_rent : "<span class='not-filled'>not filled</span>";?></div>
    <div>Stability: <?php echo !empty($stability) ? $stability : "<span class='not-filled'>not filled</span>";?></div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<?php
    /*
    $results = $wpdb->get_results( 
        "SELECT * FROM $wpdb->posts
        INNER JOIN $wpdb->postmeta ON $wpdb->postmeta.post_id = 27
        WHERE post_status = 'publish' 
        AND post_type = 'post'"
    );
    */

    
    function get_full_post_info($post_id) {
        global $wpdb;
        $sql = "SELECT post_title, post_content, meta_key, meta_value FROM $wpdb->posts
        INNER JOIN $wpdb->postmeta ON wp_postmeta.post_id = $post_id
        WHERE wp_posts.ID = $post_id
        AND post_status = 'publish'
        AND post_type = 'post'";
        $results = $wpdb->get_results($sql);

        var_dump($sql); exit;
            
        echo "<pre>";
        if( $results ) {
            foreach ( $results as $result ) {
                var_dump($result);
            }
        }
        echo "</pre>";
    }
    get_full_post_info(27);
    
    /*
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );
    $results = new WP_Query($args);
    /*
    echo "<pre>";
        print_r($results);
    echo "</pre>";
    */
    /*
    $test = get_post_meta(27, '', true);
    echo "<pre>";
        print_r($test);
    echo "</pre>";
    */
    /*
    $test = get_fields(27);
    echo "<pre>";
        print_r($test);
    echo "</pre>";
    */
?>
    <br>
    <br>
    <br>
    <br>
