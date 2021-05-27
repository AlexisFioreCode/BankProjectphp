<?php  

function getOperationAccount(PDO $db, int $accountId) {
    $query = $db->prepare("SELECT * FROM operation WHERE operation.account_id =:accountId  ");
    $query->execute([
        "accountId" => $accountId
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>