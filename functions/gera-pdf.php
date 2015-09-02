<?php
//REFERENCIAR O ARQUIVO COM A CLASSE DE GERAÇÃO DE PDF
include 'libraries/pdf/mpdf.php';


$UCECNPJ = $_POST['UCECNPJ'];
$CENome = $_POST['CENome'];
$UCEEndereco = $_POST['UCEEndereco'];
$UCEDiretor = $_POST['UCEDiretor'];
$nome = $_POST['nome'];
$RG = $_POST['RG'];
$DataNascimento = $_POST['DataNascimento'];
$CPF = $_POST['CPF'];
$CarteiraTrabalho = $_POST['CarteiraTrabalho'];
$Endereco = $_POST['Endereco'];
$EnderecoNumero = $_POST['EnderecoNumero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$Bairro = $_POST['Bairro'];
$Curso = $_POST['Curso'];
$Matricula = $_POST['Matricula'];
$Fase = $_POST['Fase'];
$UCEConvenio= $_POST['UCEConvenio'];
$Seguro = $_POST['Seguro'];

$arquivo = "Termo_Compromisso_estagio.pdf";
$mpdf = new mPDF('utf-8', 'A4');
$mpdf->WriteHTML("
<h3 align='center'><strong>TERMO DE COMPROMISSO DE EST&Aacute;GIO</strong></h3>
<p align='center'><strong>SEM V&Iacute;NCULO EMPREGAT&Iacute;CIO, CONFORME LEI 11.788, de 25/09/2008.</strong></p>
<p>&nbsp;</p>
<p align='center'>&nbsp;</p>
<p>Aos&nbsp;<em><span>tr&ecirc;s</span></em>&nbsp;dias do m&ecirc;s de&nbsp;<em><span>mar&ccedil;o.</span></em>&nbsp;de dois mil e quinze<em><span>,</span></em>&nbsp;na cidade de Lages, Estado de Santa Catarina, as partes a seguir nomeadas celebram entre si o Termo de Compromisso de Est&aacute;gio.</p>
<p>&nbsp;</p>
<p>De um lado, como&nbsp;<strong>UNIDADE CONCEDENTE DE EST&Aacute;GIO - UCE:</strong></p>
<p>RAZ&Atilde;O SOCIAL: $CENome</p>
<p>CGC: $UCECNPJ &nbsp;<em><span><br /></span></em></p>
<p>ENDERE&Ccedil;O: $UCEEndereco </p>
<p>NESTE ATO, REPRESENTADA POR: $UCEDiretor </p>
<p>De outro lado, como&nbsp;<strong>ESTAGI&Aacute;RIO:</strong></p>
<p>NOME: $nome </p>
<p>CARTEIRA DE IDENTIDADE: $RG </p>
<p>DATA DE NASCIMENTO: $DataNascimento </p>
<p>CPF: $CPF</p>
<p>CARTEIRA PROFISSIONAL N&ordm;: $CarteiraTrabalho</p>
<p>ENDERE&Ccedil;O: $Endereco ,$EnderecoNumero, $Bairro, $cidade, $Estado</p>
<p>CURSO E&nbsp; HABILITA&Ccedil;&Atilde;O: $Curso </p>
<p>MATR&Iacute;CULA: $Matricula </p>
<p>FASE : $Fase</p>
<p>&nbsp;</p>
<p>Tendo ainda como&nbsp;<strong>INTERVENIENTE</strong>&nbsp;o</p>
<p>CENTRO UNIVERSIT&Aacute;RIO FACVEST, doravante denominada simplesmente de INTERVENIENTE, sito &agrave; RUA. MARECHAL FLORIANO, 947 &ndash; CENTRO, LAGES &ndash; SC, CEP 88501-103, FONE: 49-3225-4114</p>
<p>&nbsp;</p>
<p>Convencionam as cl&aacute;usulas e condi&ccedil;&otilde;es seguintes:</p>
<h5 align='center'>CL&Aacute;USULA PRIMEIRA: DO CONV&Ecirc;NIO</h5>
<p>Este Termo de Compromisso de Est&aacute;gio reger-se-&aacute; pelas condi&ccedil;&otilde;es b&aacute;sicas estabelecidas no Termo de Conv&ecirc;nio n&ordm; <strong>$UCEConvenio</strong>, firmado entre a UNIDADE CONCEDENTE DE EST&Aacute;GIO - UCE e a Sociedade de Educa&ccedil;&atilde;o N. S. Auxiliadora Ltda., mantenedora do Centro Universit&aacute;rio FACVEST.</p>
<h5 align='center'>CLA&Uacute;SULA SEGUNDA &ndash; DO HOR&Aacute;RIO, VIG&Ecirc;NCIA E OBJETO</h5>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fica compromissado entre as partes que:</p>
<p>a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As atividades de est&aacute;gio a serem cumpridas pelo estagi&aacute;rio ser&atilde;o desenvolvidas de Segunda a Sexta-feira, das 11:00 &agrave;s 17:00 horas, com carga hor&aacute;ria total m&aacute;xima de 30 horas semanais, referente ao m&oacute;dulo&nbsp;<span>1</span>.</p>
<p>b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Este Termo de Compromisso de Est&aacute;gio ter&aacute; vig&ecirc;ncia de 0<em><span>9/03/2015.&nbsp;</span></em>a 24/03/2015&nbsp;<em>,&nbsp;</em>podendo ser interrompido a qualquer tempo, mediante comunica&ccedil;&atilde;o escrita com 5 (cinco) dias de anteced&ecirc;ncia.</p>
<p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; O objetivo do est&aacute;gio &eacute; desenvolver conhecimentos na &aacute;rea do Curso, que ser&atilde;o avaliados e acompanhados na forma aven&ccedil;ada no Termo de Conv&ecirc;nio.</p>
<h5 align='center'>CL&Aacute;USULA TERCEIRA - DO LOCAL</h5>
<p>O est&aacute;gio ser&aacute; desenvolvido pelo acad&ecirc;mico nas depend&ecirc;ncias da UCE, de acordo com o Plano de Est&aacute;gio Supervisionado aprovado, parte integrante do presente Termo de Compromisso.</p>
<h5 align='center'>CL&Aacute;USULA QUARTA &ndash; DO SEGURO</h5>
<h5>Na vig&ecirc;ncia do presente Termo de Compromisso, o estagi&aacute;rio estar&aacute; inclu&iacute;do na cobertura de Seguro Contra Acidentes Pessoais da Seguradora Companhia Mar&iacute;tima de Seguros<span>,</span>&nbsp;sob o n&ordm; $Seguro</h5>
<h5 align='center'>CL&Aacute;USULA QUINTA &ndash; DA RESCIS&Atilde;O</h5>
<p>O presente Termo de Compromisso de Est&aacute;gio ficar&aacute; automaticamente rescindido nas seguintes hip&oacute;teses:</p>
<p>&nbsp;</p>
<p>a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rescis&atilde;o do Termo de Compromisso de Est&aacute;gio.</p>
<p>b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reprova&ccedil;&atilde;o, mudan&ccedil;a do curso ou transfer&ecirc;ncia para outra Institui&ccedil;&atilde;o de Ensino;</p>
<p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ao t&eacute;rmino do est&aacute;gio;</p>
<p>d)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Na conclus&atilde;o do curso pelo acad&ecirc;mico;</p>
<p>e)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ao trancamento de matr&iacute;cula do Estagi&aacute;rio;</p>
<p>f)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Na desist&ecirc;ncia ou abandono do curso pelo Estagi&aacute;rio;</p>
<p>g)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelo n&atilde;o comparecimento do aluno por um per&iacute;odo superior a 5 (cinco) dias sem justa&nbsp; causa.</p>
<p>.</p>
<p>E por estarem de inteiro e comum acordo com as condi&ccedil;&otilde;es e com o texto deste Termo de Compromisso, as partes assinam em 3 (tr&ecirc;s) vias de igual teor, cabendo a primeira via &agrave; UCE, a segunda via ao Estagi&aacute;rio e a terceira via &agrave; FACVEST.</p>
<p>&nbsp;</p>
<p align='center'>Lages, 03 de mar&ccedil;o de 2015&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .</p>
<div align='center'>
<table border='0' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
<td valign='bottom' width='406'>
<p align='center'><strong><em>&nbsp;</em></strong></p>
<p align='center'><strong><em>&nbsp;</em></strong></p>
<p align='center'><strong><em> $CENome </em></strong></p>
</td>
</tr>
<tr>
<td valign='bottom' width='406'>
<h5 align='center'>&nbsp;</h5>
<h5 align='center'>&nbsp;</h5>
<h5 align='center'>CENTRO UNIVERSIT&Aacute;RIO FACVEST</h5>
</td>
</tr>
<tr>
<td valign='bottom' width='406'>
<h5 align='center'>&nbsp;</h5>
<h5 align='center'>&nbsp;</h5>
<h5 align='center'>$nome</h5>
</td>
</tr>
</tbody>
</table>
</div>
<h3 align='center'><strong>&nbsp;</strong></h3>
<h3 align='center'><strong>&nbsp;</strong></h3>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>


