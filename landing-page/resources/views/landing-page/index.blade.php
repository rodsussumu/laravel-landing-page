@extends("layout")

@section("conteudo")
<div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
    <div class="backgroundHome">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/logocomousa2.png') }}" width="30%" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="#quemSomos">Quem somos</a>
                        <a class="nav-item nav-link" href="#nossaPlataforma">Nossa Plataforma</a>
                        <a class="nav-item nav-link" href="#seuCadastro">Faça seu Cadastro</a>
                    </div>
                </div>
            </nav>
        </div>

    </div>
    <div class="container">
        <h2 class="titleSection" id="quemSomos">Quem <b>Somos?</b></h2>
        <p class="subTitle">Você já teve ou possui dificuldade com a tecnologia? Pede ajuda sempre que encontra alguma
            dificuldade? Pois bem, queremos que isso acabe de vez, com o <b>Como Usa</b>, você encontrará o que precisa,
            para te ajudar em seu dia-a-dia.</p>
        <br>
        <h2 class="titleSection" id="quemSomos">Nossa <b>Equipe</b></h2>
        <p class="subTitle">Nossa equipe é formada por profissionais comprometidos com excelência nas realizações de suas atividades.</p>
        <div class="container">
            <div class="row">
                <div class="card">
                    <img src="/w3images/team2.jpg" alt="John">
                    <h3>John Doe</h3>
                    <p>CEO & Founder, Example</p>
                    <p>Harvard University</p>
                    <div style="margin: 24px 0;">
                      <a href="#"><i class="fa fa-twitter"></i></a>  
                      <a href="#"><i class="fa fa-linkedin"></i></a>  
                      <a href="#"><i class="fa fa-github"></i></a> 
                    </div>
                    <p><button>Contact</button></p>
                  </div>
                  <div class="card">
                    <img src="/w3images/team2.jpg" alt="John">
                    <h3>John Doe</h3>
                    <p>CEO & Founder, Example</p>
                    <p>Harvard University</p>
                    <div style="margin: 24px 0;">
                        <a href="#"><i class="fa fa-twitter"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-github"></i></a>  
                    </div>
                    <p><button>Contact</button></p>
                  </div>
            </div>
        </div>
        <br>
        <h2 class="titleSection" id="nossaPlataforma">Nossa <b>Plataforma!</b></h2>
        <p class="subTitle">Assista a esse vídeo e veja como é simples de aprender o que você quiser, sem ter que chamar
            ninguém para te ajudar!</p>
        <div class="container">
            <div class="videoSection mx-auto">
                <iframe width="100%" height="360" src="https://www.youtube.com/embed/AxqL4dBJQg4" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body mx-auto">
                <h4 class="card-title">Obtenha os melhores cursos básicos para te auxiliar no dia-a-dia.</h4>
                <p class="card-text">É muito importante o uso da tecnologia, ainda mais nesse período de pandemia, nosso
                    objetivo é fazer com que todos aprendam a usar a tecnologia a seu favor.</p>
                <a href="https://comousa.netlify.app/" class="btn btn-primary">Acessar Plataforma</a>
            </div>
        </div>
    </div>
    <br>
    
    <div class="container">
        <h2 class="titleSection" id="seuCadastro">Faça seu <b>Cadastro.</b></h2>
        <p class="subTitle">Faça seu cadastro para obter o acesso imediato a plataforma e também para mais informações,
            entre em contato conosco via <e-mail><u>contato@comousa.com.br</u></e-mail>
        </p>
        <br>
        <div class="container">
            <form class="mx-auto formulario"  action="home" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNome1">Escreva seu nome:</label>
                    <input type="text" id="nome"  name="nome"  class="form-control" id="exampleInputNome1" placeholder="Seu Nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Escreva seu E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Seu email">
                    <small id="nameHelp" class="form-text text-muted">Nunca vamos compartilhar seu nome e email, com
                        ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefone">Escreva seu Telefone:</label>
                    <input type="email" id="telefone" name="telefone" class="form-control" id="exampleInputTelefone1" aria-describedby="emailHelp"
                        placeholder="Seu email">
                    <small id="nameHelp" class="form-text text-muted">Nunca vamos compartilhar seu nome e telefone, com
                        ninguém.</small>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

    <footer class="page-footer">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">
                        <!--<img src="{{ asset('assets/logocomousa2.png') }}" width="10%" />--> Como Usa</h5>
                    <p>O nosso objetivo é o seu aprendizado!</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3 ml-auto">
                    <h5 class="text-uppercase">Menu</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#quemSomos">Quem somos</a>
                        </li>
                        <li>
                            <a href="#nossaPlataforma">Nossa Plataforma</a>
                        </li>
                        <li>
                            <a href="#seuCadastro">Faça seu Cadastro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://comousa.netlify.app/"> COMO USA - FIAP</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function () {
            myFunction()
        };

        function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
@endsection