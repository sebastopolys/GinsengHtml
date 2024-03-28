<?php
namespace EasyHtmlPhp;

$function_close = [
    [
        'tag'=>'p',
        'content'=>'Note that on the above example, there is no content inside the html, neither is a closing html tag ( &lt;/span&gt; )'
    ],
    [
        'tag'=>'p',
        'content'=>'The additional <mark>close()</mark> function is provided in order to have more control on html elements closing tag'
    ],
    [
        'tag'=>'p',
        'content'=>'Use this function to close any opened html tag:'
    ],
    [
        'tag'=>'pre',
        'content'=>'close(\'span\');'
    ],
    [
        'tag'=>'p',
        'content'=>'This will output a &lt;/span&gt; and close the span element:'
    ],
    [
        'tag'=>'pre',
        'content'=>'print_r( 
    p( $array )
    . \'A paragraph\'
    . close(\'p\') );'
    ],
    [
        'tag'=>'p',
        'content'=>'Result:'
    ],
    [
        'tag'=>'pre',
        'content'=>'&lt;p id="12" class="theclass class1"&gt;
A paragraph
&lt;/p&gt;'
    ]

];