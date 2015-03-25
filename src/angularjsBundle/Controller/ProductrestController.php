<?php

namespace angularjsBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use angularjsBundle\Form\ReviewType;
use angularjsBundle\Entity\Review;

class ProductrestController extends FOSRestController
{

    public function productAction($id=null)
    {
        $em = $this->getDoctrine()->getManager();
        if($id === null){
            $data = $em->getRepository('angularjsBundle:Product')->findAll();
        } else {
            $data = $em->getRepository('angularjsBundle:Product')->find($id);
        }
        $view = $this->view($data, 200)
        ->setTemplate('angularjsBundle:API:product.html.twig')
        ->setTemplateVar('products');
        return $this->handleView($view);
    }

    public function reviewAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Review();
        $form = $this->createForm(new ReviewType(), $entity);
        $form->remove('product');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setProduct($em->getRepository('angularjsBundle:Product')->find($id));
            $em->persist($entity);
            $em->flush();
        }
        $data = $em->getRepository('angularjsBundle:Product')->find($id)->getReviews();
        $view = $this->view($data, 200)
        ->setTemplate('angularjsBundle:API:review.html.twig')
        ->setTemplateVar('reviews');
        return $this->handleView($view);
    }

}
