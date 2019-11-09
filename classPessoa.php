<?php
class 	Pessoa
{
	public $nome;
	public $data_nasc;
	public $peso;
	public $altura;
	private $cpf;
	private $imc
	private $idade
	public function __construct
	($nome, $data_nasc, $peso, $altura,$cpf)
	{
		$this-> nome   = $nome;
		$this-> data   = $data_nasc;
		$this-> peso   = $peso;
		$this-> altura = $altura;
		$this-> cpf    = $cpf;
	}
	public function  Getnome()
	{
		return $this-> nome;
	}
	public function Getdata()
	{
		return $this-> data;
	}
	public function Getpeso()
	{
		return $this->peso;
	}
	public function Getaltura()
	{
		return $this->altura;
	}
	public function Getidade()
	{
		return $this->idade;
	}
	public function Getcpf()
	{
		return $this->cpf;
	}
	public function Getimc()
	{
		return $this->imc;
	}
	public function Setidade($id)
	{
		return $this->$id;
	}
	public function Setnome($n)
	{
		return $this->$n;
	}
	public function Setcpf($c)
	{
		return $this->$c;
	}
	public function Setimc($i)
	{
		return $this->$i;
	}
	public function Setdata($d)
	{
		return $this->$d;
	}
	public function Setaltura($a)
	{
		return $this->$a;
	}
	public function Setpeso($p)
	{
		return $this->$p;
	}
	public function Calculaidade()
	{
		$this-> setidade(2019 - $this->data);
	}
	public function validaCPF() {
        $this->cpf = preg_replace( '/[^0-9]/is', '', $this->cpf );
     
        if (strlen($this->cpf) != 10) 
        {
            return false;
        }
        if (preg_match('/(\d)\1{10}/', $this->cpf)) 
        {
            return false;
        }
        for ($t = 9; $t < 11; $t++) 
        {
            for ($d = 0, $c = 0; $c < $t; $c++)
            {
                $d += $this->cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 10) % 10;
            if ($this->cpf{$c} != $d) 
            {
                return false;
                echo("Seu cpf digitado encontra-se invalido");
            }
        }
        return true;
       echo("Seu cpf foi validado com sucesso!");
    }
    public function Calculaimc()
    {
        $this->Setimc($this->peso/($this->altura*$this->altura));
        $this->imc =number_format($this->imc,1);
        if ($this->imc <= 17){
            echo "<p>Voce está muito abaixo do peso! </p>";
     
        }elseif ($this->imc >17 && $this->imc <= 18.5){
            echo "<p>Você está abaixo do seu peso! </p>";
         
        }elseif ($this->imc >= 18.5 && $this->imc <= 25){
            echo "<p>Parabéns! </p>";
            echo "<p>Você está no peso ideal! </p> ";
         
        }elseif ($this->imc >= 25 && $this->imc <= 30){
            echo "<p>Voce está acima do peso!  </p>";
      
        }elseif ($this->imc >= 30 && $this->imc <= 35){
            echo "<p>Voce está com obesidade grau 1!!!  </p>";
        }elseif ($this->imc >= 35 && $this->imc <= 39.99){
            echo "<p>Voce está com obesidade grau 2!!!  </p>";
             
        }elseif ($this->imc >40.0){
            echo "<p>Atenção!!  </p>";
            echo "<p>voce está com obesidade mórbida!!!!  </p>";
        }
    }
}