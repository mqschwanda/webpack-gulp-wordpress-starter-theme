<?php

namespace React_Wordpress;

class MW_Adminimize_Manager {

  const ADMINISTRATOR_ROLE = 'administrator';
  const SUBSCRIBER_ROLE = 'subscriber';

  const ADMIN_ONLY_DASHBOARD_OPTION_ITEMS = array(
    'dashboard_site_health', // Site Health
    'dashboard_activity', // Recent Activity
    'blc_dashboard_widget', // Broken Link Chekcer
  );
  
  const DISABLED_DASHBOARD_OPTION_ITEMS = array(
    'dashboard_quick_press', // Quick Content
    'dashboard_right_now', // At a Glance
    'dashboard_primary', // WordPress Events and News
  );
  
  const ADMIN_ONLY_ADMIN_BAR_ITEMS = array(
    'switch-off', // Switch off
    'author-switch-to', // User Switching
    'graphiql-ide', // Graphql IDE
    'ds-cli', // DesktopServer CLI
    'query-monitor', // Query Monitor
    'query-monitor-placeholder', // Query Monitor Placeholder
    'new-user', // New User
    'edit', // Edit User
  );
  
  const DISABLED_SUBSCRIBER_ADMIN_BAR_ITEMS = array(
    'user-actions', // User Actions
    'user-info', // User Info 
    'edit-profile', // Edit Profile 
    'logout', // Logout
    'search', // Search
    'my-account', // My Account S
    'comments', // Comments
    'new-content', // New
    'new-post', // New Post
    'new-media', // New Media
    'new-page', // New Page
    'top-secondary', // Account
  );

  const DISABLED_ADMIN_BAR_ITEMS = array(
    'wp-logo', // About WordPress
    'about', // About WordPress
    'wporg', // WordPress.org
    'documentation', // Documentation
    'support-forums', // Support
    'feedback', // Feedback
    'site-name', // Site Name
    'dashboard', // Dashboard
    'appearance', // Appearance
    'themes', // Themes
    'customize', // Customize
    'wp-logo-external', // New Page
  );

  const ADMIN_ONLY_GLOBAL_OPTION_ITEMS = array(
    // '.show-admin-bar',
    '#favorite-actions', // Favorite Actions
    '#screen-meta', // Screen-Meta
    '#screen-options, #screen-options-link-wrap', // Screen Options
    '#contextual-help-link-wrap', // Contextual Help
    '#your-profile .form-table fieldset', // Admin Color Scheme
    '.admin-notices', // Admin Notices
  );
  
  const DISABLED_GLOBAL_OPTION_ITEMS = array(
  );

  const ADMIN_ONLY_MENU_ITEMS = array(
    'activity_log_page', // Activity Log
    'themes.php', // Appearance
    'plugins.php', // Plugins
    'users.php', // Users
    'tools.php', // Tools
    'options-general.php', // Settings
    'graphiql-ide', // GraphQL
  );
  
  const DISABLED_SUBSCRIBER_MENU_ITEMS = array(
    'index.php', // Dashboard 
    'edit.php', // Posts
    'upload.php', // Media
    'edit.php?post_type=page', // Pages
    'edit-comments.php', //  Comments
    'edit.php?post_type=acf-field-group', // Custom Fields
  );

  const DISABLED_MENU_ITEMS = array(
    'separator1', // Separator
    'separator2', // Separator
    'separator-last', // Separator
  );

