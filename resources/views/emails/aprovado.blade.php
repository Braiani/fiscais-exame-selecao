@php
	$func = '';
	switch ($inscricao->funcao) {
		case 'coord':
			$func = 'coordenador';
			break;
		case 'chefe':
			$func = 'chefe de sala';
			break;
		case 'sala':
			$func = 'fiscal de sala';
			break;
		case 'banheiro':
			$func = 'fiscal de banheiro';
			break;
		case 'corredor':
			$func = 'fiscal de corredor';
			break;
		case 'outro':
			$func = 'função a ser definida pela comissão';
			break;
		default:
			$func = '';
			break;
	}
@endphp
<p>Prezado(a) {{ $inscricao->candidato->nome }},</p>
<p>Você foi selecionado para atuar como colaborador, na função de {{ $func }}, no Exame de Seleção {{ $inscricao->exame->ano }} - IFMS <em>Campus</em> Campo Grande.</p>
<p>
	A Comissão Local do Exame de Seleção {{ $inscricao->exame->ano }} - IFMS <em>Campus</em> Campo Grande <strong>CONVOCA</strong> V. Sa. para o treinamento de 
	<u>COLABORADORES</u> que será realizado no <strong>SÁBADO</strong>, dia<strong> <u>25/11/2018, às 09h00</u></strong>, no 
	<strong>ANFITEATRO DO BLOCO MULTIUSO DA UNIVERSIDADE FEDERAL DO MATO GROSSO DO SUL - UFMS</strong>, situada na Cidade Universitária, Av. Costa e Silva - Pioneiros.
</p>
<p>Ressaltamos que a ausência no treinamento implicará na <strong>EXCLUSÃO</strong> do colaborador na aplicação do exame.</p>
<p>Em caso de desistência na participação como colaborador, ou necessitando de outros esclarecimentos, favor responder a este e-mail o mais breve possível.</p>
<p>Atenciosamente,</p>
<p>Comissão Local do Exame de Seleção {{ $inscricao->exame->ano }}</p>