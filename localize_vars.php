<?php

function localize_vars() {
  return array(
    'SiteUrl' => get_bloginfo('url'),
    'AjaxUrl' => admin_url('admin-ajax.php'),
    'OtherText' => __('My Javascript test text', "my_localization_name"),
    'FooText' => __('Foo! Foo! Foo!', "my_localization_name")
  );
}

?>