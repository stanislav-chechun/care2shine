<?php

/**
 * @file
 * Contains \Drupal\user_role_plugin\Form\CreateRegistrationForm.
 */

namespace Drupal\user_role_plugin\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CreateRegistrationForm.
 *
 * @package Drupal\user_role_plugin\Form
 */
class CreateRegistrationForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'create_registration_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }

}
