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
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function addAccount(PDO $db) {
    $query = $db->prepare("INSERT INTO Accounts(account_type, account_number, amount, opening_date, user_id) VALUES(:account_type, UUID_SHORT(), :amount, NOW(), :user_id)");
    $result = $query->execute([
       'account_type' => $_POST["account_type"],
        'amount' => $_POST["amount"],
        'user_id' => $_SESSION["user"]["id"],
        ]);
    return $result;     
}

function updateAccount(PDO $db, int $amount , int $accountId) {
    $query = $db->prepare(" UPDATE accounts SET amount = :amount WHERE id = :accountId ");
    $result = $query->execute([
        "amount"=> $amount,
        "accountId"=> $accountId
    ]);
    return $result;
}

?>