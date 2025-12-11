<?php
require_once APP_PATH . "/models/Plan.php";
require_once APP_PATH . "/core/Controller.php";

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plan::getAllPlans();
        $this->render("plans/plans.php", ["plans" => $plans]);
    }
}
