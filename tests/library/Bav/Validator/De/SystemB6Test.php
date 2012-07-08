<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemB6.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemB6Test extends \PHPUnit_Framework_TestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('17', '800048548', '150178033');

        foreach ($validAccounts as $account) {
            $validator = new SystemB6();
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('9110000000', '0269876545');

        foreach ($validAccounts as $account) {
            $validator = new SystemB6();
            $this->assertFalse($validator->isValid($account));
        }
    }

}