  const ADMIN_ONLY_SUBMENU_ITEMS = array(
    'activity_log_page__0', // Activity Log
    'activity_log_page__1', // Activity Log Settings
    'themes.php__5', // Appearance Themes
    'themes.php__6', // Appearance Customize
    'plugins.php__5', // Plugins Installed Plugins
    'plugins.php__10', // Plugins Add New
    'users.php__5', // Users All Users
    'users.php__10', // Users Add New
    'users.php__16', // Users User Role Editor
    'tools.php__5', // Tools Available Tools
    'tools.php__10', // Tools Import
    'tools.php__15', // Tools Export
    'tools.php__20', // Tools Site Health
    'tools.php__25', // Tools Export Personal Data
    'tools.php__30', // Tools Erase Personal Data
    'tools.php__31', // Tools Redirection
    'tools.php__32', // Tools Broken Links
    'options-general.php__10', // Settings General
    'options-general.php__15', // Settings Writing
    'options-general.php__20', // Settings Reading
    'options-general.php__25', // Settings Discussion
    'options-general.php__30', // Settings Media
    'options-general.php__40', // Settings Permalinks
    'options-general.php__45', // Settings Privacy
    'options-general.php__46', // Settings Adminimize
    'options-general.php__47', // Settings Disable REST API
    'options-general.php__48', // Settings User Role Editor
    'options-general.php__49', // Settings ImageMagic Engine
    'options-general.php__50', // Settings Link Checker
    'graphiql-ide__0', // GraphQL IDE
    'graphiql-ide__1', // GraphQL Settings
  );
  
  const DISABLED_SUBSCRIBER_SUBMENU_ITEMS = array(
    'index.php__0', // Dashboard Home
    'index.php__10', // Dashboard Updates
    'edit.php__5', // Posts All Posts
    'edit.php__10', // Posts Add New
    'edit.php__15', // Posts Categories
    'edit.php__16' , // Posts Tags
    'upload.php__5', // Media Library
    'upload.php__10', // Media Add New
    'users.php__15', // Users Profile
    'edit.php?post_type=page__5', // Pages All Pages
    'edit.php?post_type=page__10', // Pages Add New
    'edit.php?post_type=acf-field-group__0', // Custom Fields Field Groups
    'edit.php?post_type=acf-field-group__1', // Custom Fields Add New
    'edit.php?post_type=acf-field-group__2', // Custom Fields Tools
  );

  const DISABLED_SUBMENU_ITEMS = array(
    'themes.php__7', // Appearance Theme File Editor
    'plugins.php__15', // Plugins Plugin File Editor
  );

  const ADMIN_ONLY_METABOXES_PAGE_ITEMS = array(
  );

  const DISABLED_SUBSCRIBER_METABOXES_PAGE_ITEMS = array(
    '#contextual-help-link-wrap', // Help
    '#screen-options-link-wrap', // Screen Options
    '.page-title-action', // Add New
    '#title, #titlediv, th.column-title, td.title', // Title
    '#pageslugdiv', // Permalink
    '#tags, #tagsdiv,#tagsdivsb,#tagsdiv-post_tag, th.column-tags, td.tags', // Tags
    '#categories, #categorydiv, #categorydivsb, th.column-categories, td.categories', // Categories
    '#category-add-toggle', // Add New Category
    '#date, #datediv, th.column-date, td.date, div.curtime', // Date
    '#passworddiv', // Password Protect This Post
    '.side-info', // Related, Shortcuts
    '#notice', // Messages
    '#post-body h2', // h2: Advanced Options
    '#media-buttons, #wp-content-media-buttons', // Media Buttons (all)
    '#wp-word-count', // Word count
    '#slugdiv,#edit-slug-box', // Post Slug
    '#misc-publishing-actions', // Publish Actions
    '#commentstatusdiv', // Discussion
    '#editor-toolbar #edButtonHTML, #quicktags, #content-html, .wp-switch-editor.switch-html', // HTML Editor Button
    '#postdivrich, #postdivrichdiv, th.column-postdivrich, td.postdivrich', // Editor
    '#author, #authordiv, th.column-author, td.author', // Author
    '#thumbnail, #thumbnaildiv, th.column-thumbnail, td.thumbnail', // Thumbnail
    '#postexcerpt, #postexcerptdiv, th.column-postexcerpt, td.postexcerpt', // Excerpt
    '#trackbacks, #trackbacksdiv, th.column-trackbacks, td.trackbacks', // Trackbacks
    '#postcustom, #postcustomdiv, th.column-postcustom, td.postcustom', // Custom-fields
    '#comments, #commentsdiv, th.column-comments, td.comments', // Comments
    '#revisions, #revisionsdiv, th.column-revisions, td.revisions', // Revisions
    '#format, #formatdiv, th.column-format, td.format', // Post-formats
    '#postimagediv', // Post Thumbnail
    'div.row-actions, div.row-actions .inline', // Quick Edit Link
    'fieldset.inline-edit-col-left', // QE Inline Edit Left
    'fieldset.inline-edit-col-left label', // QE ⇒ All Labels
    'fieldset.inline-edit-col-left label.inline-edit-author', // QE ⇒ Author
    'fieldset.inline-edit-col-left .inline-edit-group', // QE ⇒ Password and Private
    'fieldset.inline-edit-col-center', // QE Inline Edit Center
    'fieldset.inline-edit-col-center .inline-edit-categories-label', // QE ⇒ Categories Title
    'fieldset.inline-edit-col-center .category-checklist', // QE ⇒ Categories List
    'fieldset.inline-edit-col-right', // QE Inline Edit Right
    'fieldset.inline-edit-col-right .inline-edit-tags', // QE ⇒ Tags
    'fieldset.inline-edit-col-right .inline-edit-group', // QE ⇒ Status, Sticky
    'tr.inline-edit-post p.inline-edit-save', // QE Cancel/Save Button
  );
  
