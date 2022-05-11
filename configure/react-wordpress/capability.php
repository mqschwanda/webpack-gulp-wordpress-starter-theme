<?php

namespace React_WordPress;

/**
 * Manager for the WordPress: `Capability`.
 * 
 * User Role Editor allows you to change user roles and capabilities easy.
 * 
 * @since React WordPress 0.0.1
 */
class Capability extends React_WordPress_Class
{
  /**
   * Public
   */

  /**
   * enabled capabilities
   */
  // WordPress Core
  // WordPress Core: General
  public const EDIT_DASHBOARD = 'edit_dashboard';
  public const EXPORT = 'export';
  public const IMPORT = 'import';
  public const INSTALL_LANGUAGES = 'install_languages';
  public const MANAGE_CATEGORIES = 'manage_categories';
  public const MANAGE_LINKS = 'manage_links';
  public const MANAGE_OPTIONS = 'manage_options';
  public const MODERATE_COMMENTS = 'moderate_comments';
  public const READ = 'read';
  public const UNFILTERED_HTML = 'unfiltered_html';
  public const UNFILTERED_UPLOAD = 'unfiltered_upload';
  public const UPDATE_CORE_CAPAILITY = 'update_core';
  public const UPLOAD_FILES = 'upload_files';
  public const VIEW_SITE_HEALTH_CHECKS = 'view_site_health_checks';
  // WordPress Core: Themes
  public const DELETE_THEMES = 'delete_themes';
  public const EDIT_THEME_OPTIONS = 'edit_theme_options';
  public const EDIT_THEMES = 'edit_themes';
  public const INSTALL_THEMES = 'install_themes';
  public const RESUME_THEMES = 'resume_themes';
  public const SWITCH_THEMES = 'switch_themes';
  public const UPDATE_THEMES = 'update_themes';
  // WordPress Core: Posts
  public const DELETE_OTHERS_POSTS = 'delete_others_posts';
  public const DELETE_POSTS = 'delete_posts';
  public const DELETE_PRIVATE_POSTS = 'delete_private_posts';
  public const DELETE_PUBLISHED_POSTS = 'delete_published_posts';
  public const EDIT_OTHERS_POSTS = 'edit_others_posts';
  public const EDIT_POSTS = 'edit_posts';
  public const EDIT_PRIVATE_POSTS = 'edit_private_posts';
  public const EDIT_PUBLISHED_POSTS = 'edit_published_posts';
  public const PUBLISH_POSTS = 'publish_posts';
  public const READ_PRIVATE_POSTS = 'read_private_posts';
  // WordPress Core: Pages
  public const DELETE_OTHERS_PAGES = 'delete_others_pages';
  public const DELETE_PAGES = 'delete_pages';
  public const DELETE_PRIVATE_PAGES = 'delete_private_pages';
  public const DELETE_PUBLISHED_PAGES = 'delete_published_pages';
  public const EDIT_OTHERS_PAGES = 'edit_others_pages';
  public const EDIT_PAGES = 'edit_pages';
  public const EDIT_PRIVATE_PAGES = 'edit_private_pages';
  public const EDIT_PUBLISHED_PAGES = 'edit_published_pages';
  public const PUBLISH_PAGES = 'publish_pages';
  public const READ_PRIVATE_PAGES = 'read_private_pages';
  // WordPress Core: Plugins
  public const ACTIVATE_PLUGINS = 'activate_plugins';
  public const DELETE_PLUGINS = 'delete_plugins';
  public const EDIT_PLUGINS = 'edit_plugins';
  public const INSTALL_PLUGINS = 'install_plugins';
  public const RESUME_PLUGINS = 'resume_plugins';
  public const UPDATE_PLUGINS = 'update_plugins';
  // WordPress Core: Users
  public const CREATE_USERS = 'create_users';
  public const DELETE_USERS = 'delete_users';
  public const EDIT_USERS = 'edit_users';
  public const LIST_USERS = 'list_users';
  public const PROMOTE_USERS = 'promote_users';
  public const REMOVE_USERS = 'remove_users';
  // WordPress Core: Deprecated
  // Custom Post Types
  public const CREATE_POSTS = 'create_posts';
  // Custom Capabilities
  public const VIEW_ALL_ARYO_ACTIVITY_LOG = 'view_all_aryo_activity_log';
  public const CREATE_ROLES = 'create_roles';
  public const DELETE_ROLES = 'delete_roles';
  public const EDIT_ROLES = 'edit_roles';
  public const LIST_ROLES = 'list_roles';
  public const RESTRICT_CONTENT = 'restrict_content';
  // Custom Capabilities: User Role Editor
  public const URE_CREATE_CAPABILITIES = 'ure_create_capabilities';
  public const URE_CREATE_ROLES = 'ure_create_roles';
  public const URE_DELETE_CAPABILITIES = 'ure_delete_capabilities';
  public const URE_DELETE_ROLES = 'ure_delete_roles';
  public const URE_EDIT_ROLES = 'ure_edit_roles';
  public const URE_MANAGE_OPTIONS = 'ure_manage_options';
  public const URE_RESET_ROLES = 'ure_reset_roles';
  // Custom Capabilities: Query Monitor
  public const VIEW_QUERY_MONITOR = 'view_query_monitor';

