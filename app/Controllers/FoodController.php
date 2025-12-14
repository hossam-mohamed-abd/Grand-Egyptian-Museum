<?php

require_once APP_PATH . '/models/foodCategory.php';
require_once APP_PATH . '/models/fooditem.php';

class FoodController extends Controller
{
    // /food
    public function categories()
    {
        $categories = foodCategory::getAllOrdered();
        require VIEW_PATH . 'Food/categories.php';
    }

    // /food/items?category=pizza
    public function items()
    {
        $slug = $_GET['category'] ?? null;

        if (!$slug) {
            header("Location: " . BASE_URL . "food");
            exit;
        }

        $category = foodCategory::getBySlug($slug);

        if (!$category) {
            header("Location: " . BASE_URL . "food");
            exit;
        }

        $items = fooditem::getByCategorySlug($slug);

        require VIEW_PATH . 'Food/items.php';
    }
}
