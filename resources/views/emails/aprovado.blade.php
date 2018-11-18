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
<p>Você foi selecionado para atuar como colaborador ({{ $func }}) no Exame de Seleção {{ $inscricao->exame->ano }} - IFMS <em>Campus</em> Campo Grande.</p>
<p>A Comissão Local do Exame de Seleção {{ $inscricao->exame->ano }} - IFMS <em>Campus</em> Campo Grande vem, por meio deste comunicado, informar que o treinamento para <strong><u>TODOS OS COLABORADORES</u></strong> que irão trabalhar na aplicação do Exame de Seleção será realizado no <strong>SÁBADO</strong>, dia<strong> <u>25/11/2018 às 09h00</u></strong>, no <strong>ANFITEATRO DO BLOCO MULTIUSO DA UNIVERSIDADE FEDERAL DO MATO GROSSO DO SUL - UFMS</strong>, situada na Cidade Universitária, Av. Costa e Silva - Pioneiros.</p>
<p>Ressaltamos que a ausência no treinamento implicará na exclusão do colaborador da aplicação do exame.</p>
<br>
<p>Para maiores esclarecimentos nos colocamos à disposição nos seguintes e-mails:</p>
<p><a href="mailto:aline.zotelli@ifms.edu.br">aline.zotelli@ifms.edu.br</a></p>
<p><a href="mailto:elton.valiente@ifms.edu.br">elton.valiente@ifms.edu.br</a></p>