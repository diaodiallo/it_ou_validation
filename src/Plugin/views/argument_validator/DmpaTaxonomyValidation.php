<?php
//
//namespace Drupal\dmpa_taxonomy_validation\Plugin\views\argument_validator;
//
//use Drupal\views\Plugin\views\argument_validator\ArgumentValidatorPluginBase;
//
///**
// * Validate the New boolean.
// *
// * @ingroup views_argument_validate_plugins
// *
// * @ViewsArgumentValidator(
// *   id = "dmpa_taxonomy_validation",
// *   title = @Translation("DMPA Taxonomy Validation")
// * )
// */
//class DmpaTaxonomyValidation extends ArgumentValidatorPluginBase {
//
//  public function validateArgument($argument) {
//
//    //Test if the country contains a dash then remove it
//    if ($argument != 'pakistan-sindh' && $argument != 'pakistan-punjab') {
//      if (strpos($argument, '-')) {
//        $argument = str_replace('-', ' ', $argument);
//        $this->argument->argument = $argument;
//      }
//    }
//    return TRUE;
//  }
//}