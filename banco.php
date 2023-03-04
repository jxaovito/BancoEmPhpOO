<?php

class ContaBanco {
    private $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;


    public function __construct($num, $t, $d, $s, $st) {
        $this->numConta = $num;
        $this->tipo = $t;
        $this->dono = $d;
        $this->saldo = $s;
        $this->status = $st;
    }

    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($num){
        $this->numConta = $num;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($st){
        $this->status = $st;
    }

    public function abrirConta(){
        if($this->tipo == "Corrente" and $this->saldo >= 50){
            echo "<p>Sua conta corrente já está em processo de abertura!</p>";
        } else if($this->tipo == "Corrente" and $this->saldo < 50){
            echo "<p>Saldo insuficiente para fazer a abertura da conta. Saldo atual: ".($this->saldo)."</p>";
        } else if($this->tipo == "Poupança" and $this->saldo >= 150){
            echo "<p>Sua conta poupança já está em processo de abertura!</p>";
        } else if($this->tipo == "Poupança" and $this->saldo < 150){
            echo "<p>Saldo insuficiente para fazer a abertura da conta. Saldo atual: ".($this->saldo)."</p>";
        }
    }
    public function fecharConta(){
        if($this->saldo > 0){
            echo "<p>Você ainda possui saldo na conta</p>";
        } else if($this->saldo < 0) {
            echo "<p>Você ainda está devendo dinheiro</p>";
        } else {
            echo "<p>Sua conta está em processo de fechamento!</p>";
        }
    }

    public function depositar(){
        if($this->status != "Aberta"){
            echo "<p>Sua conta não está de acordo para o depósito, tente abri-lá e tentar novamente</p>";
        } else {
            echo "<p>O depósito está pronto para ser efetuado</p>";
        }
    }

    public function sacar(){
        if($this->status != "Aberta"){
            echo "<p>Seu saque não pôde ser efetuado, verifique o status da sua conta e tente novamente</p>";
        } else if($this->saldo <= 0){
            echo "<p>Seu saque não pôde ser efetuado, tente adicionar saldo a conta e tente novamente";
        } else if($this->status = "Aberta" and $this->saldo > 0){
            echo "<p>Seu saque está pronto para ser efetuado!</p>";
        }
    }

    public function pagarMensal(){
        if($this->tipo == "Corrente" and $this->saldo < 12){
            echo "<p>Saldo insuficiente para concluir o pagamento.</p>";
        } else if($this->tipo == "Corrente" and $this->saldo >= 12){
            echo "<p>Seu pagamento já foi aprovado e será debitado em breve! Saldo restante: ".($this->saldo - 12)."</p>";
        } else if($this->tipo == "Poupança" and $this->saldo < 20){
            echo "<p>Saldo insuficiente para concluir o pagamento.</p>";
        } else if($this->tipo == "Poupança" and $this->saldo >= 20){
            echo "<p>Seu pagamento já foi aprovado e será debitado em breve! Saldo restante: ".($this->saldo - 20)."</p>";
        }

    }
}







?>