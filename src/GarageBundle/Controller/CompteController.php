<?php

namespace GarageBundle\Controller;

use GarageBundle\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Compte controller.
 *
 */
class CompteController extends Controller
{
    /**
     * Lists all compte entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $comptes = $em->getRepository('GarageBundle:Compte')->findAll();

        return $this->render('compte/index.html.twig', array(
            'comptes' => $comptes,
        ));
    }


    public function indexmanagerAction()
    {
        $em = $this->getDoctrine()->getManager();

        $comptes = $em->getRepository('GarageBundle:Compte')->findAll();

        return $this->render('compte/index-manager.html.twig', array(
            'comptes' => $comptes,
        ));
    }

    public function indexreceptionnistAction()
    {
        $em = $this->getDoctrine()->getManager();

        $comptes = $em->getRepository('GarageBundle:Compte')->findAll();

        return $this->render('compte/index-receptionnist.html.twig', array(
            'comptes' => $comptes,
        ));
    }

    /**
     * Creates a new compte entity.
     *
     */
    public function newAction(Request $request)
    {
        $compte = new Compte();
        $form = $this->createForm('GarageBundle\Form\CompteType', $compte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compte);
            $em->flush($compte);

            return $this->redirectToRoute('compte_index');
        }

        return $this->render('compte/new.html.twig', array(
            'compte' => $compte,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a compte entity.
     *
     */
    public function showAction(Compte $compte)
    {
        $deleteForm = $this->createDeleteForm($compte);

        return $this->render('compte/show.html.twig', array(
            'compte' => $compte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing compte entity.
     *
     */
    public function editAction(Request $request, Compte $compte)
    {
        $deleteForm = $this->createDeleteForm($compte);
        $editForm = $this->createForm('GarageBundle\Form\CompteType', $compte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('compte_edit', array('id' => $compte->getId()));
        }

        return $this->render('compte/edit.html.twig', array(
            'compte' => $compte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a compte entity.
     *
     */
    public function deleteAction(Request $request, Compte $compte)
    {
        $form = $this->createDeleteForm($compte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($compte);
            $em->flush($compte);
        }

        return $this->redirectToRoute('compte_index');
    }

    /**
     * Creates a form to delete a compte entity.
     *
     * @param Compte $compte The compte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Compte $compte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('compte_delete', array('id' => $compte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
