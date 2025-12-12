<?php
require_once APP_PATH . "/core/Controller.php";
require_once APP_PATH . "/models/Collection.php";

class CollectionsController extends Controller
{
    public function index()
    {
        // أول 3 للهايلايت
        $highlights = Collection::limit(3);

        // أول 15 للمعرض
        $collections = Collection::limitOffset(0, 15);

        $this->render("Collections/Collections.php", [
            "highlights" => $highlights,
            "collections" => $collections
        ]);
    }

    public function loadMore()
    {
        $offset = $_GET["offset"] ?? 0;

        $more = Collection::limitOffset($offset, 15);

        header("Content-Type: application/json");
        echo json_encode($more);
    }
}
