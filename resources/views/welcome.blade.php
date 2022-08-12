<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Áurea Garzen</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">





    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">





    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Acessar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Cadastrar</a>
                    @endif
                @endauth
            </div>
        @endif
            <div class="row">

                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://www.facebook.com/aurea.ganzen">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/aureaganzen/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.linkedin.com/in/recolocacaoprofissional/">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                        </a>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-8 py-lg-0 pl-8 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary"></span>Áurea Garzen</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-16" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-2">
                        <a href="#home" class="nav-item nav-link active">Início</a>
                        <a href="#historia" class="nav-item nav-link">Oportunidades</a>
                        <a href="#servico" class="nav-item nav-link">Serviços</a>
                        <a href="#quem" class="nav-item nav-link">Missão, Visão e Valores</a>
                        <a href="#home" class="nav-item nav-link">Sou + Áurea Ganzen</a>
                        <a href="#responsabilidade" class="nav-item nav-link">Responsabilidade Social</a>
                        <a href="#Oportunidades" class="nav-item nav-link">Oportunidades</a>


                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Endereço</h5>
                            <p class="m-0">Porto Alegre - RS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email </h5>
                            <p class="m-0">aurea.ganzen@aureaganzen.com.br</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Telefone</h5>
                            <p class="m-0">(51) 993336488</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0" id="home">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Aurea_Foto.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">

                            <h3 class="display-3 text-white mb-md-4">✓Psicóloga Formada pela Faccat;<br>
                              Psicóloga CRP 07/26908<br>
                              Assessoria Personalizada Empresarial<br>
                              e em Carreira Profissional </h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Sobre </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h3 class="display-3 text-white mb-md-4">Áuzea Garzen</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Sobre</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>

                        <h1 class="m-0" id="nossa_historia">NOSSA HISTÓRIA</h1><br>

                        <img class="w-100" src="images/Disc.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5" id="historia">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Nossa História</h6>
                    <h1 class="mb-4 section-title">O conceito de "Responsabilidade Social de Empresas"
                    parte da premissa de que as organizações têm responsabilidade
                    direta, e condições de abordar muitos problemas que afetam a
                    sociedade.
                    A partir deste enfoque, aquele que efetivamente contrata
                    nosso serviço contribui completando a falta do outro. É neste olhar
                    que nos renovamos todas as vezes que abrimos nossa jornada
                    diária.
                    Desta forma, nossa empresa contribui positivamente na
                    melhoria da qualidade de vida de nossos clientes, seja profissional
                    ou pessoal.
                    Nossa empresa é solidária e todos têm o nosso olhar!
                    <div class="row py-2">


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5" id="quem">
        <div class="container py-5">
            <div class="row">
               <img class="w-100" src="img/missao_valores_valores.png" alt="Image">                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->







    <!-- Team End -->



    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5" id="servico">
        <div class="container py-5">
             <h1 class="mb-4">Serviços</h1>

                    <div>

                      ✓ Assessoria Personalizada em
                        Recolocação Profissional;<br>
                        ✓ Assessoria para empresas;<br>
                        ✓ Especialista em Orientação<br>
                        Psicanalítica;<br>
                        ✓ Análise e Performance<br>
                        Comportamental;<br>
                        ✓ Especialista Extended Disc;<br>
                        ✓ Parceria com Fonoaudióloga;<br>
                        ✓ Outplacement;<br>
                        ✓ Headhunter;<br>
                        ✓ Mentoring;<br>
                        ✓ Criação de Identidade Visual e
                        Redes Sociais.<br>

                    </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">

                   
                </div>
            </div>
    </div>


    
     <div class="container-fluid bg-light pt-5" id="Oportunidades">
        <div class="container py-5">
         
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <div>
                        
                    </div>
                </div>
            </div>
    </div>
    <div class="container-fluid bg-light pt-5" id="responsabilidade">
        <div class="container py-5">
            <h1 class="mb-4">RESPONSABILIDADE SOCIAL</h1>

            <img class="w-100" src="images/Responsabilidade_Social.png" alt="Image">          
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">

                    
                    <div>

                            </div>

                    </div>
                </div>
            </div>
    </div>
    <!-- Blog End -->

    <section class="features6 cid-roYScao1K4" id="features06-m">

        <div class="container align-center">
            <div class="row justify-content-center">
                <div class="mbr-white col-lg-6 col-md-8">
                    <h1 class="mbr-section-title mbr-normal align-left mbr-white my-4 mbr-fonts-style display-7"><br></h1>


                </div>
            </div>
        </div>




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5" >
                <h4 class="text-primary mb-4">Entrar em contato
                </h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Porto Alegre - RS</p>
                <p><i class="fa fa-phone-alt mr-2"></i>(51) 993336488</p>
                <p><i class="fa fa-envelope mr-2"></i>aurea.ganzen@aureaganzen.com.br</p>
                <div class="d-flex justify-content-start mt-4">

                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Links Rápidos</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#contato"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>sobre</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Quem pode associar</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Beneficios</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contatos</a>
                </div>
            </div>

        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Áurea Garzen</a> Sistema desenvolvido por Robério Fagundes dos Santos
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">Endereço de email:roberiopma@hotmail.com</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>







</body>

</html>
