<?php

namespace Drupal\commerce_feeds\Feeds\Processor;

use Drupal\feeds\Feeds\Processor\EntityProcessorBase;

/**
 * Defines a user processor.
 *
 * Creates users from feed items.
 *
 * @FeedsProcessor(
 *   id = "entity:commerce_product",
 *   title = @Translation("Product"),
 *   description = @Translation("Product."),
 *   entity_type = "commerce_product",
 *   arguments = {"@entity.manager", "@entity.query", "@entity_type.bundle.info"},
 *   form = {
 *     "configuration" = "Drupal\feeds\Feeds\Processor\Form\DefaultEntityProcessorForm",
 *     "option" = "Drupal\feeds\Feeds\Processor\Form\EntityProcessorOptionForm",
 *   },
 * )
 */
class CommerceProductProcessor extends EntityProcessorBase {

}
