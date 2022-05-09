<?php

namespace React_Wordpress;

class User_Role_Editor_Manager extends React_Wordpress_Class {
  /**
   * enabled roles
   */
  public const ADMINISTRATOR_ROLE = 'administrator';
  public const CONTRIBUTOR_ROLE = 'contributor';
  public const CUSTOMER_SERVICE_ROLE = 'customer_service';
  public const DEVELOPER_ROLE = 'developer';
  public const EDITOR_ROLE = 'editor';
  public const MARKETING_ROLE = 'marketing';
  public const PRODUCT_MANAGER_ROLE = 'product_manager';
  public const SUBSCRIBER_ROLE = 'subscriber';
  
  public const ENABLED_ROLES = array(
    self::ADMINISTRATOR_ROLE,
    self::CONTRIBUTOR_ROLE,
    self::CUSTOMER_SERVICE_ROLE,
    self::DEVELOPER_ROLE,
    self::EDITOR_ROLE,
    self::MARKETING_ROLE,
    self::PRODUCT_MANAGER_ROLE,
    self::SUBSCRIBER_ROLE,
  );

  /**
   * disabled roles
   */
  public const AUTHOR_ROLE = 'author';

  public const DISABLED_ROLES = array(
    self::AUTHOR_ROLE,
  );

