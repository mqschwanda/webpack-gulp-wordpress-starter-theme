<?php

namespace React_WordPress;

/**
 * Manager for the WordPress: `Role`.
 * 
 * @since React WordPress 0.0.1
 */
class Role extends React_WordPress_Static
{
  /**
   * Public
   */

  /**
   * roles
   */
  public const ADMINISTRATOR = 'administrator';
  public const CONTRIBUTOR = 'contributor';
  public const CUSTOMER_SERVICE = 'customer_service';
  public const DEVELOPER = 'developer';
  public const EDITOR = 'editor';
  public const MARKETING = 'marketing';
  public const PRODUCT_MANAGER = 'product_manager';
  public const SUBSCRIBER = 'subscriber';
  
  public const ROLES = array(
    self::ADMINISTRATOR,
    self::CONTRIBUTOR,
    self::CUSTOMER_SERVICE,
    self::DEVELOPER,
    self::EDITOR,
    self::MARKETING,
    self::PRODUCT_MANAGER,
    self::SUBSCRIBER,
  );
  public const ENABLED_ROLES = self::ROLES;

  /**
   * disabled roles
   */
  public const AUTHOR_ROLE = 'author';

  public const DISABLED_ROLES = array(
    self::AUTHOR_ROLE,
  );

  /**
   * Fires after WordPress has finished loading but before any headers are sent.
   * 
   * @see https://developer.wordpress.org/reference/hooks/init/
   * @since React WordPress 0.0.1
   */
  public static function init()
  {
    parent::init();

    self::configure_roles_and_capabilities();
  }

  /**
   * Private
   */

  /**
   * Configure default roles and capabilities.
   *
   * @since React WordPress 0.0.1
   */
  private static function configure_roles_and_capabilities()
  {
    foreach (self::DISABLED_ROLES as $disabled_role)
    {
      remove_role($disabled_role);
    }
    
    add_role(self::ADMINISTRATOR, __('Administrator'));
    $administrator_role = get_role(self::ADMINISTRATOR);
    foreach (Capability::ADMINISTRATOR_CAPABILITIES as $administrator_capability)
    {
      $administrator_role->add_cap($administrator_capability);
    }

    add_role(self::CONTRIBUTOR, __('Contributer'));
    $contributor_role = get_role(self::CONTRIBUTOR);
    foreach (Capability::CONTRIBUTOR_CAPABILITIES as $contributor_capability)
    {
      $contributor_role->add_cap($contributor_capability);
    }

    add_role(self::CUSTOMER_SERVICE, __('Customer Service'));
    $customer_service_role = get_role(self::CUSTOMER_SERVICE);
    foreach (Capability::CUSTOMER_SERVICE_CAPABILITIES as $customer_service_capability)
    {
      $customer_service_role->add_cap($customer_service_capability);
    }
    
    add_role(self::DEVELOPER, __('Developer'));
    $developer_role = get_role(self::DEVELOPER);
    foreach (Capability::DEVELOPER_CAPABILITIES as $developer_capability)
    {
      $developer_role->add_cap($developer_capability);
    }
    
    add_role(self::EDITOR, __('Editor'));
    $editor_role = get_role(self::EDITOR);
    foreach (Capability::EDITOR_CAPABILITIES as $editor_capability)
    {
      $editor_role->add_cap($editor_capability);
    }

    add_role(self::MARKETING, __('Marketing'));
    $marketing_role = get_role(self::MARKETING);
    foreach (Capability::MARKETING_CAPABILITIES as $marketing_capability)
    {
      $marketing_role->add_cap($marketing_capability);
    }
    
    add_role(self::PRODUCT_MANAGER, __('Product Manager'));
    $product_manager_role = get_role(self::PRODUCT_MANAGER);
    foreach (Capability::PRODUCT_MANAGER_CAPABILITIES as $product_manager_capability)
    {
      $product_manager_role->add_cap($product_manager_capability);
    }

    add_role(self::SUBSCRIBER, __('Subscriber'));
    $subscriber_role = get_role(self::SUBSCRIBER);
    foreach (Capability::SUBSCRIBER_CAPABILITIES as $subscriber_capability)
    {
      $subscriber_role->add_cap($subscriber_capability);
    }
  }
}
