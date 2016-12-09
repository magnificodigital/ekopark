<?
$mktime = mktime();
//$para	 = "mauro@ekoarq.com.br, bruno@ekoarq.com.br, flavio@ekoarq.com.br, andre@ekoarq.com.br, afonso@ekoarq.com.br";
$para	 = "atendimento@ekoconstrutora.com, willy@magnificodigital.com";
$headers = "Content-Type: text/plain; charset=utf-8\n";
$headers.= "From: infoa@ekoarq.com.br <infoa@ekoarq.com.br>\n";
$subject = "[Eko Arquitetura e Construção] FORMULÁRIO DE CONTATO";

$msg = "FORMULÁRIO DE CONTATO
Data do ENVIO: ".date("d/m/y h:i",$mktime)."\n\n";

$msg .= "Nome: $nome\n";
$msg .= "DDD: $ddd\n";
$msg .= "Telefone: $fone\n";
$msg .= "Email: $email\n";
$msg .= "Mensagem: $mensagem\n";

$msg .= "Quer receber as novidades da EKO? $checkbox\n";

#### Envia valores acima por email ##############################
if ($Submit) {			 
			mail($para,$subject,$msg,$headers);
			$msg2 = "<strong>Sua mensagem foi enviada com sucesso!</strong>";		
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25943833-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript" charset="utf-8">
		google.load("jquery", "1.7.1");
		</script>

<script src="js/prettyCheckboxes.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="prettyCheckboxes.css?v=123" type="text/css" media="screen" title="prettyComment main stylesheet" charset="utf-8" />



<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>

<title>EkoPark Varandas - A varanda mais cobiçada por metro quadrado.</title>

    <script type="text/javascript">
        $(function() {
            var $items = $('#vtab>ul>li');
            $items.click(function() {
                $items.removeClass('selected');
                $(this).addClass('selected');

                var index = $items.index($(this));
                $('#vtab>div').hide().eq(index).show();
            }).eq(0).click();
        });
    </script>
    
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script>
$(document).ready(function(){
	//Examples of how to assign the ColorBox event to elements
	$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
	$("a[rel='empreendimento_fachada']").colorbox();
	$("a[rel='empreendimento_praca']").colorbox();
	$("a[rel='empreendimento_terraco']").colorbox();
  });
</script>
    
    <style type="text/css">
			#container {
				width: 980px;
				position: relative;
				margin: 0 auto;
				
			}
			
			#carousel {
				width: 980px;
				height:600px;
				margin: 0 auto;
			}
			
			#ui-carousel-next, #ui-carousel-prev {
				width: 33px;
				height: 33px;
				background: url(images/arrow-left.png) no-repeat;
				display: block;
				position: absolute;
				top: 0;
				z-index: 100;
			}

			#ui-carousel-next {
				right: 15px;
				top:100px;
				background-image: url(images/arrow-right.png);
			}

			#ui-carousel-prev {
				right: 60px;
				top:100px;
			}
			
			#ui-carousel-next > span, #ui-carousel-prev > span {
				display: none;
			}
			
			.slide {
				margin: 0;
				position: relative;
			}
			</style>
			
			<!-- Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','https://connect.facebook.net/en_US/fbevents.js');
			
			fbq('init', '1107754155960776');
			fbq('track', "PageView");</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=1107754155960776&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->
</head>

<body>
<a name="Topo" id="Topo"></a>
<div id="header">
  <div id="logotipo_eko"><a href="http://www.ekoarq.com.br">Eko Arquitetura e Construção</a></div>
<div id="corretores">
<a href="javascript:openChat()" onclick="_gaq.push(['_trackEvent', 'land', 'click', 'CORRETOR ONLINE'])"><img src="_imgs/img_fale_corretor_online.jpg" border="0" /></a>
<!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) <a name="livezilla_chat_button" href="javascript:void(window.open('http://www.ekoarq.com.br/livezilla/chat.php?acid=26a67','','width=590,height=760,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" class="lz_cbl"><img src="http://www.ekoarq.com.br/livezilla/image.php?acid=ce6ed&amp;id=4&amp;type=inlay" width="300" height="75" style="border:0px;" alt="LiveZilla Live Chat Software" /></a><!-- http://www.LiveZilla.net Chat Button Link Code <div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
/* <![CDATA[ */
var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "http://www.ekoarq.com.br/livezilla/server.php?acid=26102&request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
/* ]]> */
</script><noscript><img src="http://www.ekoarq.com.br/livezilla/server.php?acid=26102&amp;request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="" /></noscript> http://www.LiveZilla.net Tracking Code --></div>
<div id="siteeko"><a href="http://www.ekoarq.com.br" target="_blank" onclick="_gaq.push(['_trackEvent', 'land', 'click', 'IR PARA EKO'])">IR PARA O SITE DA EKO</a>
<div id="seta"><img src="_imgs/seta_site_eko.jpg" width="13" height="12" /></div>
</div>
</div>

