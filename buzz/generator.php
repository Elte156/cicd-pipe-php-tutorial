<?php
$buzz = ['continuous testing', 'continuous integration',
    'continuous deployment', 'continuous improvement', 'devops'];
$adjectives = ['complete', 'modern', 'self-service', 'integrated', 'end-to-end'];
$adverbs = ['remarkably', 'enormously', 'substantially', 'significantly',
    'seriously'];
$verbs = ['accelerates', 'improves', 'enhances', 'revamps', 'boosts'];

function sample($l) {
	var_dump($l);
	$i = mt_rand(0, count($l) - 1);
	return $l[$i];
}

function generate_buzz() {
	global $buzz, $adjectives, $adverbs, $verbs;
	return sprintf('%s %s %s %s %s',
		sample($adjectives),
		sample($buzz),
		sample($adverbs),
		sample($verbs),
		sample($buzz)
	);
}

echo generate_buzz();