<?php

namespace Bav\Validator\De;

/**
 * Test class for System60.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System60Test extends \PHPUnit_Framework_TestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('1362485271', '2062485271');

        foreach ($validAccounts as $account) {
            $validator = new System60();
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('0099345678', '4912345678');

        foreach ($validAccounts as $account) {
            $validator = new System60();
            $this->assertFalse($validator->isValid($account));
        }
    }

}