  /**
   * enabled capabilities
   */
  // WordPress Core
  // WordPress Core: General
  public const EDIT_DASHBOARD_CAPABILITY = 'edit_dashboard';
  public const EXPORT_CAPABILITY = 'export';
  public const IMPORT_CAPABILITY = 'import';
  public const INSTALL_LANGUAGES_CAPABILITY = 'install_languages';
  public const MANAGE_CATEGORIES_CAPABILITY = 'manage_categories';
  public const MANAGE_LINKS_CAPABILITY = 'manage_links';
  public const MANAGE_OPTIONS_CAPABILITY = 'manage_options';
  public const MODERATE_COMMENTS_CAPABILITY = 'moderate_comments';
  public const READ_CAPABILITY = 'read';
  public const UNFILTERED_HTML_CAPABILITY = 'unfiltered_html';
  public const UNFILTERED_UPLOAD_CAPABILITY = 'unfiltered_upload';
  public const UPDATE_CORE_CAPAILITY = 'update_core';
  public const UPLOAD_FILES_CAPABILITY = 'upload_files';
  public const VIEW_SITE_HEALTH_CHECKS_CAPABILITY = 'view_site_health_checks';
  // WordPress Core: Themes
  public const DELETE_THEMES_CAPABILITY = 'delete_themes';
  public const EDIT_THEME_OPTIONS_CAPABILITY = 'edit_theme_options';
  public const EDIT_THEMES_CAPABILITY = 'edit_themes';
  public const INSTALL_THEMES_CAPABILITY = 'install_themes';
  public const RESUME_THEMES_CAPABILITY = 'resume_themes';
  public const SWITCH_THEMES_CAPABILITY = 'switch_themes';
  public const UPDATE_THEMES_CAPABILITY = 'update_themes';
  // WordPress Core: Posts
  public const DELETE_OTHERS_POSTS_CAPABILITY = 'delete_others_posts';
  public const DELETE_POSTS_CAPABILITY = 'delete_posts';
  public const DELETE_PRIVATE_POSTS_CAPABILITY = 'delete_private_posts';
  public const DELETE_PUBLISHED_POSTS_CAPABILITY = 'delete_published_posts';
  public const EDIT_OTHERS_POSTS_CAPABILITY = 'edit_others_posts';
  public const EDIT_POSTS_CAPABILITY = 'edit_posts';
  public const EDIT_PRIVATE_POSTS_CAPABILITY = 'edit_private_posts';
  public const EDIT_PUBLISHED_POSTS_CAPABILITY = 'edit_published_posts';
  public const PUBLISH_POSTS_CAPABILITY = 'publish_posts';
  public const READ_PRIVATE_POSTS_CAPABILITY = 'read_private_posts';
  // WordPress Core: Pages
  public const DELETE_OTHERS_PAGES_CAPABILITY = 'delete_others_pages';
  public const DELETE_PAGES_CAPABILITY = 'delete_pages';
  public const DELETE_PRIVATE_PAGES_CAPABILITY = 'delete_private_pages';
  public const DELETE_PUBLISHED_PAGES_CAPABILITY = 'delete_published_pages';
  public const EDIT_OTHERS_PAGES_CAPABILITY = 'edit_others_pages';
  public const EDIT_PAGES_CAPABILITY = 'edit_pages';
  public const EDIT_PRIVATE_PAGES_CAPABILITY = 'edit_private_pages';
  public const EDIT_PUBLISHED_PAGES_CAPABILITY = 'edit_published_pages';
  public const PUBLISH_PAGES_CAPABILITY = 'publish_pages';
  public const READ_PRIVATE_PAGES_CAPABILITY = 'read_private_pages';
  // WordPress Core: Plugins
  public const ACTIVATE_PLUGINS_CAPABILITY = 'activate_plugins';
  public const DELETE_PLUGINS_CAPABILITY = 'delete_plugins';
  public const EDIT_PLUGINS_CAPABILITY = 'edit_plugins';
  public const INSTALL_PLUGINS_CAPABILITY = 'install_plugins';
  public const RESUME_PLUGINS_CAPABILITY = 'resume_plugins';
  public const UPDATE_PLUGINS_CAPABILITY = 'update_plugins';
  // WordPress Core: Users
  public const CREATE_USERS_CAPABILITY = 'create_users';
  public const DELETE_USERS_CAPABILITY = 'delete_users';
  public const EDIT_USERS_CAPABILITY = 'edit_users';
  public const LIST_USERS_CAPABILITY = 'list_users';
  public const PROMOTE_USERS_CAPABILITY = 'promote_users';
  public const REMOVE_USERS_CAPABILITY = 'remove_users';
  // WordPress Core: Deprecated
  // Custom Post Types
  public const CREATE_POSTS_CAPABILITY = 'create_posts';
  // Custom Capabilities
  public const VIEW_ALL_ARYO_ACTIVITY_LOG_CAPABILITY = 'view_all_aryo_activity_log';
  public const CREATE_ROLES_CAPABILITY = 'create_roles';
  public const DELETE_ROLES_CAPABILITY = 'delete_roles';
  public const EDIT_ROLES_CAPABILITY = 'edit_roles';
  public const LIST_ROLES_CAPABILITY = 'list_roles';
  public const RESTRICT_CONTENT_CAPABILITY = 'restrict_content';
  // Custom Capabilities: User Role Editor
  public const URE_CREATE_CAPABILITIES_CAPABILITY = 'ure_create_capabilities';
  public const URE_CREATE_ROLES_CAPABILITY = 'ure_create_roles';
  public const URE_DELETE_CAPABILITIES_CAPABILITY = 'ure_delete_capabilities';
  public const URE_DELETE_ROLES_CAPABILITY = 'ure_delete_roles';
  public const URE_EDIT_ROLES_CAPABILITY = 'ure_edit_roles';
  public const URE_MANAGE_OPTIONS_CAPABILITY = 'ure_manage_options';
  public const URE_RESET_ROLES_CAPABILITY = 'ure_reset_roles';
  // Custom Capabilities: Query Monitor
  public const VIEW_QUERY_MONITOR_CAPABILITY = 'view_query_monitor';

