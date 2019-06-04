<?php
// src/Controller/DefaultController.php
namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Form\TicketType;
use App\Entity\Ticket;

class DefaultController extends Controller
{
	/**
    * @Route("/", name="homepage")
    */
    public function zawarudo(Request $request)
    {
        $ticket = new Ticket();
        $ticketform = $this->createForm(TicketType::class, $ticket);

          $ticketform->handleRequest($request);

   		if ($ticketform->isSubmitted() && $ticketform->isValid()) {
        	dump($ticket);
        }

        return $this->render('test.html.twig', array(
            'form' => $ticketform->createView(),
        ));

        
    }
}