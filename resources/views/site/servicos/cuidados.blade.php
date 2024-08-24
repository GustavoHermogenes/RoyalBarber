@extends('layout.layout')

@section('title','Cuidados')

@section('conteudo')



<style>

    .service .nav .nav-link {
        background: var(--light);
        transition: .5s;
    }

    .service .nav .nav-link.active {
        background: var(--primary);
    }

    .service .nav .nav-link.active h4 {
        color: #FFFFFF !important;
    }


    </style>


     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(../images/banners/cuidados.png);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <!-- <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid"> -->
              <h1 class="mb-4">Cuidados</h1>
              <p class="lead">Experimente nossa linha de shampoos especialmente formulados para atender às necessidades do cabelo masculino.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

 <section class="quick-info element-animate" data-animate-effect="fadeInLeft">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 bgcolor">
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="media">
                  <div class="mr-3 icon-wrap"><span class="icon ion-ios-telephone"></span></div>
                  <div class="media-body">
                    <h5>11 951694143</h5>
                    <p>Nos ligue 24/7, responderemos o mais rápido possível</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="media">
                  <div class="mr-3 icon-wrap"><span class="icon ion-location"></span></div>
                  <div class="media-body">
                    <h5>Avenida Marechal Tito, 1500</h5>
                    <p>São Paulo, São Paulo <br> CEP 08010-090 - Brasil</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="media">
                  <div class="mr-3 icon-wrap"><span class="icon ion-android-time"></span></div>
                  <div class="media-body">
                    <h5>Diariamente: 8h - 22h</h5>
                    <p>Segunda a Sábado <br> Domingo: Fechado</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    


    <!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Cuidados Masculinos //</h6>
            <h1 class="mb-5">Explore Nossos Serviços</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button" style="cursor: pointer">
                        <h4 class="m-0">Limpeza de Pele</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button" style="cursor: pointer">
                        <h4 class="m-0">Hidratação Facial</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button" style="cursor: pointer">
                        <h4 class="m-0">Massagem de Barba</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button" style="cursor: pointer">
                        <h4 class="m-0">Massagem Relaxante</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="../images/cuidados/tratamentoDePele.png" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Limpeza de Pele</h3>
                                <p class="mb-4">Revitalize sua pele com uma limpeza profunda que remove impurezas e células mortas, deixando seu rosto fresco e saudável. Nossa técnica avançada proporciona um tratamento eficaz e relaxante.</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Tratamento Eficaz</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Remove Impurezas</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Pele Saudável</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3"  style="margin-left: 10px"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="../images/cuidados/tratamentoDePele.png" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Hidratação Facial</h3>
                                <p class="mb-4">Garanta uma pele macia e bem hidratada com nossos tratamentos de hidratação facial. Utilizamos produtos de alta qualidade que promovem a nutrição e revitalização da pele, ideal para todos os tipos de pele.</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Pele Macia</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Nutrição Intensa</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Revitalização</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="../images/cuidados/hidratacaobarba.png" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Massagem de Barba</h3>
                                <p class="mb-4">Experimente a sensação de uma barba bem cuidada com nossa massagem de barba. Utilizamos óleos essenciais e técnicas especiais para hidratar e revitalizar sua barba, proporcionando um toque macio e saudável.</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Óleos Essenciais</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Hidratação Profunda</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Toque Macio</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="../images/cuidados/hidratacao.png" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Massagem Relaxante</h3>
                                <p class="mb-4">Relaxe e desestresse com nossas massagens relaxantes. Nossa equipe utiliza técnicas de massagem que aliviam tensões e promovem um profundo estado de relaxamento, ideal para quem busca bem-estar e equilíbrio.</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Alívio de Tensão</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Profundo Relaxamento</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Bem-Estar e Equilíbrio</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Adiciona um evento de clique para os botões das abas
        $('.nav-link').click(function() {
            // Remove a classe 'active' de todos os botões
            $('.nav-link').removeClass('active');

            // Adiciona a classe 'active' apenas ao botão clicado
            $(this).addClass('active');

            // Obtém o alvo da aba a ser mostrada
            var target = $(this).attr('data-bs-target');

            // Esconde todas as abas
            $('.tab-pane').removeClass('show active');

            // Mostra a aba correspondente ao botão clicado
            $(target).addClass('show active');
        });
    });
    </script>
@endsection
