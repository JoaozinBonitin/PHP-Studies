<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Operações Aritmeticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Variaveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                variaveis variaveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                                Desafio variaveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor vs Referencia
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                constantes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>4. Controles</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controle&file=if_else">
                                If Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_relacionais">
                                Operadores Relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_pi">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_logicos">
                                Operadores Logicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">
                                Desafio Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operador_ternario">
                                Operador ternario
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=switch">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_switch">
                                Desafio Switch
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>