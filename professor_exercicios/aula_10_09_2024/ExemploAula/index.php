<?php
// Exemplo de PErsistencia
// require_once("PersistenciaPessoa.php");
// return true;

require_once("funcoes.php");

// Metodos com visibilidade publica
$oPessoa01 = new PessoaFisica();
$oPessoa01->codigo = 1;
$oPessoa01->cidade= "Rio do Sul";
$oPessoa01->estado= "SC";
$oPessoa01->endereco= "Rua 7 de Setembro";
$oPessoa01->cep= "89160195";

// Dados de Pessoa
$oPessoa01->nome = "Adriano";
$oPessoa01->cpf = "061023145-88";
$oPessoa01->estadocivil = "CASADO";
$oPessoa01->salario = "14.500,00";

echo json_encode($oPessoa01);

return true;


require_once("PessoaJuridica.php");
$oPessoa02 = new PessoaJuridica();
$oPessoa02->codigo = 2;
$oPessoa02->cidade= "Rio do Sul";
$oPessoa02->estado= "SC";
$oPessoa02->endereco= "Rua 7 de Setembro";
$oPessoa02->cep= "89160195";

// Dados de Empresa
$oPessoa02->razaosocial = "IPM SISTEMAS LTDA";
$oPessoa02->nomefantasia = "IPM SISTEMAS";
$oPessoa02->cnpj = "0612-4515-0001-99";
$oPessoa02->faturamento = "15000,00";

// Metodos com visibilidade privada
$oPessoa03 = new PessoaFisica();

// Acessando de forma publica
$oPessoa03->codigo = 3;
$oPessoa03->nome = "Bruna";

// Usar metodo modificador para "telefone"
// Setar os dados de telefone
//$oPessoa03->telefone = "(47) 98854-4875";
$oPessoa03->setTelefone("(47) 98854-4875");

// BUscar os dados de "telefone"
echo "<hr>Pessoa: " . $oPessoa03->nome . " => Telefone:" . $oPessoa03->getTelefone();
echo "<br>Codigo:  " . $oPessoa03->getCodigo() . " =>3 + 10";

$oPessoa04 = new PessoaJuridica();

// Acessando de forma publica
$oPessoa04->codigo = 4;
$oPessoa04->nomefantasia = "TIDAS TECNOLOGIA";

echo "<hr>Empresa:" . $oPessoa04->nomefantasia;
echo "<br>Codigo:  " . $oPessoa04->getCodigo() . " =>4 + 100";



