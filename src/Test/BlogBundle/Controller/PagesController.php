<?php

namespace Test\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends Controller {
    
    /**
     * @Route("/about", name="test_blog_aboutPage")
     * @Template("TestBlogBundle:Pages:aboutPage.html.twig")
     *
     * 
     */
    public function aboutAction(){
        //
//        $json = array(
//            'name'=>'Buty',
//            'size'=>'42',
//            'price'=>'123.23'
//        );
//        return new Response(json_encode($json),Response::HTTP_OK,[
//            'Content-type'=> 'application/json'
//        ]);
        
//        $content = $this->renderView('TestBlogBundle:Pages:about.html.twig');
//        return new Response($content);
        
//        return $this->render('TestBlogBundle:Pages:about.html.twig',array(
//            'name'=>'Maciek'
//        ));
      return array(
             'name'=>'Maciek'
             );
    }
    
    
    /**
     * @Route("/go-to-page")
     * 
     */
    public function goToPageAction() {
      
        $redirectUrl = $this->generateUrl('test_blog_aboutPage');
        return $this->redirect($redirectUrl);
    }
    
    /**
     * 
     * @Route("/print-header/{title}/{color}")
     * @Template
     */
    public function printHeaderAction($title, $color) {
      return array(
          'title'=>$title,
          'color'=>$color
      );  
    }
    
     /**
     * 
     * @Route("/contact")
     * 
     */
    public function contactPageAction() {
       return $this->forward('TestBlogBundle:Pages:printHeader',[
            'title'=>'Kontakt',
            'color'=>'blue'
        ]);
    }
    
     /**
     * 
     * @Route("/generate-error")
     * 
     */
    public function generateErrorAction() {
       //throw $this->createNotFoundException('Ta strona nie istnieje');
        throw new \Exception('Ups wystapił bład aplikacji');
    }
    
    /**
     * 
     * @Route("/mastering-request/{name}", name="test_blog_masteringRequest")
     * 
     */
    public function masteringRequesAction(Request $Request, $name){
       // $Request = $this->getRequest();
       // $Request = $this->get('request');
       //return new Response($Request->get('name')); 
        return new Response($Request->query->get('kolor','red'));
    }
    
    /**
     * 
     * @Route("/read-params", name="test_blog_raedParams")
     * 
     */
    public function readParamsAction(){
        $params = $this->container->getParameter('appApiKey');
        return new Response($params);
    }
	
}