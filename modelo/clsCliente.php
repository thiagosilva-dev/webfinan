<?php
class Usuario{
	public $nome;
    public $cpf;
    public $rg;
    public $orgao_expedidor;
    public $data_nascimento;
    public $status;
	public $endereco;
	//construtor da classe
	function Usuario(){
		$this->preparaUsuario();
	}

	function preparaUsuario(){
		$this->nome = "Octavio";
		$this->cpf = "99999999999";
		$this->endereco = "Rua Fulano de Tal número 0 apt 999";
	}

} ?>