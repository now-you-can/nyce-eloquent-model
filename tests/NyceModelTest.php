<?php

namespace Nyce\DbModels;

use \PHPUnit\Framework\TestCase;

/**
 *  Corresponding Class to test Nyce\DbModels\NyceModel
 *  @author Osian ap Garth / Nyce Software
 */
class NyceModelTest extends TestCase {

    /**
     * Dummy check to make sure we can create a Model Object
     */
    public function testCanCreateModel() {
        $var = new NyceModel;
        $this->assertTrue (is_object($var));
        unset($var);
    }

    /**
     * xyz
     */
    public function testMethod1() {
        $a = 1 + 3;
        $this->assertTrue (4 == $a);
        //$var = new NyceModel;
        //$this->assertTrue ($var->method1("hey") == 'Hello World');
        //unset($var);
    }

}
