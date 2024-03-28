<?php
namespace EasyHtmlPhp;

$using_functions = [
            [
                'tag'=>'p',
                'content'=>'In the above example, we are printing a simple paragraph by passing the text to the function'
            ],
            [
                'tag'=>'p',
                'content'=>'It is also possible to pass an array to the function and add attributes to the html element'
            ],
            [
                'tag'=>'pre',
                'content'=>'$array = [
        \'id\'=>\'12\',
        \'class\'=>\'theclass class1\'
        ];
                            
print_r( span( $array ) );'
            ],
            [
                'tag'=>'p',
                'content'=>'This will print out:'
            ],
            [
                'tag'=>'pre',
                'content'=>'&lt;span id="12" class="theclass class1"&gt;'
            ]
    ];