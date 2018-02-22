<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ModePaiement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Modepaiement controller.
 *
 * @Route("modepaiement")
 */
class ModePaiementController extends Controller
{
    /**
     * Lists all modePaiement entities.
     *
     * @Route("/", name="modepaiement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $modePaiements = $em->getRepository('AppBundle:ModePaiement')->findAll();

        return $this->render('modepaiement/index.html.twig', array(
            'modePaiements' => $modePaiements,
        ));
    }

    /**
     * Creates a new modePaiement entity.
     *
     * @Route("/new", name="modepaiement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $modePaiement = new Modepaiement();
        $form = $this->createForm('AppBundle\Form\ModePaiementType', $modePaiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($modePaiement);
            $em->flush();

            return $this->redirectToRoute('modepaiement_show', array('id' => $modePaiement->getId()));
        }

        return $this->render('modepaiement/new.html.twig', array(
            'modePaiement' => $modePaiement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a modePaiement entity.
     *
     * @Route("/{id}", name="modepaiement_show")
     * @Method("GET")
     */
    public function showAction(ModePaiement $modePaiement)
    {
        $deleteForm = $this->createDeleteForm($modePaiement);

        return $this->render('modepaiement/show.html.twig', array(
            'modePaiement' => $modePaiement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing modePaiement entity.
     *
     * @Route("/{id}/edit", name="modepaiement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ModePaiement $modePaiement)
    {
        $deleteForm = $this->createDeleteForm($modePaiement);
        $editForm = $this->createForm('AppBundle\Form\ModePaiementType', $modePaiement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('modepaiement_edit', array('id' => $modePaiement->getId()));
        }

        return $this->render('modepaiement/edit.html.twig', array(
            'modePaiement' => $modePaiement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a modePaiement entity.
     *
     * @Route("/{id}", name="modepaiement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ModePaiement $modePaiement)
    {
        $form = $this->createDeleteForm($modePaiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($modePaiement);
            $em->flush();
        }

        return $this->redirectToRoute('modepaiement_index');
    }

    /**
     * Creates a form to delete a modePaiement entity.
     *
     * @param ModePaiement $modePaiement The modePaiement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ModePaiement $modePaiement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('modepaiement_delete', array('id' => $modePaiement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
