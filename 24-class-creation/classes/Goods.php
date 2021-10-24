<?php
namespace Shop\Classes;
class Goods extends Model
{
    public function all()
    {
        $connection = $this->getConnect();
        $sth = $connection->query("SELECT * from goods");
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

}

