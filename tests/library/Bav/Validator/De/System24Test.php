<?php

namespace Bav\Validator\De;

/**
 * Test class for System24.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System24Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('138301', '1306118605', '3307118608', '9307118603');

        foreach ($validAccounts as $account) {
            $validator = new System24($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('1000805', '539290855');

        foreach ($validAccounts as $account) {
            $validator = new System24($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}