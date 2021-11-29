<?php
    interface DBConnectionInterface {
        public function connect();
    }

    class MySQLConnection implements DBConnectionInterface {
    
        public function connect() {
            echo "Kết nối đến MySql";
        }
    }

    class MongoDBConnection implements DBConnectionInterface
    {

        public function connect()
        {
            echo "Kết nối đến MongoDB";
        }

    }

    //UserDB sẽ không phụ thuộc trực tiếp vào MySQL, khi thay đổi CSDL sẽ không làm thay đổi UserDB
    class UserDB {
    
        protected $dbConnection;
        
        public function __construct(DBConnectionInterface $dbConnection) {
            $this->dbConnection = $dbConnection;
        }
    
        public function store() {
            $this->dbConnection->connect();
        }
    }

    $user = new UserDB(new MySQLConnection);
    echo $user->store();

?>