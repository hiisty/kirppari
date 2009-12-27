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
								<!--
//Slide Show script (this notice must stay intact)
//For this and more scripts
//visit java-scripts.net or http://wsabstract.com
								if (document.images) {
										img0_on =new Image();  img0_on.src ="videosactive.png"; 
										img0_off=new Image();  img0_off.src="videos.png"; 

										img1_on =new Image(); img1_on.src ="sijaintiB.png"; 
										img1_off=new Image(); img1_off.src="sijainti.png"; 

										img2_on =new Image(); img2_on.src ="newsactive.png"; 
										img2_off=new Image(); img2_off.src="news.png"; 

										img3_on =new Image(); img3_on.src ="makeownstoryactive.png"; 
										img3_off=new Image(); img3_off.src="makeownstory.png"; 

										img4_on =new Image(); img4_on.src ="uploadvideoactive.png"; 
										img4_off=new Image(); img4_off.src="uploadvideo.png"; 

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


//-->
</script>

	
								
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

                                <a href="?page=foo"
                                onMouseOver="movr(1);return true;" 
                                onMouseOut="mout(1);return true;" 
                                onClick="return true;"
                                ><img name=img1
																alt="Sijainti"
                                src="sijainti.png"
                                ></a>



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
