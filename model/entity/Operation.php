<?php 

class Operation {
    protected int $id;
    protected string $operation_type;
    protected int $amount;
    protected string $registered;
    protected string $label;
    protected int $account_id;

    public function __construct(?array $data=null) {
        if($data) {
            foreach($data as $key => $value) {
                $setter = "set" . ucfirst($key);
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

    public function setOperation_type(string $operation_type) {
        $this->operation_type = $operation_type;
    }

    public function getOperation_type(){
        return $this->operation_type;
    }

    public function setAmount(int $amount) {
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
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

    public function setAccount_id(int $account_id) {
        $this->account_id = $account_id;
    }

    public function getAccount_id(){
        return $this->account_id;
    }

}