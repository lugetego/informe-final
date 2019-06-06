<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Visitantes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Visitante controller.
 *
 * @Route("visitantes")
 */
class VisitantesController extends Controller
{
    /**
     * Lists all visitante entities.
     *
     * @Route("/", name="visitantes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $visitantes = $em->getRepository('AppBundle:Visitantes')->findAll();

        return $this->render('visitantes/index.html.twig', array(
            'visitantes' => $visitantes,
        ));
    }

    /**
     * Creates a new visitante entity.
     *
     * @Route("/new", name="visitantes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $visitante = new Visitantes();
        $form = $this->createForm('AppBundle\Form\VisitantesType', $visitante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visitante);
            $em->flush();

            return $this->redirectToRoute('visitantes_show', array('id' => $visitante->getId()));
        }

        return $this->render('visitantes/new.html.twig', array(
            'visitante' => $visitante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a visitante entity.
     *
     * @Route("/{id}", name="visitantes_show")
     * @Method("GET")
     */
    public function showAction(Visitantes $visitante)
    {
        $deleteForm = $this->createDeleteForm($visitante);

        return $this->render('visitantes/show.html.twig', array(
            'visitante' => $visitante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing visitante entity.
     *
     * @Route("/{id}/edit", name="visitantes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Visitantes $visitante)
    {
        $deleteForm = $this->createDeleteForm($visitante);
        $editForm = $this->createForm('AppBundle\Form\VisitantesType', $visitante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('visitantes_edit', array('id' => $visitante->getId()));
        }

        return $this->render('visitantes/edit.html.twig', array(
            'visitante' => $visitante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a visitante entity.
     *
     * @Route("/{id}", name="visitantes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Visitantes $visitante)
    {
        $form = $this->createDeleteForm($visitante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($visitante);
            $em->flush();
        }

        return $this->redirectToRoute('visitantes_index');
    }

    /**
     * Creates a form to delete a visitante entity.
     *
     * @param Visitantes $visitante The visitante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visitantes $visitante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visitantes_delete', array('id' => $visitante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
