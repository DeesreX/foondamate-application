<?php

use PHPUnit\Framework\TestCase;
use Rex\Module\Foondamate\Site\Helper\FoondamateHelper;

class FoondamateHelperTest extends TestCase
{
	public function testSolveEquation()
	{
		$equation = "5x + 3 = 2x - 7";
		$expected = "Given equation: 5x + 3 = -7\nStep 1: Add -3 to both sides\nStep 2: 5x = -10\nStep 3: Divide both sides by 5\nSolution: x = -2\n";
		$result = FoondamateHelper::solveEquation($equation);
		$this->assertEquals($expected, $result);
	}
}