<?php
namespace ginsenghtmlengine;

class startginseng
{
	public function __construct(){

		new ginsenghtml();
	}

	public function print_some_html(){

		return div(['style'=>'background-color:red;','content'=>
			h2('CONTENT HERE')]);
	}
}