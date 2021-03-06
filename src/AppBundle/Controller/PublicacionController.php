<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Publicacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Publicacion controller.
 *
 * @Route("publicaciones")
 */
class PublicacionController extends Controller
{
    /**
     * Lists all publicacion entities.
     *
     * @Route("/", name="publicaciones")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

//        $publicacions = $em->getRepository('AppBundle:Publicacion')->findAll();
        $publicacions15 = $em->getRepository('AppBundle:Publicacion')->findByAnio('2015');
        $publicacions16 = $em->getRepository('AppBundle:Publicacion')->findByAnio('2016');
        $publicacions17 = $em->getRepository('AppBundle:Publicacion')->findByAnio('2017');
        $publicacions18 = $em->getRepository('AppBundle:Publicacion')->findByAnio('2018');

        $teses = $em->getRepository('AppBundle:Tesis')->findAll();
        $otros = $em->getRepository('AppBundle:Otros')->findAll();




        return $this->render('publicacion/index.html.twig', array(
            'publicacions15' => $publicacions15,
            'publicacions16' => $publicacions16,
            'publicacions17' => $publicacions17,
            'publicacions18' => $publicacions18,
            'teses'=>$teses,
            'otros'=>$otros,
        ));
    }

    /**
     * Creates a new publicacion entity.
     *
     * @Route("/new", name="publicaciones_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $publicacion = new Publicacion();
        $form = $this->createForm('AppBundle\Form\PublicacionType', $publicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($publicacion);
            $em->flush();

            return $this->redirectToRoute('publicaciones_show', array('id' => $publicacion->getId()));
        }

        return $this->render('publicacion/new.html.twig', array(
            'publicacion' => $publicacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a publicacion entity.
     *
     * @Route("/{id}", name="publicaciones_show")
     * @Method("GET")
     */
    public function showAction(Publicacion $publicacion)
    {
        $deleteForm = $this->createDeleteForm($publicacion);

        return $this->render('publicacion/show.html.twig', array(
            'publicacion' => $publicacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing publicacion entity.
     *
     * @Route("/{id}/edit", name="publicaciones_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Publicacion $publicacion)
    {
        $deleteForm = $this->createDeleteForm($publicacion);
        $editForm = $this->createForm('AppBundle\Form\PublicacionType', $publicacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('publicaciones_edit', array('id' => $publicacion->getId()));
        }

        return $this->render('publicacion/edit.html.twig', array(
            'publicacion' => $publicacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a publicacion entity.
     *
     * @Route("/{id}", name="publicaciones_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Publicacion $publicacion)
    {
        $form = $this->createDeleteForm($publicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($publicacion);
            $em->flush();
        }

        return $this->redirectToRoute('publicaciones_index');
    }

    /**
     * Creates a form to delete a publicacion entity.
     *
     * @param Publicacion $publicacion The publicacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Publicacion $publicacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('publicaciones_delete', array('id' => $publicacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
