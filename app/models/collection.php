<?php
require_once APP_PATH . '/models/BaseModel.php';

class Collection extends BaseModel
{

    protected static $table = "collections";

    // جلب عدد محدد من العناصر (مثلاً أول 3)
    public static function limit($count)
    {
        $stmt = static::db()->prepare(
            "SELECT * FROM " . static::$table . " LIMIT :count"
        );
        $stmt->bindValue(':count', (int) $count, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // جلب عنصر واحد بالتفصيل – لصفحة details
    public static function find($id)
    {
        return parent::find($id);
    }


    public static function limitOffset($offset, $limit)
    {
        $stmt = static::db()->prepare(
            "SELECT * FROM collections LIMIT :offset, :limit"
        );

        $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        $stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }






}
