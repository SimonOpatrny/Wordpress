<?php
function moje_sablona_nacteni_skriptu() {
    //CSS
    wp_enqueue_style(
        "hlavni-styly",
        get_template_directory_uri() . "/style.css",
        array(),
        filemtime(get_template_directory() . "/style.css")
    );
    wp_enqueue_style(
        "footer-styly",
        get_template_directory_uri() . "/style/footer.css",
        array(),
        filemtime(get_template_directory() . "/style/footer.css")
    );
    //JS
    wp_enqueue_script(
        "moje-skripty",
        get_template_directory_uri() . "/script/script.js",
        array(),
        filemtime(get_template_directory() . "/script/script.js"),
        true
    );
}
add_action("wp_enqueue_scripts", "moje_sablona_nacteni_skriptu");
?>