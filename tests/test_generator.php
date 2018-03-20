<?php
use PHPUnit\Framework\TestCase;

include_once('../buzz/generator.php');

class StackTest extends TestCase
{
	public function test_sample_single_word() {
		$l = ['foo', 'bar', 'foobar'];
		$word = sample($l);
		$this->assertContains($word, $l);
	}

	public function test_sample_multiple_words() {
		$l = ['foo', 'bar', 'foobar'];
		$words = sample($l, 2);
		$this->assertEquals(2, count($l));
		$this->assertContains($words[0], $l);
		$this->assertContains($words[1], $l);
		$this->assertNotEquals($words[0], $words[1]);
	}

	public function test_generate_buzz_of_at_least_five_words() {
		$phrase = generate_buzz();
		$this->assertGreaterThanOrEqual(5, count(explode(' ',$phrase)));
	}
}