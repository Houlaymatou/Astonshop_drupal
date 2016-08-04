<?php

namespace Drupal\as_choose\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\as_choose\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Listingpage.
   *
   * @return string
   *   Return Hello string.
   */
  public function listingPage() {
    return [
     /* '#type' => 'container',
     * '#attributes' => [
     * 'class' => ['col-md-6', 'well'],
      *'id' => 'myFirstDiv',
     * 'data-role' => 'choose',
     * ],
     * '#children' => [
     * 'text' => [
    * '#type' => 'markup',
    *  '#markup' => 'Les modèles de chaussures',
        ],
      ],
    */
      '#theme' => 'choose_list',
      'chooses' => ['Choose 1', 'Choose 2', 'Choose 3'],
    ];
  }

}
