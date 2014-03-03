<?php

namespace Innova\HotPotatoesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Claroline\CoreBundle\Entity\Resource\AbstractResource;

/**
 * Hot Potatoes
 *
 * @ORM\Entity
 * @ORM\Table(name="innova_hotpotatoes")
 */
class HotPotatoes extends AbstractResource
{
    /**
     * Description
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;
    
    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set description
     * @param string $description
     * @return \Innova\HotPotatoesBundle\Entity\HotPotatoes
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
}