<div id="container">
				      	<div id="carousel">
					<div id="slide01" class="slide">
						<div id="img_fundo_carrossel">
            <div id="branco_alpha">
            <h1>Planta Arquitetônica Versátil </h1>
            <p>Varanda Gourmet e Cozinha integrada à Sala</p>
            </div>
            </div>
					</div>
					
					<div id="slide02" class="slide">
						<div id="img_fundo_carrossel_01">
            <div id="branco_alpha">
            <h1>Vista Exclusiva </h1>
            <p>Varandas com vista para praça</p>
            </div>
            </div>
            </div>
						</div>	
		
    		<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			</div>
		
        


<div id="maincontent">
<div id="bloco">
<div id="esquerda">
<div id="logo_empreendimento">
<img src="_imgs/logotipo_ekopark_varandas.png" width="230" height="395" alt="EKOPark Varandas - A varanda mais cobiçada por metro quadrado" /></div>
<div id="texto_empreendimento">
<h1>O Empreendimento</h1>
<p>É o mais novo imóvel da cidade de Arujá. 
  <br />
  Uma cidade em contato com a natureza e que a cada dia conquista
  <br />
  novos moradores e investimentos em todas as áreas.</p>

<p>É um projeto único, localizado em uma das áreas mais privilegiadas
  <br />
  da região, que oferece o que há de melhor para você e a sua família.</p>

<p><strong>Desfrute da sofisticação e do requinte de viver no<br />
EKOPARK VARANDAS.</strong></p>
</div>
</div>
<div id="direita">
<div id="video"><a class="youtube" href="http://www.youtube.com/embed/-zXCimj5RgU?rel=0&amp;wmode=transparent" title="EKOPark Varandas">Vídeo EKOPark Varandas</a></div>
<div id="galeria">
<ul>
<li class="imagem1"><a href="_imgs/img_fachada.jpg" rel="empreendimento_fachada" title="EKOPark Varandas | Fachada">Imagem 1</a></li>
<li class="imagem2"><a href="_imgs/img_praca.jpg" rel="empreendimento_praca" title="EKOPark Varandas | Praça">Imagem 2</a></li>
<li class="imagem3"><a href="_imgs/img_terraco.jpg" rel="empreendimento_terraco" title="EKOPark Varandas | Terraço">Imagem 3</a></li>
</ul>
</div>

</div>
</div>
</div>

<div id="features">
<div id="features_borda"><img src="_imgs/borda_topo.jpg" width="980" height="2" /></div>
<h1>O LUGAR QUE VOCÊ SEMPRE SONHOU AGORA É UMA REALIDADE</h1>
<ul>
<li>Varanda Gourmet</li>
<li class="duaslinhas">Piscina e Playground<br />
no Terraço</li>
<li class="duaslinhas">Planta arquitetônica<br />
versátil</li>
<li>2 ou 3 dormitórios</li>
<li class="duaslinhas">1 ou 2 vagas de<br />
garagem</li>
<li class="duaslinhas">Em frente à nova<br />
Praça de Arujá</li>
</ul>

</div>
<div id="bgabas">
<div id="abas">
    <div id="vtab">
        <ul>
            <li class="selected">Planta 99,3m² Tipo</li>
            <li>Planta 99,3m² Closet</li>
            <li>Planta 99,3m² Loft</li>
            <li>Planta 75,5m² Tipo</li>
            <li>Planta 75,5m² Closet</li>
            <li>Planta 75,5m² Loft</li>
        </ul>
        <div>
			  <img src="_imgs/planta_99tipo.png" width="730" height="412" alt="Planta 99,3m² Closet - 2 Dormitórios | 2 Vagas na Garagem | Closet" /> </div>
        <div>
            <img src="_imgs/planta_99closet.png" width="730" height="412" alt="Planta 99,3m² Closet - 2 Dormitórios | 2 Vagas na Garagem | Closet" />
                </div>
                <div>
                   <img src="_imgs/planta_99loft.png" width="730" height="412" alt="Planta 99,3m² Closet - 2 Dormitórios | 2 Vagas na Garagem | Closet" />
                </div>
                
                                <div>
                   <img src="_imgs/planta_75tipo.png" width="730" height="412" alt="Planta 99,3m² Closet - 2 Dormitórios | 2 Vagas na Garagem | Closet" />
                </div>
                
                                                <div>
                   <img src="_imgs/planta_75closet.png" width="730" height="412" alt="Planta 99,3m² Closet - 2 Dormitórios | 2 Vagas na Garagem | Closet" />
                </div>
                
                                                <div>
                   <img src="_imgs/planta_75loft.png" width="730" height="412" alt="Planta 99,3m² Closet - 2 Dormitórios | 2 Vagas na Garagem | Closet" />
                </div>

    </div>
