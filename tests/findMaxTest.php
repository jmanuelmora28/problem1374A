<?php


use App\FindMax;

class findMaxTest extends \PHPUnit\Framework\TestCase {

    /** @test **/
    public function use_find_max(){
        $findMax = new findMax;

        $res = $findMax->findMax(7, 5, 12345);

        $this->assertEquals(12339, $res);
    }
}
