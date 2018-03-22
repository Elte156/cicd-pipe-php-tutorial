<?php

class Buzz {
	public static $BUZZ = ['continuous testing', 'continuous integration',
		'continuous deployment', 'continuous improvement', 'devops'];
	public static $ADJECTIVES = ['complete', 'modern', 'self-service', 'integrated', 'end-to-end'];
	public static $ADVERBS = ['remarkably', 'enormously', 'substantially', 'significantly',
		'seriously'];
	public static $VERBS = ['accelerates', 'improves', 'enhances', 'revamps', 'boosts'];

	function sample($list, $returnCount = 1) {
		$ret = $list;
		shuffle($ret);
		if ($returnCount == 1) {
			return $ret[0];
		}
		return array_slice($ret, 0, $returnCount);
	}

	function generate_buzz() {
		$buzz_r = self::sample(self::$BUZZ, 2);
		return sprintf('%s %s %s %s %s',
			self::sample(self::$ADJECTIVES),
			$buzz_r[0],
			self::sample(self::$ADVERBS),
			self::sample(self::$VERBS),
			$buzz_r[1]
		);
	}
}