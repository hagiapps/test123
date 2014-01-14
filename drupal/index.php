<?php
error_reporting(E_ALL);

ini_set('display_errors', '1');

error_reporting(E_ALL);

/*
ini_set('display_errors', '1');
 $pg_connstr = " host=ec2-54-197-241-64.compute-1.amazonawst.com port=5432 user=ucbkoaupyccmeq password=aZqn_sm5Iei-F6knZMQCdMS2ZM";
 echo "<hr/>";
var_dump( pg_connect($pg_connstr)); 
//ec2-54-197-249-167.compute-1.amazonaws.com
 $pg_connstr = " host=ec2-54-197-249-167.compute-1.amazonaws.com port=5432 user=xywlvrwqjrfdea password=hwkQwl7xYooJLLpl1OCtzQ-1eA";
 //$pg_connstr = ' host=localhost port=5432 user=postgres password=123456';
 
 echo "<hr/>";
var_dump( pg_connect($pg_connstr)); 
 $pg_connstr = " host=localhost port=5432 user=postgres password=123456";
 //$pg_connstr = ' host=localhost port=5432 user=postgres password=123456';
 
 echo "<hr/>";
var_dump( pg_connect($pg_connstr)); die;

*/

/** /
echo "<pre>";
var_dump($_ENV);
//var_dump($_SERVER);
echo "</pre>";
//die;
/**/

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */

/**
 * Root directory of Drupal installation.
 */
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
menu_execute_active_handler();
