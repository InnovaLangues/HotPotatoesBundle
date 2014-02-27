<?php

namespace Innova\HotPotatoesBundle\Listener\Resource;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Claroline\CoreBundle\Event\OpenResourceEvent;
use Claroline\CoreBundle\Event\DeleteResourceEvent;
use Claroline\CoreBundle\Event\CreateFormResourceEvent;
use Claroline\CoreBundle\Event\CreateResourceEvent;
use Claroline\CoreBundle\Event\CopyResourceEvent;

/**
 * HotPotatoes Event Listener
 * Used to integrate HotPotatoes to Claroline resource manager
 */
class HotPotatoesListener extends ContainerAware
{
    /**
     * Fired when a new ResourceNode of type Path is opened
     * @param  \Claroline\CoreBundle\Event\OpenResourceEvent $event
     * @throws \Exception
     */
    public function onHotPotatoesOpen(OpenResourceEvent $event)
    {
//         $path = $event->getResource();
//         if ($path->isPublished()) {
//             $route = $this->container
//                 ->get('router')
//                 ->generate(
//                 'innova_path_player_index',
//                 array(
//                     'workspaceId' => $path->getResourceNode()->getWorkspace()->getId(),
//                     'pathId' => $path->getId(),
//                     'stepId' => $path->getRootStep()->getId()
//                 )
//             );
//         }
//         else {

//             $route = $this->container
//                     ->get('router')
//                     ->generate(
//                     'claro_workspace_open_tool',
//                     array(
//                         'workspaceId' => $path->getResourceNode()->getWorkspace()->getId(),
//                         'toolName' => 'innova_path'
//                     )
//             );
//             $this->container->get('session')->getFlashBag()->add(
//                     'warning',
//                     $this->container->get('translator')->trans("path_open_not_published_error", array(), "innova_tools")
//                 );
//         }
        
//         $event->setResponse(new RedirectResponse($route));
//         $event->stopPropagation();
    }

    /**
     * Fired when a new ResourceNode of type HotPotatoes is opened
     * @param \Claroline\CoreBundle\Event\CreateResourceEvent $event
     */
    public function onHotPotatoesCreate(CreateResourceEvent $event)
    {
//         // Create form
//         $form = $this->container->get('form.factory')->create('innova_path', new Path());
        
//         // Try to prcess form
//         $request = $this->container->get('request');
//         $form->handleRequest($request);

//         if ($form->isValid()) {
//             $path = $form->getData();

//             $path->initializeStructure();
            
//             // Send new path to dispatcher through event object
//             $event->setResources(array ($path));
//         }
//         else {
//             $content = $this->container->get('templating')->render(
//                 'ClarolineCoreBundle:Resource:createForm.html.twig',
//                 array(
//                     'form' => $form->createView(),
//                     'resourceType' => 'innova_path'
//                 )
//             );

//             $event->setErrorFormContent($content);
//         }
        
//         $event->stopPropagation();
    }

    /**
     * Fired when the form to create a new ResourceNode is displayed
     * @param \Claroline\CoreBundle\Event\CreateFormResourceEvent $event
     */
    public function onHotPotatoesCreateForm(CreateFormResourceEvent $event)
    {
//         // Create form
//         $form = $this->container->get('form.factory')->create('innova_path', new Path());
        
//         $content = $this->container->get('templating')->render(
//             'ClarolineCoreBundle:Resource:createForm.html.twig',
//             array(
//                 'form' => $form->createView(),
//                 'resourceType' => 'innova_path'
//             )
//         );

//         $event->setResponseContent($content);
//         $event->stopPropagation();
    }

    /**
     * Fired when a ResourceNode of type HotPotatoes is deleted
     * @param \Claroline\CoreBundle\Event\DeleteResourceEvent $event
     */
    public function onHotPotatoesDelete(DeleteResourceEvent $event)
    {

        $event->stopPropagation();
    }

    /**
     * Fired when a ResourceNode of type HotPotatoes is duplicated
     * @param \Claroline\CoreBundle\Event\DeleteResourceEvent $event
     */
    public function onHotPotatoesCopy(CopyResourceEvent $event)
    {

//         throw new \Exception("You can't copy path.");
    }
}
