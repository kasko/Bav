<?php

namespace Bav\Validator\De;

/**
 * Test class for System64.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System64Test extends \PHPUnit_Framework_TestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('1206473010', '5016511020');

        foreach ($validAccounts as $account) {
            $validator = new System64();
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('0099345678', '4912345678');

        foreach ($validAccounts as $account) {
            $validator = new System64();
            $this->assertFalse($validator->isValid($account));
        }
    }

}