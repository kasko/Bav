<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemC1.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemC1Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('446786040', '701625840', '5432112349', '5876556788');

        foreach ($validAccounts as $account) {
            $validator = new SystemC1($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('446786240', '87096000', '5432112341');

        foreach ($validAccounts as $account) {
            $validator = new SystemC1($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}