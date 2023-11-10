attrs of $wpdb <br>
```
array(59) {
  [0]=>
  string(11) "__construct"
  [1]=>
  string(5) "__get"
  [2]=>
  string(5) "__set"
  [3]=>
  string(7) "__isset"
  [4]=>
  string(7) "__unset"
  [5]=>
  string(12) "init_charset"
  [6]=>
  string(17) "determine_charset"
  [7]=>
  string(11) "set_charset"
  [8]=>
  string(12) "set_sql_mode"
  [9]=>
  string(10) "set_prefix"
  [10]=>
  string(11) "set_blog_id"
  [11]=>
  string(15) "get_blog_prefix"
  [12]=>
  string(6) "tables"
  [13]=>
  string(6) "select"
  [14]=>
  string(12) "_weak_escape"
  [15]=>
  string(12) "_real_escape"
  [16]=>
  string(7) "_escape"
  [17]=>
  string(6) "escape"
  [18]=>
  string(13) "escape_by_ref"
  [19]=>
  string(16) "quote_identifier"
  [20]=>
  string(7) "prepare"
  [21]=>
  string(8) "esc_like"
  [22]=>
  string(11) "print_error"
  [23]=>
  string(11) "show_errors"
  [24]=>
  string(11) "hide_errors"
  [25]=>
  string(15) "suppress_errors"
  [26]=>
  string(5) "flush"
  [27]=>
  string(10) "db_connect"
  [28]=>
  string(13) "parse_db_host"
  [29]=>
  string(16) "check_connection"
  [30]=>
  string(5) "query"
  [31]=>
  string(9) "log_query"
  [32]=>
  string(18) "placeholder_escape"
  [33]=>
  string(22) "add_placeholder_escape"
  [34]=>
  string(25) "remove_placeholder_escape"
  [35]=>
  string(6) "insert"
  [36]=>
  string(7) "replace"
  [37]=>
  string(22) "_insert_replace_helper"
  [38]=>
  string(6) "update"
  [39]=>
  string(6) "delete"
  [40]=>
  string(7) "get_var"
  [41]=>
  string(7) "get_row"
  [42]=>
  string(7) "get_col"
  [43]=>
  string(11) "get_results"
  [44]=>
  string(15) "get_col_charset"
  [45]=>
  string(14) "get_col_length"
  [46]=>
  string(29) "strip_invalid_text_for_column"
  [47]=>
  string(12) "get_col_info"
  [48]=>
  string(11) "timer_start"
  [49]=>
  string(10) "timer_stop"
  [50]=>
  string(4) "bail"
  [51]=>
  string(5) "close"
  [52]=>
  string(22) "check_database_version"
  [53]=>
  string(18) "supports_collation"
  [54]=>
  string(19) "get_charset_collate"
  [55]=>
  string(7) "has_cap"
  [56]=>
  string(10) "get_caller"
  [57]=>
  string(10) "db_version"
  [58]=>
  string(14) "db_server_info"
}



---------------------------------------------



array(49) {
  ["show_errors"]=>
  bool(true)
  ["suppress_errors"]=>
  bool(false)
  ["last_error"]=>
  string(0) ""
  ["num_queries"]=>
  int(42)
  ["num_rows"]=>
  int(1)
  ["rows_affected"]=>
  int(0)
  ["insert_id"]=>
  int(0)
  ["last_query"]=>
  string(95) "SELECT post_id, meta_key, meta_value FROM wp_postmeta WHERE post_id IN (3) ORDER BY meta_id ASC"
  ["last_result"]=>
  array(1) {
    [0]=>
    object(stdClass)#10579 (3) {
      ["post_id"]=>
      string(1) "3"
      ["meta_key"]=>
      string(17) "_wp_page_template"
      ["meta_value"]=>
      string(7) "default"
    }
  }
  ["queries"]=>
  array(42) {
    [0]=>
    array(5) {
      [0]=>
      string(71) "SELECT option_name, option_value FROM wp_options WHERE autoload = 'yes'"
      [1]=>
      float(0.001611948013305664)
      [2]=>
      string(148) "require_once('wp-load.php'), require_once('wp-config.php'), require_once('wp-settings.php'), wp_not_installed, is_blog_installed, wp_load_alloptions"
      [3]=>
      float(1699555680.241447)
      [4]=>
      array(0) {
      }
    }
    [1]=>
    array(5) {
      [0]=>
      string(83) "SELECT option_value FROM wp_options WHERE option_name = 'uninstall_plugins' LIMIT 1"
      [1]=>
      float(0.0003190040588378906)
      [2]=>
      string(317) "require_once('wp-load.php'), require_once('wp-config.php'), require_once('wp-settings.php'), include_once('/plugins/elementor/elementor.php'), require('/plugins/elementor/includes/plugin.php'), Elementor\Plugin::instance, Elementor\Plugin->__construct, Elementor\Maintenance::init, register_uninstall_hook, get_option"
      [3]=>
      float(1699555680.473075)
      [4]=>
      array(0) {
      }
    }
    [2]=>
    array(5) {
      [0]=>
      string(87) "SELECT option_value FROM wp_options WHERE option_name = 'gutenberg-experiments' LIMIT 1"
      [1]=>
      float(0.00024509429931640625)
      [2]=>
      string(329) "require_once('wp-load.php'), require_once('wp-config.php'), require_once('wp-settings.php'), include_once('/plugins/gutenberg/gutenberg.php'), gutenberg_pre_init, require_once('/plugins/gutenberg/lib/load.php'), require_once('/plugins/gutenberg/lib/compat/wordpress-6.3/rest-api.php'), gutenberg_is_experiment_enabled, get_option"
      [3]=>
      float(1699555680.481251)
      [4]=>
      array(0) {
      }
    }
    [3]=>
    array(5) {
      [0]=>
      string(59) "SELECT * FROM wp_users WHERE user_login = '922tech' LIMIT 1"
      [1]=>
      float(0.00038886070251464844)
      [2]=>
      string(425) "require_once('wp-load.php'), require_once('wp-config.php'), require_once('wp-settings.php'), do_action('plugins_loaded'), WP_Hook->do_action, WP_Hook->apply_filters, elementor_load_plugin_textdomain, load_plugin_textdomain, determine_locale, get_user_locale, wp_get_current_user, _wp_get_current_user, apply_filters('determine_current_user'), WP_Hook->apply_filters, wp_validate_auth_cookie, get_user_by, WP_User::get_data_by"
      [3]=>
      float(1699555680.534346)
      [4]=>
      array(0) {
      }
    }
    ...
    }
  }
  ["prefix"]=>
  string(3) "wp_"
  ["base_prefix"]=>
  string(3) "wp_"
  ["ready"]=>
  bool(true)
  ["blogid"]=>
  int(0)
  ["siteid"]=>
  int(0)
  ["tables"]=>
  array(10) {
    [0]=>
    string(5) "posts"
    [1]=>
    string(8) "comments"
    [2]=>
    string(5) "links"
    [3]=>
    string(7) "options"
    [4]=>
    string(8) "postmeta"
    [5]=>
    string(5) "terms"
    [6]=>
    string(13) "term_taxonomy"
    [7]=>
    string(18) "term_relationships"
    [8]=>
    string(8) "termmeta"
    [9]=>
    string(11) "commentmeta"
  }
  ["old_tables"]=>
  array(3) {
    [0]=>
    string(10) "categories"
    [1]=>
    string(8) "post2cat"
    [2]=>
    string(8) "link2cat"
  }
  ["global_tables"]=>
  array(2) {
    [0]=>
    string(5) "users"
    [1]=>
    string(8) "usermeta"
  }
  ["ms_global_tables"]=>
  array(6) {
    [0]=>
    string(5) "blogs"
    [1]=>
    string(8) "blogmeta"
    [2]=>
    string(7) "signups"
    [3]=>
    string(4) "site"
    [4]=>
    string(8) "sitemeta"
    [5]=>
    string(16) "registration_log"
  }
  ["old_ms_global_tables"]=>
  array(1) {
    [0]=>
    string(14) "sitecategories"
  }
  ["comments"]=>
  string(11) "wp_comments"
  ["commentmeta"]=>
  string(14) "wp_commentmeta"
  ["links"]=>
  string(8) "wp_links"
  ["options"]=>
  string(10) "wp_options"
  ["postmeta"]=>
  string(11) "wp_postmeta"
  ["posts"]=>
  string(8) "wp_posts"
  ["terms"]=>
  string(8) "wp_terms"
  ["term_relationships"]=>
  string(21) "wp_term_relationships"
  ["term_taxonomy"]=>
  string(16) "wp_term_taxonomy"
  ["termmeta"]=>
  string(11) "wp_termmeta"
  ["usermeta"]=>
  string(11) "wp_usermeta"
  ["users"]=>
  string(8) "wp_users"
  ["blogs"]=>
  NULL
  ["blogmeta"]=>
  NULL
  ["registration_log"]=>
  NULL
  ["signups"]=>
  NULL
  ["site"]=>
  NULL
  ["sitecategories"]=>
  NULL
  ["sitemeta"]=>
  NULL
  ["field_types"]=>
  array(34) {
    ["post_author"]=>
    string(2) "%d"
    ["post_parent"]=>
    string(2) "%d"
    ["menu_order"]=>
    string(2) "%d"
    ["term_id"]=>
    string(2) "%d"
    ["term_group"]=>
    string(2) "%d"
    ["term_taxonomy_id"]=>
    string(2) "%d"
    ["parent"]=>
    string(2) "%d"
    ["count"]=>
    string(2) "%d"
    ["object_id"]=>
    string(2) "%d"
    ["term_order"]=>
    string(2) "%d"
    ["ID"]=>
    string(2) "%d"
    ["comment_ID"]=>
    string(2) "%d"
    ["comment_post_ID"]=>
    string(2) "%d"
    ["comment_parent"]=>
    string(2) "%d"
    ["user_id"]=>
    string(2) "%d"
    ["link_id"]=>
    string(2) "%d"
    ["link_owner"]=>
    string(2) "%d"
    ["link_rating"]=>
    string(2) "%d"
    ["option_id"]=>
    string(2) "%d"
    ["blog_id"]=>
    string(2) "%d"
    ["meta_id"]=>
    string(2) "%d"
    ["post_id"]=>
    string(2) "%d"
    ["user_status"]=>
    string(2) "%d"
    ["umeta_id"]=>
    string(2) "%d"
    ["comment_karma"]=>
    string(2) "%d"
    ["comment_count"]=>
    string(2) "%d"
    ["active"]=>
    string(2) "%d"
    ["cat_id"]=>
    string(2) "%d"
    ["deleted"]=>
    string(2) "%d"
    ["lang_id"]=>
    string(2) "%d"
    ["mature"]=>
    string(2) "%d"
    ["public"]=>
    string(2) "%d"
    ["site_id"]=>
    string(2) "%d"
    ["spam"]=>
    string(2) "%d"
  }
  ["charset"]=>
  string(7) "utf8mb4"
  ["collate"]=>
  string(22) "utf8mb4_unicode_520_ci"
  ["func_call"]=>
  string(109) "$db->query("SELECT post_id, meta_key, meta_value FROM wp_postmeta WHERE post_id IN (3) ORDER BY meta_id ASC")"
  ["is_mysql"]=>
  bool(true)
  ["time_start"]=>
  float(1699555680.930731)
  ["error"]=>
  NULL
  ["categories"]=>
  string(13) "wp_categories"
  ["post2cat"]=>
  string(11) "wp_post2cat"
  ["link2cat"]=>
  string(11) "wp_link2cat"
}

```
