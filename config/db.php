<?php

    class DB {

        public $db_url = "localhost";
        public $db_user = "root";
        public $db_password = "";
        public $db_name = 'projektphp';
        public $conn;
        public $query;
        public $status = FALSE;

        private function checkConnection() {
            if (mysqli_connect_errno()) {
                $this->status = FALSE;
            } else {
                $this->status = TRUE;
            }
        }

        public function connect() {
            $this->conn = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_url.';charset=utf8', $this->db_user, $this->db_password);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->checkConnection();
        }

        public function query($query, $types) {
            $sql = $this->conn->prepare($query);
            $sql->execute($types);
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

?>