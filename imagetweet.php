<?php
session_start();
if(!isset($_POST["textarea"])) {
	header("HTTP/1.1 500 Internal Server Error");
} else {

/*************************************************
*	TODO
*	Auto Height
*	if words are longer than line width?
**************************************************/
/* CONSTANTS FOR TWITTER */
$width = 400;
$height = 200;
$line_length = 78;
$line_spacing = 20;
$font_size = 12;
$font = "./fonts/times.ttf";
$text_text = "";

$text = $_POST["textarea"];
$text_parsed = "";

function parse_font($fontname) {
	$font_list = array(
		"Times" => "./fonts/times.ttf",
		"Arial" => "./fonts/arial.ttf",
		"Courier" => "./fonts/cour.ttf"
		);
	return $font_list[$fontname];
}

/* This sets $text_parsed and $height */
function img_from_textarea($text, $width, $font, $font_size) {
	//global $height;
	global $text_parsed;
	$words = explode(" ",$text);
	$wnum = count($words);
	$line = '';
	$newline_count = substr_count($text, "\n");
	$text='';
	for($i=0; $i<$wnum; $i++){
		$line .= $words[$i];
		$dimensions = imagettfbbox($font_size, 0, $font, $line);
		$lineWidth = $dimensions[2] - $dimensions[0];
		if ($lineWidth >= $width) {
			$text.=($text != '' ? "\n".$words[$i].' ' : $words[$i].' ');
			$line = $words[$i].' ';
			//$height += abs($dimensions[7])+abs($dimensions[1]);
		}
		else {
			$text.=$words[$i].' ';
			$line.=' ';
		}
	}
	$text_parsed = $text;
}

/* check for optional params */
if(isset($_POST["text_text"]))
	$text_text = $_POST["text_text"];
if(isset($_POST["font"]))
	$font = parse_font($_POST["font"]);
if(isset($_POST["font_size"]))
	$font_size = intval($_POST["font_size"]);
if(isset($_POST["width"]))
	$width = intval($_POST["width"]);
if(isset($_POST["height"]))
	$height = intval($_POST["height"]);

/* this will set $text_parsed and $height */
img_from_textarea($text, $width, $font, $font_size);
$im = imagecreate($width, $height);
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 0);
imagettftext($im, $font_size, 0, 0, $line_spacing, $textcolor, $font, $text_parsed);
// start buffering
ob_start();
imagepng($im);
$contents =  ob_get_contents();
ob_end_clean();
/* this session variable is used to send image to twitter */
$_SESSION['image_binary'] = $contents;
$_SESSION['text_text'] = $text_text;
echo base64_encode($contents);
imagedestroy($im);
}
?>