<?php
class Carrello
{
    public $total;
    public user $user;
    public $totalprice;    

    public function __construct(float $total, user $user, float $totalprice)
    {
        $this->total = $total;
        $this->user = $user;
        $this->totalprice = $totalprice;
    }

    public function print_user(){
        echo   " </ul>
                    <li>Name: {$this->user->name}</li>
                    <li>Products bought: {$this->total}</li>
                    <li>Total Price: {$this->totalprice} €</li>
                    <p>Registration: {$this->total()}</p>
                </ul>"
                ;
    }

    public function total(){
        if ($this->user->login == true){
            $prezzo_scontato = $this->totalprice - ($this->totalprice * 20 / 100);
            return "
            You have 20% discount, so you pay {$prezzo_scontato} € instead of {$this->totalprice} €";
        } else {
            return "You don't have a discount";
        }
    }

}

?>