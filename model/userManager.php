<?php 

class UserManager {
        private PDO $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=banque_php2', 'root', '');
        }

    public function getUserByEmail(string $email) {
        $query= $this->db->prepare("SELECT * FROM users WHERE email=:email");
        $query->execute([
            "email" =>  $email
         ]);
        $response = $query->fetch(PDO::FETCH_ASSOC);
        $result = new User($response);
        return $result;    
    }
}

/// Function php simple 
/* function getUserByEmail(PDO $db, string $email) {
    $query = $db->prepare("SELECT * FROM users WHERE email=:email");
    $query->execute([
       "email" =>  $email
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
} */

?>