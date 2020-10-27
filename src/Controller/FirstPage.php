<?php
//src/Controller/FirstPage.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment; 

class FirstPage
{
    
    /**
     *@var Environment
     */
     private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    public function index(): Response
    {
        $number = random_int(0, 100);
        
        return new Response(
            '<html>
                <body>
                    '.$number.'
                    <br>
                    <br>
                    On a ajouter la premier page 
                </body>
             </html>'
        );
        *

        //return new Response($this->twig-render('page/home.html.twig'));
    }
}