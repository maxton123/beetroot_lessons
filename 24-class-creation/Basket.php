<?php

class Basket extends Model
{
    public function all()
    {
        $connection = $this->getConnect();
        $sth = $connection->query("SELECT * from goods,basket where basket.good_id=goods.id ");
        return $sth->fetchAll(PDO::FETCH_ASSOC);

    }

    public function insertGoods($idGoods)
    {
        $connection = $this->getConnect();
        foreach ($idGoods as $idGood) {
            $stmt = $connection->prepare("SELECT id from basket where good_id=? and user_id=?");
            $stmt->execute([(int)$idGood,1]);
            $goodInBasket = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($goodInBasket) {
                $upd = $connection->prepare("UPDATE basket set quantity = quantity + 1 where id=?");
                $upd->execute([$goodInBasket['id']]);
            } else {
                $stmt2 = $connection->prepare("INSERT INTO basket (good_id,user_id,quantity) VALUES (?, ?,?)");
                $stmt2->execute([(int)$idGood, 1, 1]);
            }
        }
    }

}
