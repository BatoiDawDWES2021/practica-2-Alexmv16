<?php

namespace Tests;
include_once dirname(__FILE__) . '/../helpers/myHelpers.php';
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testMitjana(){
        $this->assertEquals(mitjana([2,4,10,12]),7);
        $this->assertEquals(mitjana([13,11,21]),15);
    }

    public function testTriaParaules(){
        $diccionari = array('emprenyar' => 'enoying','mandrós'=>'lazy','enyorar'=>'to miss','xiulit'=>'whistle',
            'codony'=>'quince','malaltia'=>'illness','trobar'=>'to find','senzill'=>'simple','imbècil'=>'fool');
        $this->assertIsArray(triaParaules($diccionari,2));
        $this->assertCount(5,triaParaules($diccionari,5));
        $this->assertArrayHasKey(array_keys(triaParaules($diccionari,1))[0],$diccionari);
    }

    public function testLogin(){
        $usuaris = array('igomis' => '1234','jsegura'=>'1234','alex'=>'1234');
        $this->assertEquals(true,login($usuaris,'igomis','1234'));
        $this->assertEquals(false,login($usuaris,'igomis','12345'));
        $this->assertEquals(false,login($usuaris,'igomi','1234'));
        $this->assertEquals(true,login($usuaris,'alex','1234'));
        $this->assertEquals(false,login($usuaris,'jsegura','12345'));
        $this->assertEquals(false,login($usuaris,'acoloma','1234'));
    }
}
