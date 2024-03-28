<?php
namespace EasyHtmlPhp;

/**
 * @version 1.0.0
 * @package EasyHtml
 * @author Sebastopolys
 * @abstract A PHP Html parser for outputing html on php files in a very simple and effective way.
  */

define("O","<");
define("C",">");
define("Q",'"');
define("B","/");
define("BC",B.C);
define("OB",O.B);
define("S"," ");


/**
 *      Supported html tags / functions:  
 *      div - span - form - input - label -  header - head
 *      h1 - h2 - h3 - p - hr - nav - link - ul - li - img - table 
 *      th - footer - script - tr - td - a - section 
 *      section  
 */
 
 
function div( $dats ){ 
    return buildElement( $dats,__FUNCTION__ );
}
function span( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function form( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function input( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function label( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function h1( $str ){
    return buildElement( $str,__FUNCTION__ );
}
function h2( $str ){
    return buildElement( $str,__FUNCTION__ );
}
function h3( $str ){
    return buildElement( $str,__FUNCTION__ );
}
function p( $str ){
    return buildElement( $str,__FUNCTION__ );
}
function hr( $mode ){
    return buildElement( $mode,__FUNCTION__ );
}
function ul($dats){
    return buildElement( $dats,__FUNCTION__ );
}
function li($dats){
    return buildElement( $dats,__FUNCTION__ );
}
function img($dats){
    return buildElement( $dats,__FUNCTION__ );
}
function table( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function th( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function tr( ){
    return buildElement( $dats,__FUNCTION__ );
} 
function td( $dats){
    return buildElement( $dats,__FUNCTION__ );
}
function a( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function header( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function nav( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function footer( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function section( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function head( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function link( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}
function script( $dats ){
    return buildElement( $dats,__FUNCTION__ );
}

/**
 * Additional functions
 */
function content ( $data){
    return buildContent( $data );
}
function close( $el ){  
    return OB . $el . C;
}

/**
 * The function that builds html elements.
 * @param $data array | string | bool
 * @param $function - The function name is the html tag
 */

function buildElement( $data, $function ){
    
    $fout = $tag = $cont = '';

    // only main namespace is removed !
    $tag = explode( '\\',$function )[1];
 
    // $data is a string, return with empty attributes, string content and closing tag
    if( TRUE == is_string( $data ) ){
       return O . $tag . C . $data . OB . $tag . C; 
    }

    // $data is an array. Start building the html element
    if( TRUE == is_array( $data ) ){

     
        $flag = $multi = FALSE;

        foreach ( $data as $key => $value ) {
          
            // Not a 'content' index
            if( $key !== 'content' ){
                
                if( TRUE == is_array( $value ) ){
                    // multipe element
                    
                    // buildfirst element here
                   // $fout .= $key . '="' . $value[0] . '"' . S;
                     return multipleElements( $key, $data, $tag);
                    
                      
                   
                } else {
                    $fout .= $key . '="' . $value . '"' . S;
                }
            }
            // Index is 'content'
            if( $key === 'content' ){
                if(TRUE == is_array( $value ) ){                     
                    $cont = buildContent( $value );
                } else {
                    $cont = $value;
                }
                $flag = TRUE;
            }
             
        }
        // is a content. Return with closing tag
        if( $flag==TRUE ){
            return O . $tag . S . $fout . C . $cont . OB . $tag . C;
        }
        if( $multi == TRUE){
            buildElement( $data );
        }
        // not content. Return without the closing tag
        return O . $tag . S . $fout . C ;  
    }

    if( FALSE == $data ){
        return O . $tag . C;    // <div>
    }
    if( TRUE == $data){
        return O . $tag . C . OB . $tag . C; // <div></div>
    }

    return null;

}

/**
 * The content() function
 * @param $data array
 * Returns html element
 * Applies recursion
 */
function buildContent( $data ){

    $cout = $cont = '';
    if( FALSE == is_array($data) ){
        return $data;
    }

    for ($i=0; $i < count( $data ); $i++) {

        if( FALSE == $data[$i]['tag'] ){
            break;
        }
        $cout .= O . $data[$i]['tag'];
         
        foreach ( $data[$i] as $ky => $vl ) {
            if( $ky !== 'content' && $ky !== 'tag' ) {                
                $cout .= S . $ky . '="' .$vl. '"';
            }
        }
        $cout .= C;
        
        if( TRUE == is_array( $data[$i]['content'] ) ){
            // recursion
            $cont =  buildContent( $data[$i]['content'] );
        } else {
            $cont = $data[$i]['content'];
        }
        
        $cout .= $cont . OB . $data[$i]['tag'] . C;
    
    } # end loop

    return ( $cout );

}

/**
 * The multipleElements function is not available from the outside.
 * @param $key = array index where function acts on
 * @param $data = atributtes array
 * @param $tag = the html tag
 */
function multipleElements( $key, $data, $tag ){

    $mout = $con = '';
    for ($j=0; $j < count($data[$key]); $j++) {
        $mout .= O . $tag;
        foreach ($data as $ku => $vy) {
            if( $ku !== 'content'){
                if( TRUE === is_array( $vy ) ){                
                    $mout .= S .$ku . '="' . $vy[$j] .'"';                
                } else {
                    $mout .= S .$ku . '="' . $vy .'"';
                }           
            } 
             // is content
            if( $ku === 'content' ){

                if( TRUE === is_array( $vy ) ){

                    if( isset( $vy[$j]['tag'] ) ){                        
                        $con = buildContent( $vy );
                    } else {
                        $con = $vy[$j];
                    }
                                     
                }  else {
                    $con = $vy ;                    
                }
            }
        }
      
            $mout .=  C . $con . OB . $tag . C;
         
        
    }

    return ($mout);

}
 
