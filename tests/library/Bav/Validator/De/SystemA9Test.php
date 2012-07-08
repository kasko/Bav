<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemA9.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemA9Test extends \PHPUnit_Framework_TestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('5043608', '86725', '504360');

        foreach ($validAccounts as $account) {
            $validator = new SystemA9();
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('864089000', '87096000');

        foreach ($validAccounts as $account) {
            $validator = new SystemA9();
            $this->assertFalse($validator->isValid($account));
        }
    }

}