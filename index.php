<?php 

get_header();
global $cs;
$layout = $cs['nav-item']['enabled'];
if (!$cs['show-menu']) {
    get_template_part( 'cs-parts/cs', 'home' );
} else {
get_template_part( 'cs-parts/cs', 'menu' );
get_template_part( 'cs-parts/cs', 'home' );
    if($layout){
        foreach ($layout as $key => $value) {
            switch ($key) {
                case 'when':
                    get_template_part( 'cs-parts/cs', 'when' );
                    break;
                case 'about':
                    get_template_part( 'cs-parts/cs', 'about' );
                    break;
                case 'contact':
                    get_template_part( 'cs-parts/cs', 'contact' );
                    break;
            }
        }
    } else {
        get_template_part( 'cs-parts/cs', 'when' );
        get_template_part( 'cs-parts/cs', 'about' );
        get_template_part( 'cs-parts/cs', 'contact' );
    }
}
if ($cs['show-footer']) {
    get_template_part( 'cs-parts/cs', 'footer' );
}
get_footer( );
?>