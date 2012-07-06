<?php

namespace Bav\Validator\De;

/**
 * Test class for System71.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System71Test extends \PHPUnit_Framework_TestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('7101234007');

        foreach ($validAccounts as $account) {
            $validator = new System71();
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('223456600', '455555555');

        foreach ($validAccounts as $account) {
            $validator = new System71();
            $this->assertFalse($validator->isValid($account));
        }
    }

}