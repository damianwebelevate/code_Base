<?php

require dirname(__FILE__).'/commonResources.php';

// set of variables for the breadcrumb
$colorsId = 'id="getColors"';
$onToEmbroidery = 'id="onToEmbroidery"';

$fontFamily = '	<ul id="fontList" class="font-list">
						<li><p data="fontFam"  title="Arial Black" class="arialBlack">Arial Black</li>
						<li><p data="fontFam" title="Arial Narrow" class="arialNarrow">Arial Narrow</li>
						<li><p data="fontFam" title="Century" class="centuryGothic">Century</li>
						<li><p data="fontFam" title="Georgia" class="georgiaTimes">Georgia</li>
						<li><p data="fontFam" title="Lucida Console" class="lucindaConsole">Lucinda</li>
						<li><p data="fontFam" title="Times new Roman" class="timesNew">Times New Roman</li>
						<li><p data="fontFam" title="Brush Script MT" class="brushScript">Brush Script</li>
					</ul>';

// FONT COLOR LIST FOR NECK					

$fontColor = '	<ul id="fontColor" class="font-color-list">
						<li>
							<li><p data="fontCol" class="mini-block" id="#F4F5F0" title="White" style="background-color: #F4F5F0;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#59497F;" title="Purple" style="background-color: #59497F;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#2A3244;" title="Navy" style="background-color: #2A3244;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#2760A7;" title="Royal Blue" style="background-color: #2760A7;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#B5CED4;" title="Light Blue" style="background-color: #B5CED4;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#315D54;" title="Hunter Green"style="background-color: #315D54;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#BBBCBC;" title="Grey" style="background-color: #BBBCBC;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#343333;" title="Black" style="background-color: #343333;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#E5D0B1" title="Cream" style="background-color: #E5D0B1;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#D8C09D;" title="Tan" style="background-color: #D8C09D;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#574634;" title="Brown" style="background-color: #574634;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#6A323F;" title="Burgundy" style="background-color: #6A323F;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#C81D31;" title="Red" style="background-color: #C81D31;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#D96D39;" title="Orange" style="background-color: #D96D39;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#F2AB46;" title="Gold" style="background-color: #F2AB46;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#FFD02E;" title="Yellow" style="background-color: #FFD02E;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#00B29B;" title="Turquoise" style="background-color: #00B29B;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#E95985;" title="Hot Pink" style="background-color: #E95985;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#BBBCBC;" title="Silver" style="background-color: #BBBCBC;"></p></li>
						</li>
					</ul>';

/* 	==========================================================================
		Breadcrumb
	==========================================================================
*/
$breadCrumb = '<ul class="bread">
				<li>
					<div '.$colorsId.'class="block">
						<div class="gapOne"></div>
							<div class="third" style="background-color: #fff;">
								<!-- empty -->
							</div>
							<div class="third">
								<div class="number">&#10004;</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div class="textBoxTwo">
							Choose your Colors
						</div>
					</div>
				</li>
				<li>
					<div '.$onToEmbroidery.'class="block">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div id="onToEmbroideryNumber" class="number">2</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div id="onToEmbroideryText" class="textBoxTwo">
							Add Embroidery
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div class="number grey">3</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div class="textBoxTwo greyText">
							Order Summary
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div class="number grey">4</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>	
						<div style="clear: both;"></div>		
						<div class="textBoxTwo greyText">
							Checkout
						</div>
					</div>
				</li>
				<li>
					<div id="viewOrder" title="Next Step" style="float: right; width: 100px;" class="block">
						<div title="Next Step" class="gapOne"></div>
						<div style="float: right;" class="third">
							<div title="Next Step" id="goldBack" style="float: right;" class="goldBack">&#x276f;</div>
						</div>
						<div style="clear: both;"></div>
						<div title="Next Step" class="gapTwo"></div>
						<div title="Next Step" id="goldText" class="goldText">
							NEXT STEP
						</div>
					</div>
				</li>
			</ul>';




$embroiderySripts = '	
						<script type="text/javascript" src="'.BASE_URI.'js/jquery-ui.js"></script>
						<script type="text/javascript" src="'.BASE_URI.'js/touchPunch.js"></script>
						<script type="text/javascript" src="'.BASE_URI.'js/ajax_upload.js"></script>
						<script type="text/javascript" src="'.BASE_URI.'js/upload.js"></script>
						<script type="text/javascript" src="'.BASE_URI.'js/html2canvas.js"></script>
						<script type="text/javascript" src="'.BASE_URI.'js/script.js"></script>
						<script type="text/javascript" type="text/javascript" src="'.BASE_URI.'js/addEmbroidery.js"></script>
					';





?>