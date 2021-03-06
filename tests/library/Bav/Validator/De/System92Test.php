<?php

namespace Bav\Validator\De;

/**
 * Test class for System92.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System92Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('12687689', '8769989');

        foreach ($validAccounts as $account) {
            $validator = new System92($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('884089000', '8840096000');

        foreach ($validAccounts as $account) {
            $validator = new System92($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}