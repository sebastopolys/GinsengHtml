<?php
namespace EasyHtmlPhp;

require('introduction.php');
require('supported_tags.php');
require('using_functions.php');
require('function_close.php');
require('function_content.php');
require('open_closed.php');
require('print_multiple.php');
require('keys_concepts.php');
require('version.php');
require('changelog.php');
$loadcss =  [
    'href'=>'http://localhost/easyhtml/scripts/css/docstyle.css',
    'rel'=>'stylesheet',
    'type'=>'text/css'
];

$doc_header = [
    'id'=>'doc_header',
    'content'=>[
                [
                    'tag'=>'h1',
                    'id'=>'doc_h1',
                    'content'=>'Documentation'
                ],
                [
                    'tag'=>'h3',
                    'id'=>'doc_subtitle',
                    'content'=>'EasyHtml is a html parser for PHP
                    '
                ],
                [
                    'tag'=>'p',
                    'content'=>'Provides PHP functions you can use on your code, in order to build large & complex html structures in a more simple, effective and organized way.'
                ]
               ]
];
  