<?php

require_once APP_PATH . "/models/Event.php";
require_once APP_PATH . "/core/Controller.php";

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::allEvents();
        $this->render("components/events-section.php", ["events" => $events]);
    }

    public function show($id)
    {
        $event = Event::findEvent($id);

        if (!$event) {
            echo "Event not found";
            return;
        }

        $this->render("event-details/event-details.php", ["event" => $event]);
    }
}