<h3 align='center' ><b>TERMO DE CONVÊNIO N° $UCEConvenio</b></h3>

<p><b>Termo de Convênio que entre si celebram a SOCIEDADE DE EDUCAÇÃO N. S. AUXILIADORA LTDA. e <i>$CENome,</i>para proporcionar condições de execução do Programa de Estágio Curricular Supervisionado Obrigatório dos acadêmicos dos cursos de graduação do CENTRO UNIVERSITÁRIO FACVEST.</b></p>

<p>SOCIEDADE DE EDUCAÇÃO N. S. AUXILIADORA LTDA., inscrita no CNPJ sob o nº 04.608.241/0001-79, com sede e foro à Rua Marechal Floriano, 947, Centro, na cidade de Lages – Santa Catarina, CEP 88501-103, neste ato representada pelo seu Diretor Presidente, Professor GEOVANI BROERING, inscrito no CPF sob o nº 456.925.050-53, portador da Carteira de Identidade Civil nº 1.624.307-2, doravante denominada SENSAL e<i>$CENome</i>., inscrita no CGC/MF <i>%UCECNPJ</i>com sede e foro à $Endereco ,$EnderecoNumero, $Bairro, $cidade, $Estado, neste ato representada por. <i>$UCEDiretor</i>, inscrito no CPF/MF %UCEDiretorcpf<i>,</i> RG $UCEDiretorRG, doravante denominada UNIDADE CONCEDENTE DE ESTÁGIO - UCE. </p>

