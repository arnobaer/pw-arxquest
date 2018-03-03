<?php namespace ProcessWire;

// Variables for regions we will populate in _main.php
// Here we also assign default values for each of them.
$title = $page->get('headline|title');
$content = $page->body;
$sidebar = $page->sidebar;

// We refer to our homepage a few times in our site, so
// we preload a copy here in $homepage for convenience.
$homepage = $pages->get('/');

// Include shared functions
include_once("lib/functions.php");
