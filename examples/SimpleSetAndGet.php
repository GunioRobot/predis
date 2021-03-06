<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require 'SharedConfigurations.php';

// simple set and get scenario

$redis = new Predis\Client($single_server);

$redis->set('library', 'predis');
$retval = $redis->get('library');

var_dump($retval);

/* OUTPUT
string(6) "predis"
*/
