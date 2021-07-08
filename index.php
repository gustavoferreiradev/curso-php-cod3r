<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">    
    <title>Curso PHP</title>
</head>
<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="main">
        <div class="content">
            <nav class="modules">
                <div class="module green">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercise.php?dir=basics&file=hello">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basics&file=html">
                                Integração HTML
                            </a>
                        </li>
                            <li>
                                <a href="exercise.php?dir=basics&file=css">
                                    Integração CSS
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=basics&file=comments">
                                    Comentários PHP
                                </a>
                            </li>
                            <li>
                                <a href="exercise.php?dir=basics&file=challenge">
                                    Desafio
                                </a>
                            </li>
                        <ul>

                    </ul>
                </div>               
            </nav>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>