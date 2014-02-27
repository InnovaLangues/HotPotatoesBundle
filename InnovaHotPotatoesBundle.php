<?php

namespace Innova\FavoriteBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Claroline\KernelBundle\Bundle\AutoConfigurableInterface;
use Claroline\KernelBundle\Bundle\ConfigurationProviderInterface;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;
use Innova\PathBundle\Installation\AdditionalInstaller;

/**
 * Bundle class.
 */
class InnovaHotPotatoesBundle extends PluginBundle implements AutoConfigurableInterface, ConfigurationProviderInterface
{
    public function hasMigrations()
    {
        return false;
    }
    
    public function supports($environment)
    {
        return true;
    }

    public function getConfiguration($environment)
    {
        $config = new ConfigurationBuilder();

        return $config->addRoutingResource(__DIR__ . '/Resources/config/routing.yml', null, 'innova_hotpotatoes');
    }

    public function suggestConfigurationFor(Bundle $bundle, $environment)
    {
        
    }
}