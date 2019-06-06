<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Visitas;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Visita controller.
 *
 * @Route("visitas")
 */
class VisitasController extends Controller
{
    /**
     * Lists all visita entities.
     *
     * @Route("/", name="visitas_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $visitas = $em->getRepository('AppBundle:Visitas')->findAll();

        return $this->render('visitas/index.html.twig', array(
            'visitas' => $visitas,
        ));
    }

    /**
     * Creates a new visita entity.
     *
     * @Route("/new", name="visitas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $visita = new Visita();
        $form = $this->createForm('AppBundle\Form\VisitasType', $visita);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visita);
            $em->flush();

            return $this->redirectToRoute('visitas_show', array('id' => $visita->getId()));
        }

        return $this->render('visitas/new.html.twig', array(
            'visita' => $visita,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a visita entity.
     *
     * @Route("/{id}", name="visitas_show")
     * @Method("GET")
     */
    public function showAction(Visitas $visita)
    {
        $deleteForm = $this->createDeleteForm($visita);

        return $this->render('visitas/show.html.twig', array(
            'visita' => $visita,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing visita entity.
     *
     * @Route("/{id}/edit", name="visitas_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Visitas $visita)
    {
        $deleteForm = $this->createDeleteForm($visita);
        $editForm = $this->createForm('AppBundle\Form\VisitasType', $visita);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('visitas_edit', array('id' => $visita->getId()));
        }

        return $this->render('visitas/edit.html.twig', array(
            'visita' => $visita,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a visita entity.
     *
     * @Route("/{id}", name="visitas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Visitas $visita)
    {
        $form = $this->createDeleteForm($visita);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($visita);
            $em->flush();
        }

        return $this->redirectToRoute('visitas_index');
    }

    /**
     * Creates a form to delete a visita entity.
     *
     * @param Visitas $visita The visita entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visitas $visita)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visitas_delete', array('id' => $visita->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