  public const ENABLED_CAPABILITIES = array(
    // WordPress Core
    // WordPress Core: General
    self::EDIT_DASHBOARD,
    self::EXPORT,
    self::IMPORT,
    self::INSTALL_LANGUAGES,
    self::MANAGE_CATEGORIES,
    self::MANAGE_LINKS,
    self::MANAGE_OPTIONS,
    self::MODERATE_COMMENTS,
    self::READ,
    self::UNFILTERED_HTML,
    self::UNFILTERED_UPLOAD,
    self::UPDATE_CORE_CAPAILITY,
    self::UPLOAD_FILES,
    self::VIEW_SITE_HEALTH_CHECKS,
    // WordPress Core: Themes
    self::DELETE_THEMES,
    self::EDIT_THEME_OPTIONS,
    self::EDIT_THEMES,
    self::INSTALL_THEMES,
    self::RESUME_THEMES,
    self::SWITCH_THEMES,
    self::UPDATE_THEMES,
    // WordPress Core: Posts
    self::DELETE_OTHERS_POSTS,
    self::DELETE_POSTS,
    self::DELETE_PRIVATE_POSTS,
    self::DELETE_PUBLISHED_POSTS,
    self::EDIT_OTHERS_POSTS,
    self::EDIT_POSTS,
    self::EDIT_PRIVATE_POSTS,
    self::EDIT_PUBLISHED_POSTS,
    self::PUBLISH_POSTS,
    self::READ_PRIVATE_POSTS,
    // WordPress Core: Pages
    self::DELETE_OTHERS_PAGES,
    self::DELETE_PAGES,
    self::DELETE_PRIVATE_PAGES,
    self::DELETE_PUBLISHED_PAGES,
    self::EDIT_OTHERS_PAGES,
    self::EDIT_PAGES,
    self::EDIT_PRIVATE_PAGES,
    self::EDIT_PUBLISHED_PAGES,
    self::PUBLISH_PAGES,
    self::READ_PRIVATE_PAGES,
    // WordPress Core: Plugins
    self::ACTIVATE_PLUGINS,
    self::DELETE_PLUGINS,
    self::EDIT_PLUGINS,
    self::INSTALL_PLUGINS,
    self::RESUME_PLUGINS,
    self::UPDATE_PLUGINS,
    // WordPress Core: Users
    self::CREATE_USERS,
    // self::DELETE_USERS,
    self::EDIT_USERS,
    self::LIST_USERS,
    self::PROMOTE_USERS,
    self::REMOVE_USERS,
    // WordPress Core: Deprecated
    // Custom Post Types
    self::CREATE_POSTS,
    // Custom Capabilities
    self::VIEW_ALL_ARYO_ACTIVITY_LOG,
    self::CREATE_ROLES,
    self::DELETE_ROLES,
    self::EDIT_ROLES,
    self::LIST_ROLES,
    self::RESTRICT_CONTENT,
    // Custom Capabilities: User Role Editor
    self::URE_CREATE_CAPABILITIES,
    self::URE_CREATE_ROLES,
    self::URE_DELETE_CAPABILITIES,
    self::URE_DELETE_ROLES,
    self::URE_EDIT_ROLES,
    self::URE_MANAGE_OPTIONS,
    self::URE_RESET_ROLES,
    // Custom Capabilities: Query Monitor
    self::VIEW_QUERY_MONITOR,
  );
  
  public const ADMINISTRATOR_CAPABILITIES = self::ENABLED_CAPABILITIES;

