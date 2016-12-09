<?
$mktime = mktime();
$para	 = "flavio@ekoconstrutora.com, antonio@ekoconstrutora.com, tatiana@ekoconstrutora.com";
$headers = "Content-Type: text/plain; charset=utf-8\n";
$headers.= "From: infoa@ekoconstrutora.com <infoa@ekoconstrutora.com>\n";
$subject = "MEU ESTILO - EKO PARK VARANDAS";

$msg = "MEU ESTILO - EKO PARK VARANDAS
Data do ENVIO: ".date("d/m/y h:i",$mktime)."\n\n";

$msg .= "Nome Completo: $nome\n";
$msg .= "Email: $email\n";
$msg .= "Telefone: $ddd_tel $numero_tel\n";
$msg .= "Celular: $ddd_cel $numero_cel\n";
$msg .= "Unidade: $unidade\n";
$msg .= "Tipo de Planta Escolhida: $bt_radio\n";

#### Envia valores acima por email ##############################
if ($Submit) {			 
	mail($para,$subject,$msg,$headers);
	header("Location: http://www.ekoconstrutora.com/ekopark/meuestilo/index_form.php");			
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meu Estilo - Ekopark Varandas</title>

<link href="css/meuestilo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script>
	!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
</script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a[rel=99mtipo]").fancybox({
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none',
			});
			
			$("a[rel=99mcloset]").fancybox({
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none',
			});
			
			$("a[rel=99mloft]").fancybox({
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none',
			});
			
			$("a[rel=75mtipo]").fancybox({
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none',
			});
			
			$("a[rel=75mcloset]").fancybox({
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none',
			});
			
			$("a[rel=75mloft]").fancybox({
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none',
			});
});
	</script>

</head>

<body>

