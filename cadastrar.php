<?php
	sleep(2);
     include_once 'config.php';

	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
	    $novos_campos = array();
	    $campos_post = $_POST['campos'];
	    $respostas = array();
	    foreach ($campos_post as $indice => $valor) {
	    	$novos_campos[$valor['name']] = $valor['value']; 	
     	}
     	if(!strstr($novos_campos['email'], '@')){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Email inválido';
     	}
     	elseif($novos_campos['senha'] != $novos_campos['csenha']){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'As senhas informadas não correspondem';
     	}
     	elseif (!strstr($novos_campos['facebook'], 'http://')) {
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Endereço de Facebook deve conter http://';
     	}
     	elseif (!strstr($novos_campos['twitter'], 'http://')) {
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Endereço de Twitter deve conter http://';
     	}
     	elseif (!strstr($novos_campos['google'], 'http://')) {
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Endereço de Google Plus deve conter http://';
     	}
     	elseif(strlen($novos_campos['telefone']) <> 14){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Digite telefone no padrão (71)9999-9999';
     	}
     	else{
               $inserir_banco = $pdo->prepare("INSERT INTO usuarios SET nome = ?, sobrenome = ?, email = ?, senha = ?, csenha = ?, telefone = ?, facebook = ?, twitter = ?, google = ?");
               $array_sql = array(
                    $novos_campos['nome'],
                    $novos_campos['sobrenome'],
                    $novos_campos['email'],
                    $novos_campos['senha'],
                    $novos_campos['csenha'],
                    $novos_campos['telefone'],
                    $novos_campos['facebook'],
                    $novos_campos['twitter'],
                    $novos_campos['google']
               );
               if($inserir_banco->execute($array_sql)){
                    $respostas['erro'] = 'nao';
                    $respostas['mensagem'] = 'Cliente inserido com sucesso';
               }
               else{
                    $respostas['erro'] = 'sim';
                    $respostas['getErro'] = 'Não foi possível inserir seu cadastro.';
               }
     	}
     	echo json_encode($respostas);
	endif;
?>