## EasyHtml is a html parser for PHP
Provides PHP functions you can use on your code, in order to build large & complex html structures in a more simple, effective and organized way.

Function names make reference to the Html tag to be used by on the Html the function outputs. I.e:
```
print_r( p( 'A paragraph' ) )
```
Will output the following html:
```
<p>A paragraph<p>
```
List of supported html functions:
|           |           |           |           |          |
| :--------:|:---------:|:---------:|:---------:|:--------:|
|   head    |   link    |  footer   |  header   |  script  |
|   nav     | section   |  div      |   span    |   h1     |
|   h2      |   h3      |   p       |    a      |   img    |
|   table   |  form     |   input   |  label    |   ul     |
|   li      |   hr      |    th     |    tr     |   td     |

 
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
### Additional functions: close()
Note that on the above example, there is no content inside the html, neither is a closing html tag (`</span>` )

The additional close() function is provided in order to have more control on html elements closing tag

Use this function to close any opened html tag:
```
close( 'p' );
```
This will output a </span> and close the span element:
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
### Additional function: content()
Another additional function is the content() function

This functions takes a content value referenced on the array under the 'content' index. And it uses this value to insert it within the html element

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
> 'CONTENT' AND 'TAG' INDEXES ARE REQUIRED 

### Opened and closed html elements
There are several situations were html functions can return a self enclosed html tag or not

- Without closing tag
When using any html function with array NOT containing the 'content' index

If a boolean value is passed to the functions

- With closing tag
When passing a string to any function:
```
label( 'A label string' );
```
If the argument array passed to the function contains the 'content' index
```
$array3 = [
            'class'=>'label',
            'content'=>'The content here'
        ];
label( $array3 );
```
If boolean value is passed
```
div( FALSE );
```
### Print multiple elements
It is possible to output multiple html tags at the same time, using any html function that takes a single array.

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
Giving this array to a function will print the amount of elements represented by the count of the first array on the $args array.

In the above example array, it would be the count of "id" values, which is 4
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
### Keys & concepts
#### Functions and arrays
Key of the parser is to understand that you can build the html structure either on the PHP controller file by using the functions, or in the data arrays passed to the functions

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
Both 'tag' and 'content' indexes are required so the content( ) additional function is executed

Use the 'tag' and 'content' index on your arrays to create & nest html elements
```
$array6;
```

#### Argument arrays passed to functions
You can build the arrays passed to functions dinamically, but be aware that this can harm the loading speed of html

Any logic or conditional structure should be managed from the controller file, were you call the easyhtml functions

### Changelog
Version 1.0.0

Initial release

### Version
Latest version:

1.0.0

### Author
sebastopolys
