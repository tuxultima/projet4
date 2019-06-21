<?php

namespace App\Form\FormHandler;

use App\Entity\Ticket;
use App\Entity\Booking;
use Doctrine\Common\Persistence\ObjectManager;

class TicketTypeHandler 
{
    protected $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager=$manager;
    }
    public function ticketNumber(Booking $booking)
    {
        $nbTickets=$booking->getNbTickets();
        $tickets= [];
        for($i=1; $i<=$nbTickets; $i++)
        {
            $tickets[] = new Ticket();
        }
        return $tickets;
    }
}