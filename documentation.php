<?php
namespace EasyHtmlPhp;
 
include_once('buildelements.php');
require('store/sample_page/easyhtml_sample.php');
require('store/documentation/document_main.php');
$array2 = [
    [
    'id'=>'the_id',
    'tag'=>'p',
    'content'=>'The paragraph'
    ]
];
           
print_r(
    head( FALSE )
        . link( $loadcss )
        . script( $loadjs )
    .close('head')

    . div( $container)
        . header( $header )

        . div(['id'=>'main_doc'])

            . section( $doc_header )
          
            . section( $introduction )
             
            . h3( 'List of supported html functions:' )
            . table( content( $supported_tags ) )
             
            . h3( 'Using the html functions' )
            . content( $using_functions )
             
            . h3( 'Additional functions: close()' )
            . content( $function_close )
           
            . h3( 'Additional function: content()' )
            . content( $function_content )
        
            . h3( 'Opened and closed html elements' )
            . content( $open_closed )
            
            . h3( 'Print multiple elements' )
            . content( $print_multiple )

            . h3( 'Keys & concepts' )
            . content( $keys_concepts )

            . h3( 'Changelog' )
            . content( $changelog )

            . h3( 'Version' )
            . content( $version )

        . close('div')

        . footer( $footer )
    . close('div')

);
 