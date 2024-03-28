<?php
namespace EasyHtmlPhp;

$function_content = [
    [
        'tag'=>'p',
        'content'=>'Another additional function is the <mark>content()</mark> function'
    ],
    [
        'tag'=>'p',
        'content'=>'This functions takes a content value referenced on the array under the <mark>\'content\'</mark> index. And it uses this value to insert it within the html element'
    ],
    [
        'tag'=>'p',
        'content'=>'This function takes a non associative array, composed with one or more associative arrays'
    ],
    [
        'tag'=>'p',
        'content'=>'When the content function is called, it will include the content and close the html element with its corresponding closing tag'
    ],
    [
        'tag'=>'p',
        'content'=>'Usage of the content function;'
    ],
    [
        'tag'=>'pre',
        'content'=>'$array2 = [
            [
            \'id\'=&gt;\'the_id\',
            \'tag\'=&gt;\'p\'
            \'content\'=&gt;\'The paragraph\'
            ]
        ];
print_r( content( $array2 ) );'
    ],
    [
        'tag'=>'p',
        'content'=>'Will output:'
    ],
    [
        'tag'=>'pre',
        'content'=>'&lt;p id="the_id"&gt;The paragraph&lt;/p&gt;'
    ],
    [
        'tag'=>'p',
        'class'=>'warning',
        'content'=>'- \'content\' and \'tag\' indexes are required -'
    ]

];