  const DISABLED_METABOXES_PAGE_ITEMS = array(
  );

  const ADMIN_ONLY_METABOXES_POST_ITEMS = array(
  );
  
  const DISABLED_SUBSCRIBER_METABOXES_POST_ITEMS = array(
    '#contextual-help-link-wrap', // Help
    '#screen-options-link-wrap', // Screen Options
    '.page-title-action', // Add New
    '#title, #titlediv, th.column-title, td.title', // Title
    '#pageslugdiv', // Permalink
    '#tags, #tagsdiv,#tagsdivsb,#tagsdiv-post_tag, th.column-tags, td.tags', // Tags
    '#categories, #categorydiv, #categorydivsb, th.column-categories, td.categories', // Categories
    '#category-add-toggle', // Add New Category
    '#date, #datediv, th.column-date, td.date, div.curtime', // Date
    '#passworddiv', // Password Protect This Post
    '.side-info', // Related, Shortcuts
    '#notice', // Messages
    '#post-body h2', // h2: Advanced Options
    '#media-buttons, #wp-content-media-buttons', // Media Buttons (all)
    '#wp-word-count', // Word count
    '#slugdiv,#edit-slug-box', // Post Slug
    '#misc-publishing-actions', // Publish Actions
    '#commentstatusdiv', // Discussion
    '#editor-toolbar #edButtonHTML, #quicktags, #content-html, .wp-switch-editor.switch-html', // HTML Editor Button
    '#postdivrich, #postdivrichdiv, th.column-postdivrich, td.postdivrich', // Editor
    '#author, #authordiv, th.column-author, td.author', // Author
    '#thumbnail, #thumbnaildiv, th.column-thumbnail, td.thumbnail', // Thumbnail
    '#postexcerpt, #postexcerptdiv, th.column-postexcerpt, td.postexcerpt', // Excerpt
    '#trackbacks, #trackbacksdiv, th.column-trackbacks, td.trackbacks', // Trackbacks
    '#postcustom, #postcustomdiv, th.column-postcustom, td.postcustom', // Custom-fields
    '#comments, #commentsdiv, th.column-comments, td.comments', // Comments
    '#revisions, #revisionsdiv, th.column-revisions, td.revisions', // Revisions
    '#format, #formatdiv, th.column-format, td.format', // Post-formats
    '#postimagediv', // Post Thumbnail
    'div.row-actions, div.row-actions .inline', // Quick Edit Link
    'fieldset.inline-edit-col-left', // QE Inline Edit Left
    'fieldset.inline-edit-col-left label', // QE ⇒ All Labels
    'fieldset.inline-edit-col-left label.inline-edit-author', // QE ⇒ Author
    'fieldset.inline-edit-col-left .inline-edit-group', // QE ⇒ Password and Private
    'fieldset.inline-edit-col-center', // QE Inline Edit Center
    'fieldset.inline-edit-col-center .inline-edit-categories-label', // QE ⇒ Categories Title
    'fieldset.inline-edit-col-center .category-checklist', // QE ⇒ Categories List
    'fieldset.inline-edit-col-right', // QE Inline Edit Right
    'fieldset.inline-edit-col-right .inline-edit-tags', // QE ⇒ Tags
    'fieldset.inline-edit-col-right .inline-edit-group', // QE ⇒ Status, Sticky
    'tr.inline-edit-post p.inline-edit-save', // QE Cancel/Save Button
  );

