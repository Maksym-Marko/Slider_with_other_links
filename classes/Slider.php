<?php

class Slider{
	public static function Slide_linck(){		
// left start
$Block_travel_Data_LEFT = mysql_query(" SELECT * FROM block_news");

$Block_travel_Data_Lost_LEFT = mysql_query(" SELECT id FROM block_news ORDER BY id DESC");

$Travel_Data_Lost_LEFT = mysql_fetch_array($Block_travel_Data_Lost_LEFT);

$Block_travel_Data_Lost_block_LEFT = mysql_query(" SELECT * FROM block_news ORDER BY id DESC");
$travel_Data_Lost_block_LEFT =  mysql_fetch_array($Block_travel_Data_Lost_block_LEFT);
?>
<script type="text/javascript">


var NumTravel;
var EnumTravel;
function BackTravel(EnumTravel)
{
NumTravel = EnumTravel; 

	function StabTravel(){
		NumTravel = 1; 
	}
setTimeout(StabTravel, 10);

}	
if(NumTravel == undefined) {NumTravel = 1;}



var Block_travel_LEFT = [];
	Block_travel_LEFT = 
				[<? while($Block_travel_LEFT = mysql_fetch_array($Block_travel_Data_LEFT))
					{						
						if($Block_travel_LEFT['id'] != $Travel_Data_Lost_LEFT['id'])
						{
							echo '[' . 
							$Block_travel_LEFT['id'] . ', ' . 
							"'" . $Block_travel_LEFT['block_name'] . "'" . ', ' . 
							"'" . $Block_travel_LEFT['block_link'] . "'" .  ', ' . 
							"'" . $Block_travel_LEFT['block_foto'] . "'" .  ', ' .
							"'" . $Block_travel_LEFT['block_source'] . "'" .
							']' . ', ';
						}
						else
						{
							echo '[' . 
							$Block_travel_LEFT['id'] . ', ' . 
							"'" . $Block_travel_LEFT['block_name'] . "'" . ', ' . 
							"'" . $Block_travel_LEFT['block_link'] . "'" .  ', ' . 
							"'" . $Block_travel_LEFT['block_foto'] . "'" .  ', ' .
							"'" . $Block_travel_LEFT['block_source'] . "'" .
							']';	
						}
					}
				?>];
				
				var Leng_Block_travel_LEFT = Block_travel_LEFT.length;
								
	var i_Block_travel_LEFT = Leng_Block_travel_LEFT;/////////////
			
		function RET_Block_travel_LEFT(NumTravel) {
				
								
			i_Block_travel_LEFT = i_Block_travel_LEFT - NumTravel;
			if(i_Block_travel_LEFT<0)i_Block_travel_LEFT=Leng_Block_travel_LEFT-1;
			if(i_Block_travel_LEFT>Leng_Block_travel_LEFT-1)i_Block_travel_LEFT=0;
			var KatigoryFromID_Block_travel_LEFT = i_Block_travel_LEFT;	
			
				//block_foto_LEFT
				
				
				document.block_foto_Block_travel_LEFT.src = Block_travel_LEFT[KatigoryFromID_Block_travel_LEFT][3];
			
				}
				
					setInterval("RET_Block_travel_LEFT(NumTravel)",5000);				
</script>
<?
// left end

// Center start

$Block_travel_Data = mysql_query(" SELECT * FROM block_news");

$Block_travel_Data_Lost = mysql_query(" SELECT id FROM block_news ORDER BY id DESC");

$Travel_Data_Lost = mysql_fetch_array($Block_travel_Data_Lost);

$Block_travel_Data_Lost_block = mysql_query(" SELECT * FROM block_news ORDER BY id DESC");
$Travel_Data_Lost_block =  mysql_fetch_array($Block_travel_Data_Lost_block);
?>
<script type="text/javascript">

var Block_travels = [];
	Block_travels = 
				[<? while($Block_travel = mysql_fetch_array($Block_travel_Data))
					{						
						if($Block_travel['id'] != $Travel_Data_Lost['id'])
						{
							echo '[' . 
							$Block_travel['id'] . ', ' . 
							"'" . $Block_travel['block_name'] . "'" . ', ' . 
							"'" . $Block_travel['block_link'] . "'" .  ', ' . 
							"'" . $Block_travel['block_foto'] . "'" .  ', ' .
							"'" . $Block_travel['block_source'] . "'" .
							']' . ', ';
						}
						else
						{
							echo '[' . 
							$Block_travel['id'] . ', ' . 
							"'" . $Block_travel['block_name'] . "'" . ', ' . 
							"'" . $Block_travel['block_link'] . "'" .  ', ' . 
							"'" . $Block_travel['block_foto'] . "'" .  ', ' .
							"'" . $Block_travel['block_source'] . "'" .
							']';	
						}
					}
				?>];
				
				var Leng_Block_travel = Block_travels.length;
				
				
	var i_Block_travel = Leng_Block_travel-1;//////////////////
		function RET_Block_travel(NumTravel) {
			
			i_Block_travel = i_Block_travel - NumTravel;
			if(i_Block_travel<0)i_Block_travel=Leng_Block_travel-1;
			if(i_Block_travel>Leng_Block_travel-1)i_Block_travel=0;
			
			
			var KatigoryFromID_Block_travel = i_Block_travel;	
						
				//block_name
				document.getElementById('block_name_Block_travel').innerHTML = Block_travels[KatigoryFromID_Block_travel][1];
				//id url
				document.getElementById('Link_Block_travel').href = Block_travels[KatigoryFromID_Block_travel][2];
				//block_foto
				document.block_foto_Block_travel.src = Block_travels[KatigoryFromID_Block_travel][3];
				//block_source
				document.block_foto_Block_travel.title = Block_travels[KatigoryFromID_Block_travel][4];
								}
								
				
				setInterval("RET_Block_travel(NumTravel)",5000);
				
								
				
</script>
<?
// Center end



// Right start

$Block_travel_Data_RIGHT = mysql_query(" SELECT * FROM block_news");

$Block_travel_Data_Lost_RIGHT = mysql_query(" SELECT id FROM block_news ORDER BY id DESC");

$Travel_Data_Lost_RIGHT = mysql_fetch_array($Block_travel_Data_Lost_RIGHT);

$Block_travel_Data_Lost_block_RIGHT = mysql_query(" SELECT * FROM block_news ORDER BY id DESC");
$Travel_Data_Lost_block_RIGHT =  mysql_fetch_array($Block_travel_Data_Lost_block_RIGHT);
?>
<script type="text/javascript">

var Block_travels_RIGHT = [];
	Block_travels_RIGHT = 
				[<? while($Block_travel_RIGHT = mysql_fetch_array($Block_travel_Data_RIGHT))
					{						
						if($Block_travel_RIGHT['id'] != $Travel_Data_Lost_RIGHT['id'])
						{
							echo '[' . 
							$Block_travel_RIGHT['id'] . ', ' . 
							"'" . $Block_travel_RIGHT['block_name'] . "'" . ', ' . 
							"'" . $Block_travel_RIGHT['block_link'] . "'" .  ', ' . 
							"'" . $Block_travel_RIGHT['block_foto'] . "'" .  ', ' .
							"'" . $Block_travel_RIGHT['block_source'] . "'" .
							']' . ', ';
						}
						else
						{
							echo '[' . 
							$Block_travel_RIGHT['id'] . ', ' . 
							"'" . $Block_travel_RIGHT['block_name'] . "'" . ', ' . 
							"'" . $Block_travel_RIGHT['block_link'] . "'" .  ', ' . 
							"'" . $Block_travel_RIGHT['block_foto'] . "'" .  ', ' .
							"'" . $Block_travel_RIGHT['block_source'] . "'" .
							']';	
						}
					}
				?>];
				
				var Leng_Block_travel_RIGHT = Block_travels_RIGHT.length;
				
				
	var i_Block_travel_RIGHT = Leng_Block_travel_RIGHT-2;//////////////////
		function RET_Block_travel_RIGHT(NumTravel) {
			
			i_Block_travel_RIGHT = i_Block_travel_RIGHT - NumTravel;	
			if(i_Block_travel_RIGHT<0)i_Block_travel_RIGHT = Leng_Block_travel_RIGHT-1;
			if(i_Block_travel_RIGHT>Leng_Block_travel_RIGHT-1)i_Block_travel_RIGHT=0;
			
			
			var KatigoryFromID_Block_travel_RIGHT = i_Block_travel_RIGHT;	
			
				//block_foto_LEFT
				document.block_foto_Block_travel_RIGHT.src = Block_travels_RIGHT[KatigoryFromID_Block_travel_RIGHT][3];
				
				}
		setInterval("RET_Block_travel_RIGHT(NumTravel)",5000);
		
		function LinkGoLeftTr()
		{
			onload = document.getElementById('Link_left_Tr').href = 'javascript:BackTravel(-1); RET_Block_travel_LEFT(NumTravel); RET_Block_travel(NumTravel); RET_Block_travel_RIGHT(NumTravel);';
		}
		
		
setTimeout ("LinkGoLeftTr()", 4900);	
</script>
<?
// Right end

?>

<div class="slide-cont-all">	
			
			<!-- left st. -->
			<div class="slide-box-left">
				<a id="Link_left_Tr" href="javascript:BackTravel(0); RET_Block_travel_LEFT(NumTravel); RET_Block_travel(NumTravel); RET_Block_travel_RIGHT(NumTravel);">
					<img class="slide-img-left" src="images/_news/IMG_6311.jpg" alt="" name="block_foto_Block_travel_LEFT" title="Предыдущий"/>
				</a>
			</div>			
			<!-- left end -->
			
			<!-- center st. -->
			<div class="slide-box-center">
				<a target="_blank" href="<?= $Travel_Data_Lost_block['block_link'];?>" id="Link_Block_travel">
					<div id="slide-box-center-info">
						<strong id="block_name_Block_travel"><?= $Travel_Data_Lost_block['block_name'];?>							
						</strong>
					</div>
					<img class="slide-img-center" src="<? echo $Travel_Data_Lost_block['block_foto'];?>" alt="" name="block_foto_Block_travel"/>
				</a>
			</div>		
		<!-- Center end -->
			
		<!-- Right st. -->
		<div class="slide-box-right">
					<a href="javascript:BackTravel(1); RET_Block_travel_LEFT(NumTravel); RET_Block_travel(NumTravel); RET_Block_travel_RIGHT(NumTravel);">
					<img class="slide-img-right" src="images/_news/IMG_6317.jpg" alt="" name="block_foto_Block_travel_RIGHT" title="Следующий"/>
					</a>
				</div>
		<!-- Right end -->
</div>	<?

	}
}