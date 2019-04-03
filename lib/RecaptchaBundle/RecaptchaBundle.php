<?php
namespace Cecile\RecaptchaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Cecile\RecaptchaBundle\RecaptchaCompilerPass;

class RecaptchaBundle extends Bundle{

    public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new RecaptchaCompilerPass());
    }
}