<?php
/**
* Plugin name: Javascript Localization
*
* Demo created from Ronal Huereca's tutorial:
* Ajax and WordPress, Chapter 3.
*/

include('localize_vars.php');

if (!class_exists("js_localization")) {

  class js_localization  {

    function __construct() {
      wp_enqueue_script('demoscript',plugins_url('js-localization/js/demoscript.js',dirname(__FILE__)));
      wp_localize_script('demoscript','unique_handle',localize_vars());
    }
    
  }
}

$jsl = new js_localization();

?>