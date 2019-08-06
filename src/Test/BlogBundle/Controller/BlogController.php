<?php

namespace Test\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 *@Route("/blog")
 * 
 */
class BlogController extends Controller{
    
    /**
     * @Route("/")
     * @Template
     * 
     */
    public function indexAction() {
        return array();
    }
    
     /**
     * @Route("/journal")
     * @Template
     * 
     */
    public function journalAction() {
      
    return array();    
    }
    
     /**
     * @Route("/about")
     * @Template
     * 
     */
    public function aboutAction() {
       
     return array();   
    }
    
     /**
     * @Route("/contact")
     * @Template
     */
    public function contactAction() {
        
        
      return array();  
    }
    
    
    
}
