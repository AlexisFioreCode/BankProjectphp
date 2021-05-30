<?php  

function getUserAccount(PDO $db, int $userId) {
    $query = $db->prepare("SELECT * FROM accounts WHERE accounts.user_id =:userId  ");
    $query->execute([
        "userId" => $userId
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getOneAccount(PDO $db, int $accountId) {
    $query = $db->prepare("SELECT * FROM accounts WHERE id =:accountId  ");
    $query->execute([
        "accountId" => $accountId
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>