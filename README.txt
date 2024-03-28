EasyHtml is a html parser for PHP

It easies printing html on php files.

It basically provides a considerable amount of functions to bw used withn your code.
Function names match with the html output

So: 

    <p>Some text</p>

Can be printed with the p() function like this: 

    p('Some text');


functions can take arrays containing html tag atrributes:

    p( array('id'=>'the_id','class'=>'the_class') );

will output:

    <p id="the_id" class="the_class">


There is one function for every html tag, with its name referencing to the html tag that's going to be used.
However, please check list of supported html tags to see which ones are missing.

You can close any html tag with the close() function.

    close('p')

will output:

    </p>

So:

    p( array('id'=>'the_id','class'=>'the_class') );
    . 'The string of p here'
    . close('p);

Will print:

    <p id="the_id" class="the_class">The string of p here</p>


You can build the array passed to the function before using it, even on different files:

    $paragraph = array('id'=>'the_id','class'=>'the_class');
    p($paragraph);
    close('p');

For html element without any attribute, you can pass the content as a string.
This way the close() function will not be necesary. It will encolse automatically and insert the content:

p('The string here');

Will output:
    <p>The string here</p>

For opening htmls tags without attributes, content and closing tag. Use the bool value FALSE:

    p(FALSE)

will print:

    <p>

For a better flexibility, there's another way to henerate an html tags. And it's the content function.
This is one of the additional functions provided, beside all the html tags named functions.


The content function

This function requires an associative array that also have two required indexes; tag and content

    content( array('tag'=>'h1','content'=>'The Title') );

will print:

    <h1>The Title</h1>

Example:

    $content = [
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
        ]
    ];

    content( $content );

Outputs:

    <h1 class="title_class">The Title</h1>
    <h2 id="h2_id">H2 sub heading</h2>
    <p class="paragraph">A paragraph line.</p>


It is also possible to use the content function within any other html tag function, using the 'content' index in the array:

Example:

    $postcontent = [
                'id'=>'post_12',
                'class'=>'post',
                'content'=>$content   // array in previous example         
            ];

    div( $postcontent );

Will output this html:

    <div id="post_12" class="post" >
        <h1 class="title_class">The Title</h1>
        <h2 id="h2_id">H2 sub heading</h2>
        <p class="paragraph">A paragraph line.</p>
    </div>







