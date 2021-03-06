<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemD0.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemD0Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = explode(', ', '6100272324, 6100273479, 5734567890');

        foreach ($validAccounts as $account) {
            $validator = new SystemD0($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('6100272885', '6100273377');

        foreach ($validAccounts as $account) {
            $validator = new SystemD0($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}