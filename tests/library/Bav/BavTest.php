<?php

namespace Bav;

use Bav\Encoder\EncoderFactory;
/**
 * Test class for Bav.
 * Generated by PHPUnit on 2012-07-09 at 11:47:38.
 */
class BavTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Bav
     */
    protected $object;
    protected $file;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        //$this->file = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR. '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'blz_2012_06_04_txt.txt';
        $this->file = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR. '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'blz_2013_12_09_txt.txt';
        $this->object = new Bav();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @expectedException \Bav\Exception\BackendNotAvailableException
     */
    public function testGetBackendForUnknownCountryThrowsException()
    {
        $this->object->getBackend('gb');
    }


    public function testGetBank()
    {
        $this->object->setBackend('de', new Backend\BankDataResolver($this->file, EncoderFactory::create('ISO-8859-15')));
        
        $bank = $this->object->getBank('de', '20090500');
        $this->assertTrue($bank->isValid('1359100'));
        $agency = $bank->getMainAgency();
        $this->assertEquals('netbank', $agency->getName());
        $this->assertEquals('000000', $agency->getIbanRule());
        
        $bank = $this->object->getBank('de', '45240056');
        $agency = $bank->getMainAgency();
        $this->assertEquals('000502', $agency->getIbanRule());
    }


    public function testBankExists()
    {
        $this->object->setBackend('de', new Backend\BankDataResolver($this->file, EncoderFactory::create('ISO-8859-15')));
        
        $this->assertTrue($this->object->bankExists('de', '79550000'));
        $this->assertFalse($this->object->bankExists('de', '79550003'));

    }

}