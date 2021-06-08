<?php  

    function getOperationAccount(PDO $db, int $accountId) {
        $query = $db->prepare("SELECT * FROM operation WHERE operation.account_id =:accountId  ");
        $query->execute([
            "accountId" => $accountId
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function addDepot(PDO $db) {
        $query = $db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES('dépot', :amount, NOW(), :label, :account_id)");
        $result = $query->execute([
        "amount" => $_POST["amount"],
        "label" => $_POST["label"],
        "account_id" => $_GET["index"]
        ]);
        return $result;
    } 
    
    function addRetrait(PDO $db) {
        $query = $db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES('retrait', :amount, NOW(), :label, :account_id)");
        $result = $query->execute([
        "amount" => $_POST["amount"],
        "label" => $_POST["label"],
        "account_id" => $_GET["index"]
        ]);
        return $result;  
    }
?>