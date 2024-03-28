<?php
namespace EasyHtmlPhp;

$introduction = [
                    'id'=>'thefuncs',
                    'class'=>'eh-section',
                    'content'=>[
                        [
                            'tag'=>'p',
                            'content'=>'Function names make reference to the Html tag to be used by it. I.e:'
                        ],
                        [
                            'tag'=>'pre',
                            'content'=>'print_r( p( \'A paragraph\' ) )'
                        ],
                        [
                            'tag'=>'p',
                            'content'=>'Will output the following html:'
                        ],
                        [
                            'tag'=>'pre',
                            'content'=>'&lt;p&gt;A paragraph&lt;p&gt;'
                        ]
                    ]     
];