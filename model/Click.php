<?php

namespace model;

class Click extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save(array $req): bool
    {
        $sql = "INSERT INTO click_id (source, offer_id, ip, time, uniq) VALUES(?, ?, ?,?,?)";
        $params = [
            $req['source'],
            $req['offer_id'],
            $req['ip'],
            $req['time'],
            $req['uniq'],
        ];

        if ($this->db->execute($sql, $params)) {
            return true;
        }
        return false;
    }

    public function find(string $ip,string $offer_id): array
    {
        $sql = "SELECT * FROM click_id WHERE ip = ? AND offer_id = ?";
        $params = [$ip,$offer_id];
        $click = $this->db->query($sql, $params);
        return $click ?? [];
    }
    public function all(int $start=0, int $stop=7777777777): array
    {
        $sql =
            "SELECT c.*, SUM(c.uniq) AS uniq, ".
            "COUNT(c.id) AS clicks ".
            "FROM click_id c " .
            "WHERE c.time BETWEEN {$start} AND {$stop} ".
            "GROUP BY c.source";

        $result = $this->db->query($sql);
        if ($result) {
            return $result;
        }
        return [];
    }
}