  const DISABLED_METABOXES_POST_ITEMS = array(
  );

  const ADMIN_ONLY_LINK_ITEMS = array(
  );
  
  const DISABLED_LINK_ITEMS = array(
  );

  const ADMIN_ONLY_WIDGET_ITEMS = array(
  );
  
  const DISABLED_WIDGET_ITEMS = array(
  );

  const ADMIN_ONLY_NAV_MENU_ITEMS = array(
  );
  
  const DISABLED_NAV_MENU_ITEMS = array(
  );

  /**
   * Get user roles using MW Adminimize helper function
   * 
   * @return array 
   */
  public static function get_user_roles() {
    return _mw_adminimize_get_all_user_roles();
  }

  /**
   * Get options using MW Adminimize helper function
   * 
   * @return array 
   */
  public static function get_options() {
    return _mw_adminimize_get_option_value();
  }

  /**
   * Get an option using MW Adminimize helper function
   * 
   * @param string $key
   * @return mixed 
   */
  public static function get_option($key) {
    return _mw_adminimize_get_option_value($key);
  }

  /**
   * Set options using MW Adminimize helper function
   * 
   * @param array $options
   * @return bool 
   */
  public static function set_options($options) {
    return _mw_adminimize_update_option($options);
  }

  /**
   * Merge multiple arrays together, remove all falsy items, and remove all duplicates
   * 
   * @param ?array ...arrays
   * @return array
   */
  public static function merge_items_arrays(...$arrays) {
    return array_filter(array_unique(array_merge(...$arrays)));
  }

