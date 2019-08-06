<?php

namespace Test\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestBlogBundle:Default:index.html.twig', array('name' => $name));
    }


    public function registerUserAction($name, $age, $role) {
   $responseMsg = sprintf('Rejestracja użytkownika o nazwie %s (wiek: %d), rola w systemie %s',$name, $age, $role);
    	return new \Symfony\Component\HttpFoundation\Response($responseMsg);
    }


    public function simple1Action () {

    	return new \Symfony\Component\HttpFoundation\Response('Simple Action');
    }

    public function simple2Action () {

    	return new \Symfony\Component\HttpFoundation\Response('Simple Action 2');
    }


    /**
     * @Route(
     *      "/register-tester/{name}-{age}-{role}", 
     *       name="test_blog_registerTester", 
     *      defaults={"role"="user"},
     *      requirements={"age"="\d+","role"="units|functional"} 
     *      )
     *@Method({"GET"})
     *
     */
    public function registerTesterAction($name, $age,$role) {
    	 $responseMsg = sprintf('Rejestracja Testera o nazwie %s (wiek: %d), rola w systemie %s',$name, $age, $role);
    	return new \Symfony\Component\HttpFoundation\Response($responseMsg);
    }


    /**
    *@Route("/generate-url")
    *
    */
    public function generateUrlAction() {
        $response = $this->generateUrl('test_blog_registerUser', array(
            'name' =>'Adam',
            'age' => 28,
            'country' => 'pl'
        ),TRUE);
        return new \Symfony\Component\HttpFoundation\Response($response);
    }



}
