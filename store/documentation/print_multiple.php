<?php
namespace EasyHtmlPhp;

$print_multiple = [
    [
       'tag'=>'p',
       'content'=>'It is possible to output multiple html tags at the same time, using any html function that takes a single array.' 
    ],
    [
        'tag'=>'p',
        'content'=>'In order to achieve this the array passed to the function must be indexed without associative keys:' 
    ],
    [
        'tag'=>'pre',
        'content'=>'array(3,5,7,10);'
    ],
    [
        'tag'=>'p',
        'content'=>'So you can build the array like this:'
    ],
    [
        'tag'=>'pre',
        'content'=>'$array4 = [
            \'id\'=>[\'id3\',\'id5\',\'id7\',\'id10\'],
            \'class\'=>\'theclass\',    
            \'content\'=>[
                        \'The content of the 3\',
                        \'Text of content 5\',
                        \'Another text 7\',
                        \'Some more content 10\'                
                    ],            
            \'custom\'=>[3,5,7,10]
        ];'
    ],[
        'tag'=>'p',
        'content'=>'Giving this array to a function will print the amount of elements represented by the count of the first array on the $args array.'
    ],
    [
        'tag'=>'p',
        'content'=>'In the above example array, it would be the count of "id" values, which is 4'
    ],
    [
        'tag'=>'pre',
        'content'=>'print_r( div( $array4 ) );'
    ],
    [
        'tag'=>'p',
        'content'=>'Result:'
    ],
    [
        'tag'=>'pre',
        'content'=>'
        &lt;div id="id3" class="theclass" custom="3"&gt;The content of the 3&lt;/div&gt;
        &lt;div id="id5" class="theclass" custom="5"&gt;Text of content 5&lt;div&gt;
        &lt;div id="id7" class="theclass" custom="7"&gt;Another text 7&lt;/div&gt;
        &lt;div id="id10" class="theclass" custom="10"&gt;Some more content 10&lt;/div&gt;'
    ]

];