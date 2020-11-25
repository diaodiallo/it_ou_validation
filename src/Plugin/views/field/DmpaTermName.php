<?php
//
//namespace Drupal\dmpa_taxonomy_validation\Plugin\views\field;
//
//use DateTime;
//use Drupal\taxonomy\Entity\Term;
//use Drupal\views\Plugin\views\field\FieldPluginBase;
//use Drupal\views\ResultRow;
//
///**
// * Displays taxonomy term names and allows converting spaces to hyphens.
// *
// * @ingroup views_field_handlers
// *
// * @ViewsField("dmpa_term_name")
// */
//class DmpaTermName extends FieldPluginBase {
//
//  public function getValue(ResultRow $values, $field = NULL) {
//
//    $tid = $values->user__field_user_country_field_user_country_target_id;
//    $term = Term::load($tid);
//
//    if ($term) {
//      $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
//      $translated_term = \Drupal::service('entity.repository')
//        ->getTranslationFromContext($term, $language);
//      $values = $translated_term->getName();
//    }
//    $values = strtolower($values);
//    if (strpos($values, ' ')) {
//      $values = str_replace(' ', '-', $values);
//    }
//    if (strpos($values, 'é')) {
//      $values = str_replace('é', 'e', $values);
//    }
//    if ($values == "cote-d'ivoire" || $values == "cote-d&#039;ivoire") {
//      $values = "cote-divoire";
//    }
//
//    $current_year = date('Y');
//    $year = DateTime::createFromFormat('Y', $current_year);
//    $year->modify('-1 month -9 day');
//    $year = $year->format('Y');
//
//    $current_month = date('F');
//    $month = DateTime::createFromFormat('F', $current_month);
//    $month->modify('-1 month -9 day');
//    $month = $month->format('F');
//    $month_term = \Drupal::entityTypeManager()
//      ->getStorage('taxonomy_term')
//      ->loadByProperties(['name' => $month]);
//    if ($month_term) {
//      $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
//      $translated_term = \Drupal::service('entity.repository')
//        ->getTranslationFromContext(current($month_term), $language);
//      $translated_month = $translated_term->getName();
//      if (strpos($translated_month, 'é')) {
//        $translated_month = str_replace('é', 'e', $translated_month);
//      }
//      if (strpos($translated_month, 'û')) {
//        $translated_month = str_replace('û', 'u', $translated_month);
//      }
//      $translated_month = strtolower($translated_month);
//    }
//
//    $values = $values . '/' . $year . '/' . $translated_month;
//
//    return $values;
//  }
//
//}
