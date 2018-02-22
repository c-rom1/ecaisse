<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Famille;
use FOS\UserBundle\FOSUserBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\IntegerNode;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;

/**
 * Famille controller.
 *
 * @Route("famille")
 */
class FamilleController extends Controller
{
    /**
     * Lists all famille entities.
     *
     * @Route("/", name="famille_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        return $this->render('Famille/index.html.twig');

    }

    /**
     * Creates a new famille entity.
     *
     * @Route("/new", name="famille_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $famille = new Famille();
        $form = $this->createForm('AppBundle\Form\FamilleType', $famille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($famille);
            $em->flush();

            return $this->redirectToRoute('famille_index');
        }
        return $this->render('Famille/new.html.twig', array(
            'famille' => $famille,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing famille entity.
     *
     * @Route("/{id}/edit", name="famille_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Famille $famille)
    {
        $deleteForm = $this->createDeleteForm($famille);
        $editForm = $this->createForm('AppBundle\Form\FamilleType', $famille);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('famille_index');
        }

        return $this->render('Famille/edit.html.twig', array(
            'famille' => $famille,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a famille entity.
     *
     * @Route("/{id}", name="famille_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Famille $famille)
    {
        $form = $this->createDeleteForm($famille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($famille);
            $em->flush();
        }

        return $this->redirectToRoute('famille_index');
    }

    /**
     * Creates a form to delete a famille entity.
     *
     * @param Famille $famille The famille entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Famille $famille)
    {
            return $this->createFormBuilder()
                ->setAction($this->generateUrl('famille_delete', array('id' => $famille->getId())))
                ->setMethod('DELETE')
                ->getForm();

    }

    /**
     * Lists all famille entities.
     *
     * @Route("/list", name="famille_data", defaults={"_format": "json"})
     * @Method({"GET", "POST"})
     */
    public function familleData(Request $request)
    {
        $nbParPage = $request->request->get('length');
        $page = $request->request->get('start');
        $draw = $request->request->get('draw');

        $em = $this->getDoctrine()->getManager();
        $familles = $em->getRepository('AppBundle:Famille')->findByPage($page, $nbParPage);
        $totalfamilles = $em->getRepository('AppBundle:Famille')->findAll();

        return $this->render('Famille/data.json.twig', array(
            'familles' => $familles,
            'recordsFiltered' => count($totalfamilles),
            'recordsTotal' => count($familles),
            'draw' => $draw,
        ));
    }


    /**
     * Lists all famille entities.
     *
     * @Route("/{id}/articleFamilleList", name="articleFamille_data", defaults={"_format": "json"})
     * @Method({"GET", "POST"})
     */
    public function articleFamilleData(Request $request, Famille $famille)
    {
        $nbParPage = $request->request->get('length');
        $page = $request->request->get('start');
        $draw = $request->request->get('draw');
        $deleteForm = $this->createDeleteForm($famille);
        $editForm = $this->createForm('AppBundle\Form\FamilleType', $famille);

        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AppBundle:Article')->findBy(array('famille' => $famille),null,$nbParPage,$page);
        $totalArticles = $em->getRepository('AppBundle:Article')->findAll();

        return $this->render('article/data.json.twig', array(
            'articles' => $articles,
            'recordsFiltered' => count($totalArticles),
            'recordsTotal' => count($articles),
            'draw' => $draw,
        ));
    }
}
