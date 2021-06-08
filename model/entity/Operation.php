<?php 

class Operation {
    protected int $id;
    protected string $operation_type;
    protected int $amount;
    protected string $registered;
    protected string $label;
    protected int $account_id;


    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setOperationType(string $operation_type) {
        $this->operation_type = $operation_type;
    }

    public function getOperationType(){
        return $this->operation_type;
    }

    public function setAmount(int $amount) {
        $this->id = $amount;
    }

    public function getAmount(){
        return $this->id;
    }

    public function setRegistered(string $registered) {
        $this->registered = $registered;
    }

    public function getRegistered(){
        return $this->registered;
    }

    public function setLabel(string $label) {
        $this->label = $label;
    }

    public function getLabel(){
        return $this->label;
    }

    public function setAccountId(int $account_id) {
        $this->account_id = $account_id;
    }

    public function getAccountId(){
        return $this->account_id;
    }

}