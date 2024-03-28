<?php
 
namespace EasyHtmlPhp;
 
 require('store/datastore.php');
 include_once('buildelements.php');
 require('store/sample_page/easyhtml_sample.php');
 
 
 
    // main container
$out = 
    div( $container)
    . header( $header )          
        // Title
        . h1('The h1 Html title')

        // Featured image
        . img( $postimage )

            // form
            . form( $form )

                // text input 1
                . div( $inputone )
                    . label( $labelone ) 
                        . 'Text input'
                    . close('label')
                    . input( $textinput )
                . close('div')

                // date input
                . div( $datediv )
                    . label( $datelabel ) 
                        . 'Date input'
                    . close('label')
                    . input( $dateinput )
                . close('div')
                
                // separator
                . hr(['style'=>'width:25%;margin-left:inherit;border:2px solid blue;'])

                // submit button
                . div( $submitdiv )
                    . input( $submitbutton )
                . close('div')

            . close('form')

            // list container
            . div( $listcont )
            // list h2 heading
            . h2('List h2 heading')
    
                // Unordered list
                . ul(FALSE)
                    . li( $listitem )
                        . a(['href'=>'http://localhost/WOOCLIENT'])
                            . 'Link'
                        . close('a')
                    . close('li')
                    . li( $listitem )
                        . 'Item 1'
                    . close('li')
                    . li( $listitem )
                        . 'Item 2'
                    . close('li')
                . close('ul')

            . close('div')

            // table container
            . div(['id'=>'table_cont','style'=>'background-color:yellow;width:25%;'])
                // table
                . table(FALSE)
                    . tr(FALSE)
                        .th('Col 1')
                        .th('Col 2')
                        .th('Col 3')
                    . close('tr')
                    . tr(['class'=>'table_row'])
                        . td(['class'=>'table_data'])
                            . 'Value '
                        . close('td')
                        . td(['class'=>'table_data'])                             
                            . 'Value 2'                             
                        . close('td')
                        . td(['class'=>'table_data'])
                            . 'Value 1'
                        . close('td')
                    . close('tr')
                    . tr(['class'=>'table_row'])
                        . td(['class'=>'table_data'])
                            . 'Data '
                        . close('td')
                        . td(['class'=>'table_data'])                             
                            . 'data 2'                             
                        . close('td')
                        . td(['class'=>'table_data'])
                            . 'data 1'
                        . close('td')
                    . close('tr')
                . close('table')
            . close('div')
            //. div( $postcontent )
             
             
   
            . footer( $footer )
    . close('div'); 
    
print_r( $out );
 