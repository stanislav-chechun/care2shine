<?php
/**
@file
Contains \Drupal\first_module\Controller\FirstController.
 */
 
namespace Drupal\user_role_plugin\Controller;
use Drupal\user\Entity;
use Drupal\Core\Controller\ControllerBase;
use Drupal\user_role_plugin\ServiceInviteUser;
 
class UsersRoleController extends ControllerBase {
    
    public $service;
            
    function __construct() {
        $this->service = \Drupal::service('user_role_plugin_registration');
    }


    
    
  public function content() {
  return array(
      '#type' => 'markup',
      '#markup' => t('CHLEN!'),
    );
  }
  public function getRoles() {
      var_dump($this->service);
  return  array(
            '#markup' => 'Please Change User role for your team'.$roles,
        );
}

}