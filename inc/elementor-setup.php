<?php

/*
 * Disable globally the page +title
 *
 * @param $return
 * @return bool
 */
function htrs_disable_page_title($return){
    return false;
}
add_filter('hello_elementor_page_title', 'htrs_disable_page_title');