  public const CONTRIBUTOR_CAPABILITIES = array(
    // ...self::SUBSCRIBER_CAPABILITIES,
    // WordPress Core: Posts
    self::EDIT_POSTS,
    self::EDIT_PRIVATE_POSTS,
    self::EDIT_PUBLISHED_POSTS,
    self::READ_PRIVATE_POSTS,
    // WordPress Core: Pages
    self::EDIT_PAGES,
    self::EDIT_PRIVATE_PAGES,
    self::EDIT_PUBLISHED_PAGES,
    self::READ_PRIVATE_PAGES,
  );

  public const CUSTOMER_SERVICE_CAPABILITIES = array(
    //...self::SUBSCRIBER_CAPABILITIES,
  );

  public const DEVELOPER_CAPABILITIES = array(
    // ...self::PRODUCT_MANAGER_CAPABILITIES,
    // WordPress Core: Plugins
    self::ACTIVATE_PLUGINS,
    // self::DELETE_PLUGINS,
    self::EDIT_PLUGINS,
    self::INSTALL_PLUGINS,
    self::RESUME_PLUGINS,
    self::UPDATE_PLUGINS,
    // Custom Post Types
    self::CREATE_POSTS,
    // Custom Capabilities
    self::VIEW_ALL_ARYO_ACTIVITY_LOG,
    self::CREATE_ROLES,
    // self::DELETE_ROLES,
    self::EDIT_ROLES,
    self::LIST_ROLES,
    self::RESTRICT_CONTENT,
    // Custom Capabilities: Query Monitor
    self::VIEW_QUERY_MONITOR,
  );

  public const EDITOR_CAPABILITIES = array(
    //...self::CONTRIBUTOR_CAPABILITIES,
    // WordPress Core: Posts
    self::DELETE_OTHERS_POSTS,
    self::DELETE_POSTS,
    self::DELETE_PRIVATE_POSTS,
    self::DELETE_PUBLISHED_POSTS,
    self::EDIT_OTHERS_POSTS,
    self::PUBLISH_POSTS,
    self::READ_PRIVATE_POSTS,
    // WordPress Core: Pages
    self::DELETE_OTHERS_PAGES,
    self::DELETE_PAGES,
    self::DELETE_PRIVATE_PAGES,
    self::DELETE_PUBLISHED_PAGES,
    self::EDIT_OTHERS_PAGES,
    self::PUBLISH_PAGES,
  );

  public const MARKETING_CAPABILITIES = array(
    //...self::CONTRIBUTOR_CAPABILITIES,
  );

  public const PRODUCT_MANAGER_CAPABILITIES = array(
    //...self::EDITOR_CAPABILITIES,
    // WordPress Core: Themes
    // self::DELETE_THEMES,
    self::EDIT_THEME_OPTIONS,
    // self::EDIT_THEMES,
    // self::INSTALL_THEMES,
    // self::RESUME_THEMES,
    // self::SWITCH_THEMES,
    self::UPDATE_THEMES,
    // WordPress Core: Users
    self::CREATE_USERS,
    // self::DELETE_USERS,
    self::EDIT_USERS,
    self::LIST_USERS,
    self::PROMOTE_USERS,
    // self::REMOVE_USERS,
    // Custom Capabilities
    self::VIEW_ALL_ARYO_ACTIVITY_LOG,
    self::CREATE_ROLES,
    // self::DELETE_ROLES,
    self::EDIT_ROLES,
    self::LIST_ROLES,
    self::RESTRICT_CONTENT,
    // Custom Capabilities: User Role Editor
    self::URE_CREATE_CAPABILITIES,
    self::URE_CREATE_ROLES,
    // self::URE_DELETE_CAPABILITIES,
    // self::URE_DELETE_ROLES,
    self::URE_EDIT_ROLES,
    self::URE_MANAGE_OPTIONS,
    // self::URE_RESET_ROLES,
  );

  public const SUBSCRIBER_CAPABILITIES = array(
  );

  /**
   * disabled capabilities
   */
  public const DISABLED_CAPABILITIES = array(
  );

  /**
   * Initialize `Capability` class
   * 
   * @return Capability
   * 
   * @since React WordPress 0.0.1
   */
  public function __construct()
  {
    parent::__construct();

    add_action('init', array($this, 'init'));

    return $this;
  }

  /**
   * Fires after WordPress has finished loading but before any headers are sent.
   * 
   * @see https://developer.wordpress.org/reference/hooks/init/
   * @since React WordPress 0.0.1
   */
  public static function init()
  {
    //
  }
}
