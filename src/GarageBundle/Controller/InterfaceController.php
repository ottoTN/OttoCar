<?php

namespace GarageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Interface controller.
 *
 */
class InterfaceController extends Controller
{
    /**
     * Lists all interface entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $interfaces = $em->getRepository('GarageBundle:Interface')->findAll();

        return $this->render('interface/index.html.twig', array(
            'interfaces' => $interfaces,
        ));
    }


    public function indexmanagerAction()
    {
        $em = $this->getDoctrine()->getManager();

        $interfaces = $em->getRepository('GarageBundle:Interface')->findAll();

        return $this->render('interface/index-manager.html.twig', array(
            'interfaces' => $interfaces,
        ));
    }

    public function indexreceptionnistAction()
    {
        $em = $this->getDoctrine()->getManager();

        $interfaces = $em->getRepository('GarageBundle:Interface')->findAll();

        return $this->render('interface/index-receptionnist.html.twig', array(
            'interfaces' => $interfaces,
        ));
    }

    public function indexaccountantAction()
    {
        $em = $this->getDoctrine()->getManager();

        $interfaces = $em->getRepository('GarageBundle:Interface')->findAll();

        return $this->render('interface/index-accountant.html.twig', array(
            'interfaces' => $interfaces,
        ));
    }

    public function indexworkerAction()
    {
        $em = $this->getDoctrine()->getManager();

        $interfaces = $em->getRepository('GarageBundle:Interface')->findAll();

        return $this->render('interface/index-worker.html.twig', array(
            'interfaces' => $interfaces,
        ));
    }

}
