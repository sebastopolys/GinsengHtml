<?php
namespace EasyHtmlPhp;

include(__DIR__.'/buildelements.php');
require('store/sample_page/easyhtml_sample.php');
require('store/datastore.php');
 


 

  
        $op =  head( FALSE )

        . link( $loadcss )
        . script( $loadjs ) 

    . close('head') 

    
    . div( $container )
        . header( $header )          
       // . div( $ccontent )
        //  . content( $ccontent )
          //. content( [['tag'=>'h1','content'=>'The Title' ]])
 
        
            . h3( 'Multiple function' )
            . div($data_args)
            
        
 
        .div(div(p('A nested string')))


    //. footer ( $footer )

    . close('div');

    print_r( $op );
 