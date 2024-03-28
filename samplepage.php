<?php
namespace EasyHtmlPhp;

require('store/datastore.php');
include_once('buildelements.php');
require('store/sample_page/easyhtml_sample.php');



   // main container
$tt = 
   div( $container)
      . header( $header )
      . div(['id'=>'main_div'])
         . section(['id'=>'sector1','class'=>'section','content'=>'the main section'])
      . close('div')
      . footer( $footer )
   . close('div');

   print_r( $tt );