  public const ENABLED_CAPABILITIES = array(
    // WordPress Core
    // WordPress Core: General
    self::EDIT_DASHBOARD_CAPABILITY,
    self::EXPORT_CAPABILITY,
    self::IMPORT_CAPABILITY,
    self::INSTALL_LANGUAGES_CAPABILITY,
    self::MANAGE_CATEGORIES_CAPABILITY,
    self::MANAGE_LINKS_CAPABILITY,
    self::MANAGE_OPTIONS_CAPABILITY,
    self::MODERATE_COMMENTS_CAPABILITY,
    self::READ_CAPABILITY,
    self::UNFILTERED_HTML_CAPABILITY,
    self::UNFILTERED_UPLOAD_CAPABILITY,
    self::UPDATE_CORE_CAPAILITY,
    self::UPLOAD_FILES_CAPABILITY,
    self::VIEW_SITE_HEALTH_CHECKS_CAPABILITY,
    // WordPress Core: Themes
    self::DELETE_THEMES_CAPABILITY,
    self::EDIT_THEME_OPTIONS_CAPABILITY,
    self::EDIT_THEMES_CAPABILITY,
    self::INSTALL_THEMES_CAPABILITY,
    self::RESUME_THEMES_CAPABILITY,
    self::SWITCH_THEMES_CAPABILITY,
    self::UPDATE_THEMES_CAPABILITY,
    // WordPress Core: Posts
    self::DELETE_OTHERS_POSTS_CAPABILITY,
    self::DELETE_POSTS_CAPABILITY,
    self::DELETE_PRIVATE_POSTS_CAPABILITY,
    self::DELETE_PUBLISHED_POSTS_CAPABILITY,
    self::EDIT_OTHERS_POSTS_CAPABILITY,
    self::EDIT_POSTS_CAPABILITY,
    self::EDIT_PRIVATE_POSTS_CAPABILITY,
    self::EDIT_PUBLISHED_POSTS_CAPABILITY,
    self::PUBLISH_POSTS_CAPABILITY,
    self::READ_PRIVATE_POSTS_CAPABILITY,
    // WordPress Core: Pages
    self::DELETE_OTHERS_PAGES_CAPABILITY,
    self::DELETE_PAGES_CAPABILITY,
    self::DELETE_PRIVATE_PAGES_CAPABILITY,
    self::DELETE_PUBLISHED_PAGES_CAPABILITY,
    self::EDIT_OTHERS_PAGES_CAPABILITY,
    self::EDIT_PAGES_CAPABILITY,
    self::EDIT_PRIVATE_PAGES_CAPABILITY,
    self::EDIT_PUBLISHED_PAGES_CAPABILITY,
    self::PUBLISH_PAGES_CAPABILITY,
    self::READ_PRIVATE_PAGES_CAPABILITY,
    // WordPress Core: Plugins
    self::ACTIVATE_PLUGINS_CAPABILITY,
    self::DELETE_PLUGINS_CAPABILITY,
    self::EDIT_PLUGINS_CAPABILITY,
    self::INSTALL_PLUGINS_CAPABILITY,
    self::RESUME_PLUGINS_CAPABILITY,
    self::UPDATE_PLUGINS_CAPABILITY,
    // WordPress Core: Users
    self::CREATE_USERS_CAPABILITY,
    // self::DELETE_USERS_CAPABILITY,
    self::EDIT_USERS_CAPABILITY,
    self::LIST_USERS_CAPABILITY,
    self::PROMOTE_USERS_CAPABILITY,
    self::REMOVE_USERS_CAPABILITY,
    // WordPress Core: Deprecated
    // Custom Post Types
    self::CREATE_POSTS_CAPABILITY,
    // Custom Capabilities
    self::VIEW_ALL_ARYO_ACTIVITY_LOG_CAPABILITY,
    self::CREATE_ROLES_CAPABILITY,
    self::DELETE_ROLES_CAPABILITY,
    self::EDIT_ROLES_CAPABILITY,
    self::LIST_ROLES_CAPABILITY,
    self::RESTRICT_CONTENT_CAPABILITY,
    // Custom Capabilities: User Role Editor
    self::URE_CREATE_CAPABILITIES_CAPABILITY,
    self::URE_CREATE_ROLES_CAPABILITY,
    self::URE_DELETE_CAPABILITIES_CAPABILITY,
    self::URE_DELETE_ROLES_CAPABILITY,
    self::URE_EDIT_ROLES_CAPABILITY,
    self::URE_MANAGE_OPTIONS_CAPABILITY,
    self::URE_RESET_ROLES_CAPABILITY,
    // Custom Capabilities: Query Monitor
    self::VIEW_QUERY_MONITOR_CAPABILITY,
  );
  
