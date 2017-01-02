<?php

namespace GarageBundle\Controller;

use GarageBundle\Entity\Employe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Employe controller.
 *
 */
class EmployeController extends Controller
{
    /**
     * Lists all employe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $employes = $em->getRepository('GarageBundle:Employe')->findAll();

        return $this->render('employe/index.html.twig', array(
            'employes' => $employes,
        ));
    }

    public function indexmanagerAction()
    {
        $em = $this->getDoctrine()->getManager();

        $employes = $em->getRepository('GarageBundle:Employe')->findAll();

        return $this->render('employe/index-manager.html.twig', array(
            'employes' => $employes,
        ));
    }

    /**
     * Creates a new employe entity.
     *
     */
    public function newAction(Request $request)
    {
        $employe = new Employe();
        $form = $this->createForm('GarageBundle\Form\EmployeType', $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employe);
            $em->flush($employe);

            return $this->redirectToRoute('employe_indexmanager', array('id' => $employe->getId()));
        }

        return $this->render('employe/new.html.twig', array(
            'employe' => $employe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a employe entity.
     *
     */
    public function showAction(Employe $employe)
    {
        $deleteForm = $this->createDeleteForm($employe);

        return $this->render('employe/show.html.twig', array(
            'employe' => $employe,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing employe entity.
     *
     */
    public function editAction(Request $request, Employe $employe)
    {
        $deleteForm = $this->createDeleteForm($employe);
        $editForm = $this->createForm('GarageBundle\Form\EmployeType', $employe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('employe_edit', array('id' => $employe->getId()));
        }

        return $this->render('employe/edit.html.twig', array(
            'employe' => $employe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a employe entity.
     *
     */
    public function deleteAction(Request $request, Employe $employe)
    {
        $form = $this->createDeleteForm($employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($employe);
            $em->flush($employe);
        }

        return $this->redirectToRoute('employe_index');
    }

    /**
     * Creates a form to delete a employe entity.
     *
     * @param Employe $employe The employe entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Employe $employe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employe_delete', array('id' => $employe->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
