<?php
namespace ginsenghtmlengine;
 
class ginsenghtml {

    public static $htmlTags = [
        'div', 'span', 'form', 'input', 'label', 'h1', 'h2', 'h3', 'p', 'hr', 'ul', 'li', 'img',
        'table', 'th', 'tr', 'td', 'a', 'header', 'nav', 'footer', 'section', 'head', 'link', 'script'
    ];
 const O = '<';
 const C = '>';
 const Q = '"';
 const B = '/';
 const E = '=';
 const S = ' ';

const BC = self::B.self::C;
const OB = self::O.self::B;
const EQ = self::E.self::Q;

    public static function __callStatic($name, $arguments) 
    {
        if (in_array($name, self::$htmlTags)) 
        {
            return self::buildElement($arguments[0], $name);
        }
        throw new \BadMethodCallException("Method $name does not exist.");
    }
    
    public static function buildElement($data, $function) 
    {
            $fout = $tag = $cont = '';
            // only main namespace is removed !
            $tag = explode( '\\',$function )[0];
            // $data is a string, return with empty attributes, string content and closing tag
            if( TRUE == is_string( $data ) ){
               return self::O . $tag . self::C . $data . self::OB . $tag . self::C; 
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
                            $fout .= $key . self::EQ . $value . self::Q . self::S;
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
                    return self::O . $tag . self::S . $fout . self::C . $cont . self::OB . $tag . self::C;
                }
                if( $multi == TRUE){
                    buildElement( $data, $function );
                }
                // not content. Return without the closing tag
                return self::O . $tag . self::S . $fout . self::C ;  
            }
            if( FALSE == $data ){
                return self::O . $tag . self::C;    // <div>
            }
            if( TRUE == $data){
                return self::O . $tag . self::C . self::OB . $tag . self::C; // <div></div>
            }
            return null;
            }

    private static function buildContent($data) 
    {
            $cout = $cont = '';
            if( FALSE == is_array($data) ){
                return $data;
            }
            for ($i=0; $i < count( $data ); $i++) {
                if( FALSE == $data[$i]['tag'] ){
                    break;
                }
                $cout .= self::O . $data[$i]['tag'];              
                foreach ( $data[$i] as $ky => $vl ) {
                    if( $ky !== 'content' && $ky !== 'tag' ) {                
                        $cout .= self::S . $ky . self::EQ . $vl. self::Q;
                    }
                }
                $cout .= C;            
                if( TRUE == is_array( $data[$i]['content'] ) ){
                    // recursion
                    $cont =  buildContent( $data[$i]['content'] );
                } else {
                    $cont = $data[$i]['content'];
                }            
                $cout .= $cont . self::OB . $data[$i]['tag'] . self::C;       
            } # end loop
            return ( $cout );
    }
 
    private static function multipleElements( $key, $data, $tag )
    {
            $mout = $con = '';
            for ($j=0; $j < count($data[$key]); $j++) {
                $mout .= self::O . $tag;
                foreach ($data as $ku => $vy) {
                    if( $ku !== 'content'){
                        if( TRUE === is_array( $vy ) ){                
                            $mout .= self::S . $ku . self::EQ . $vy[$j] . self::Q;                
                        } else {
                            $mout .= self::S . $ku . self::EQ . $vy . self::Q;
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
                $mout .=  self::C . $con . self::OB . $tag . self::C;
            }
            return ($mout);
    } 
}

// Remove namespace from __FUNCTION__ parameter
function tag($function){ 
     $tag = explode('\\',$function);
     return end($tag); 
}

function div($dats){ 
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function span($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__));
}
function form($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__));
}
function input($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__));
}
function label($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__));
}
function h1($str){
    return ginsenghtml::buildElement( $str, tag(__FUNCTION__));
}
function h2($str){
    return ginsenghtml::buildElement( $str, tag(__FUNCTION__) );
}
function h3($str){
    return ginsenghtml::buildElement( $str, tag(__FUNCTION__) );
}
function p($str){
    return ginsenghtml::buildElement( $str, tag(__FUNCTION__) );
}
function hr($mode){
    return ginsenghtml::buildElement( $mode, tag(__FUNCTION__) );
}
function ul($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function li($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function img($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function table($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function th($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function tr($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
} 
function td($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function a($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function header($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function nav($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function footer($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function section($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function head($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function link($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
function script($dats){
    return ginsenghtml::buildElement( $dats, tag(__FUNCTION__) );
}
/**
 * Additional functions
 */
function content ( $content ){
    return ginsenghtml::buildContent( $content );
}
function close( $tag ){  
    return '</' . $tag . '>';
}
