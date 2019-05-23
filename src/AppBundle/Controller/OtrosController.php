<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Otros;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Otro controller.
 *
 * @Route("otros")
 */
class OtrosController extends Controller
{
    /**
     * Lists all otro entities.
     *
     * @Route("/", name="otros_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $otros = $em->getRepository('AppBundle:Otros')->findAll();

        return $this->render('otros/index.html.twig', array(
            'otros' => $otros,
        ));
    }

    /**
     * Creates a new otro entity.
     *
     * @Route("/new", name="otros_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $otro = new Otros();
        $form = $this->createForm('AppBundle\Form\OtrosType', $otro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($otro);
            $em->flush();

            return $this->redirectToRoute('otros_show', array('id' => $otro->getId()));
        }

        return $this->render('otros/new.html.twig', array(
            'otro' => $otro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a otro entity.
     *
     * @Route("/{id}", name="otros_show")
     * @Method("GET")
     */
    public function showAction(Otros $otro)
    {
        $deleteForm = $this->createDeleteForm($otro);

        return $this->render('otros/show.html.twig', array(
            'otro' => $otro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing otro entity.
     *
     * @Route("/{id}/edit", name="otros_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Otros $otro)
    {
        $deleteForm = $this->createDeleteForm($otro);
        $editForm = $this->createForm('AppBundle\Form\OtrosType', $otro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('otros_edit', array('id' => $otro->getId()));
        }

        return $this->render('otros/edit.html.twig', array(
            'otro' => $otro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a otro entity.
     *
     * @Route("/{id}", name="otros_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Otros $otro)
    {
        $form = $this->createDeleteForm($otro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($otro);
            $em->flush();
        }

        return $this->redirectToRoute('otros_index');
    }

    /**
     * Creates a form to delete a otro entity.
     *
     * @param Otros $otro The otro entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Otros $otro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('otros_delete', array('id' => $otro->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
