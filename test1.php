<?php

	function formatContentPostFaceBook($conent = null, $character = '&nbsp;')
	{

		$new = strip_tags($conent);
		$html = str_replace($character, '', $new);
		
		$dom = new DOMDocument;
		$dom->loadHTML($html);
		$xPath = new DOMXpath($dom);

		foreach($xPath->query("//img") as $link) {
   		$link->parentNode->replaceChild(
        $dom->createTextNode(':)'), $link);
   		return $dom->saveHTML();
		}


	}