  public const ADMINISTRATOR_CAPABILITIES = self::ENABLED_CAPABILITIES;

  public const CONTRIBUTOR_CAPABILITIES = array(
    // ...self::SUBSCRIBER_CAPABILITIES,
    // WordPress Core: Posts
    self::EDIT_POSTS_CAPABILITY,
    self::EDIT_PRIVATE_POSTS_CAPABILITY,
    self::EDIT_PUBLISHED_POSTS_CAPABILITY,
    self::READ_PRIVATE_POSTS_CAPABILITY,
    // WordPress Core: Pages
    self::EDIT_PAGES_CAPABILITY,
    self::EDIT_PRIVATE_PAGES_CAPABILITY,
    self::EDIT_PUBLISHED_PAGES_CAPABILITY,
    self::READ_PRIVATE_PAGES_CAPABILITY,
  );

  public const CUSTOMER_SERVICE_CAPABILITIES = array(
    //...self::SUBSCRIBER_CAPABILITIES,
  );

  public const DEVELOPER_CAPABILITIES = array(
    // ...self::PRODUCT_MANAGER_CAPABILITIES,
    // WordPress Core: Plugins
    self::ACTIVATE_PLUGINS_CAPABILITY,
    // self::DELETE_PLUGINS_CAPABILITY,
    self::EDIT_PLUGINS_CAPABILITY,
    self::INSTALL_PLUGINS_CAPABILITY,
    self::RESUME_PLUGINS_CAPABILITY,
    self::UPDATE_PLUGINS_CAPABILITY,
    // Custom Post Types
    self::CREATE_POSTS_CAPABILITY,
    // Custom Capabilities
    self::VIEW_ALL_ARYO_ACTIVITY_LOG_CAPABILITY,
    self::CREATE_ROLES_CAPABILITY,
    // self::DELETE_ROLES_CAPABILITY,
    self::EDIT_ROLES_CAPABILITY,
    self::LIST_ROLES_CAPABILITY,
    self::RESTRICT_CONTENT_CAPABILITY,
    // Custom Capabilities: Query Monitor
    self::VIEW_QUERY_MONITOR_CAPABILITY,
  );

  public const EDITOR_CAPABILITIES = array(
    //...self::CONTRIBUTOR_CAPABILITIES,
    // WordPress Core: Posts
    self::DELETE_OTHERS_POSTS_CAPABILITY,
    self::DELETE_POSTS_CAPABILITY,
    self::DELETE_PRIVATE_POSTS_CAPABILITY,
    self::DELETE_PUBLISHED_POSTS_CAPABILITY,
    self::EDIT_OTHERS_POSTS_CAPABILITY,
    self::PUBLISH_POSTS_CAPABILITY,
    self::READ_PRIVATE_POSTS_CAPABILITY,
    // WordPress Core: Pages
    self::DELETE_OTHERS_PAGES_CAPABILITY,
    self::DELETE_PAGES_CAPABILITY,
    self::DELETE_PRIVATE_PAGES_CAPABILITY,
    self::DELETE_PUBLISHED_PAGES_CAPABILITY,
    self::EDIT_OTHERS_PAGES_CAPABILITY,
    self::PUBLISH_PAGES_CAPABILITY,
  );

  public const MARKETING_CAPABILITIES = array(
    //...self::CONTRIBUTOR_CAPABILITIES,
  );

