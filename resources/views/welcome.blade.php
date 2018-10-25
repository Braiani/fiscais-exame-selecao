<html>
    <head>
        <title>IFMS - Cadastro voluntários Exame de Seleção</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="img/favicon_gov.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/touch_icon.png">

        <!-- Plone CSS - only for preview, will be removed in rules.xml -->
        <link media="screen" href="css/plone.css" type="text/css" rel="stylesheet" id="plone-css">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <!-- Theme CSS - only for preview, will be removed in rules and added in CSS registry -->
        <link media="all" href="css/main.css" type="text/css" rel="stylesheet" id="main-css">
        <link media="all" href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div id="barra-brasil">
            <div id="wrapper-barra-brasil">
                <div class="brasil-flag">
                    <a href="http://brasil.gov.br" class="link-barra">Brasil</a>
                </div>
                <span class="acesso-info">
                    <a href="http://www.servicos.gov.br/?pk_campaign=barrabrasil" class="link-barra" id="barra-brasil-orgao">Serviços</a>
                </span>
                <nav>
                    <ul class="list">
                        <li><a href="#" id="menu-icon"></a></li>
                        <li class="list-item first"><a href="http://brasil.gov.br/barra#participe" class="link-barra">Participe</a></li>
                        <li class="list-item"><a href="http://brasil.gov.br/barra#acesso-informacao" class="link-barra">Acesso à informação</a></li>
                        <li class="list-item"><a href="http://www.planalto.gov.br/legislacao" class="link-barra">Legislação</a></li>
                        <li class="list-item last last-item"><a href="http://brasil.gov.br/barra#orgaos-atuacao-canais" class="link-barra">Canais</a></li>
                    </ul>
                </nav>
                <a class="logo-vlibras" href="http://www.vlibras.gov.br/" aria-label="Acessível em Libras"></a>
            </div>
        </div>
        <div id="wrapper">
            <div id="header" role="banner">
                <div>
                    <div id="logo">
                        <a id="portal-logo" title="Exame de Seleção 2018" href="http://www.ifms.edu.br/exame">
                            <span id="portal-title-1">Instituto Federal de Mato Grosso do Sul</span>
                            <h1 id="portal-title" class="corto">Exame de Seleção 2019</h1>
                            <span id="portal-description"></span>
                        </a>
                    </div>
                </div>
            </div>
