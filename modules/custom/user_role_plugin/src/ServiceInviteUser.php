<?php

/**
 * @file
 * Contains \Drupal\user_role_plugin\ServiceInviteUser.
 */

namespace Drupal\user_role_plugin;


/**
 * Class ServiceInviteUser.
 *
 * @package Drupal\user_role_plugin
 */
class ServiceInviteUser implements ServiceInviteUserInterface {
  /**
   * Constructor.
   */
  public function __construct() {
      
  }
  public function hello(){
      echo 'Chlen';
  }

}
