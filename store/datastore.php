<?php
namespace EasyHtmlPhp;
error_reporting(E_ALL); // Error/Exception engine, always use E_ALL
ini_set('ignore_repeated_errors', TRUE); // always use TRUE
ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment
ini_set('log_errors', TRUE); // Error/Exception file logging engine.
ini_set('error_log', '/ERROR.log');

$postimage = [
            'src'=>'http://localhost/easyhtml/resources/fondo_pintura.jpg',
            'id'=>"fondo_pintura", 
            'alt'=>'fondo pintura',
            'style'=>'width:25%;'
        ];

$form = [
            'id'=>'form_id',
            'method'=>'post'
        ];

$inputone =  [
            'id'=>'textinp',
            'class'=>'formdiv'
        ];

$labelone = [
            'for'=>'text_1',
            'class'=>'label'
        ];

$textinput = [
            "id"=>'text_1',
            'type'=>'text',
            "class"=>'textinput'
        ];

$datediv = [
            'id'=>'datediv',
            'class'=>'formdiv'
        ];

$datelabel = [
            'for'=>'date_form',
            'class'=>'label'
        ];

$dateinput = [
            "id"=>'date_form',
            'type'=>'date'
        ];
$submitdiv = [
            'id'=>'submit_cont',
            'class'=>'formdiv'
        ];
 
$submitbutton = [
            "id"=>'submit_f',
            'type'=>'submit'
        ];

$array2 = [
            "id"=>'the_id2',
            'class'=>'theclass',
            'custom'=>'2'
        ];



$listcont = [
            'id'=>'postform_list',
            'class'=>'list'
        ];

$listitem = [             
            'class'=>'list_item'
        ];



$rawcontent = [
                [  
                    'tag'=>'h1',
                    'id'=>'thetitleid',
                    'class'=>'title',
                    'content'=>'El titulo del post'
                ],
                [
                    'tag'=>'p',
                    'class'=>'paragraph',
                    'style'=>'width:33%;',
                    'content'=>'El primer parrafo del post, en la funcion content se pueden enviar atributos y el contenio dentro del indice content'
                ],
                [
                    'tag'=>'p',
                    'class'=>'paragraph',
                    'style'=>'width:33%;',
                    'content'=>'El segundo parrafo del post, en la funcion content se pueden enviar atributos y el contenio dentro del indice content'
                ],
                [
                    'tag'=>'p',
                    'class'=>'paragraph',
                    'style'=>'width:33%;',
                    'content'=>'El tercer parrafo del post, en la funcion content se pueden enviar atributos y el contenio dentro del indice content'
                ],
                [
                    'tag'=>'h3',
                    'class'=>'thesubheading',
                    'content'=>'Un encabezado en h3'
                ],
                [
                    'tag'=>'p',
                    'style'=>'width:33%;',
                    'content'=>'Aqui el parrafo que viene despues del encabezado h3. Todavia no es posible insertar elementos de html con sub elementos como por ejemplo listas, formularios, tablas. Solo un unico elemento de html en el mismo nivel que todos lso demas elementos que imprime la funcion content()'
                ] 
                            
            ];

 
$content = [
    [
        'tag'=>'p',
        'id'=>'p_id',
        'content'=>'A paragrapf sring 1'
    ],
    [
        'tag'=>'div',
        'content'=>[
                        [
                            'tag'=>'h1',
                            'class'=>'title_class',
                            'content'=>'The Title'
                        ],
                        [
                            'tag'=>'h2',
                            'id'=>'h2_id',
                            'content'=>'H2 sub heading'
                        ],
                        [
                            'tag'=>'p',
                            'class'=>'paragraph',
                            'content'=>'A paragraph line.'
                        ],
                        [
                            'tag'=>'div',
                            'content'=>[
                                            [
                                                'tag'=>'p',
                                                'content'=>'Even deeper nested element'
                                            ]
                                        ]
                        ]

                    ]
    ]

  
];
       
$xcontent = [
    [
        'tag'=>'h1',
        'class'=>'title_class',
        'content'=>'The Title'
    ],
    [
        'tag'=>'h2',
        'id'=>'h2_id',
        'content'=>'H2 sub heading'
    ],
    [
        'tag'=>'p',
        'class'=>'paragraph',
        'content'=>'A paragraph line.'
    ],
    [
        'tag'=>'div',
        'content'=>[
                        [
                            'tag'=>'p',
                            'content'=>'Even deeper nested element'
                        ]
                    ]
    ]

];

$array3 = [
    "id"=>['id3','id5','id7','id10' ],
    'class'=>'theclass secondclass',    
    'content'=>[
        'The content of the 3',
        'Text of content 5',
        'Another text 7',
        'Some more content 10'               
            ],            
    'custom'=>[3,5,7,10]
]; 

$ccontent = [
    [
        'tag'=>'h3',
        'content'=>'A content function'
    ],
    [
        'tag'=>'p',
        'content'=>'Can nest arbitrary'
    ],
    [
        'tag'=>'div',
        'id'=>'sublevels',
        'content'=>[
                    [
                        'tag'=>'p',
                        'content'=>'sub level element'
                    ],
                    [
                        'tag'=>'div',
                        'content'=>[
                                    [
                                        'tag'=>'span',
                                        'content'=>'Deeper element'
                                    ]
                                    ]
                    ]
                    ]
    ],
    [
        'tag'=>'pre',
        'content'=>'A random footer'
    ]

];

$data =[
        'id'=>'dataid',
        'class'=>'theclasee thedivclass'
];

 /* **************************
 *  Multiple function
 * */
$content_array = 

$data_args = [
    'id'=>['id1', 'id2','id3','id4'],
    'class'=> 'otherclass',
    'content'=> [
                    '<p>First element</p>',
                    '<p>Second element content</p>', 
                    '<p>Third element content</p>',
                    '<p>Fourth element content</p>'
                
    ],   
    'custom-data'=>[1,2,3,4]          
    ];