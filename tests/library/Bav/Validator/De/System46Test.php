<?php

namespace Bav\Validator\De;

/**
 * Test class for System46.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System46Test extends \PHPUnit_Framework_TestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('0235468612', '0837890901', '1041447600');

        foreach ($validAccounts as $account) {
            $validator = new System46();
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('1000805', '539290855');

        foreach ($validAccounts as $account) {
            $validator = new System46();
            $this->assertFalse($validator->isValid($account));
        }
    }

}