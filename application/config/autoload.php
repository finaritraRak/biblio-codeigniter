<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('form_validation', 'session', 'pagination');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','form','text','security');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Post_Model', 'Category_Model', 'Comment_Model', 'User_Model', 'Administrator_Model', 'Galleries_Model');
