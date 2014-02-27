<?php

namespace Innova\HotPotatoesBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Claroline\KernelBundle\Bundle\AutoConfigurableInterface;
use Claroline\KernelBundle\Bundle\ConfigurationProviderInterface;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;

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

    public function suggestConfigurationFor(Bundle $bundle, $environment)
    {
        
    }
}