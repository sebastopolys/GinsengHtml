## Ginseng Html is a html engine for PHP
Provides PHP functions you can use on your code, in order to build large & complex html structures in a more simple, effective and organized way.

### Installation

- Install with composer using the following command on a terminal.

``composer require sebastopolys/ginsenghtml``

- Manual installation

Save the ``ginsenghtml.php`` file somewere in your PHP application.

### Usage:
After installing, instantiate ``ginsenghtml`` class in the constructor of a class:
```
<?php
namespace MyNamespace;

use GinsengHtml\ginsenghtml;

class myclass
{
    public function __construct(){
        new ginsenghtml();
    }
}
```
> [!NOTE]
> ``ginsenghtml()`` is a static class so it needs to be instantiated
> only once, on the first template file that is loaded.


Because functions are used to build html elements, it is necessary to call the html functions also.
```
<?php
namespace MyNamespace;

use GinsengHtml\ginsenghtml;
use function GinsengHtml\{p,h1,h2,span,a};
```
Add the necessary html functions on each template file.

If you change namespace of ginsenghtml class to match your project namespace, it is not neccesary to add ``use function`` declaration.

After this, html functions will become available in further methods of your class:
```
<?php
namespace MyNamespace;
use GinsengHtml\ginsenghtml;
use function GinsengHtml\{h2,div};

class MyTemplateFileClass
{
    public function print_some_html(){

        return div(['id'=>'head_div','style'=>'background-color:yellow;','content'=>
            h2('CONTENT HERE!')]);
    }
}
```

### Html functions:
Function names make reference to the Html tag to be used on the Html the function outputs. I.e:
```
p( 'A paragraph' );
```
Will output the following html:
```
<p>A paragraph<p>
```
 
### Using the html functions
In the above example, we are printing a simple paragraph by passing the text to the function

It is also possible to pass an array to the function and add attributes to the html element
```
$array = [
        'id'=>'12',
        'class'=>'theclass class1'
        ];
                            
print_r( span( $array ) );
```
This will print out:
```
<span id="12" class="theclass class1">
```
### Additional functions: ``close()``
Note that on the above example, there is no content inside the html, neither is a closing html tag (`</span>` )

The additional ``close()`` function is provided in order to have more control on html elements closing and opening

Use this function to close any opened html tag:
```
close( 'p' );
```
This will output a self enclosed paragraph element:
```
print_r( 
    p( $array )
    . 'A paragraph'
    . close( 'p') );
```
Result:
```
<p id="12" class="theclass class1">
A paragraph
</p>
```
### Additional function: ``content()``
The ``content()`` function takes a content value referenced on the given array under the ``'content'`` index. And it uses this value to insert it within the html element

This function takes a non associative array, composed with one or more associative arrays

When the content function is called, it will include the content and close the html element with its corresponding closing tag

Usage of the content function;
```
$array2 = [
            [
            'id'=>'the_id',
            'tag'=>'p'
            'content'=>'The paragraph'
            ]
        ];
print_r( content( $array2 ) );
```
Will output:
```
<p id="the_id">The paragraph</p>
```

> [!CAUTION]
> ``'content'`` and ``'tag'`` indexes are required when using the ``content()`` function on template files

### Opened and closed html elements
There are several situations were html functions can return a self enclosed html tag or not

##### Without closing tag
- When using any html function with array NOT containing the 'content' index
```
div(['id'=>'div_id']);
```
- If a boolean value is passed to the function
```
div( FALSE );
```

##### With closing tag
- When passing a string to any function, instead of an array:
```
label( 'A label string' );
```
- If the argument array passed to the function contains the 'content' index
```
$array3 = [
            'class'=>'label',
            'content'=>'The content here'
        ];
label( $array3 );
```
- If a boolean value is passed
```
div( TRUE );
```
Note that if any html element is printed without its closing tag, browsers will add it at the end of the ``<body>`` automatically

### Print multiple elements with a single html function
It is possible to output multiple html tags using a single html function.

In order to achieve this the array passed to the function must be indexed without associative keys:
```
array(3,5,7,10);
```
So you can build the array like this:
```
$array4 = [
            'id'=>['id3','id5','id7','id10'],
            'class'=>'theclass',    
            'content'=>[
                        'The content of the 3',
                        'Text of content 5',
                        'Another text 7',
                        'Some more content 10'                
                    ],            
            'custom'=>[3,5,7,10]
        ];
```
Giving this array to a function will print the amount of elements represented by the count of the first array on the array.

In the above sample array, it would be the count of "id" values, which is 4
```
print_r( div( $array4 ) );
```
Result:
```

        <div id="id3" class="theclass" custom="3">The content of the 3</div>
        <div id="id5" class="theclass" custom="5">Text of content 5<div>
        <div id="id7" class="theclass" custom="7">Another text 7</div>
        <div id="id10" class="theclass" custom="10">Some more content 10</div>
```

### Supported Html tags (functions)

|           |           |           |           |          |
| :--------:|:---------:|:---------:|:---------:|:--------:|
|   head    |   link    |  footer   |  header   |  script  |
|   nav     | section   |  div      |   span    |   h1     |
|   h2      |   h3      |   p       |    a      |   img    |
|   table   |  form     |   input   |  label    |   ul     |
|   li      |   hr      |    th     |    tr     |   td     |

Feel free to edit the ``ginsenghtml.php`` file and add any missing html tag if you need

### Keys & concepts
#### Functions and arrays
Key of the parser is to understand that you can build the html structure either on the PHP temlate file by using the functions, or in the data arrays passed to the functions that comes from the controller.

I.e.
```
$array5 = [
            'id'=>'dataid',
            'class'=>'theclass'
            ];
$args = [
            'class'=>'par'
        ];
    
div( $array5 )
    . div( $args )
        . p( FALSE )
            . 'text here'
        . close('p')
    . close('div')
. close('div');
```
and:
```
$array6 = [
            'id'=>'dataid',
            'class'=>'theclass',
            'content'=>[
                        [
                        'tag'=>'div',
                        'class'=>'par',
                        'content'=>[
                                [
                                    'tag'=>'p',
                                    'content'=>'text here'
                                 ]
                                ]
                         ]
                        ]
            ];
    
div( $array6 );
```
Will both output the same html:
```
<div id="dataid" class="theclass">
    <div class="par">
        <p>text here</p>
    </div>
</div>
```
#### Nesting functions:
It is possible to nest functions inside functions:
```
div( div( p('A nested string' ) ) );
```
Will output:
```
<div>
    <div>
        <p>
            A nested string
        </p>
    </div>
</div>
```
#### Nested argument arrays:
Both 'tag' and 'content' indexes are required so the ``content()`` additional function is executed recursively

Use both 'tag' and 'content' index on your arrays to create & nest html elements.
```
$array6;
```

#### Argument arrays passed to functions
You can build the arrays passed to functions dinamically, but be aware that this can harm the loading speed of page load. Try to keep the arguments array the smaller as possible.

### Changelog
- 1.0.0
- 1.1.0

### Initial release
- 1.0.0

### Latest Version
- 1.1.0

### Author
sebastopolys

