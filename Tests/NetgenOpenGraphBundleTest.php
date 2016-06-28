<?php

namespace Netgen\Bundle\OpenGraphBundle\Tests;

use Netgen\Bundle\OpenGraphBundle\DependencyInjection\Compiler\MetaTagHandlersCompilerPass;
use Netgen\Bundle\OpenGraphBundle\NetgenOpenGraphBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class NetgenOpenGraphBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testItAddsCompilerPass()
    {
        $container = $this->getMockBuilder(ContainerBuilder::class)
            ->disableOriginalConstructor()
            ->setMethods(array('addCompilerPass'))
            ->getMock();

        $container->expects($this->once())
            ->method('addCompilerPass')
            ->with(new MetaTagHandlersCompilerPass());

        $bundle = new NetgenOpenGraphBundle();
        $bundle->build($container);
    }
}
