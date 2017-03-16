<?php

namespace Drupal\commerce_feeds\Feeds\Target;

use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\feeds\FieldTargetDefinition;
use Drupal\feeds\Plugin\Type\Target\FieldTargetBase;

/**
 * Defines a link field mapper.
 *
 * @FeedsTarget(
 *   id = "commerce_price",
 *   field_types = {"commerce_price"}
 * )
 */
class CommercePrice extends FieldTargetBase {

  /**
   * {@inheritdoc}
   */
  protected static function prepareTarget(FieldDefinitionInterface $field_definition) {
    return FieldTargetDefinition::createFromFieldDefinition($field_definition)
      ->addProperty('number')
      ->addProperty('currency_code');
  }

  /**
   * {@inheritdoc}
   */
  protected function prepareValue($delta, array &$values) {
    $values['number'] = trim($values['number']);
    if(!is_numeric($values['number'])){
      $values['number'] = false;
    }
  }

}
