<?php 

class Account {
    protected int $id;
    protected string $account_type;
    protected string $account_number;
    protected int $amount;
    protected string $opening_date;
    protected int $user_id;

    public function __construct(?array $data=null) {
        if($data) {
            foreach($data as $key => $value) {
                $setter = "set" . ucfirst($key);
                /* var_dump($setter); */
                if(method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setAccount_type(string $account_type) {
        $this->account_type = $account_type;
    }

    public function getAccount_type(){
        return $this->account_type;
    }

    public function setAccount_number(string $account_number) {
        $this->account_number = $account_number;
    }

    public function getAccount_number(){
        return $this->account_number;
    }

    public function setAmount(int $amount) {
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function setOpening_date(string $opening_date) {
        $this->opening_date = $opening_date;
    }

    public function getOpening_date(){
        return $this->opening_date;
    }

    public function setUser_id(int $user_id) {
        $this->user_id = $user_id;
    }

    public function getUser_id(){
        return $this->user_id;
    }
}