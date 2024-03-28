<?php
namespace EasyHtmlPhp;

$list_item_open = [   
                
            [
                'content'=>'<p>When using any html function with array NOT containing the \'content\' index</p>',
                'pre'=>''
            ],
            [
                'content'=>'<p>If a boolean value is passed to the functions</p>',
                'pre'=>''
            ]  
];
$list_item_closed = [
            [
                            
                'content'=>'<p>When passing a string to any function:</p>',
                'pre'=>'label( \'A label string\' );'          
            
            ],
            [
                'content'=>'<p>If the argument array passed to the function contains the \'content\' index</p>',
                'pre'=>'<pre>$array3 = [
            \'class\'=>\'label\',
            \'content\'=>\'The content here\'
        ];
label( $array3 );</pre>'
            ],
            [
                'content'=>'<p>If boolean value is passed</p>',
                'pre'=>'<pre>div( FALSE );</pre>'
            ]

];

$open_closed = [
        [
            'tag'=>'p',
            'content'=>'There are several situations were html functions can return a self enclosed html tag or not'
        ],
        [
            'tag'=>'ol',
            'content'=>[
                [
                    'tag'=>'li',
                    'content'=> '<h5>Without closing tag</h5><ul>
                    <li>'.$list_item_open[0]['content'].'<pre>'.$list_item_open[0]['pre'].'</pre></li>'
                    .'<li>'.$list_item_open[1]['content'].'</li></ul>'
                            

                ],
                [
                    'tag'=>'li',
                    'content'=> '<h5>With closing tag</h5><ul>
                    <li>'.$list_item_closed[0]['content'].'<pre>'.$list_item_closed[0]['pre'].'</pre></li>'
                    .'<li>'.$list_item_closed[1]['content'].'<pre>'.$list_item_closed[1]['pre'].'</pre></li>'
                    .'<li>'.$list_item_closed[2]['content'].'<pre>'.$list_item_closed[2]['pre'].'</pre></li></ul>'
                ],
                
                 
            ]
        ]
        
];