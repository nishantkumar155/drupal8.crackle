<?php /**
 * @file
 * Contains \Drupal\webform_paymethod_select\Controller\DefaultController.
 */

namespace Drupal\webform_paymethod_select\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Default controller for the webform_paymethod_select module.
 */
class DefaultController extends ControllerBase {

  public function webform_paymethod_select_continue_access(\Drupal\node\NodeInterface $node, $submission, $page_num, Drupal\Core\Session\AccountInterface $account) {
    if (empty($node->webform) || empty($node->webform['components'])) {
      return FALSE;
    }
    $last_component = end($node->webform['components']);
    if (((int) $page_num) != $page_num || $page_num < 0 || $page_num > $last_component['page_num']) {
      return FALSE;
    }
    $hash = _webform_paymethod_select_reenter_hash($node->id(), $submission->sid, $page_num);
    return isset($_GET['hash']) && $_GET['hash'] == $hash;
  }

  public function webform_paymethod_select_continue(\Drupal\node\NodeInterface $node, $submission, $page_num) {
    // We can't use a simple drupal_get_form() because we wan't to enter the form
  // at a specific $page_num.
    $form_state = [];

    $args = [$node, $submission, TRUE, TRUE];
    $form_state['build_info']['args'] = $args;

    $form_state['storage']['component_tree'] = [];
    $form_state['storage']['page_count'] = 1;
    $form_state['storage']['preview'] = !empty($node->webform['preview']);
    _webform_components_tree_build($node->webform['components'], $form_state['storage']['component_tree'], 0, $form_state['storage']['page_count']);
    $form_state['storage']['page_num'] = $page_num;
    if (\Drupal::moduleHandler()->moduleExists('webform_steps')) {
      $form_state['steps_finished'] = $page_num - 1;
    }

    return \Drupal::formBuilder()->buildForm('webform_client_form_' . $node->id(), $form_state);
  }

}
