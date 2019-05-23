<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tesis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tesi controller.
 *
 * @Route("tesis")
 */
class TesisController extends Controller
{
    /**
     * Lists all tesi entities.
     *
     * @Route("/", name="tesis_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $teses = $em->getRepository('AppBundle:Tesis')->findAll();

        return $this->render('tesis/index.html.twig', array(
            'teses' => $teses,
        ));
    }

    /**
     * Creates a new tesi entity.
     *
     * @Route("/new", name="tesis_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tesi = new Tesis();
        $form = $this->createForm('AppBundle\Form\TesisType', $tesi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tesi);
            $em->flush();

            return $this->redirectToRoute('tesis_show', array('id' => $tesi->getId()));
        }

        return $this->render('tesis/new.html.twig', array(
            'tesi' => $tesi,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tesi entity.
     *
     * @Route("/{id}", name="tesis_show")
     * @Method("GET")
     */
    public function showAction(Tesis $tesi)
    {
        $deleteForm = $this->createDeleteForm($tesi);

        return $this->render('tesis/show.html.twig', array(
            'tesi' => $tesi,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tesi entity.
     *
     * @Route("/{id}/edit", name="tesis_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tesis $tesi)
    {
        $deleteForm = $this->createDeleteForm($tesi);
        $editForm = $this->createForm('AppBundle\Form\TesisType', $tesi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tesis_edit', array('id' => $tesi->getId()));
        }

        return $this->render('tesis/edit.html.twig', array(
            'tesi' => $tesi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tesi entity.
     *
     * @Route("/{id}", name="tesis_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tesis $tesi)
    {
        $form = $this->createDeleteForm($tesi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tesi);
            $em->flush();
        }

        return $this->redirectToRoute('tesis_index');
    }

    /**
     * Creates a form to delete a tesi entity.
     *
     * @param Tesis $tesi The tesi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tesis $tesi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tesis_delete', array('id' => $tesi->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
