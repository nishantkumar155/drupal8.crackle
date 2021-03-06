<?php

/**
 * @file
 * Contains \Drupal\payment_form\Hook\EntityExtraFieldInfo.
 */

namespace Drupal\payment_form\Hook;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationInterface;

/**
 * Implements hook_entity_extra_field_info().
 *
 * @see payment_form_entity_extra_field_info()
 */
class EntityExtraFieldInfo {

  use StringTranslationTrait;

  /**
   * Constructs a new instance.
   *
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   */
  public function __construct(TranslationInterface $string_translation) {
    $this->stringTranslation = $string_translation;
  }

  /**
   * Invokes the implementation.
   */
  public function invoke() {
    $fields['payment']['payment_form']['form'] = [
      'payment_method' => [
        'label' => $this->t('Payment method selection and configuration'),
        'weight' => 1,
      ],
    ];
  
    return $fields;
  }

}