<div id="exclam">
<img src="_imgs/icone_exclam.png" />
<p>No EKOPARK VARANDAS você pode 
customizar a planta do seu apartamento 
de acordo com o seu estilo.</p>

<p><strong>Consulte-nos.</strong></p>

</div>
    
</div>
</div>

<div id="contato_localizacao">
<div id="contato">
<h1><strong>Interessado?</strong> Ligamos para você!</h1>
<div id="formulario">
		  <span class="msgsend"><? echo $msg2; ?></span>
		  <? if (!isset($Submit)) { ?>
		  <form method="POST" action="" onSubmit="return validaform();" id="checkboxDemo" name="checkboxDemo">
<input type="text" name="nome" id="nome" value="Nome*" class="padrao1" onFocus="if(this.value == 'Nome*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'Nome*';}" />

<div id="telddd">
<input type="text" name="ddd" id="ddd" onkeypress="return txtBoxFormat(this, '(99)', event);" maxlength="5" value="DDD*" class="ddd" onFocus="if(this.value == 'DDD*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'DDD*';}"/>
<input type="text" name="telefone" id="telefone" onkeypress="return txtBoxFormat(this, '(99)9999-99999', event);" maxlength="20" value="Telefone*" class="fone" onFocus="if(this.value == 'Telefone*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'Telefone*';}"/>
</div>

<input type="text" name="email" id="email" value="E-mail*" class="padrao1" onFocus="if(this.value == 'E-mail*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'E-mail*';}"/>

<textarea name="mensagem" id="mensagem" class="mensagem" onFocus="if(this.value == 'Mensagem*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'Mensagem*';}">Mensagem*</textarea>

<div id="checkkk">
<label for="checkbox-2" tabindex="2">Quero receber as novidades da EKO em meu e-mail</label>
<input name="checkbox" type="checkbox" id="checkbox-2" value="SIM" checked="CHECKED" />
</div>

<input name="Submit" id="Submit" type="submit" value="Enviar" class="btSubmit">



</form>

 <? } ?>  
</div>  

  
       
               
        </div>

<div id="localizacao">
<h1>Localização</h1>
<div id="mapa"><a href="http://www.ekoarq.com.br/mapa/" target="_blank"><img src="_imgs/img_mapa.jpg" width="230" height="181" alt="Clique aqui e Amplie" /></a></div>

<div id="endereco">
<!--
<h2>Stand de Vendas</h2>
<p>R. Diomar Negretti, 105<br />
Chácaras São José do Arujá<br />
Arujá/SP<br /></p>
-->
</div>

<div id="endereco_2">
<div id="endereco_3">
Rua Marina de Lima Santangelo, 303<br />
Chácara São José - Arujá/SP
</div>
<div id="endereco_4"><span style="font-size: 24px;line-height: 70px;">VER TELEFONE</span></div>

</div>

</div>  


</div>
<div id="setasubir">
<a href="#Topo">Voltar para o Topo</a>
</div>

<br class="all" />

<div id="footer">
<div id="content_footer">
<div id="footer_esquerda">
<h1>EKO Arquitetura e Construção&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.ekoarq.com.br">Ir para o site</a></h1>
<p>Perspectivas artísticas.</p>
<p><strong>Incorporador Responsável:</strong> Eko 06 Empreendimentos Imobiliários LTDA - SPE (CNPJ 15.241.207/0001-25), R-02, na matrícula 43.167. 
<br />Av. João Manoel, 1105 - Arujá/SP. CEP 07400-615. Vendas: EKO Imóveis - Creci J-20996.<br /> 
Material preliminar sujeito a alteração. Todas as fotos e perspectivas contidas neste hotsite são meramente ilustrativas.</p>
<img src="_imgs/logo_eko_footer.png" width="110" height="45" alt="EKO - Arquitetura e Construção" /> 
</div>
<div id="botao_footer">
<!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) <a name="livezilla_chat_button" href="javascript:void(window.open('http://www.ekoarq.com.br/livezilla/chat.php?acid=42af6','','width=590,height=760,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" class="lz_cbl"><img src="http://www.ekoarq.com.br/livezilla/image.php?acid=89d3f&amp;id=3&amp;type=inlay" width="230" height="65" style="border:0px;" alt="LiveZilla Live Chat Software" /></a><!-- http://www.LiveZilla.net Chat Button Link Code <div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
/* <![CDATA[ */
var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "http://www.ekoarq.com.br/livezilla/server.php?acid=e861d&request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
/* ]]> */
</script><noscript><img src="http://www.ekoarq.com.br/livezilla/server.php?acid=e861d&amp;request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="" /></noscript> http://www.LiveZilla.net Tracking Code -->
</div>

