<?php

if(!function_exists('thousandsCurrencyFormat')){
	function thousandsCurrencyFormat($num) {

		$num = preg_replace('/[^0-9.]/','',$num);

		  	if($num>1000) {
		  		
		        $x = round($num);
		        $x_number_format = number_format($x);
		        $x_array = explode(',', $x_number_format);
		        $x_parts = array('K', 'M', 'B', 'T');
		        $x_count_parts = count($x_array) - 1;
		        $x_display = $x;
		        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
		        $x_display .= " ".$x_parts[$x_count_parts - 1];
		        return $x_display;
		  	}

	  	return $num;
	}
}

function checkThreeDots($str, $word="...")
{
    return strpos($str,$word) !== false ? true : false; 
}

function truncate_html($string, $length, $postfix = '', $isHtml = true) {
    $string = trim($string);
    $postfix = (strlen(strip_tags($string)) > $length) ? $postfix : '';
    $i = 0;
    $tags = []; // change to array() if php version < 5.4

    if($isHtml) {
        preg_match_all('/<[^>]+>([^<]*)/', $string, $tagMatches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
        foreach($tagMatches as $tagMatch) {
            if ($tagMatch[0][1] - $i >= $length) {
                break;
            }

            $tag = substr(strtok($tagMatch[0][0], " \t\n\r\0\x0B>"), 1);
            if ($tag[0] != '/') {
                $tags[] = $tag;
            }
            elseif (end($tags) == substr($tag, 1)) {
                array_pop($tags);
            }

            $i += $tagMatch[1][1] - $tagMatch[0][1];
        }
    }

    return substr($string, 0, $length = min(strlen($string), $length + $i)) . (count($tags = array_reverse($tags)) ? '</' . implode('></', $tags) . '>' : '') . $postfix;
}

if(!function_exists('noLinkUrls')){

	function noLinkUrls($str,$status = 0){

		$dom = new DOMDocument();

		$dom->preserveWhitespace = FALSE;

		$dom->loadHTML($str);

		$a = $dom->getElementsByTagName('a');

		$host = strtok($_SERVER['HTTP_HOST'], ':');

		foreach($a as $anchor) {
		        $href = $anchor->attributes->getNamedItem('href')->nodeValue;

		        if (preg_match('/^https?:\/\/' . preg_quote($host, '/') . '/', $href) || $status ==1) {
		           continue;
		        }

		        $noFollowRel = 'nofollow';
		        $oldRelAtt = $anchor->attributes->getNamedItem('rel');

		        if ($oldRelAtt == NULL) {
		            $newRel = $noFollowRel;
		        } else {
		            $oldRel = $oldRelAtt->nodeValue;
		            $oldRel = explode(' ', $oldRel);
		            if (in_array($noFollowRel, $oldRel)) {
		                continue;
		            }
		            $oldRel[] = $noFollowRel;
		            $newRel = implode($oldRel,  ' ');
		        }

		        $newRelAtt = $dom->createAttribute('rel');
		        $noFollowNode = $dom->createTextNode($newRel);
		        $newRelAtt->appendChild($noFollowNode);
		        $anchor->appendChild($newRelAtt);

		}
		 $dom->loadHTML($str, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
		
		return $dom->saveHTML();
	}	
}

if(!function_exists('currentUserVpvoted')){
	function currentUserVpvoted(Post $post){
		return $this->upvoters->contains('id',auth()->id());
	}
}

if(!function_exists('extract_desc')){
	function extract_desc($string){
		return substr($string, strpos($string, "<p"), strpos($string, "</p>")+4);
	}
}

if(!function_exists('noFollowRel')){

	function noFollowRel($str){
		$dom = new DOMDocument();

		$dom->preserveWhitespace = FALSE;

		$dom->loadHTML($str);

		$a = $dom->getElementsByTagName('a');

		$host = strtok($_SERVER['HTTP_HOST'], ':');


		foreach($a as $anchor) {
		        $href = $anchor->attributes->getNamedItem('href')->nodeValue;

		       
		        if (preg_match('/^https?:\/\/' . preg_quote($host, '/') . '/', $href)) {
		           continue;
		        }

		        $noFollowRel = 'nofollow';
		        $oldRelAtt = $anchor->attributes->getNamedItem('rel');

		        if ($oldRelAtt == NULL) {
		            $newRel = $noFollowRel;
		        } else {
		            $oldRel = $oldRelAtt->nodeValue;
		            $oldRel = explode(' ', $oldRel);
		            if (in_array($noFollowRel, $oldRel)) {
		                continue;
		            }
		            $oldRel[] = $noFollowRel;
		            $newRel = implode($oldRel,  ' ');
		        }

		        $newRelAtt = $dom->createAttribute('rel');
		        $noFollowNode = $dom->createTextNode($newRel);
		        $newRelAtt->appendChild($noFollowNode);
		        $anchor->appendChild($newRelAtt);

		}
		// $dom->loadHTML($str, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
		$saved = $dom->saveHtml();
		return $saved;

	}	
}

function getExtFromUrl($url)
{
	$path      = parse_url($url, PHP_URL_PATH);
	$extension = pathinfo($path, PATHINFO_EXTENSION);
	return $extension;
}

function newGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
    return $guidText;
}

function createFileName($file,$prefix="img"){
	return $prefix."-".newGuid().".".getExtFromUrl($file);
}


if(!function_exists('truncateString')){

	function truncateString($text, $length,$endWord='') {
	   $length = abs((int)$length);
	   if(strlen($text) > $length) {
	      $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1'.$endWord, $text);
	   }
	   return($text);
	}
}

?>