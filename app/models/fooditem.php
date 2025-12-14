<?php
require_once APP_PATH . '/models/BaseModel.php';

class fooditem extends BaseModel
{
    protected static $table = 'food_items';

    public static function getByCategorySlug($slug)
    {
        $sql = "
        SELECT 
            fi.*,
            r.name AS restaurant_name,

            COUNT(DISTINCT fl.id) AS likes_count,
            ROUND(AVG(fr.rating), 1) AS avg_rating,
            COUNT(DISTINCT fr.id) AS reviews_count

        FROM food_items fi
        JOIN food_categories fc ON fi.category_id = fc.id
        JOIN restaurants r ON fi.restaurant_id = r.id

        LEFT JOIN food_likes fl ON fi.id = fl.food_id
        LEFT JOIN food_reviews fr ON fi.id = fr.food_id

        WHERE fc.slug = ?

        GROUP BY fi.id
        ORDER BY fi.created_at DESC
    ";

        $stmt = self::db()->prepare($sql);
        $stmt->execute([$slug]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
