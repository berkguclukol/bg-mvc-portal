<?php
class Model
{
    /***
     * @description MongoDB\Client türünde nesne oluşturur.
     */
    static $client;

    static function updateOne($table, $_id, $update)
    {
        self::$client = new MongoDB\Client(DB_HOST);
        self::$client->{DB_NAME}->{$table}->updateOne(
            ['_id' => new MongoDB\BSON\ObjectId($_id)],
            [
                '$set' => $update
            ]
        );
    }

    static function updateWhere($table, $where, $update) {
        self::$client = new MongoDB\Client(DB_HOST);
        self::$client->{DB_NAME}->{$table}->updateOne(
            $where,
            [
                '$set' => $update
            ]
        );
    }

    /**
     * @description Verilen tablo adına göre verileri getirir.
     * @param $table string
     * @param $limit integer
     * @param $sort integer
     * @return array
     */
    static function getWithJoin($table, $aggregate): array
    {
        self::$client = new MongoDB\Client(DB_HOST);
        return self::$client->{DB_NAME}->{$table}->aggregate($aggregate)->toArray();
    }
    /**
     * @description Verilen tablo adına göre verileri getirir.
     * @param $table string
     * @param $limit integer
     * @param $sort integer
     * @return array
     */
    static function getAll($table, $limit = 0, $sort = 1, $sortCol = "_id"): array
    {
        self::$client = new MongoDB\Client(DB_HOST);
        return self::$client->{DB_NAME}->{$table}->find(
            [],
            ['limit' => $limit, 'sort' => [$sortCol => $sort]]
        )->toArray();
    }

    /**
     * @description Verilen koşula istinaden belirtilen tablodan veri getirir.
     * @param $table string
     * @param $where array
     * @return array
     */
    static function getWhere($table, $where = [], $limit = 0, $sort = 1, $sortCol = "_id")
    {
        self::$client = new MongoDB\Client(DB_HOST);
        return self::$client->{DB_NAME}->{$table}->find(
            $where,
            ['limit' => $limit, 'sort' => [$sortCol => $sort]]
        )->toArray();
    }

    /***
     * @description Verilen şarta ve belirtilen tablodan uygun tek kayıtı döndürür.
     * @param $table string
     * @param $where array
     * @return array
     */
    static function getOne($table, $where = [], $sort = 1)
    {
        self::$client = new MongoDB\Client(DB_HOST);
        return self::$client->{DB_NAME}->{$table}->findOne(
            $where,
            ['sort' => ["_id" => $sort]]
        );
    }

    /***
     * @description Verilen IDyi belirtilen tablodan bularak kayıt bilgisini döndürür.
     * @param $table string
     * @param $id string
     * @return array
     */
    static function getById($table, $id)
    {
        self::$client = new MongoDB\Client(DB_HOST);
        return self::$client->{DB_NAME}->{$table}->find(['_id' => new MongoDB\BSON\ObjectId($id)])->toArray();
    }

    /**
     * @description Verilen tabloya array olarak gönderilen datayı ekler.
     * @param $table string
     * @param $insertData array
     * @return array
     */
    static function insertData($table, $insertData)
    {
        self::$client = new MongoDB\Client(DB_HOST);
        $result = self::$client->{DB_NAME}->{$table}->insertOne($insertData);
        $id = $result->getInsertedId();
        return $id;
    }
    static function deleteData($table, $id)
    {
        self::$client = new MongoDB\Client(DB_HOST);
        return self::$client->{DB_NAME}->{$table}->deleteOne(['_id' => new MongoDB\BSON\ObjectId ($id)]);
    }
    static function deleteWhere($table, $where = [])
    {
        self::$client = new MongoDB\Client(DB_HOST);
        return self::$client->{DB_NAME}->{$table}->deleteMany($where);
    }


    static function phoneBookUpdate($table, $data) {
        self::$client = new MongoDB\Client(DB_HOST);
        self::$client->{DB_NAME}->{$table}->deleteMany([]);
        self::$client->{DB_NAME}->{$table}->insertMany($data);
    }
}