  /**
   * Get the disabled dashboard items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_dashboard_option_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_DASHBOARD_OPTION_ITEMS;
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_DASHBOARD_OPTION_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_DASHBOARD_OPTION_ITEMS
    ); 
  }

  /**
   * Get the disabled admin bar items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_admin_bar_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_ADMIN_BAR_ITEMS;
    }

    if ($user_role == MW_Adminimize_Manager::SUBSCRIBER_ROLE) {
      return MW_Adminimize_Manager::merge_items_arrays(
        MW_Adminimize_Manager::DISABLED_SUBSCRIBER_ADMIN_BAR_ITEMS,
        MW_Adminimize_Manager::DISABLED_ADMIN_BAR_ITEMS,
        MW_Adminimize_Manager::ADMIN_ONLY_ADMIN_BAR_ITEMS
      );
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_ADMIN_BAR_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_ADMIN_BAR_ITEMS
    ); 
  }

  /**
   * Get the disabled global items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_global_option_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_GLOBAL_OPTION_ITEMS;
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_GLOBAL_OPTION_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_GLOBAL_OPTION_ITEMS
    ); 
  }

  /**
   * Get the disabled menu items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_menu_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_MENU_ITEMS;
    }

    if ($user_role == MW_Adminimize_Manager::SUBSCRIBER_ROLE) {
      return MW_Adminimize_Manager::merge_items_arrays(
        MW_Adminimize_Manager::DISABLED_SUBSCRIBER_MENU_ITEMS,
        MW_Adminimize_Manager::DISABLED_MENU_ITEMS,
        MW_Adminimize_Manager::ADMIN_ONLY_MENU_ITEMS
      );
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_MENU_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_MENU_ITEMS
    ); 
  }

  /**
   * Get the disabled submenu items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_submenu_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_SUBMENU_ITEMS;
    }

    if ($user_role == MW_Adminimize_Manager::SUBSCRIBER_ROLE) {
      return MW_Adminimize_Manager::merge_items_arrays(
        MW_Adminimize_Manager::DISABLED_SUBSCRIBER_SUBMENU_ITEMS,
        MW_Adminimize_Manager::DISABLED_SUBMENU_ITEMS,
        MW_Adminimize_Manager::ADMIN_ONLY_SUBMENU_ITEMS
      );
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_SUBMENU_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_SUBMENU_ITEMS
    ); 
  }

  /**
   * Get the disabled page items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_metaboxes_page_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_METABOXES_PAGE_ITEMS;
    }

    if ($user_role == MW_Adminimize_Manager::SUBSCRIBER_ROLE) {
      return MW_Adminimize_Manager::merge_items_arrays(
        MW_Adminimize_Manager::DISABLED_SUBSCRIBER_METABOXES_PAGE_ITEMS,
        MW_Adminimize_Manager::DISABLED_METABOXES_PAGE_ITEMS,
        MW_Adminimize_Manager::ADMIN_ONLY_METABOXES_PAGE_ITEMS
      );
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_METABOXES_PAGE_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_METABOXES_PAGE_ITEMS
    ); 
  }

  /**
   * Get the disabled post items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_metaboxes_post_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_METABOXES_POST_ITEMS;
    }

    if ($user_role == MW_Adminimize_Manager::SUBSCRIBER_ROLE) {
      return MW_Adminimize_Manager::merge_items_arrays(
        MW_Adminimize_Manager::DISABLED_SUBSCRIBER_METABOXES_POST_ITEMS,
        MW_Adminimize_Manager::DISABLED_METABOXES_POST_ITEMS,
        MW_Adminimize_Manager::ADMIN_ONLY_METABOXES_POST_ITEMS
      );
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_METABOXES_POST_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_METABOXES_POST_ITEMS
    ); 
  }

  /**
   * Get the disabled link items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_link_option_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_LINK_ITEMS;
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_LINK_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_LINK_ITEMS
    ); 
  }

  /**
   * Get the disabled widget items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_widget_option_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_WIDGET_ITEMS;
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_WIDGET_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_WIDGET_ITEMS
    ); 
  }

  /**
   * Get the disabled nav menu items array for a given user role
   * 
   * @param mixed $user_role
   * @return array
   */
  public static function get_disabled_nav_menu_option_items($user_role) {
    if ($user_role == MW_Adminimize_Manager::ADMINISTRATOR_ROLE) {
      return MW_Adminimize_Manager::DISABLED_NAV_MENU_ITEMS;
    }

    return MW_Adminimize_Manager::merge_items_arrays(
      MW_Adminimize_Manager::DISABLED_NAV_MENU_ITEMS,
      MW_Adminimize_Manager::ADMIN_ONLY_NAV_MENU_ITEMS
    ); 
  }

  /**
   * Get the disabled dashboard items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_dashboard_option_items_key($user_role) {
    return 'mw_adminimize_disabled_dashboard_option_' . $user_role . '_items';
  }

  /**
   * Get the disabled admin bar frontend items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_admin_bar_frontend_items_key($user_role) {
    return 'mw_adminimize_disabled_admin_bar_frontend_' . $user_role . '_items';
  }

  /**
   * Get the disabled admin bar backend items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_admin_bar_backend_items_key($user_role) {
    return 'mw_adminimize_disabled_admin_bar_' . $user_role . '_items';
  }

  /**
   * Get the disabled global items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_global_option_items_key($user_role) {
    return 'mw_adminimize_disabled_global_option_' . $user_role . '_items';
  }

  /**
   * Get the disabled menu items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_menu_items_key($user_role) {
    return 'mw_adminimize_disabled_menu_' . $user_role . '_items';
  }

  /**
   * Get the disabled submenu items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_submenu_items_key($user_role) {
    return 'mw_adminimize_disabled_submenu_' . $user_role . '_items';
  }

  /**
   * Get the disabled page items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_metaboxes_page_items_key($user_role) {
    return 'mw_adminimize_disabled_metaboxes_page_' . $user_role . '_items';
  }

  /**
   * Get the disabled post items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_metaboxes_post_items_key($user_role) {
    return 'mw_adminimize_disabled_metaboxes_post_' . $user_role . '_items';
  }

  /**
   * Get the disabled link items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_link_option_items_key($user_role) {
    return 'mw_adminimize_disabled_link_option_' . $user_role . '_items';
  }

  /**
   * Get the disabled widget items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_widget_option_items_key($user_role) {
    return 'mw_adminimize_disabled_widget_option_' . $user_role . '_items';
  }

  /**
   * Get the disabled nav menu items key for a given user role
   * 
   * @param mixed $user_role
   * @return string
   */
  public static function get_disabled_nav_menu_option_items_key($user_role) {
    return 'mw_adminimize_disabled_nav_menu_option_' . $user_role . '_items';
  }

