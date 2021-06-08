<?php 

class UserManager {
    private PDO $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php2', 'root', '');
    }

    public function getUserByEmail() {
        $response= $this->db->query("SELECT * FROM users WHERE email=:email");
        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $key => $user){
            $result[$key] = new User($user);
        }
        return $result;    
    }
}
function getUserByEmail(PDO $db, string $email) {
    $query = $db->prepare("SELECT * FROM users WHERE email=:email");
    $query->execute([
       "email" =>  $email
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

?>