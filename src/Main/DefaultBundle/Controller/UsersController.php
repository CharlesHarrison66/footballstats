<?php

namespace Main\DefaultBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Main\DefaultBundle\Entity\Users;
use Main\DefaultBundle\Form\UsersType;

/**
 * Users controller.
 *
 * @Route("/no")
 */
class UsersController extends Controller
{

    /**
     * Lists all Users entities.
     *
     * @Route("users/", name="no")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainDefaultBundle:Users')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Lists all Users entities.
     *
     * @Route("users/tester", name="no")
     * @Template()
     */
    
    public function testerAction() {
        
        $em = $this->getDoctrine()->getManager();
        
        $query = $em->createQuery('SELECT u FROM MainDefaultBundle:Users u');
        
        $users = $query->getResult();
        
   //     $users = $em->getRepository('MainDefaultBundle:Users')->find(5);
        
    //    $user = new Users();
    //    $users = $user->find(5);
        
    //    $user->setFirstname('testerman');
    //    $user->setLastname('wontwork');
        
        return array(
            'users' => $users,
        );
        
    }
    
    /**
     * Creates a new Users entity.
     *
     * @Route("users/create", name="no_create")
     * @Method("POST")
     * @Template("MainDefaultBundle:Users:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Users();
        $form = $this->createForm(new UsersType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('no_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Users entity.
     *
     * @Route("users/new", name="no_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Users();
        $form   = $this->createForm(new UsersType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Users entity.
     *
     * @Route("users/{id}", name="no_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainDefaultBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Users entity.
     *
     * @Route("users/{id}/edit", name="no_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainDefaultBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        $editForm = $this->createForm(new UsersType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Users entity.
     *
     * @Route("users/{id}", name="no_update")
     * @Method("PUT")
     * @Template("MainDefaultBundle:Users:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainDefaultBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UsersType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('no_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Users entity.
     *
     * @Route("users/delete/{id}", name="no_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainDefaultBundle:Users')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Users entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('no'));
    }

    /**
     * Creates a form to delete a Users entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
