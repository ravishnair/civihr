<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'hrvisa.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function hrvisa_civicrm_config(&$config) {
  _hrvisa_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function hrvisa_civicrm_xmlMenu(&$files) {
  _hrvisa_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function hrvisa_civicrm_install() {
  return _hrvisa_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function hrvisa_civicrm_uninstall() {
  return _hrvisa_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function hrvisa_civicrm_enable() {
  return _hrvisa_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function hrvisa_civicrm_disable() {
  return _hrvisa_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function hrvisa_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _hrvisa_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function hrvisa_civicrm_managed(&$entities) {
  return _hrvisa_civix_civicrm_managed($entities);
}