  public const PRODUCT_MANAGER_CAPABILITIES = array(
    //...self::EDITOR_CAPABILITIES,
    // WordPress Core: Themes
    // self::DELETE_THEMES_CAPABILITY,
    self::EDIT_THEME_OPTIONS_CAPABILITY,
    // self::EDIT_THEMES_CAPABILITY,
    // self::INSTALL_THEMES_CAPABILITY,
    // self::RESUME_THEMES_CAPABILITY,
    // self::SWITCH_THEMES_CAPABILITY,
    self::UPDATE_THEMES_CAPABILITY,
    // WordPress Core: Users
    self::CREATE_USERS_CAPABILITY,
    // self::DELETE_USERS_CAPABILITY,
    self::EDIT_USERS_CAPABILITY,
    self::LIST_USERS_CAPABILITY,
    self::PROMOTE_USERS_CAPABILITY,
    // self::REMOVE_USERS_CAPABILITY,
    // Custom Capabilities
    self::VIEW_ALL_ARYO_ACTIVITY_LOG_CAPABILITY,
    self::CREATE_ROLES_CAPABILITY,
    // self::DELETE_ROLES_CAPABILITY,
    self::EDIT_ROLES_CAPABILITY,
    self::LIST_ROLES_CAPABILITY,
    self::RESTRICT_CONTENT_CAPABILITY,
    // Custom Capabilities: User Role Editor
    self::URE_CREATE_CAPABILITIES_CAPABILITY,
    self::URE_CREATE_ROLES_CAPABILITY,
    // self::URE_DELETE_CAPABILITIES_CAPABILITY,
    // self::URE_DELETE_ROLES_CAPABILITY,
    self::URE_EDIT_ROLES_CAPABILITY,
    self::URE_MANAGE_OPTIONS_CAPABILITY,
    // self::URE_RESET_ROLES_CAPABILITY,
  );

  public const SUBSCRIBER_CAPABILITIES = array(
  );

  /**
   * disabled capabilities
   */
  public const DISABLED_CAPABILITIES = array(
  );

  public function __construct() {
    parent::__construct();

    add_action('init', array($this, 'init'));
  }

  public static function init() {
    foreach (self::DISABLED_ROLES as $disabled_role) {
      remove_role($disabled_role);
    }
    
    add_role(self::ADMINISTRATOR_ROLE, __('Administrator'));
    $administrator_role = get_role(self::ADMINISTRATOR_ROLE);
    foreach (self::ADMINISTRATOR_CAPABILITIES as $administrator_capability) {
      $administrator_role->add_cap($administrator_capability);
    }

    add_role(self::CONTRIBUTOR_ROLE, __('Contributer'));
    $contributor_role = get_role(self::CONTRIBUTOR_ROLE);
    foreach (self::CONTRIBUTOR_CAPABILITIES as $contributor_capability) {
      $contributor_role->add_cap($contributor_capability);
    }

    add_role(self::CUSTOMER_SERVICE_ROLE, __('Customer Service'));
    $customer_service_role = get_role(self::CUSTOMER_SERVICE_ROLE);
    foreach (self::CUSTOMER_SERVICE_CAPABILITIES as $customer_service_capability) {
      $customer_service_role->add_cap($customer_service_capability);
    }
    
    add_role(self::DEVELOPER_ROLE, __('Developer'));
    $developer_role = get_role(self::DEVELOPER_ROLE);
    foreach (self::DEVELOPER_CAPABILITIES as $developer_capability) {
      $developer_role->add_cap($developer_capability);
    }
    
    add_role(self::EDITOR_ROLE, __('Editor'));
    $editor_role = get_role(self::EDITOR_ROLE);
    foreach (self::EDITOR_CAPABILITIES as $editor_capability) {
      $editor_role->add_cap($editor_capability);
    }

    add_role(self::MARKETING_ROLE, __('Marketing'));
    $marketing_role = get_role(self::MARKETING_ROLE);
    foreach (self::MARKETING_CAPABILITIES as $marketing_capability) {
      $marketing_role->add_cap($marketing_capability);
    }
    
    add_role(self::PRODUCT_MANAGER_ROLE, __('Product Manager'));
    $product_manager_role = get_role(self::PRODUCT_MANAGER_ROLE);
    foreach (self::PRODUCT_MANAGER_CAPABILITIES as $product_manager_capability) {
      $product_manager_role->add_cap($product_manager_capability);
    }

    add_role(self::SUBSCRIBER_ROLE, __('Subscriber'));
    $subscriber_role = get_role(self::SUBSCRIBER_ROLE);
    foreach (self::SUBSCRIBER_CAPABILITIES as $subscriber_capability) {
      $subscriber_role->add_cap($subscriber_capability);
    }
  }
}