  /**
   * Get disabled options config by mapping keys and values
   * 
   * @param mixed $user_role 
   * @return array
   */
  public static function get_disabled_options_config($user_role) {
    return array(
      // Admin Bar Frontend
      MW_Adminimize_Manager::get_disabled_admin_bar_frontend_items_key($user_role) => MW_Adminimize_Manager::get_disabled_admin_bar_items($user_role),
      // Admin Bar Backend
      MW_Adminimize_Manager::get_disabled_admin_bar_backend_items_key($user_role) => MW_Adminimize_Manager::get_disabled_admin_bar_items($user_role),
      // Global
      MW_Adminimize_Manager::get_disabled_global_option_items_key($user_role) => MW_Adminimize_Manager::get_disabled_global_option_items($user_role),
      // Dashboard Options
      MW_Adminimize_Manager::get_disabled_dashboard_option_items_key($user_role) => MW_Adminimize_Manager::get_disabled_dashboard_option_items($user_role),
      // Menu
      MW_Adminimize_Manager::get_disabled_menu_items_key($user_role) => MW_Adminimize_Manager::get_disabled_menu_items($user_role),
      // Submenu
      MW_Adminimize_Manager::get_disabled_submenu_items_key($user_role) => MW_Adminimize_Manager::get_disabled_submenu_items($user_role),
      // Page Write
      MW_Adminimize_Manager::get_disabled_metaboxes_page_items_key($user_role) => MW_Adminimize_Manager::get_disabled_metaboxes_page_items($user_role),
      // Post Write
      MW_Adminimize_Manager::get_disabled_metaboxes_post_items_key($user_role) => MW_Adminimize_Manager::get_disabled_metaboxes_post_items($user_role),
      // Link
      MW_Adminimize_Manager::get_disabled_link_option_items_key($user_role) => MW_Adminimize_Manager::get_disabled_link_option_items($user_role),
      // Widgets
      MW_Adminimize_Manager::get_disabled_widget_option_items_key($user_role) => MW_Adminimize_Manager::get_disabled_widget_option_items($user_role),
      // WP Nav Menu
      MW_Adminimize_Manager::get_disabled_nav_menu_option_items_key($user_role) => MW_Adminimize_Manager::get_disabled_nav_menu_option_items($user_role)
    );
  }

  /**
   * Configure MW Adminimize 
   */
  public static function init() {
    $user_roles = MW_Adminimize_Manager::get_user_roles();
    $options = MW_Adminimize_Manager::get_options();

    // Backend options
    $options['_mw_adminimize_user_info'] = 0; // show user info area on the top right side of backend
    $options['_mw_adminimize_footer'] = 1; // hide the footer area
    $options['_mw_adminimize_timestamp'] = 0; // do not open the post timestamp editing fields automatically
    $options['_mw_adminimize_cat_full'] = 0; // do not force full height categories

    // configure disabled options for each user role
    foreach ($user_roles as $user_role) {
      $disabled_options_config = MW_Adminimize_Manager::get_disabled_options_config($user_role);

      // go through each disabled option key and configure the default settings
      foreach ($disabled_options_config as $key => $value) {
        $options[$key] = MW_Adminimize_Manager::merge_items_arrays($options[$key], $value);
      }
    }

    MW_Adminimize_Manager::set_options($options);
  }


}

add_action('init', array('\React_Wordpress\MW_Adminimize_Manager', 'init'));
