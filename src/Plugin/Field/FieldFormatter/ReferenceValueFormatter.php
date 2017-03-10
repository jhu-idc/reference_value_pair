<?php

namespace Drupal\reference_value_pair\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldFormatter\EntityReferenceFormatterBase;
use Drupal\Core\Field\Plugin\Field\FieldType\EntityReferenceItem;

/**
 * Plugin implementation of the 'reference_value_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "reference_value_formatter",
 *   label = @Translation("Reference value formatter"),
 *   field_types = {
 *     "reference_value_pair"
 *   }
 * )
 */
class ReferenceValueFormatter extends EntityReferenceFormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array();

    foreach ($this->getEntitiesToView($items, $langcode) as $delta => $entity) {
      $elements[$delta] = array(
        '#theme' => 'reference_value_pair__formatter',
        '#item' => array(
          'value' => $items[$delta]->value,
          'label' => $entity->label(),
        ),
      );

      $elements[$delta] = [
        '#type' => 'inline_template',
        '#template' => '{{ label }} {{ value }}',
        '#context' => [
          'value' => $items[$delta]->value,
          'label' => $entity->label(),
        ],
      ];
      $elements[$delta]['#cache']['tags'] = $entity->getCacheTags();
    }

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  protected function needsEntityLoad(EntityReferenceItem $item) {
    return !$item->hasNewEntity();
  }

}
