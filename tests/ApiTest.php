<?php

use Emil\Vildt1\Api;

class ApiTest extends PHPUnit_Framework_TestCase
{
    public function test_can_instanciate()
    {
        $api = new Api();
        $this->assertInstanceOf(Api::class, $api);
    }

    public function test_when()
    {
        $api = new Api();

        $this->assertEquals(date('l'), $api->when());
    }

    public function test_setDate()
    {
        $expected = 'Onsdag';
        $api = new Api();

        $api->setDate($expected);

        $this->assertEquals($expected, $api->when());
    }

    public function test_setDate_Fail()
    {
        $this->setExpectedException(Exception::class);

        $api = new Api();
        $api->setDate(23456);
    }

    public function test_getSevenDays()
    {
        $api = new Api();
        $expected = '';
        for ($i=0; $i<7; $i++) {
            $expected .= date('l', time() + 60 * 60 * 24 *$i) . "\n";
        }

        $this->assertEquals($expected, $api->getSevenDays());
    }
}
