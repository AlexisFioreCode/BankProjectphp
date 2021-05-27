<?php  

function getUserAccount(PDO $db, int $userId) {
    $query = $db->prepare("SELECT * FROM accounts WHERE accounts.user_id =:userId  ");
    $query->execute([
        "userId" => $userId
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}



?>