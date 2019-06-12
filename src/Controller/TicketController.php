<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\TicketType;
use App\Entity\Ticket;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class TicketController extends AbstractController
{
	/*
	private $session;
	public function __construct(SessionInterface $session) {
		$this->session = $session;
	}
	*/
	/**
    * @Route("/info-ticket", name="ticket")
    */
    public function ticket(Request $request, SessionInterface $session)
    {
    	dump($session->get('booking'));
        $ticket = new Ticket();
        $ticketform = $this->createForm(TicketType::class, $ticket);

          $ticketform->handleRequest($request);

   		if ($ticketform->isSubmitted() && $ticketform->isValid()) {
        	dump($ticket);
        }

        return $this->render('ticket/ticket.html.twig', array(
            'form' => $ticketform->createView(),
        ));

        
    }
}