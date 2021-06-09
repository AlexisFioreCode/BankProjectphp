<?php  

class AccountManager {
    private PDO $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php2', 'root', '');
    } 

    public function getUserAccount(int $userId) {
        $query = $this->db->prepare("SELECT * FROM accounts WHERE user_id =:userId");
        $query->execute([
            "userId" => $userId
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $key => $account){
        $result[$key] = new Account($account);
        } 
        return $result;
    }

    public function getOneAccount(int $accountId) {
        $query = $this->db->prepare("SELECT * FROM accounts WHERE id =:accountId  ");
        $query->execute([
            "accountId" => $accountId
        ]);
        $response = $query->fetch(PDO::FETCH_ASSOC);
        $result = new Account($response);
        return $result;
    }

    function addAccount(Account $account) {
        $query = $this->db->prepare("INSERT INTO Accounts(account_type, account_number, amount, opening_date, user_id) VALUES(:account_type, UUID_SHORT(), :amount, NOW(), :user_id)");
        $result = $query->execute([
           'account_type' => $account->getAccount_type(),
            'amount' => $account->getAmount(),
            'user_id' => $_SESSION["user"]->getId(),
            ]);
        return $result;     
    }

    function updateAccount(int $amount , int $accountId) {
        $query = $this->db->prepare(" UPDATE accounts SET amount = :amount WHERE account_id = :accountId ");
        $result = $query->execute([
            "amount"=> $amount,
            "accountId"=> $accountId
        ]);
        return $result;
    } 

    function deleteAccount(int $accountId) {
        $query = $this->db->prepare("DELETE FROM accounts WHERE id = :account_id ");
        $result = $query->execute([
            "account_id" => $accountId
        ]);
        return $result;
    } 
} 

// fonction php procédural
/* function getUserAccount(PDO $db, int $userId) {
    $query = $db->prepare("SELECT * FROM accounts WHERE accounts.user_id =:userId  ");
    $query->execute([
        "userId" => $userId
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
} */

/* function getOneAccount(PDO $db, int $accountId) {
    $query = $db->prepare("SELECT * FROM accounts WHERE id =:accountId  ");
    $query->execute([
        "accountId" => $accountId
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
} */
/* 
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
    $query = $db->prepare(" UPDATE accounts SET amount = :amount WHERE account_id = :accountId ");
    $result = $query->execute([
        "amount"=> $amount,
        "accountId"=> $accountId
    ]);
    return $result;
} */

/* function deleteAccount(PDO $db) {
    $query = $db->prepare(" DELETE FROM accounts WHERE id = :account_id ");
    $query->execute([
        "accountId" => $_GET["index"]
    ]);
} */

?>