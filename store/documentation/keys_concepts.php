<?php
namespace EasyHtmlPhp;

$keys_concepts = [
    [
        'tag'=>'span',
        'content'=>'<ul><li><h5>Functions and arrays</h5></li></ul>'
    ],
    [
        'tag'=>'p',
        'content'=>'Key of the parser is to understand that you can build the html structure either on the PHP controller file by using the functions, or in the data arrays passed to the functions'
    ],
    [
        'tag'=>'p',
        'content'=>'I.e.'
    ],
    [
        'tag'=>'pre',
        'content'=>'$array5 = [
            \'id\'=>\'dataid\',
            \'class\'=>\'theclass\'
            ];
$args = [
            \'class\'=>\'par\'
        ];
    
div( $array5 )
    . div( $args )
        . p( FALSE )
            . \'text here\'
        . close(\'p\')
    . close(\'div\')
. close(\'div\');'
        ],
        [
            'tag'=>'p',
            'content'=>'and:'
        ],
        [
    'tag'=>'pre',
    'content'=>'$array6 = [
            \'id\'=>\'dataid\',
            \'class\'=>\'theclass\',
            \'content\'=>[
                        [
                        \'tag\'=>\'div\',
                        \'class\'=>\'par\',
                        \'content\'=>[
                                [
                                    \'tag\'=>\'p\',
                                    \'content\'=>\'text here\'
                                 ]
                                ]
                         ]
                        ]
            ];
    
div( $array6 ); '
            ],
            [
                'tag'=>'p',
                'content'=>'Will both output the same html:'
            ],
            [
                'tag'=>'pre',
                'content'=>'
&lt;div id="dataid" class="theclass"&gt;
    &lt;div class="par"&gt;
        &lt;p&gt;text here&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;'
            ],
            [
                'tag'=>'span',
                'content'=>'<ul><li><h5>Nesting functions:</h5></li></ul>'
            ],
            [
                'tag'=>'p',
                'content'=>'It is possible to nest functions inside functions:'
            ],
            [
                'tag'=>'pre',
                'content'=>'div( div( p(\'A nested string\' ) ) );'
            ],
            [
                'tag'=>'p',
                'content'=>'Will output:'
            ],
            [
                'tag'=>'pre',
                'content'=>'
&lt;div&gt;
    &lt;div&gt;
        &lt;p&gt;
            A nested string
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;'            
            ],
            [
                'tag'=>'p',
                'content'=>'<ul><li><h5>Nested argument arrays:</h5></li></ul>'
            ],
            [
                'tag'=>'p',
                'content'=>'Both \'tag\' and \'content\' indexes are required so the <mark>content( )</mark> additional function is executed'
            ],
            [
                'tag'=>'p',
                'content'=>'Use the \'tag\' and \'content\' index on your arrays to create & nest html elements'
            ],                     
            [
                'tag'=>'span',
                'content'=>'<ul><li><h5>Argument arrays passed to functions</h5></li></ul>'
            ],
            [
                'tag'=>'p',
                'content'=>'You can build the arrays passed to functions dinamically, but be aware that this can harm the loading speed of html'
            ],
            [
                'tag'=>'p',
                'content'=>'Any logic or conditional structure should be managed from the controller file, were you call the easyhtml functions'
            ]
            
];

