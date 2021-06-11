<?php  

class OperationManager {
    private PDO $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php2', 'root', '');
    } 

    public function getOperationAccount(int $accountId) {
        $query = $this->db->prepare("SELECT * FROM operation WHERE operation.account_id =:accountId  ");
        $query->execute([
            "accountId" => $accountId
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $key => $operation){
        $result[$key] = new Operation($operation);
        } 
        return $result;
    }
    
    public function addDepot(Operation $operation) {
        $query = $this->db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES('dépot', :amount, NOW(), :label, :account_id)");
        $result = $query->execute([
        "amount" => $operation->getAmount(),
        "label" => $operation->getLabel(),
        "account_id" => $_GET["index"]
        ]);
        return $result;
    }
    
    function addRetrait(Operation $operation) {
        $query = $this->db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES('retrait', :amount, NOW(), :label, :account_id)");
        $result = $query->execute([
        "amount" => $operation->getAmount(),
        "label" => $operation->getLabel(),
        "account_id" => $_GET["index"]
        ]);
        return $result;  
    }
}       

        // PHP Procédural
   /*  function getOperationAccount(PDO $db, int $accountId) {
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
    } */
?>