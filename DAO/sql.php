<?php 

    class Sql extends PDO {

        private $connection;

        public function __construct($dsn, $host, $dbname, $user, $password) {
            $this->connection = new PDO("$dsn:host=$host;dbname=$dbname", $user, $password);
        }

        private function setParams($statment, $parameters = array()) {
            foreach ($parameters as $key => $value) {
                $this->setParam($statment, $key, $value);
            }
        }

        private function setParam($statment, $key, $value) {
            $statment->bindParam($key, $value);
        }

        public function query($rawQuery, $params = array()) {
            
            $statment = $this->connection->prepare($rawQuery);

            $this->setParams($statment, $params);

            $statment->execute();

            return $statment;
        }

        public function select($rawQuery, $params = array()):array {
            
            $statment = $this->query($rawQuery, $params);
            return $statment->fetchAll(PDO::FETCH_ASSOC);
        }
    }
