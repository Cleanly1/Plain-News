<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.
/**
 * Sorts the articles array by date
 * @param  array $array [description]
 * @return array        [description]
 */
function sortingArrays(array $articles): array  {
	usort($articles, function($arrayItem1, $arrayItem2) {
		return $arrayItem1['date'] <=> $arrayItem2['date'];
	});
	return $articles;
}


function dateGet(string $date){
  $dateSeperated = str_split($date);
	$day = intval(implode('', array_splice($dateSeperated,6,2)));
	$month = implode('', array_splice($dateSeperated,4,2));
	$year = implode('', array_splice($dateSeperated,0,4));

  die(var_dump($day));
}
