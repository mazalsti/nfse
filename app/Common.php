<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter4.github.io/CodeIgniter4/
 */
//<newbgp>

// function is_post()
// {
//     return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
// }

// function is_get()
// {
//     return ($_SERVER['REQUEST_METHOD'] ?? 'POST') === 'GET';
// }

// function form($key = null, $default = null)
// {
//     $_REQUEST = array_merge($_REQUEST, $_POST, $_GET);
//     if ($key != null) {
//         return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
//     } else {
//         return $_REQUEST;
//     }
// }