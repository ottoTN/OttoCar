<?php

namespace GarageBundle\Controller;

use GarageBundle\Entity\Facture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Facture controller.
 *
 */
class FactureController extends Controller
{
    /**
     * Lists all facture entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $factures = $em->getRepository('GarageBundle:Facture')->findAll();

        return $this->render('facture/index.html.twig', array(
            'factures' => $factures,
        ));
    }

    /**
     * Creates a new facture entity.
     *
     */
    public function newAction(Request $request)
    {
        $facture = new Facture();
        $form = $this->createForm('GarageBundle\Form\FactureType', $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facture);
            $em->flush($facture);

            return $this->redirectToRoute('facture_show', array('id' => $facture->getId()));
        }

        return $this->render('facture/new.html.twig', array(
            'facture' => $facture,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a facture entity.
     *
     */
    public function showAction(Facture $facture)
    {
        $deleteForm = $this->createDeleteForm($facture);

        return $this->render('facture/show.html.twig', array(
            'facture' => $facture,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing facture entity.
     *
     */
    public function editAction(Request $request, Facture $facture)
    {
        $deleteForm = $this->createDeleteForm($facture);
        $editForm = $this->createForm('GarageBundle\Form\FactureType', $facture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('facture_edit', array('id' => $facture->getId()));
        }

        return $this->render('facture/edit.html.twig', array(
            'facture' => $facture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a facture entity.
     *
     */
    public function deleteAction(Request $request, Facture $facture)
    {
        $form = $this->createDeleteForm($facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($facture);
            $em->flush($facture);
        }

        return $this->redirectToRoute('facture_index');
    }

    /**
     * Creates a form to delete a facture entity.
     *
     * @param Facture $facture The facture entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Facture $facture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facture_delete', array('id' => $facture->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
