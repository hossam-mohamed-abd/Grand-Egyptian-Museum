<?php

require_once APP_PATH . "/models/LearnCourse.php";
require_once APP_PATH . "/core/Controller.php";

class LearnController extends Controller
{
    public function index()
    {
        $courses = LearnCourse::all();
        $this->render("components/learn-section.php", ['courses' => $courses]);
    }
}