<!--            <div id="sobre">
                <ul>
                    <li class="portalservicos-item"><a href="./duvidas" title="Dúvidas?">Dúvidas</a></li>
                    <li class="portalservicos-item last-item"><a href="./contato" title="Contato">Contato</a></li>
                </ul>
            </div>-->
            <!-- content -->
            <div id="main" role="main">
                <div id="plone-content">

                    <!-- Demo Plone Content -->

                    <div id="portal-columns" class="row">

                        <!-- Column 1 -->
                        <div id="navigation">
                            <a name="anavigation" id="anavigation"></a>
                            <span class="menuTrigger">Menu</span>
                            <div id="portal-column-one" class="cell width-3">
                                <div class="portletWrapper">
                                    <dl class="portlet portletNavigationTree">
                                        <dd class="portletItem lastItem">
                                            <ul class="navTree navTreeLevel0">
                                                <li class="navTreeItem visualNoMarker navTreeFolderish">
                                                    <a href="http://www.ifms.edu.br" title="Site do IFMS" class="state-published navTreeFolderish contenttype-folder">
                                                        <span>Site do IFMS</span>
                                                    </a>
                                                </li>
                                                <li class="navTreeItem visualNoMarker navTreeFolderish last-item">
                                                    <a href="http://servidor.ifms.edu.br" title="Página do Servidor" class="state-published navTreeFolderish contenttype-folder">
                                                        <span>Página do Servidor</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <!-- Conteudo -->
                        <div id="portal-column-content" class="cell width-13 position-3">
                            <a name="acontent" id="acontent"></a>
                            <div id="main-content" class="">
                                <div class="container">
                                    <div class="row">
                                        <h2>
                                            Formulário de Cadastro de interessados em trabalhar na aplicação da prova do Exame de Seleção 2019 <i>campus</i> Campo Grande
                                        </h2>
                                        <p>O valor da GECC será: </p>
                                    </div>
                                    <div class="row">
                                        <form action="{{ route('cadastrar') }}" method="POST" class="form">
                                            {{ csrf_field() }}
                                            <fieldset>
                                                <legend>1. Dados pessoais</legend>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3">
                                                            <label for="cpf">CPF</label>
                                                            <input id="cpf" name="cpf" placeholder="CPF" class="form-control" required="" type="text">
                                                        </div>

                                                        <div class="form-group col-sm-9">
                                                            <label for="nome">Nome</label>
                                                            <input id="nome" name="nome" placeholder="Nome" class="form-control" required="" type="text">
                                                        </div>


                                                        <div class="form-group col-sm-3">
                                                            <label for="rg">RG (Número)</label>
                                                            <input id="rg" name="rg" placeholder="RG (Número)" class="form-control" required="" type="text">
                                                        </div>


                                                        <div class="form-group col-sm-3">
                                                            <label for="orgao_emissor">Órgão Emissor</label>
                                                            <input id="orgao_emissor" name="orgao_emissor" placeholder="Órgão Emissor" class="form-control" required="" type="text">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="pis">PIS</label>
                                                            <input id="pis" name="pis" placeholder="PIS" class="form-control" required="" type="text">
                                                        </div>


                                                        <div class="form-group col-sm-3">
                                                            <label for="telefone">Telefone</label>
                                                            <input id="telefone" name="telefone" placeholder="Telefone" class="form-control" required="" type="text">
                                                        </div>


                                                        <div class="form-group col-sm-3">
                                                            <div class="checkbox">
                                                                <label for="servidor-0">
                                                                    <input name="servidor" id="servidor" value="1" type="checkbox"> Servidor Público Federal?
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <div class="hidden">
                                                                <label for="siape">SIAPE</label>
                                                                <input id="siape" name="siape" placeholder="SIAPE" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="row">
                                                        <div class="form-group col-sm-4">
                                                            <label for="banco_id">Banco</label>
                                                            <select id="banco_id" name="banco_id" class="form-control">
                                                                @foreach ($bancos as $banco)
                                                                <option value="{{ $banco->id }}">{{ $banco->cod_banco }} - {{ $banco->nome }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group col-sm-3">
                                                            <label for="agencia">Agência</label>
                                                            <input id="agencia" name="agencia" placeholder="Agência" class="form-control" required="" type="text">
                                                        </div>


                                                        <div class="form-group col-sm-2">
                                                            <label for="operacao">Operação</label>
                                                            <input id="operacao" name="operacao" placeholder="Operação" class="form-control" type="text">
                                                        </div>


                                                        <div class="form-group col-sm-3">
                                                            <label for="conta">Conta corrente</label>
                                                            <input id="conta" name="conta" placeholder="Conta corrente" class="form-control" required="" type="text">
                                                        </div>
                                                   </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>2. Dados da aplicação da prova</legend>
                                                <div class="row">
                                                    <div class="form-group col-sm-3">
                                                        <label for="ano">Ano</label>
                                                        <select id="ano" name="ano" class="form-control">
                                                            <option value="2019">Exame de seleção 2019</option>
                                                            <option value="2018">Exame de seleção 2018</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label for="local_prova_id">Local da prova</label>
                                                        <select id="local_prova_id" name="local_prova_id" class="form-control">
                                                            <option value="1">Local 1</option>
                                                            <option value="2">Local 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>3. Anexar arquivo</legend>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="arquivo">Arquivo</label>
                                                        <input type="file" name="arquivo" id="arquivo" class="form-control" required>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn">Enviar cadastro</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /Demo Plone Content -->

                </div>

                <div class="clear"></div>
            </div>

            <!-- Footer -->
            <div id="footer" role="contentinfo">
                <div id="footer-brasil" class="footer-logos">
                    <div id="wrapper-footer-brasil">
                        <a href="http://www.acessoainformacao.gov.br/">
                            <span class="logo-acesso-footer"></span>
                        </a>
                        <a href="http://www.brasil.gov.br/">
                            <span class="logo-brasil-footer"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="extra-footer">
                <p>
                    Direitos reservados a <a href="https://github.com/plonegovbr/brasil.gov.temas">plonegovbr/brasil.gov.temas</a>.
                </p>
            </div>
            <!-- /Footer-->
            <script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
            <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
            <script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>
            <script src="{{ asset('js/blockUI.js') }}"></script>
            <script src="{{ asset('js/app.js') }}"></script>
            <script>$buscarCpf = "{{ route('buscar') }}";</script>
        </div>
    </body>
</html>
