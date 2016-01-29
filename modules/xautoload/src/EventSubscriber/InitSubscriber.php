<?php /**
 * @file
 * Contains \Drupal\xautoload\EventSubscriber\InitSubscriber.
 */

namespace Drupal\xautoload\EventSubscriber;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class InitSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return [KernelEvents::REQUEST => ['onEvent', 0]];
  }

  public function onEvent() {
    xautoload()->phaseControl->enterMainPhase();
  }

}
