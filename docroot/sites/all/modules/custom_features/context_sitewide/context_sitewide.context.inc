<?php
/**
 * @file
 * context_sitewide.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function context_sitewide_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'sitewide';
  $context->description = 'This is for the entire site\'s general layout';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '~sponsors' => '~sponsors',
      ),
    ),
    'sitewide' => array(
      'values' => array(
        1 => 1,
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main-menu' => array(
          'module' => 'system',
          'delta' => 'main-menu',
          'region' => 'navigation',
          'weight' => '-10',
        ),
        'views-sponsors-gold_block' => array(
          'module' => 'views',
          'delta' => 'sponsors-gold_block',
          'region' => 'grey-region',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;

  // Translatables
  // Included for use with string extractors like potx.
  t('This is for the entire site\'s general layout');
  $export['sitewide'] = $context;

  return $export;
}
