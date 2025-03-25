<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMatch</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <!--header-->
    <header>
        <nav>
            <a href="{{route ('principal')}}">Sobre</a>
            <a href="{{route ('screen')}}">Telas</a>
            <a href="">Info</a>
        </nav>
    </header>

    <!-- carrossel -->
    <div class="carrossel">
        <!--lista-->
        <div class="lista">
            <div class="item">
                <img src="images/fuji.png">
                <div class="conteudo">
                    <div class="titulo">Propósito do App</div>
                    <div class="descricao">
                        Nós criamos esse app pensando em.....
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/ui ai ui aiai.png">
                <div class="conteudo">
                    <div class="titulo">Funcionalidades</div>
                    <div class="descricao">
                        Você pode fazer isso, isso e isso...
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/redes.png">
                <div class="conteudo">
                    <div class="titulo">Redes sociais</div>
                    <div class="descricao">
                        Siga-nos no instagram, facebook e twitter
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/aaaaaaiiiiiii aaaaaaaaaaiiiiiiiiiii.png">
                <div class="conteudo">
                    <div class="titulo">Missão da empresa</div>
                    <div class="descricao">
                        Nossa missão é fazer isso e aquilo...
                    </div>
                </div>
            </div>
        </div>
        
        <!--thumbnail-->
        <div class="thumbnail">
            <div class="item">
                <img src="images/fuji.png">
                <div class="conteudo">
                    <div class="titulo">Propósito</div>
                </div>
            </div>
            <div class="item">
                <img src="images/ui ai ui aiai.png">
                <div class="conteudo">
                    <div class="titulo">Seções Informativas</div>
                </div>
            </div>
            <div class="item">
                <img src="images/redes.png">
                <div class="conteudo">
                    <div class="titulo">Redes Sociais</div>
                </div>
            </div>
            <div class="item">
                <img src="images/aaaaaaiiiiiii aaaaaaaaaaiiiiiiiiiii.png">
                <div class="conteudo">
                    <div class="titulo">Missões</div>
                </div>
            </div>
        </div>
        
        <div class="tempo"></div>
    </div>
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>