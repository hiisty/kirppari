<?php

function print_header()
{
		$content = '
				<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
				"http://www.w3.org/TR/html4/strict.dtd">
				<HTML>
						<HEAD>
								<LINK href="special.css" rel="stylesheet" type="text/css">
								<script language="Javascript">
								if (document.images) {
										img1_on =new Image(); img1_on.src ="sijaintiB.png"; 
										img1_off=new Image(); img1_off.src="sijainti.png"; 

										img2_on =new Image(); img2_on.src ="hinnastoB.png"; 
										img2_off=new Image(); img2_off.src="hinnasto.png"; 

										img3_on =new Image(); img3_on.src ="kuviaB.png"; 
										img3_off=new Image(); img3_off.src="kuvia.png"; 

										img4_on =new Image(); img4_on.src ="muutaB.png"; 
										img4_off=new Image(); img4_off.src="muuta.png"; 

										img5_on =new Image(); img5_on.src ="workgroupactive.png"; 
										img5_off=new Image(); img5_off.src="workgroup.png"; 

								}
                                function movr(k) {
										if (document.images) 
												eval("document.img"+k+".src=img"+k+"_on.src");
								}

								function mout(k) {
										if (document.images) 
												eval("document.img"+k+".src=img"+k+"_off.src");
								}


                                </script>
                                <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAI5vcbkEsKgjJjNunqRKeZRRFqipORoJy7Keg7hfMglEC0KtY8hQWUwhKwhJAzgwNKzZz8xkhop4SmA" type="text/javascript"></script>

                                <script type="text/javascript">

                                function initialize() {
                                          if (GBrowserIsCompatible()) {
                                                var map = new GMap2(document.getElementById("map_canvas"));
                                                map.setCenter(new GLatLng(60.867489, 23.519104), 13);
                                                map.setUIToDefault();
                                          }
                                }
                                                                            

                                </script>

	
								
								<TITLE>Talli Kirppis</TITLE>
						</HEAD>
						<BODY>
                                <body onload="initialize()" onunload="GUnload()">
								<div class="main">
								<div class="header">
										<!---<div class="flash"></div>-->
								</div>';
		return $content;
} 	

function print_navi()
{
if (!isset($_GET['page']))
{
    $_GET['page'] = "sijainti";
}
		$content = '
				<div class="sidebar">';
                    if ($_GET['page']!="sijainti" )
                    {
                        $content .='
                            <a href="?page=sijainti"
                            onMouseOver="movr(1);return true;" 
                            onMouseOut="mout(1);return true;" 
                            onClick="return true;"
                            ><img name=img1 border=0 
                            src="sijainti.png"
                            ></a>';
                    }else{
                        $content .= '<img src="sijaintiB.png">';
                    }
                    
                    if ($_GET['page']!="hinnasto" )
                    {
                        $content .='
                            <a href="?page=hinnasto"
                            onMouseOver="movr(2);return true;" 
                            onMouseOut="mout(2);return true;" 
                            onClick="return true;"
                            ><img name=img2 border=0 
                            src="hinnasto.png"
                            ></a>';
                    }else{
                        $content .= '<img src="hinnastoB.png">';
                    }
                     if ($_GET['page']!="kuvia" )
                    {
                        $content .='
                            <a href="?page=kuvia"
                            onMouseOver="movr(3);return true;" 
                            onMouseOut="mout(3);return true;" 
                            onClick="return true;"
                            ><img name=img3 border=0 
                            src="kuvia.png"
                            ></a>';
                    }else{
                        $content .= '<img src="kuviaB.png">';
                    }
                     if ($_GET['page']!="muuta" )
                    {
                        $content .='
                            <a href="?page=muuta"
                            onMouseOver="movr(4);return true;" 
                            onMouseOut="mout(4);return true;" 
                            onClick="return true;"
                            ><img name=img4 border=0 
                            src="muuta.png"
                            ></a>';
                    }else{
                        $content .= '<img src="muutaB.png">';
                    }
                     $content .='</div>';

		return $content;
}

function print_content($page)
{
		$content ='
				<div class="content"><p>';
		if ($page == "sijainti")
		{
				$content .= '<div id="map_canvas" style="width: 500px; height: 300px"></div>';
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
