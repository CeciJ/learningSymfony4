<?php
namespace Cecile\RecaptchaBundle;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class RecaptchaCompilerPass implements CompilerPassInterface{

    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if($container->hasParameter('twig.form.resources')){
            $resources = $container->getParameter('twig.form.resources');
            array_unshift($resources, '@Recaptcha/fields.html.twig');
            $container->setParameter('twig.form.resources', $resources);
        }
    }
}