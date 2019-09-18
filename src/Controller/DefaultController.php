<?php 
    namespace App\Controller;
    
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;
    
    class DefaultController
    {
        /**
         * @Route("/hello/{name}")
         */
        
        public function index($name)
        {
            return new Response('Hello, ' . $name);
            
        }
            
        /**
         * @Route("/simple/{name}")
         */
        
        public function simple($name)
        {
            return new Response('Hi ' . $name .'! <br> I am simple Page! ');
            
        }
        
    }
