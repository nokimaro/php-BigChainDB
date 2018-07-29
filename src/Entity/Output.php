<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KryuuCommon\BigChainDB\Entity;

use KryuuCommon\BigChainDB\Entity\Condition;

/**
 * Description of Output
 *
 * @author spawn
 */
class Output {
    
    /**
     *
     * @var integer
     */
    private $amount = null;
    
    /**
     *
     * @var Condition
     */
    private $condition = null;
    
    /**
     *
     * @var string[]
     */
    private $publicKeys = [];
}