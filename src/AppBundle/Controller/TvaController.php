<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tva;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tva controller.
 *
 * @Route("tva")
 */
class TvaController extends Controller
{
    /**
     * Lists all tva entities.
     *
     * @Route("/", name="tva_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('tva/index.html.twig');
    }

    /**
     * Creates a new tva entity.
     *
     * @Route("/new", name="tva_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tva = new Tva();
        $form = $this->createForm('AppBundle\Form\TvaType', $tva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tva);
            $em->flush();

            return $this->redirectToRoute('tva_show', array('id' => $tva->getId()));
        }

        return $this->render('tva/new.html.twig', array(
            'tva' => $tva,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tva entity.
     *
     * @Route("/{id}", name="tva_show")
     * @Method("GET")
     */
    public function showAction(Tva $tva)
    {
        $deleteForm = $this->createDeleteForm($tva);

        return $this->render('tva/show.html.twig', array(
            'tva' => $tva,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tva entity.
     *
     * @Route("/{id}/edit", name="tva_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tva $tva)
    {
        $deleteForm = $this->createDeleteForm($tva);
        $editForm = $this->createForm('AppBundle\Form\TvaType', $tva);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tva_edit', array('id' => $tva->getId()));
        }

        return $this->render('tva/edit.html.twig', array(
            'tva' => $tva,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tva entity.
     *
     * @Route("/{id}", name="tva_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tva $tva)
    {
        $form = $this->createDeleteForm($tva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tva);
            $em->flush();
        }

        return $this->redirectToRoute('tva_index');
    }

    /**
     * Creates a form to delete a tva entity.
     *
     * @param Tva $tva The tva entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tva $tva)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tva_delete', array('id' => $tva->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Lists all tva entities.
     *
     * @Route("/list", name="tva_data", defaults={"_format": "json"})
     * @Method({"GET", "POST"})
     */
    public function tvaData(Request $request)
    {
        $nbParPage = $request->request->get('length');
        $page = $request->request->get('start');
        $draw = $request->request->get('draw');

        $em = $this->getDoctrine()->getManager();
        $tva = $em->getRepository('AppBundle:Tva')->findByPage($page, $nbParPage);
        $totalTva = $em->getRepository('AppBundle:Tva')->findAll();

        return $this->render('tva/data.json.twig', array(
            'tvas' => $tva,
            'recordsFiltered' => count($totalTva),
            'recordsTotal' => count($tva),
            'draw' => $draw,
        ));
    }

}
