<?php

function print_header()
{
		$content = '
				<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
				"http://www.w3.org/TR/html4/strict.dtd">
				<HTML>
						<HEAD>
								<LINK href="special.css" rel="stylesheet" type="text/css">
								<TITLE>Talli Kirppis</TITLE>
						</HEAD>
						<BODY>
								<div class="main">
								<div class="header">
										<!---<div class="flash"></div>-->
								</div>';
		return $content;
} 	

function print_navi()
{
		$content = '
				<div class="sidebar">
                    <img src=sijainti.png />
                    <img src=hinnasto.png />                
                    <img src=kuvia.png />                    
                    <img src=muuta.png /> 
                
                
                
                </div>
				';

		return $content;
}

function print_content($page)
{
		$content ='
				<div class="content"><p>';
		if ($page == "foo")
		{
				$content .= 'asdf';
		}
		$content .='
				</p>
				</div>';
		return $content;

}

function print_footer()
{
		$content ='
				 </div>
				 </BODY>
				 </HTML>';
		return $content;
}



?>
