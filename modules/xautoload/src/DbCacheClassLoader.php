<?php
namespace Drupal\xautoload;

/**
 * A class loader decorator using Drupal's native db cache.
 */
class DbCacheClassLoader extends AbstractQueuedCachedClassLoader {

  /**
   * @var string
   */
  private $cacheName;

  /**
   * @param string $prefix
   *
   * @return string[]
   */
  protected function loadClassFiles($prefix) {
    $this->cacheName = 'xautoload_db_cache:' . $prefix;
    $cached = \Drupal::cache()->get($this->cacheName);
    return isset($cached->data)
      ? $cached->data
      : array();
  }

  /**
   * @param string[] $toBeAdded
   * @param string[] $toBeRemoved
   *
   * @return string[]
   */
  protected function updateClassFiles($toBeAdded, $toBeRemoved) {

    $class_files = $toBeAdded;
    // Other requests may have already written to the cache, so we get an up to
    // date version.
    $cached = \Drupal::cache()->get($this->cacheName);
    if (isset($cached->data)) {
      $class_files += $cached->data;
      foreach ($toBeRemoved as $class => $file) {
        if (isset($class_files[$class]) && $class_files[$class] === $file) {
          unset($class_files[$class]);
        }
      }
    }

    \Drupal::cache()->set($this->cacheName, $class_files);

    return $class_files;
  }

}
