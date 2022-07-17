<?php

class CreditCard
{
    private $credit_card_number;
    private $scadenza;
    private User $nome;
    private User $cognome;



    function __construct(int $number, string $data_scadenza, User $name, User $surname)
    {
        $this->credit_card_number = $number;
        $this->scadenza = $data_scadenza;
        $this->nome = $name;
        $this->cognome = $surname;
    }



    function credit_card()
    {
        echo "</ul>
                    <li>Credit card number: {$this->credit_card_number}</li>
                    <li>Expiration date: {$this->scadenza}</li>
                    <li>Name: {$this->nome->name}</li>
                    <li>Surname: {$this->cognome->surname}</li>
                    <li>About credit card: {$this->scadenza_creditcard()}</li>
                </ul>";
    }

    function scadenza_creditcard()
    {
        $datadioggi = date('d-m-Y');
        $strto_data_oggi = strtotime($datadioggi);

        $datascadenza = $this->scadenza;
        $datascadenza_strtotime = strtotime($datascadenza);

        if ($strto_data_oggi > $datascadenza_strtotime) {
            return "Your credit card is expired";
        } else {
            return "You can pay with card";
        }
    }
}

?>