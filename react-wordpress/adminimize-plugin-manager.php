<?php

namespace React_WordPress;

/**
 * Manager for the WordPress Plugin: `Adminimize`.
 * 
 * Adminimize makes it easy to remove items from view based on a user’s role.
 * 
 * @see https://wordpress.org/plugins/adminimize/
 * @see https://github.com/bueltge/adminimize
 * @since React WordPress 0.0.1
 * @package Adminimize
 */
class Adminimize_Plugin_Manager extends React_WordPress_Singleton
{
  /**
   * Public
   */

  public const ADMIN_ONLY_DASHBOARD_OPTION_ITEMS = array(
    'dashboard_site_health', // Site Health
    'dashboard_activity', // Recent Activity
    'blc_dashboard_widget', // Broken Link Chekcer
  );
  
  public const DISABLED_DASHBOARD_OPTION_ITEMS = array(
    'dashboard_quick_press', // Quick Content
    'dashboard_right_now', // At a Glance
    'dashboard_primary', // WordPress Events and News
  );
  
  public const ADMIN_ONLY_ADMIN_BAR_ITEMS = array(
    'switch-off', // Switch off
    'author-switch-to', // User Switching
    'graphiql-ide', // Graphql IDE
    'ds-cli', // DesktopServer CLI
    'query-monitor', // Query Monitor
    'query-monitor-placeholder', // Query Monitor Placeholder
    'new-user', // New User
    'edit', // Edit User
  );
  
