<?php

namespace SnapBusinessSDK\Test\Util;

use SnapBusinessSDK\Util\CapiHash;
use PHPUnit\Framework\TestCase;

class CapiHashTest extends TestCase
{
    public function testNormAndHashPhoneNum()
    {
        print_r(CapiHash::normAndHashPhoneNum('447-234-2344'));
        $this->assertEquals('14472342344', CapiHash::normAndHashPhoneNum('447-234-2344'));
        $this->assertEquals('444472342344', CapiHash::normAndHashPhoneNum('+44-447-234-2344'));
        $this->assertEquals('444472342344', CapiHash::normAndHashPhoneNum('0044-447-234-2344'));
        $this->assertEquals('444472342344', CapiHash::normAndHashPhoneNum('+44-0447-234-2344'));
        $this->assertEquals('444472342344', CapiHash::normAndHashPhoneNum('+44 0447 234 2344'));
        $this->assertEquals('14472342344', CapiHash::normAndHashPhoneNum('4472342344'));
        $this->assertEquals('14472342344', CapiHash::normAndHashPhoneNum('+1-447-234-2344'));
        $this->assertEquals('14472342344', CapiHash::normAndHashPhoneNum('(447)-234-2344'));
        $this->assertEquals('14472342344', CapiHash::normAndHashPhoneNum('447 234-2344'));
    }

    public function testNormAndHash()
    {
        $this->assertEquals('20b82517b67108ed3a171539dc5dd1da605660249b02f38dd70f572a545c7d18',
            CapiHash::normAndHashStr('    test123@example.com  '));
        $this->assertEquals('19e36255972107d42b8cecb77ef5622e842e8a50778a6ed8dd1ce94732daca9e',
            CapiHash::normAndHashStr('   0.0.0.0  '));
    }

    public function testNormAndSoundex()
    {
        $this->assertEquals('H464', CapiHash::normAndSoundex('Hello world'));
        $this->assertEquals('T230', CapiHash::normAndSoundex('test'));
        $this->assertEquals('B252', CapiHash::normAndSoundex('business sdk'));
        $this->assertEquals('C516', CapiHash::normAndSoundex('conversion api'));
        $this->assertEquals('T235', CapiHash::normAndSoundex('testing'));


    }


}
