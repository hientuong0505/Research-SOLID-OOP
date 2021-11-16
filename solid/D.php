<?php
    interface DBConnectionInterface {
        public function connect();
    }

    class MySQLConnection implements DBConnectionInterface {
    
        public function connect() {
            //////
        }
    }
    //UserDB sẽ không phụ thuộc trực tiếp vào MySQL, khi thay đổi CSDL sẽ không làm thay đổi UserDB
    class UserDB {
    
        private $dbConnection;
        
        public function __construct(DBConnectionInterface $dbConnection) {
            $this->$dbConnection = $dbConnection;
        }
    
        public function store() {
            /////
        }
    }
?>