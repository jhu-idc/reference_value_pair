<?php

namespace Drupal\reference_value_pair\Plugin\Field\FieldType;

use Drupal\Component\Utility\Html;
use Drupal\Component\Utility\NestedArray;
use Drupal\Component\Utility\Random;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\TypedData\EntityDataDefinition;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Field\Plugin\Field\FieldType\EntityReferenceItem;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\OptGroup;
use Drupal\Core\Render\Element;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\DataReferenceDefinition;
use Drupal\Core\TypedData\DataReferenceTargetDefinition;
use Drupal\Core\Validation\Plugin\Validation\Constraint\AllowedValuesConstraint;

/**
 * Plugin implementation of the 'lang_ref_value_pair' field type.
 *
 * @FieldType(
 *   id = "lang_ref_value_pair",
 *   label = @Translation("Language reference value pair"),
 *   description = @Translation("Stores an language entity reference and a value."),
 *   default_widget = "reference_value_select",
 *   default_formatter = "reference_value_formatter",
 *   list_class = "\Drupal\Core\Field\EntityReferenceFieldItemList"
 * )
 */
class LangRefValuePair extends ReferenceValuePair {
 /**
   * {@inheritdoc}
   */
  public static function defaultStorageSettings() {
    return array(
      'x_length' => 255,
      'is_ascii' => FALSE,
      'case_sensitive' => FALSE,
      'target_type' => 'taxonomy_term',
      //  'target_bundles' => array( 'language' ),
      //  '#selection_settings' => [
       'target_bundles' => [
             'language'
        ],
    ) + parent::defaultStorageSettings();
  }

  /**
   * {@inheritdoc}
   */
/*  public function getConstraints() {
      $constraints = parent::getConstraints();
      $constraint_manager = \Drupal::typedDataManager()->getValidationConstraintManager();
      $constraints[] = $constraint_manager->create('ComplexData', [
          'entity' => [
              'bundle' => 'language',
          ],
      ]);
      return $contraints;
} */
}
