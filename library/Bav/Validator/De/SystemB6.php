<?php

namespace Bav\Validator\De;

use Bav\Validator\Math;

class SystemB6 extends \Bav\Validator\Chain
{

    public function __construct()
    {
        $this->validators[] = new System00();
        $this->validators[0]->setWeights(array(2, 1));
        
        $this->validators[] = new System10();
        $this->validators[1]->setWeights(array(2, 3, 4, 5, 6, 7, 8, 9, 10));
    }
    
    
    protected function continueValidation(\Bav\Validator\Base $validator)
    {
        if ($validator === $this->validators[1]) {
            return $this->account{0} !== '9';
        
        }
        return true;
    }
    
}