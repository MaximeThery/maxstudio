<?php get_header(); ?>

<?php wp_body_open(); ?>

<?php

if (have_posts()) :
    while (have_posts()) : the_post();
        the_content(); // Affiche le contenu de la page
    endwhile;
else :
    status_header(404);
    get_template_part('404'); // Charge le fichier 404.php de votre thème
    exit;
endif;
?>

<?php get_footer(); ?>