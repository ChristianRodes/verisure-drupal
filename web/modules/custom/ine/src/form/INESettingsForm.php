<?php

namespace Drupal\ine\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure INE settings for this site.
 */
class INESettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ine_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['ine.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('ine.settings');

    $form['api_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('URL de la API del INE'),
      '#default_value' => $config->get('api_url'),
      '#description' => $this->t('Introduce la URL de la API para obtener datos de seguridad.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('ine.settings')
      ->set('api_url', $form_state->getValue('api_url'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}