<div class="conteudo">
	<div class="logo">
 		<img src="_imgs/logotipo_eko.jpg" width="152" height="70" alt="EKO Construtora" />
  </div>
  
  <div class="imagem_destaque">
   <img src="_imgs/meu_estilo_img_destaque_eko_park_varandas.jpg" width="840" height="250" alt="Imagem Destaque - Eko Park Varandas" />
  </div>
	
  <h1>Seja bem-vindo, proprietário do EKO Park Varandas.</h1>
  
  <p>As obras do empreendimento estão em ritmo acelerado e agora chegou a hora de escolher a planta do seu novo apartamento.<br />É simples e rápido. Basta preencher o formulário abaixo.</p>
  
  <p class="bold">Sua resposta é muito importante! </p>
  
  <p>Caso encontre problemas ou dúvidas, teremos sempre muito prazer em atendê-lo através do e-mail: contato@ekoconstrutora.com ou pelo telefone (11) 4655-8022.</p>
  
  <p class="bold">Um grande abraço,<br />Equipe EKO Construtora.</p>
  
  <hr class="margem-30-cima-baixo cor-cinza-ccc" />
  
  <div id="formulario">
  	<? if (!isset($Submit)) { ?>
  	<form method="POST" action="" onSubmit="return validaform();" name="formcontato">
  		<div class="campos-esquerda">
    		<p>Nome Completo:</p>
    		<input name="nome" type="text" class="input-padrao"/>
    	</div>
    	<div class="campos-direita">
    		<p>E-mail:</p>
        <input name="email" type="text" class="input-padrao"/>
    	</div>
  		<div class="campos-esquerda">
    		<p>Telefone:</p>
    		<input name="ddd_tel" type="text" class="input-ddd" value="DDD" onfocus="if(this.value=='DDD')this.value=''" onblur="if(this.value=='') this.value='DDD'" /><input name="numero_tel" type="text" class="input-telefone"/>
    	</div>
    	<div class="campos-direita">
    		<p>Celular</p>
        <input name="ddd_cel" type="text" class="input-ddd" value="DDD" onfocus="if(this.value=='DDD')this.value=''" onblur="if(this.value=='') this.value='DDD'" /><input name="numero_cel" type="text" class="input-telefone"/>
      </div>
  		<div class="campos-esquerda">
    		<p>Selecione o Apartamento:</p>
    		<div class="styled-select">
        <select name="tipo_planta" onchange="MostrarDiv(this)">
    		  <option value="0">Selecione (75,5m² ou 99,3m²)</option>
    		  <option value="1">75,5m²</option>
    		  <option value="2">99,3m²</option>
    		</select>
<script>function MostrarDiv(elem){
   if(elem.value == 1)
      document.getElementById('plantas_75').style.display = "block",
			document.getElementById('plantas_99').style.display = "none";
			
			else {

   if(elem.value == 2)
      document.getElementById('plantas_99').style.display = "block",
			document.getElementById('plantas_75').style.display = "none";
			}
}
</script>
    		</div>
      </div>
      <div class="campos-direita">
    		<p>Unidade:</p>
        <input name="unidade" type="text" class="input-padrao" />
      </div> 
            
      <div id="plantas_99" style="display:none;">
      <p style="clear:both; padding-top:20px;">Escolha o tipo de planta:</p>
      <div class="plantas margem-direita-40">
      	<input name="bt_radio" type="radio" value="99m² Tipo" checked="checked" />99,3m² Tipo
        <div class="img_plantas"><a href="_imgs/img_meu_estilo_99m_tipo_medidas.jpg" rel="99mtipo"><img src="_imgs/img_meu_estilo_99m_tipo.jpg" width="252" height="301" alt="Meu Estilo - Eko Park Varandas - 99m Tipo" /></a></div>
      	<a href="_imgs/img_meu_estilo_99m_tipo_big.jpg" rel="99mtipo"></a>
      </div>
      <div class="plantas margem-direita-40">
      	<input name="bt_radio" type="radio" value="99m² Closet" />99,3m² Closet
        <div class="img_plantas"><a href="_imgs/img_meu_estilo_99m_closet_medidas.jpg" rel="99mcloset"><img src="_imgs/img_meu_estilo_99m_closet.jpg" width="252" height="301" alt="Meu Estilo - Eko Park Varandas - 99m Closet" /></a></div>
      	<a href="_imgs/img_meu_estilo_99m_closet_big.jpg" rel="99mcloset"></a>
      </div>
      
      <div class="plantas">
      	<input name="bt_radio" type="radio" value="99m² Loft" />99,3m² Loft
        <div class="img_plantas"><a href="_imgs/img_meu_estilo_99m_loft_medidas.jpg" rel="99mloft"><img src="_imgs/img_meu_estilo_99m_loft.jpg" width="252" height="301" alt="Meu Estilo - Eko Park Varandas - 99m Loft" /></a></div>
      	<a href="_imgs/img_meu_estilo_99m_loft_big.jpg" rel="99mloft"></a>
      </div>
      </div>
      
      <div id="plantas_75" style="display:none;">
       <p style="clear:both; padding-top:20px;">Escolha o tipo de planta:</p>
       <div id="plantas_75" class="plantas margem-direita-40">
      	<input name="bt_radio" type="radio" value="75m² Tipo" checked="checked" />
      	75,5m² Tipo
        <div class="img_plantas"><a href="_imgs/img_meu_estilo_75m_tipo_medidas.jpg" rel="75mtipo"><img src="_imgs/img_meu_estilo_75m_tipo.jpg" width="252" height="281" alt="Meu Estilo - Eko Park Varandas - 75m² Tipo" /></a></div>
      	<a href="_imgs/img_meu_estilo_75m_tipo_big.jpg" rel="75mtipo"></a>
      </div>
      
      <div class="plantas margem-direita-40">
      	<input name="bt_radio" type="radio" value="75m² Closet" />
      	75,5m² Closet
        <div class="img_plantas"><a href="_imgs/img_meu_estilo_75m_closet_medidas.jpg" rel="75mcloset"><img src="_imgs/img_meu_estilo_75m_closet.jpg" width="252" height="281" alt="Meu Estilo - Eko Park Varandas - 75m² Closet" /></a></div>
      	<a href="_imgs/img_meu_estilo_75m_closet_big.jpg" rel="75mcloset"></a>
      </div>
      
      <div class="plantas">
      	<input name="bt_radio" type="radio" value="75m² Loft" />
      	75,5m² Loft
        <div class="img_plantas"><a href="_imgs/img_meu_estilo_75m_loft_medidas.jpg" rel="75mloft"><img src="_imgs/img_meu_estilo_75m_loft.jpg" width="252" height="281" alt="Meu Estilo - Eko Park Varandas - 75m² Loft" /></a></div>
      	<a href="_imgs/img_meu_estilo_75m_loft_big.jpg" rel="75mloft"></a>
      </div>            
    </div>
    
    <div class="bt_enviar">
    	<input name="Submit" type="image" id="Submit" class="topo-40" value="Enviar" src="_imgs/bt_enviar.jpg" />
    </div>
    
            <script type="text/javascript">
       	     	
      function validaform()
			{
				if(document.formcontato.nome.value == ''){
					alert("Por favor preencha o campo nome.");
					document.formcontato.nome.focus();
					return false;
				}
				if (document.formcontato.email.value == ''){
					alert("Por favor preencha o campo email.");
					document.formcontato.email.focus();
					return false;
				}
				if (document.formcontato.email.value.indexOf("@") == -1){
					alert("Digite o seu E-mail Corretamente.");
					document.formcontato.email.focus();
					return false;
				}
				if (document.formcontato.email.value.indexOf(".") == -1){
					alert("Digite o seu E-mail Corretamente.");
					document.formcontato.email.focus();
					return false;
				}
				if(document.formcontato.ddd_tel.value == 'DDD'){
					alert("Preencha corretamente o campo DDD.");
					document.formcontato.ddd_tel.focus();
					return false;
				}
				if(document.formcontato.numero_tel.value == ''){
					alert("Preencha corretamente o campo Telefone.");
					document.formcontato.numero_tel.focus();
					return false;
				}
				if(document.formcontato.ddd_cel.value == 'DDD'){
					alert("Preencha corretamente o campo DDD");
					document.formcontato.ddd_cel.focus();
					return false;
				}
				if(document.formcontato.numero_cel.value == ''){
					alert("Preencha corretamente o campo Celular.");
					document.formcontato.numero_cel.focus();
					return false;
				}	
				if(document.formcontato.tipo_planta.value == '0'){
					alert("Selecione o Tipo de Planta.");
					document.formcontato.tipo_planta.focus();
					return false;
				}				
				if(document.formcontato.unidade.value == ''){
					alert("Preencha corretamente o campo Unidade.");
					document.formcontato.unidade.focus();
					return false;
				}
			}
        	
        </script>  
    
    </form>
  	<? } ?>
  </div>

</div>

</body>
</html>
