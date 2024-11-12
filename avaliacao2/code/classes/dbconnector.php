
<?php
include_once 'dbcredentials.php';


class Database
{

    private $connection;


    public function __construct(){
        $dbdata = new DatabaseData();
        try {
            $this->connection = new PDO("mysql:host=$dbdata->servername;dbname=$dbdata->dbname", $dbdata->username, $dbdata->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($sql)
    {
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll();
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}

?>