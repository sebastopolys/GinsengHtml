<?php
namespace EasyHtmlPhp;




$navigation = [
        [
            'tag'=>'li',
            'content'=>[
                [
                    'tag'=>'a',
                    'href'=>'http://localhost/easyhtml',
                    'content'=>'Home'
                ]
            ]
        ],
        [
            'tag'=>'li',
            'content'=>[
                [
                    'tag'=>'a',
                    'href'=>'samplepage.php',
                    'content'=>'Page'
                ]
            ]
        ],
        [
            'tag'=>'li',
            'content'=>[
                [
                    'tag'=>'a',
                    'href'=>'easyhtml.php',
                    'content'=>'Posts'
                ]
            ]
        ],
        [
            'tag'=>'li',
            'content'=>[
                [
                    'tag'=>'a',
                    'href'=>'examples.php',
                    'content'=>'Samples'
                ]
            ]
        ],
        [
            'tag'=>'li',
            'content'=>[
                [
                    'tag'=>'a',
                    'href'=>'documentation.php',
                    'content'=>'Doc'                    
                ]
            ]
        ]
   
                    
];

$header = [ 
     
                'id'=>'nav',
                'content'=>[
                            [
                                'tag'=>'h1',
                                'content'=>'logo'
                            ],
                            [
                                'tag'=>'nav',
                                'content'=> [                                       
                                    [
                                        'tag'=>'ul',
                                        'content'=>$navigation
                                    ]
                                ]
                            ]
                ]
                
            
        ];

$container = [
                'id'=>'main_cont'
            ];

 
$posts = [
    [
    'tag'=>'div',
    'content'=>'a div'
    ]
];

$footer =   [
                'id'=>'unique_footer',
                'content'=>[
                        [
                            'tag'=>'div',
                            'class'=>'footer_div',
                            'content'=>[
                                        [
                                            'tag'=>'p',
                                            'content'=>'rr'
                                        ]
                            ]
                        ],
                        [
                            'tag'=>'div',
                            'class'=>'footer_div',
                            'content'=>[
                                        [
                                            'tag'=>'p',
                                            'content'=>'ww'
                                        ]
                                ]
                        ],
                        [
                            'tag'=>'div',
                            'class'=>'footer_div',
                            'content'=>[
                                        [
                                            'tag'=>'p',
                                            'content'=>'tt'
                                        ]
                            ]
                        ]
                ]
            
            ];


$loadcss =  [
                'href'=>'http://localhost/easyhtml/scripts/css/docstyle.css',
                'rel'=>'stylesheet',
                'type'=>'text/css'
            ];

$loadjs =   [
                'type'=>'text/javascript', 
                'src'=>'http://localhost/easyhtml/scripts/js/mainscript.js',
                'content'=>''
            ];