  public const DISABLED_SUBSCRIBER_ADMIN_BAR_ITEMS = array(
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

  public const DISABLED_ADMIN_BAR_ITEMS = array(
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

  public const ADMIN_ONLY_GLOBAL_OPTION_ITEMS = array(
    // '.show-admin-bar',
    '#favorite-actions', // Favorite Actions
    '#screen-meta', // Screen-Meta
    '#screen-options, #screen-options-link-wrap', // Screen Options
    '#contextual-help-link-wrap', // Contextual Help
    '#your-profile .form-table fieldset', // Admin Color Scheme
    '.admin-notices', // Admin Notices
  );
  
  public const DISABLED_GLOBAL_OPTION_ITEMS = array(
  );

  public const ADMIN_ONLY_MENU_ITEMS = array(
    'activity_log_page', // Activity Log
    'themes.php', // Appearance
    'plugins.php', // Plugins
    'users.php', // Users
    'tools.php', // Tools
    'options-general.php', // Settings
    'graphiql-ide', // GraphQL
  );
  
  public const DISABLED_SUBSCRIBER_MENU_ITEMS = array(
    'index.php', // Dashboard 
    'edit.php', // Posts
    'upload.php', // Media
    'edit.php?post_type=page', // Pages
    'edit-comments.php', //  Comments
    'edit.php?post_type=acf-field-group', // Custom Fields
  );

  public const DISABLED_MENU_ITEMS = array(
    'separator1', // Separator
    'separator2', // Separator
    'separator-last', // Separator
  );

  public const ADMIN_ONLY_SUBMENU_ITEMS = array(
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
  
  public const DISABLED_SUBSCRIBER_SUBMENU_ITEMS = array(
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

  public const DISABLED_SUBMENU_ITEMS = array(
    'themes.php__7', // Appearance Theme File Editor
    'plugins.php__15', // Plugins Plugin File Editor
  );

  public const ADMIN_ONLY_METABOXES_PAGE_ITEMS = array(
  );

  public const DISABLED_SUBSCRIBER_METABOXES_PAGE_ITEMS = array(
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
  
  public const DISABLED_METABOXES_PAGE_ITEMS = array(
  );

  public const ADMIN_ONLY_METABOXES_POST_ITEMS = array(
  );
  
  public const DISABLED_SUBSCRIBER_METABOXES_POST_ITEMS = array(
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

  public const DISABLED_METABOXES_POST_ITEMS = array(
  );

  public const ADMIN_ONLY_LINK_ITEMS = array(
  );
  
  public const DISABLED_LINK_ITEMS = array(
  );

  public const ADMIN_ONLY_WIDGET_ITEMS = array(
  );
  
  public const DISABLED_WIDGET_ITEMS = array(
  );

  public const ADMIN_ONLY_NAV_MENU_ITEMS = array(
  );
  
  public const DISABLED_NAV_MENU_ITEMS = array(
  );

  /**
   * Fires after WordPress has finished loading but before any headers are sent.
   * 
   * @see https://developer.wordpress.org/reference/hooks/init/
   * @since React WordPress 0.0.1
   */
  public static function init()
  {
    self::set_default_options();
  }

  /**
   * Get the disabled dashboard items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_dashboard_option_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_DASHBOARD_OPTION_ITEMS;
    }

    return self::merge_items_arrays(
      self::DISABLED_DASHBOARD_OPTION_ITEMS,
      self::ADMIN_ONLY_DASHBOARD_OPTION_ITEMS
    ); 
  }

  /**
   * Get the disabled admin bar items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_admin_bar_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_ADMIN_BAR_ITEMS;
    }

    if ($user_role == Role::SUBSCRIBER)
    {
      return self::merge_items_arrays(
        self::DISABLED_SUBSCRIBER_ADMIN_BAR_ITEMS,
        self::DISABLED_ADMIN_BAR_ITEMS,
        self::ADMIN_ONLY_ADMIN_BAR_ITEMS
      );
    }

    return self::merge_items_arrays(
      self::DISABLED_ADMIN_BAR_ITEMS,
      self::ADMIN_ONLY_ADMIN_BAR_ITEMS
    ); 
  }

  /**
   * Get the disabled global items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_global_option_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_GLOBAL_OPTION_ITEMS;
    }

    return self::merge_items_arrays(
      self::DISABLED_GLOBAL_OPTION_ITEMS,
      self::ADMIN_ONLY_GLOBAL_OPTION_ITEMS
    ); 
  }

  /**
   * Get the disabled menu items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_menu_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_MENU_ITEMS;
    }

    if ($user_role == Role::SUBSCRIBER)
    {
      return self::merge_items_arrays(
        self::DISABLED_SUBSCRIBER_MENU_ITEMS,
        self::DISABLED_MENU_ITEMS,
        self::ADMIN_ONLY_MENU_ITEMS
      );
    }

    return self::merge_items_arrays(
      self::DISABLED_MENU_ITEMS,
      self::ADMIN_ONLY_MENU_ITEMS
    ); 
  }

  /**
   * Get the disabled submenu items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_submenu_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_SUBMENU_ITEMS;
    }

    if ($user_role == Role::SUBSCRIBER)
    {
      return self::merge_items_arrays(
        self::DISABLED_SUBSCRIBER_SUBMENU_ITEMS,
        self::DISABLED_SUBMENU_ITEMS,
        self::ADMIN_ONLY_SUBMENU_ITEMS
      );
    }

    return self::merge_items_arrays(
      self::DISABLED_SUBMENU_ITEMS,
      self::ADMIN_ONLY_SUBMENU_ITEMS
    ); 
  }

  /**
   * Get the disabled page items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_metaboxes_page_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_METABOXES_PAGE_ITEMS;
    }

    if ($user_role == Role::SUBSCRIBER)
    {
      return self::merge_items_arrays(
        self::DISABLED_SUBSCRIBER_METABOXES_PAGE_ITEMS,
        self::DISABLED_METABOXES_PAGE_ITEMS,
        self::ADMIN_ONLY_METABOXES_PAGE_ITEMS
      );
    }

    return self::merge_items_arrays(
      self::DISABLED_METABOXES_PAGE_ITEMS,
      self::ADMIN_ONLY_METABOXES_PAGE_ITEMS
    ); 
  }

  /**
   * Get the disabled post items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_metaboxes_post_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_METABOXES_POST_ITEMS;
    }

    if ($user_role == Role::SUBSCRIBER)
    {
      return self::merge_items_arrays(
        self::DISABLED_SUBSCRIBER_METABOXES_POST_ITEMS,
        self::DISABLED_METABOXES_POST_ITEMS,
        self::ADMIN_ONLY_METABOXES_POST_ITEMS
      );
    }

    return self::merge_items_arrays(
      self::DISABLED_METABOXES_POST_ITEMS,
      self::ADMIN_ONLY_METABOXES_POST_ITEMS
    ); 
  }

  /**
   * Get the disabled link items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_link_option_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_LINK_ITEMS;
    }

    return self::merge_items_arrays(
      self::DISABLED_LINK_ITEMS,
      self::ADMIN_ONLY_LINK_ITEMS
    ); 
  }

  /**
   * Get the disabled widget items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_widget_option_items($user_role)
  {
    if ($user_role == Role::ADMINISTRATOR)
    {
      return self::DISABLED_WIDGET_ITEMS;
    }

    return self::merge_items_arrays(
      self::DISABLED_WIDGET_ITEMS,
      self::ADMIN_ONLY_WIDGET_ITEMS
    ); 
  }

  /**
   * Get the disabled nav menu items array for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_nav_menu_option_items($user_role) 
  {
    if ($user_role == Role::ADMINISTRATOR) 
    {
      return self::DISABLED_NAV_MENU_ITEMS;
    }

    return self::merge_items_arrays(
      self::DISABLED_NAV_MENU_ITEMS,
      self::ADMIN_ONLY_NAV_MENU_ITEMS
    ); 
  }

  /**
   * Get the disabled dashboard items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_dashboard_option_items_key($user_role)
  {
    return 'mw_adminimize_disabled_dashboard_option_' . $user_role . '_items';
  }

  /**
   * Get the disabled admin bar frontend items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_admin_bar_frontend_items_key($user_role)
  {
    return 'mw_adminimize_disabled_admin_bar_frontend_' . $user_role . '_items';
  }

  /**
   * Get the disabled admin bar backend items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_admin_bar_backend_items_key($user_role)
  {
    return 'mw_adminimize_disabled_admin_bar_' . $user_role . '_items';
  }

  /**
   * Get the disabled global items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_global_option_items_key($user_role)
  {
    return 'mw_adminimize_disabled_global_option_' . $user_role . '_items';
  }

  /**
   * Get the disabled menu items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_menu_items_key($user_role)
  {
    return 'mw_adminimize_disabled_menu_' . $user_role . '_items';
  }

  /**
   * Get the disabled submenu items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_submenu_items_key($user_role)
  {
    return 'mw_adminimize_disabled_submenu_' . $user_role . '_items';
  }

  /**
   * Get the disabled page items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_metaboxes_page_items_key($user_role)
  {
    return 'mw_adminimize_disabled_metaboxes_page_' . $user_role . '_items';
  }

  /**
   * Get the disabled post items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_metaboxes_post_items_key($user_role)
  {
    return 'mw_adminimize_disabled_metaboxes_post_' . $user_role . '_items';
  }

  /**
   * Get the disabled link items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_link_option_items_key($user_role)
  {
    return 'mw_adminimize_disabled_link_option_' . $user_role . '_items';
  }

  /**
   * Get the disabled widget items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_widget_option_items_key($user_role)
  {
    return 'mw_adminimize_disabled_widget_option_' . $user_role . '_items';
  }

  /**
   * Get the disabled nav menu items key for a given user role
   * 
   * @param mixed $user_role
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_disabled_nav_menu_option_items_key($user_role)
  {
    return 'mw_adminimize_disabled_nav_menu_option_' . $user_role . '_items';
  }

  /**
   * Get user roles using Adminimize function
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_user_roles()
  {
    return _mw_adminimize_get_all_user_roles();
  }

  /**
   * Get all options using an Adminimize function
   * 
   * @return mixed
   * 
   * @since React WordPress 0.0.1 
   */
  public static function get_options()
  {
    return _mw_adminimize_get_option_value();
  }

  /**
   * Get a single option using an Adminimize function
   * 
   * @param string $key
   *
   * @return mixed
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_option($key)
  {
    return _mw_adminimize_get_option_value($key);
  }

  /**
   * Set options using Adminimize function
   * 
   * @param array $options
   * 
   * @return bool
   * 
   * @since React WordPress 0.0.1
   */
  public static function set_options($options)
  {
    return _mw_adminimize_update_option($options);
  }

  /**
   * This function takes a string as a parameter and should return a string. The function
   * will be called when the output buffer is flushed (sent) or cleaned (with ob_flush(), 
   * ob_clean() or similar function) or when the output buffer is flushed to the browser 
   * at the end of the request.
   * 
   * If function returns false original input is sent to the browser.
   * 
   * @param string $buffer
   * 
   * @return string,bool
   * 
   * @see https://www.php.net/manual/en/function.ob-start.php
   */
  public static function ob_start($buffer)
  {
    $buffer = self::preg_replace_disabled_inputs($buffer);

    return $buffer;
  }

  /**
   * Turn on output buffering before the Adminimize forms are generated
   * 
   * @since React WordPress 0.0.1
   */
  public static function mw_adminimize_before_settings_form()
  {
    ob_start('self::ob_start');
  }

  /**
   * Send the output buffer and turn off output buffering after Adminimize forms are generated
   * 
   * @since React WordPress 0.0.1
   */
  public static function mw_adminimize_after_settings_form()
  {
    ob_end_flush();
  }

  /**
   * Protected
   */

  /**
   * Initialize `Adminimize_Plugin_Manager` class
   * 
   * @since React WordPress 0.0.1
   */
  protected function __construct()
  {
    parent::__construct();

    add_action('init', array($this, 'init'));

    add_action('mw_adminimize_before_settings_form', array($this, 'mw_adminimize_before_settings_form'));
    add_action('mw_adminimize_after_settings_form', array($this, 'mw_adminimize_after_settings_form'));
  }

  /**
   * Private
   */

  /**
   * Get disabled options config by mapping keys and values
   * 
   * @param mixed $user_role 
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  private function get_disabled_options_config($user_role)
  {
    return array(
      // Admin Bar Frontend
      self::get_disabled_admin_bar_frontend_items_key($user_role) => self::get_disabled_admin_bar_items($user_role),
      // Admin Bar Backend
      self::get_disabled_admin_bar_backend_items_key($user_role) => self::get_disabled_admin_bar_items($user_role),
      // Global
      self::get_disabled_global_option_items_key($user_role) => self::get_disabled_global_option_items($user_role),
      // Dashboard Options
      self::get_disabled_dashboard_option_items_key($user_role) => self::get_disabled_dashboard_option_items($user_role),
      // Menu
      self::get_disabled_menu_items_key($user_role) => self::get_disabled_menu_items($user_role),
      // Submenu
      self::get_disabled_submenu_items_key($user_role) => self::get_disabled_submenu_items($user_role),
      // Page Write
      self::get_disabled_metaboxes_page_items_key($user_role) => self::get_disabled_metaboxes_page_items($user_role),
      // Post Write
      self::get_disabled_metaboxes_post_items_key($user_role) => self::get_disabled_metaboxes_post_items($user_role),
      // Link
      self::get_disabled_link_option_items_key($user_role) => self::get_disabled_link_option_items($user_role),
      // Widgets
      self::get_disabled_widget_option_items_key($user_role) => self::get_disabled_widget_option_items($user_role),
      // WP Nav Menu
      self::get_disabled_nav_menu_option_items_key($user_role) => self::get_disabled_nav_menu_option_items($user_role)
    );
  }

  /**
   * Find and replace input tags that are configured programatically by adding a disabled attribute 
   * 
   * @param string $html 
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  private function preg_replace_disabled_inputs($html)
  {
    $user_roles = self::get_user_roles();
    $patterns = array();

    // configure disabled options for each user role
    foreach ($user_roles as $user_role)
    {
      $disabled_options_config = self::get_disabled_options_config($user_role);
      // go through each disabled option key and get the array of disabled values
      foreach ($disabled_options_config as $name => $values)
      {
        // configure pattern for each input value
        foreach ($values as $value)
        {
          $pattern = '/<input(.*)(name="'.$name.'\[\]")(.*)(value="'.$value.'")(.*)\/>/m';
          array_push($patterns, $pattern);
        }
      }
    }

    $replacement = '<input$1$2$3$4$5 disabled="true" />';
    $html = preg_replace($patterns, $replacement, $html);

    return $html;
  }

  /**
   * Iterate over all user roles and options and set the default value if none exists
   * 
   * @return bool
   * 
   * @since React WordPress 0.0.1
   */
  private function set_default_options()
  {
    $user_roles = self::get_user_roles();
    $options = self::get_options();

    // Backend options
    $options['_mw_adminimize_user_info'] = 0; // show user info area on the top right side of backend
    $options['_mw_adminimize_footer'] = 1; // hide the footer area
    $options['_mw_adminimize_timestamp'] = 0; // do not open the post timestamp editing fields automatically
    $options['_mw_adminimize_cat_full'] = 0; // do not force full height categories

    // configure disabled options for each user role
    foreach ($user_roles as $user_role)
    {
      $disabled_options_config = self::get_disabled_options_config($user_role);

      // go through each disabled option key and configure the default settings
      foreach ($disabled_options_config as $key => $value)
      {
        $options[$key] = self::merge_items_arrays($options[$key], $value);
      }
    }

    return self::set_options($options);
  }

  /**
   * TODO: move to array util class
   * 
   * Merge multiple arrays together, remove all falsy items, and remove all duplicates
   * 
   * @param ?array ...$arrays
   * 
   * @return array
   * 
   * @since React WordPress 0.0.1
   */
  private function merge_items_arrays(...$arrays)
  {
    return array_filter(array_unique(array_merge(...$arrays)));
  }
}