<p>Cláusula Primeira – Do Objeto do Convênio:</p>

<p>As partes conveniadas celebram acordo de cooperação para realização de estágios de acadêmicos de estabelecimentos de ensino superior profissionalizante, sem vínculo empregatício, nos termos da Lei nº 11.788, de 25.09.2008.</p>

<p>O estágio tem por escopo desenvolver atividade de aprendizagem social, profissional e cultural, proporcionadas ao acadêmico pela participação em situações reais de vida e trabalho de seu meio, sendo realizada na comunidade em geral ou junto a pessoas jurídicas de direito público ou privado, sob a responsabilidade e coordenação do Centro Universitário FACVEST, mantida pela Sociedade de Educação N. S. Auxiliadora Ltda. (SENSAL).</p>

<p>O estágio objetiva também propiciar a complementação do ensino e da aprendizagem a serem planejados, executados, acompanhados e avaliados em conformidade com os currículos, programas e calendários escolares, a fim de se constituírem em instrumento de integração, em termos de treinamento prático, de aperfeiçoamento técnico-cultural, científico e de relacionamento humano, cujas condições estarão detalhadas no Termo de Compromisso celebrado entre o estagiário e a UCE, com a interveniência da SENSAL, não acarretando vínculo empregatício de qualquer natureza, consoante o disposto no <i>caput</i> do artigo 3º da lei 11.788/2008.</p>

<p>A jornada a ser cumprida pelo estagiário deverá ser compatível com seu horário escolar e com o horário da UCE.</p>

<p>Cláusula Segunda – Das Obrigações:</p>

<p><b>I) </b>Obrigações da Unidade de Concessão de Estágio:</p>

<p>a) Fornecer a quantificação das oportunidades de Estágio com a identificação dos respectivos cursos;</p>

<p>b) Selecionar, conforme suas normas internas, os acadêmicos encaminhados e comunicar à SENSAL, o(s) estagiário(s) selecionado(s) que participarão do programa; </p>

<p>c) Proporcionar à SENSAL subsídios que possibilitem o acompanhamento, a supervisão e a avaliação do trabalho e do resultado do estagiário, sempre que necessário;</p>

<p>d) Cumprir bem e fielmente as cláusulas e condições estabelecidas neste Termo de Convênio.</p>

<p>II) Obrigações da SENSAL:</p>

<p>a) Promover o ajuste das condições do Estágio, conciliando os requisitos mínimos exigidos pela SENSAL com as condições e disponibilidades da UCE, explicitando as principais atividades a serem desenvolvidas pelo estagiário, observando sua compatibilidade com o contexto básico da profissão ao qual o Curso se refere;</p>

<p>b) Cadastrar acadêmicos interessados na participação do Estágio;</p>

<p>c) Divulgar junto aos acadêmicos de todos os seus cursos as oportunidades de Estágio ofertadas pela UCE;</p>

<p>d) Convocar os acadêmicos interessados e em condições de usufruírem das oportunidades do Estágio;</p>

<p>e) Encaminhar à UCE os acadêmicos que se identificarem com as respectivas oportunidades de Estágio;</p>

<p>f) Celebrar Termo de Convênio com Unidades de Concessão de Estágio;</p>

<p>g) Celebrar Termo de Compromisso de Estágio com o acadêmico e com a Unidade de Concessão de Estágio, nos termos do artigo 7º da Lei;</p>

<p>h) Efetivar o respectivo seguro contra acidentes pessoais em favor dos acadêmicos que celebram o Termo de Compromisso de Estágio, quando não pago pela UCE;</p>

