<?php

$databases = array (
  'default' =>
  array (
    'default' => 
    array (
      'database' => 'ddfccc22a11cvm',
      'username' => 'xywlvrwqjrfdea',
      'password' => 'hwkQwl7xYooJLLpl1OCtzQ-1eA',
      'host' => 'ec2-54-197-249-167.compute-1.amazonaws.com',
      'port' => '5432',
      'driver' => 'pgsql',
      'prefix' => 'drupal_site1_',
    ),
  ),
);


/**
 * Access control for update.php script.
 *
 * If you are updating your Drupal installation using the update.php script but
 * are not logged in using either an account with the "Administer software
 * updates" permission or the site maintenance account (the account that was
 * created during installation), you will need to modify the access check
 * statement below. Change the FALSE to a TRUE to disable the access check.
 * After finishing the upgrade, be sure to open this file again and change the
 * TRUE back to a FALSE!
 */
$update_free_access = FALSE;

/**
 * Salt for one-time login links and cancel links, form tokens, etc.
 *
 * This variable will be set to a random value by the installer. All one-time
 * login links will be invalidated if the value is changed. Note that if your
 * site is deployed on a cluster of web servers, you must ensure that this
 * variable has the same value on each server. If this variable is empty, a hash
 * of the serialized database credentials will be used as a fallback salt.
 *
 * For enhanced security, you may set this variable to a value using the
 * contents of a file outside your docroot that is never saved together
 * with any backups of your Drupal files and database.
 *
 * Example:
 *   $drupal_hash_salt = file_get_contents('/home/example/salt.txt');
 *
 */
$drupal_hash_salt = 'JvgLHAZ27tGDCElUY8sw_cQHWwNIZruC7-5DfGYjG4k';

