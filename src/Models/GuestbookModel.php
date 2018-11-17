<?php
namespace Bark\Model;

class GuestbookModel
{
    private $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function addMessage($name, $email, $message)
    {
        $datetime=date("y-m-d h:i:s"); //date time

        $sql = "INSERT INTO guestbook (`name`, email, comment, datetime) VALUES (?,?,?, ?)";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$name, $email, $message, $datetime]);
    }

    public function getList()
    {
        $result = $this->conn->query("SELECT `name`, email, comment, datetime FROM guestbook ")->fetchALL();
        return $result;
    }
}
