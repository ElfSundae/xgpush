<?php

use ElfSundae\XgPush\XingeApp;

class XingeAppTest extends PHPUnit_Framework_TestCase
{
    public function testInstantiation()
    {
        $this->assertInstanceOf(XingeApp::class, new XingeApp('foo', 'bar'));
    }
}
