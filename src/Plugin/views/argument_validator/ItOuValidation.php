<?php

namespace Drupal\it_ou_validation\Plugin\views\argument_validator;

use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\taxonomy\Entity\Term;
use Drupal\views\Plugin\views\argument_validator\ArgumentValidatorPluginBase;
use Drupal\Core\Language\LanguageInterface;

/**
 * Validate the New boolean.
 *
 * @ingroup views_argument_validate_plugins
 *
 * @ViewsArgumentValidator(
 *   id = "it_ou_validation",
 *   title = @Translation("IT and Org Unit Validation")
 * )
 */
class ItOuValidation extends ArgumentValidatorPluginBase {

  /**
   * @param $argument
   *
   * @return bool
   */


  public function validateArgument($argument) {

    /**
     * get IT name
     *
     */
    $query = \Drupal::database()->select('taxonomy_term_field_data', 'td');
    $query->addField('td', 'name');
    $query->condition('td.vid', 'kenya_impact_team');
    $query->condition('td.tid', $argument);
    $term = $query->execute();
    $tname = $term->fetchField();
    $itOrgUnit = $this->mapItOrgUnit();
    if (isset($itOrgUnit[$tname])) {
      $this->argument->argument = $this->getOrgUnitId($itOrgUnit[$tname]);
    }
    else {
      $this->argument->argument = NULL;
    }
    return TRUE;
  }

  /**
   * Get orgUnit id
   * todo add data then look for the id
   * field_team_target_id get id of the content from ?? maybe here node__field_data or see in google
   */
  public function getOrgUnitId($orgName) {
    $query = \Drupal::database()->select('organisation_unit', 'td');
    $query->addField('td', 'id');
    $query->condition('td.status', 1);
    $query->condition('td.name', $orgName);
    $org = $query->execute();
    $orgId = $org->fetchField();

    return $orgId;
  }

  public function mapItOrgUnit() {
    return [
      'Kwanza' => 'Kwanza Sub County',
      'Kiminini' => 'Kiminini Sub County',
      'Cherangany' => 'Cherangany Sub County',
      'Samburu central' => 'Samburu Central Sub County',
      'Samburu county' => 'Samburu County',
      'Saboti' => 'Saboti Sub County',
      'Samburu north' => 'Samburu North Sub County',
      'Samburu east' => 'Samburu East Sub County',
      'Mandera county' => 'Mandera County',
      'Mandera West' => 'Mandera West Sub County',
      'Mandera South' => 'Mandera South Sub County',
      'Mandera North' => 'Mandera North Sub County',
      'Mandera East' => 'Mandera East Sub County',
      'Lafey' => 'Lafey Sub County',
      'Kutulo' => 'Kutulo Sub County',
      'Banissa' => 'Banissa Sub County',
      'Mombasa county' => 'Mombasa County',
      'Nyali' => 'Nyali Sub County',
      'Mvita' => 'Mvita Sub County',
      'Likoni' => 'Likoni Sub County',
      'Kisauni' => 'Kisauni Sub County',
      'Jomvu' => 'Jomvu Sub County',
      'Changamwe' => 'Changamwe Sub County',
      'Nairobi county' => 'Nairobi County',
      'Westlands' => 'Westlands Sub County',
      'Starehe' => 'Starehe Sub County',
      'Ruaraka' => 'Ruaraka Sub County',
      'Roysambu' => 'Roysambu Sub County',
      'Mathare' => 'Mathare Sub County',
      'Makadara' => 'Makadara Sub County',
      'Langata' => 'Langata Sub County',
      'Kibra' => 'Kibra Sub County',
      'Kasarani' => 'Kasarani Sub County',
      'Kamukunji' => 'Kamukunji Sub County',
      'Embakasi West' => 'Embakasi West Sub County',
      'Embakasi South' => 'Embakasi South Sub County',
      'Embakasi North' => 'Embakasi North Sub County',
      'Embakasi East' => 'Embakasi East Sub County',
      'Embakasi Central' => 'Embakasi Central Sub County',
      'Dagoretti South' => 'Dagoretti South Sub County',
      'Dagoretti North' => 'Dagoretti North Sub County',
      'Nyeri county' => 'Nyeri County',
      'Tetu' => 'Tetu Sub County',
      'Nyeri South' => 'Nyeri South Sub County',
      'Nyeri Central' => 'Nyeri Central Sub County',
      'Mukurweini' => 'Mukurweini Sub County',
      'Mathira West' => 'Mathira West Sub County',
      'Mathira East' => 'Mathira East Sub County',
      'Kieni West' => 'Kieni West Sub County',
      'Kieni East' => 'Kieni East Sub County',
      'Siaya county' => 'Siaya County',
      'Ugunja' => 'Ugunja Sub County',
      'Ugenya' => 'Ugenya Sub County',
      'Rarieda' => 'Rarieda Sub County',
      'Gem' => 'Gem Sub County Sub County',
      'Bondo' => 'Bondo Sub County Sub County',
      'Alego Usonga' => 'Alego Usonga Sub County',
      'Trans Nzoia county' => 'Trans Nzoia County',
      'Endebess' => 'Endebess Sub County',
      'Wajir county' => 'Wajir County',
      'Wajir West' => 'Wajir West Sub County',
      'Wajir North' => 'Wajir North Sub County',
      'Tarbaj' => 'Tarbaj Sub County',
      'Turkana county' => 'Turkana County',
      'Kibish' => 'Kibish Sub County',
      'Loima' => 'Loima Sub County',
      'Turkana south' => 'Turkana south Sub County',
    ];
  }
}