</div>
</div>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$('#checkboxDemo input[type=checkbox],#radioDemo input[type=radio]').prettyCheckboxes();
		$('.inlineRadios input[type=radio]').prettyCheckboxes({'display':'inline'});
	});
</script>

<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3ouh11f0fCCct6Rpb5sJQvduUHHR3yKM";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

function openChat(){
	$zopim.livechat.window.show();
}
</script>
    
<script type="text/javascript">
function validaform()
{
	if(document.checkboxDemo.nome.value == 'Nome*'){
		alert("[NOME] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.nome.focus();
		return false;
	}

	if(document.checkboxDemo.ddd.value == 'DDD*'){
		alert("[DDD] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.telefone.focus();
		return false;
	}

	if(document.checkboxDemo.telefone.value == 'Telefone*'){
		alert("[TELEFONE] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.telefone.focus();
		return false;
	}
	
	if (document.checkboxDemo.email.value == 'E-mail*'){
		alert("[E-MAIL] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.email.focus();
		return false;
	}
	if (document.checkboxDemo.email.value.indexOf("@") == -1){
		alert("Digite o seu [E-MAIL] corretamente.");
		document.checkboxDemo.email.focus();
		return false;
	}
	if (document.checkboxDemo.email.value.indexOf(".") == -1){
		alert("Digite o seu [E-MAIL] corretamente.");
		document.checkboxDemo.email.focus();
		return false;
	}

	if(document.checkboxDemo.mensagem.value == 'Mensagem*'){
		alert("[MENSAGEM] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.mensagem.focus();
		return false;
	}

	_gaq.push(['_trackEvent', 'land', 'click', 'ENVIAR FOMULÁRIO']) 
}
</script>

		<script type="text/javascript" src="lib/jquery.ui.core.js"></script>
		<script type="text/javascript" src="lib/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="lib/jquery.ui.rcarousel.js"></script>
    		<script type="text/javascript">
			jQuery(function($) {
				function generatePages() {
					var _total, i, _link;
					
					_total = $( "#carousel" ).rcarousel( "getTotalPages" );
					
					for ( i = 0; i < _total; i++ ) {
						_link = $( "<a href='#'></a>" );
						
						$(_link)
							.bind("click", {page: i},
								function( event ) {
									$( "#carousel" ).rcarousel( "goToPage", event.data.page );
									event.preventDefault();
								}
							)
							.addClass( "bullet off" )
							.appendTo( "#pages" );
					}
					
					// mark first page as active
					$( "a:eq(0)", "#pages" )
						.removeClass( "off" )
						.addClass( "on" )
						.css( "background-image", "url(images/page-on.png)" );

				}

				function pageLoaded( event, data ) {
					$( "a.on", "#pages" )
						.removeClass( "on" )
						.css( "background-image", "url(images/page-off.png)" );

					$( "a", "#pages" )
						.eq( data.page )
						.addClass( "on" )
						.css( "background-image", "url(images/page-on.png)" );
				}
				
				$("#carousel").rcarousel(
					{
						visible: 1,
						step: 1,
						speed: 700,
						auto: {
							enabled: true
						},
						width: 980,
						height: 600,
						start: generatePages,
						pageLoaded: pageLoaded
					}
				);
				
				$( "#ui-carousel-next" )
					.add( "#ui-carousel-prev" )
					.add( ".bullet" )
					.hover(
						function() {
							$( this ).css( "opacity", 0.7 );
						},
						function() {
							$( this ).css( "opacity", 1.0 );
						}
					);

				var passouTel = false;
				$('#endereco_4').click(function(){
					if(!passouTel)
					{
						_gaq.push(['_trackEvent', 'land', 'click', 'ENVIAR FOMULÁRIO']);
						fbq('track', 'Lead');
						$(this).html('<span class="eleven">11</span>&nbsp;&nbsp;4655-8022');
						passouTel = true;
						$(this).css('cursor', 'inherit');
					}
					
				});
			});
		</script>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>  
<script type="text/javascript">
    var meus_campos = {
        'nome': 'nome',
        'ddd': 'DDD - Telefone',
        'telefone': 'telefone',
        'email': 'email',
        'mensagem': 'Mensagem'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'Eko Park - Contato', options);  
</script>

</body>
</html>