<p>i) Receber e analisar os relatórios periódicos de acompanhamento fornecidos pelos estagiários;</p>

<p>j) Proceder ao acompanhamento, supervisão e avaliação dos estagiários, na forma dos diplomas legais retro citados;</p>

<p>k) Cumprir bem e fielmente as cláusulas e condições estabelecidas neste Termo de Convênio.</p>

<p>Cláusula Terceira – dos Vínculos e Encargos com o Estagiário:</p>

<p>Os Estágios que vierem a ser realizados sob a égide do presente Termo de Convênio não acarretarão vínculo empregatício com a UCE, conforme dispõe o artigo 3º, da Lei nº 11.788, de 25.09.2008.</p>

<p>Cláusula Quarta – da Fiscalização do Estágio:</p>

<p>As obrigações e direitos decorrentes deste Convênio serão gerenciados e fiscalizados periodicamente, quanto ao aproveitamento dos acadêmicos participantes, mediante relatórios específicos, elaborados pelo estagiário, analisados e vistados pelo Supervisor de Estágio da UCE e encaminhados à Coordenação competente da FACVEST.</p>

<p>Cláusula Quinta – da Vigência:</p>

<p>O presente Termo de Convênio terá a duração e vigência de 2 (dois) anos, podendo ser prorrogado por igual período mediante Termo Aditivo. </p>

<p>Cláusula Sexta – Da Desistência:</p>

<p>As partes poderão desistir do presente Convênio a qualquer tempo, desde que comunicada por escrito, com prova de entrega e antecedência mínima de 30 (trinta) dias.</p>

<p>Cláusula Sétima – da Rescisão:</p>

<p>Ocorrendo inadimplemento de quaisquer das cláusulas e condições estipuladas, será o Convênio dado por rescindido, independentemente de prévia interpelação judicial ou extrajudicial.</p>

<p>Cláusula OITAVA – Do Foro:</p>

<p>As partes elegem o foro da cidade de Lages (SC) para dirimir qualquer questão ou litígio oriundo do presente Termo de Convênio, com exclusão de qualquer outro, por mais privilegiado que seja, que ora renunciam, na forma do art. 78 do Código Civil Brasileiro. E, por estarem de pleno acordo com seus termos, as partes acima nomeadas subscrevem este documento, impresso em 2 (duas) vias de igual teor e forma, assinando-as também 2 (duas) testemunhas instrumentárias para que produza os legítimos efeitos de direito.</p>

<p>$cidade, 26 de junho de 2015.</p>

<table border='1' cellspacing='0' cellpadding='0' > 
<tbody>
<tr>
<td valign='top' > </td>
<td valign='top' > </td>
</tr>

<tr>
<td><p>Prof. GEOVANI BROERING</p>

<p>DIRETOR PRESIDENTE</p>

<p>SOCIEDADE DE EDUCAÇÃO N. S. AUXILIADORA LTDA.</p></td>
<td><p><i>$CENome</i></p>

<p><i>$UCECNPJ</i></p></td>
</tr>
<tr>
<td colspan='2' > <p>TESTEMUNHAS</p></td>
</tr>
<tr>
<td valign='top' > </td>
<td valign='top' > </td>
</tr>
<tr>
<td><p>NOME:</p>
<p>CPF:</p></td>
<td><p>NOME:</p>
<p>CPF:</p></td>
</tr>
</tbody>
</table>

<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>
<P></P>


<p><b>CARTA DE APRESENTAÇÃO E TERMO DE ACEITE</b></p>

<p>$cidade, 26 de julho de 2015</p>

<p>$UCEDiretor</p>

<p>%CENome</p>

<p>Vimos por meio desta apresentar o(a) aluno (a) %nome, regularmente matriculado (a) na %Faseª fase do curso $Curso das Faculdades Integradas FACVEST.</p>

<p>O (a) referido (a) aluno (a) deverá iniciar o Estágio Curricular Supervisionado Obrigatório na área de suporte de informática.</p>

<p>Para tanto, contará com orientação de profissional que acompanhará as atividades nesta instituição (conforme Termos de Convênio e Compromisso).</p>

<p>Sem mais para o momento, colocamo-nos a disposição para qualquer esclarecimento que se faça necessário.</p>

<p>Prof. Dr. Henrique Vicente de Bitencourt</p>

<p>Coordenador Geral de Estágio das Faculdades Integradas Facvest</p>

<p><b>TERMO DE ACEITE</b></p>

<p>_____________________________ _____________________________</p>

<p>Assinatura do responsável e carimbo Carimbo da Instituição Concedente</p>

<p>Data 26/06/2015.</p>

" );

$mpdf->Output($arquivo, 'd');
?>