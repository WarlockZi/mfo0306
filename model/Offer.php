<?php

namespace model;

class Offer extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function find(int $id): array
    {
        $sql = "SELECT * FROM offers WHERE id = ?";
        $params = [$id];
        $offer = $this->db->query($sql, $params);

        if ($offer) {
            return $offer[0];
        }
        return [];
    }

    public function index(): array
    {
        $sql = "SELECT * FROM offers";
        $all = $this->db->query($sql);
        if ($all) {
            return $all;
        }
        return [];
    }

    public function remove(int $id): void
    {
        $sql = "DELETE FROM offers WHERE id = ?";
        $params = [$id];
        $deleted = $this->db->execute($sql, $params);

        if ($deleted) {
            exit(json_encode(["success" => true]));
        }
    }

    public function save(\stdClass $req): bool
    {
        $sql = "INSERT INTO offers(name, url, img) VALUES(?, ?, ?)";
        $params = [
            trim($req->name),
            trim($req->url),
            trim($req->img),
        ];

        if ($this->db->execute($sql, $params)) {
            return true;
        }
        return false;
    }

    public function all(int $start = 0, int $stop = 7777777777): array
    {
        $sql =
            "SELECT o.id AS of_id, o.*, c.*, SUM(c.uniq) AS uniq, " .
            "COUNT(c.id) AS clicks " .
            "FROM offers o " .
            "LEFT OUTER JOIN click_id c " .
            "ON o.id = c.offer_id " .
            "AND c.time BETWEEN {$start} AND {$stop} " .
            "GROUP BY o.id";

        $result = $this->db->query($sql);
        if ($result) {
            foreach ($result as $row) {
                $file = ROOT . '/src/img/' . $row['img'];
                if (!file_exists($file)) {
                    $row['img'] = ROOT . '/img/noimage.png';
                }
            }
            return $result;
        }
        return [];
    }
}