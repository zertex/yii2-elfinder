<?php
/**
 * @var array $options
 * @var array $plugin
 */

define('ELFINDER_IMG_PARENT_URL', \zertx\elfinder\Assets::getPathUrl());

// run elFinder
$connector = new elFinderConnector(new \zertex\elfinder\elFinderApi($options, $plugin));
$connector->run();