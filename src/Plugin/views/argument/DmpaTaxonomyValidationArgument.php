<?php
//
//namespace Drupal\dmpa_taxonomy_validation\Plugin\views\argument;
//
//use Drupal\views\Plugin\views\argument\ArgumentPluginBase;
//use Drupal\Core\Form\FormStateInterface;
//
///**
// * Resize the override text field.
// *
// * @ingroup views_argument_handlers
// *
// * @ViewsArgument("dmpa_taxonomy_validation_argument")
// *
// */
//class DmpaTaxonomyValidationArgument extends ArgumentPluginBase {
//
//  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
//    parent::buildOptionsForm($form, $form_state);
//
//
//    $form['title'] = [
//      '#type' => 'textfield',
//      '#title' => $this->t('Provide title'),
//      '#title_display' => 'invisible',
//      '#maxlength' => 355,
//      '#default_value' => $this->options['title'],
//      '#description' => $this->t(' OVERRIDDEN: Override the view and other argument titles. You may use Twig syntax in this field.'),
//      '#states' => [
//        'visible' => [
//          ':input[name="options[title_enable]"]' => ['checked' => TRUE],
//        ],
//      ],
//      '#fieldset' => 'argument_present',
//    ];
//
//  }
//
//  //    public function validateOptionsForm(&$form, FormStateInterface $form_state) {
//  //        parent::validateOptionsForm($form, $form_state);
//  //    }
//  //
//  //    public function submitOptionsForm(&$form, FormStateInterface $form_state) {
//  //        parent::submitOptionsForm($form, $form_state);
//  //    }
//
//
//}