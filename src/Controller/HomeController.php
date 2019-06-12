<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Booking;
use App\Form\BookingType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class HomeController extends AbstractController
{
	/**
    * @Route("/", name="homepage")
    */
    public function home(Request $request, SessionInterface $session)
    {
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	$session->set('booking', $booking);
        	return $this->redirectToRoute('ticket');
        }


        return $this->render('home/home.html.twig', array(
            'form' => $form->createView(),
        ));

        
    }
}
