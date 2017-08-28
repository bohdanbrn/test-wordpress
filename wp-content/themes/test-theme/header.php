<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>
            <?php echo wp_get_document_title(); ?>
        </title>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" />
        <?php wp_head(); ?>
    </head>
    <body>