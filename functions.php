<?php

function print_header()
{
		$content = '
                <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
				"http://www.w3.org/TR/html4/strict.dtd">
				<HTML>
						<HEAD>
                        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" >
								<LINK href="special.css" rel="stylesheet" type="text/css">
								<LINK href="galleria.css" rel="stylesheet" type="text/css" media="screen"> 
                                <script type="text/javascript">
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
                                    function movr(k) 
                                    {
										if (document.images) 
												eval("document.img"+k+".src=img"+k+"_on.src");
                                    }

                                    function mout(k) 
                                    {
										if (document.images) 
												eval("document.img"+k+".src=img"+k+"_off.src");
                                    }
                                </script>
                                <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAI5vcbkEsKgjJjNunqRKeZRRFqipORoJy7Keg7hfMglEC0KtY8hQWUwhKwhJAzgwNKzZz8xkhop4SmA" type="text/javascript"></script>

                                <script type="text/javascript">

                                    function initialize() {
                                          if (GBrowserIsCompatible()) {
                                                var map = new GMap2(document.getElementById("map_canvas"));
                                                map.setCenter(new GLatLng(60.867489, 23.51), 13);
                                                map.setUIToDefault();
                                                var blueIcon = new GIcon(G_DEFAULT_ICON);
                                                blueIcon.image = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|FF0000|000000";
                                                
                                                var point = new GLatLng(60.867489, 23.519104);



                                                markerOptions = { icon:blueIcon };
                                                map.addOverlay(new GMarker(point , markerOptions));

                                          
                                        }
                                    }
                                </script>

<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
<script type="text/javascript" src="highslide/highslide.config.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css">
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="highslide/highslide-ie6.css">
<![endif]-->


	
								
								<TITLE>Talli Kirppis</TITLE>
						</HEAD>
						<BODY onload="initialize()" onunload="GUnload()">
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
                            ><img name=img1 
                            src="sijainti.png"
                             alt=""></a>';
                    }else{
                        $content .= '<img src="sijaintiB.png" alt="">';
                    }
                    
                    if ($_GET['page']!="hinnasto" )
                    {
                        $content .='
                            <a href="?page=hinnasto"
                            onMouseOver="movr(2);return true;" 
                            onMouseOut="mout(2);return true;" 
                            onClick="return true;"
                            ><img name=img2  
                            src="hinnasto.png"
                             alt=""></a>';
                    }else{
                        $content .= '<img src="hinnastoB.png" alt="">';
                    }
                     if ($_GET['page']!="kuvia" )
                    {
                        $content .='
                            <a href="?page=kuvia"
                            onMouseOver="movr(3);return true;" 
                            onMouseOut="mout(3);return true;" 
                            onClick="return true;"
                            ><img name=img3
                            src="kuvia.png"
                             alt=""></a>';
                    }else{
                        $content .= '<img src="kuviaB.png" alt="">';
                    }
                     if ($_GET['page']!="muuta" )
                    {
                        $content .='
                            <a href="?page=muuta"
                            onMouseOver="movr(4);return true;" 
                            onMouseOut="mout(4);return true;" 
                            onClick="return true;"
                            ><img name=img4
                            src="muuta.png"
                             alt=""></a>';
                    }else{
                        $content .= '<img src="muutaB.png" alt="">';
                    }
                     $content .='</div>';

		return $content;
}

function print_content($page)
{
		$content ='
				<div class="content">';
		if ($page == "sijainti")
		{
				$content .='<h3>Sijainti</h3>
                <p>Forssasta valtatie kahta tullessa, heti varalaskualueen loputtua käännytään oikealle.<p><b>Bongaa <red>KIRPPIS</red>-Kyltti!</b></p>
                
                <div id="map_canvas" style="width: 301px; height: 300px"></div>
                <p>Yhteystiedot:<br>
                Peltotie 95<br>
                31620 Latovainio<br>
                puh. 044 5050 311</p>';
		}
		if ($page == 'kuvia')
		{
				$content .= '
                           <div class="highslide-gallery">
        <ul>';
        for ($i=1; $i<=18; $i++)
        {
            $content .='
            <li>
                <a href="images/kirppari/'.$i.'.JPG" class="highslide" 
                    title="Kuva '.$i.'" 
                    onclick="return hs.expand(this, config1 )">
                    <img src="images/kirppari/'.$i.'t.JPG"  alt=""/>
                </a>
            </li>';
        }
        

        $content .='
	</ul>
	<div style="clear:both"></div></div> 
';
		}
		
        if ($page == "hinnasto")
        {
            $content .='
            <h3>Hinnasto</h3>
            <table>
            <tr>
                <td><b>Perushinnat:</b></td>
            </tr>
            <tr>
                <td>Pöytä viikoksi:</td>
                <td>15€</td>
            </tr>
            <tr>
                <td>Pöytä kuukaudeksi:</td>
                <td>50€</td>
            </tr>
            </table>
            ';
        }
        $content .='
				
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
