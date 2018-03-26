<?php

/* param:
 *	id
 *	"id1, id2, ..."
 *	[id1, id2, ...]
 *	
 */

define (VIDEO_VIMEOURL, $plugin_cf["video"]["url_vimeo"]);
define (VIDEO_YOUTUBEURL, $plugin_cf["video"]["url_youtube"]);


function video($videoID, $class="") {

	$video = explode(":", $videoID);

	$ret = "";

	if (count($video) > 1) {	
		$ret .= video_show_film($video,$class);
	}

	return $ret;
}


function video_show_film($video, $class) {

	$ret = "";

	$ret .= "<div class='plde_video " . $class . "' >";
		$ret .= "<div class='plde_videoin'>";


			// select platfoem
			switch($video[0]) {

				case "vimeo":
					$ret .= video_vimeo($video[1]);
					break;

				case "youtube":
					$ret .= video_youtube($video[1]);
					break;
			}

			$ret .= "></iframe>";

		$ret .= "</div>";
	$ret .= "</div>";

	return $ret;
}



function video_vimeo($videoID) {
	$r = '<iframe src="' . VIDEO_VIMEOURL . $videoID . '?portrait=0&autoplay=0&badge=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen';

	return $r;
}


function video_youtube($videoID) {
	$r = '<iframe src="' . VIDEO_YOUTUBEURL . $videoID . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen';

	return $r;
}

?>