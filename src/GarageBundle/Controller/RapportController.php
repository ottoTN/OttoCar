<?php

namespace GarageBundle\Controller;

use GarageBundle\Entity\Rapport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rapport controller.
 *
 */
class RapportController extends Controller
{
    /**
     * Lists all rapport entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rapports = $em->getRepository('GarageBundle:Rapport')->findAll();

        return $this->render('rapport/index.html.twig', array(
            'rapports' => $rapports,
        ));
    }

    public function indexmanagerAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rapports = $em->getRepository('GarageBundle:Rapport')->findAll();

        return $this->render('rapport/index-manager.html.twig', array(
            'rapports' => $rapports,
        ));
    }

    public function indexaccountantAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rapports = $em->getRepository('GarageBundle:Rapport')->findAll();

        return $this->render('rapport/index-accountant.html.twig', array(
            'rapports' => $rapports,
        ));
    }

    /**
     * Creates a new rapport entity.
     *
     */
    public function newAction(Request $request)
    {
        $rapport = new Rapport();
        $form = $this->createForm('GarageBundle\Form\RapportType', $rapport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rapport);
            $em->flush($rapport);

            return $this->redirectToRoute('rapport_show', array('id' => $rapport->getId()));
        }

        return $this->render('rapport/new.html.twig', array(
            'rapport' => $rapport,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rapport entity.
     *
     */
    public function showAction(Rapport $rapport)
    {
        $deleteForm = $this->createDeleteForm($rapport);

        return $this->render('rapport/show.html.twig', array(
            'rapport' => $rapport,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rapport entity.
     *
     */
    public function editAction(Request $request, Rapport $rapport)
    {
        $deleteForm = $this->createDeleteForm($rapport);
        $editForm = $this->createForm('GarageBundle\Form\RapportType', $rapport);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rapport_edit', array('id' => $rapport->getId()));
        }

        return $this->render('rapport/edit.html.twig', array(
            'rapport' => $rapport,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rapport entity.
     *
     */
    public function deleteAction(Request $request, Rapport $rapport)
    {
        $form = $this->createDeleteForm($rapport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rapport);
            $em->flush($rapport);
        }

        return $this->redirectToRoute('rapport_index');
    }

    /**
     * Creates a form to delete a rapport entity.
     *
     * @param Rapport $rapport The rapport entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rapport $rapport)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rapport_delete', array('id' => $rapport->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
