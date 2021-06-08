<?php 

class Account {
    protected int $id;
    protected string $account_type;
    protected string $account_number;
    protected int $amount;
    protected string $opening_date;
    protected int $user_id;

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setAccountType(string $account_type) {
        $this->account_type = $account_type;
    }

    public function getAccountType(){
        return $this->account_type;
    }

    public function setAccountNumber(string $account_number) {
        $this->account_number = $account_number;
    }

    public function getAccountNumber(){
        return $this->account_number;
    }

    public function setAmount(int $amount) {
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function setOpeningDate(string $opening_date) {
        $this->opening_date = $opening_date;
    }

    public function getOpeningDate(){
        return $this->opening_date;
    }

    public function setUserId(int $user_id) {
        $this->user_id = $user_id;
    }

    public function getUserId(){
        return $this->user_id;
    }
}