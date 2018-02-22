<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FacturePaiement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Facturepaiement controller.
 *
 * @Route("facturepaiement")
 */
class FacturePaiementController extends Controller
{
    /**
     * Lists all facturePaiement entities.
     *
     * @Route("/", name="facturepaiement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $facturePaiements = $em->getRepository('AppBundle:FacturePaiement')->findAll();

        return $this->render('facturepaiement/index.html.twig', array(
            'facturePaiements' => $facturePaiements,
        ));
    }

    /**
     * Creates a new facturePaiement entity.
     *
     * @Route("/new", name="facturepaiement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $facturePaiement = new Facturepaiement();
        $form = $this->createForm('AppBundle\Form\FacturePaiementType', $facturePaiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facturePaiement);
            $em->flush();

            return $this->redirectToRoute('facturepaiement_show', array('id' => $facturePaiement->getId()));
        }

        return $this->render('facturepaiement/new.html.twig', array(
            'facturePaiement' => $facturePaiement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a facturePaiement entity.
     *
     * @Route("/{id}", name="facturepaiement_show")
     * @Method("GET")
     */
    public function showAction(FacturePaiement $facturePaiement)
    {
        $deleteForm = $this->createDeleteForm($facturePaiement);

        return $this->render('facturepaiement/show.html.twig', array(
            'facturePaiement' => $facturePaiement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing facturePaiement entity.
     *
     * @Route("/{id}/edit", name="facturepaiement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FacturePaiement $facturePaiement)
    {
        $deleteForm = $this->createDeleteForm($facturePaiement);
        $editForm = $this->createForm('AppBundle\Form\FacturePaiementType', $facturePaiement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('facturepaiement_edit', array('id' => $facturePaiement->getId()));
        }

        return $this->render('facturepaiement/edit.html.twig', array(
            'facturePaiement' => $facturePaiement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a facturePaiement entity.
     *
     * @Route("/{id}", name="facturepaiement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FacturePaiement $facturePaiement)
    {
        $form = $this->createDeleteForm($facturePaiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($facturePaiement);
            $em->flush();
        }

        return $this->redirectToRoute('facturepaiement_index');
    }

    /**
     * Creates a form to delete a facturePaiement entity.
     *
     * @param FacturePaiement $facturePaiement The facturePaiement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FacturePaiement $facturePaiement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facturepaiement_delete', array('id' => $facturePaiement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
