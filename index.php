<?php
  session_start();
  unset($_SESSION['code']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Projeto Academia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/venobox/venobox.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!--==========================
    Header
  ============================-->
    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left">
          <!-- Uncomment below if you prefer to use a text logo -->
          <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
          <a href="#intro" class="scrollto"
            ><img src="img/logoSite.png" alt="" title=""
          /></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="#intro">Home</a></li>
            <li><a href="#about">Sobre nós</a></li>
            <li><a href="#speakers">Integrantes</a></li>
            <li><a href="#hotels">Unidades</a></li>
            <li><a href="#gallery">Galeria</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="#subscribe">Noticias</a></li>
            <li class="buy-tickets"><a href="#buy-tickets">Ver Planos</a></li>
          </ul>

          <ul class="portal">
            <li class="portal">
              <a href="portal-cliente/login-form/demo/index.php"
                >Portal Login</a
              >
            </li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
      <!--=============cabecalho==========-->
      <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">Projeto<br /><span>Academia </span>Experience</h1>
        <p class="mb-4 pb-0">Estamos te esperando !!</p>
        <a
          href="https://www.youtube.com/watch?v=QLMHFs9y7Vw"
          class="venobox play-btn mb-4"
          data-vbtype="video"
          data-autoplay="true"
        ></a>
        <a href="#about" class="about-btn scrollto">Sobre nós</a>
      </div>
    </section>

    <main id="main">
      <!--==========================
      About Section
    ============================-->
      <section id="about">
        <!--=============sobre==========-->
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2>Sobre nós</h2>
              <p>
                Somos a Academia Dealer, Estamos no mercado há 10 anos, com
                objetivo de sempre ajudar você alcançar seus objetivos.
              </p>
            </div>
            <div class="custo2 col-lg-4">
              <h3>Unidade Tatuapé</h3>
              <ul class="custo nav-menu">
                <a href="#hotels">Clique para mais detalhes</a>
              </ul>
            </div>
            <div class="custo2 col-lg-4">
              <h3>Unidade Sapopemba</h3>
              <ul class="custo nav-menu">
                <a href="#hotels">Clique para mais detalhes</a>
              </ul>
            </div>
            <div class="custo2 col-lg-4">
              <h3>Unidade Suzano</h3>
              <ul class="custo nav-menu">
                <a href="#hotels">Clique para mais detalhes</a>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!--==========================
      Speakers Section
    ============================-->
      <section id="speakers" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Integrantes</h2>
            <p>
              Unicos dois Integrantes que restaram do grupo.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img
                  src="img/speakers/1.jpg"
                  alt="Speaker 1"
                  class="img-fluid"
                />
                <div class="details">
                  <h3><a href="speaker-details.html">Gabriel Diogo</a></h3>
                  <p>Analista e Desenvolvedor Full Stack</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img
                  src="img/speakers/2.jpg"
                  alt="Speaker 2"
                  class="img-fluid"
                />
                <div class="details">
                  <h3><a href="speaker-details.html">Raony Gois</a></h3>
                  <p>Um doido qualquer</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
                
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==========================
      Hotels Section
    ============================-->
      <section id="hotels" class="section-with-bg wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Unidades</h2>
            <p>Conheça nossas unidades</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="hotel">
                <div class="hotel-img">
                  <img
                    src="img/unidades/unidade-tatuape.jpg"
                    alt="unidade tatuape"
                    class="img-fluid"
                  />
                </div>
                <h3><a href="#">Tatuapé</a></h3>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <ul class="fa-ul">
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span>Fácil
                    acesso ao lado do metro.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span
                    >Estacionamento.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span
                    >Lanchonete.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span
                    >Vestiário.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span>Loja
                    de suplementos.
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="hotel">
                <div class="hotel-img">
                  <img
                    src="img/unidades/uni.jpg"
                    alt="Hotel 2"
                    class="img-fluid"
                  />
                </div>
                <h3><a href="#">Sapopemba</a></h3>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-full"></i>
                </div>
                <ul class="fa-ul">
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span>Fácil
                    acesso ao lado do metro.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span
                    >Estacionamento.
                  </li>
                  <li class="text-muted">
                    <span class="fa-li"><i class="fa fa-times"></i></span
                    >Lanchonete.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span
                    >Vestiario.
                  </li>
                  <li class="text-muted">
                    <span class="fa-li"><i class="fa fa-times"></i></span>Loja
                    de suplementos.
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="hotel">
                <div class="hotel-img">
                  <img
                    src="img/unidades/unidade-suzano.jpg"
                    alt="Hotel 3"
                    class="img-fluid"
                  />
                </div>
                <h3><a href="#">Suzano</a></h3>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <ul class="fa-ul">
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span>Fácil
                    acesso ao lado do metro.
                  </li>
                  <li class="text-muted">
                    <span class="fa-li"><i class="fa fa-times"></i></span
                    >Estacionamento.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span
                    >Lanchonete.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span
                    >Vestiario.
                  </li>
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span>Loja
                    de suplementos.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==========================
      Gallery Section
    ============================-->
      <section id="gallery" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Galeria de fotos</h2>
            <p>Aqui você pode conhecer a nossa academia um pouco mais de perto.</p>
          </div>
        </div>

        <div class="owl-carousel gallery-carousel">
          <a
            href="img/gallery/1.jpg"
            class="venobox"
            data-gall="gallery-carousel"
            ><img src="img/gallery/1.jpg" alt=""
          /></a>
          <a
            href="img/gallery/2.jpg"
            class="venobox"
            data-gall="gallery-carousel"
            ><img src="img/gallery/2.jpg" alt=""
          /></a>
          <a
            href="img/gallery/3.jpg"
            class="venobox"
            data-gall="gallery-carousel"
            ><img src="img/gallery/3.jpg" alt=""
          /></a>
          <a
            href="img/gallery/4.jpg"
            class="venobox"
            data-gall="gallery-carousel"
            ><img src="img/gallery/4.jpg" alt=""
          /></a>
          <a
            href="img/gallery/5.jpg"
            class="venobox"
            data-gall="gallery-carousel"
            ><img src="img/gallery/5.jpg" alt=""
          /></a>
          <a
            href="img/gallery/6.jpg"
            class="venobox"
            data-gall="gallery-carousel"
            ><img src="img/gallery/6.jpg" alt=""
          /></a>
          <a
            href="img/gallery/7.jpg"
            class="venobox"
            data-gall="gallery-carousel"
            ><img src="img/gallery/7.jpg" alt=""
          /></a>
          <a
            href="img/gallery/8.jpg"
            class="venobox"
            data-gall="gallery-carousel"
            ><img src="img/gallery/8.jpg" alt=""
          /></a>
        </div>
      </section>

      <!--==========================
      Subscribe Section
    ============================-->
      <section id="subscribe">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h2>Noticias</h2>
            <p>Assine nossa Newsletter para receber novos eventos.</p>
          </div>

          <form method="POST" action="#">
            <div class="form-row justify-content-center">
              <div class="col-auto">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Digite seu e-mail"
                />
              </div>
              <div class="col-auto">
                <button type="submit">Receber Noticias</button>
              </div>
            </div>
          </form>
        </div>
      </section>

      <!--==========================
      Buy Ticket Section
    ============================-->
      <section id="buy-tickets" class="section-with-bg wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Planos</h2>
            <p>
              Conheça nossos planos e ganhe uma semana gratis em sua primeira
              inscrição :)
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">
                    Plano Comum
                  </h5>
                  <h6 class="card-price text-center">R$150</h6>
                  <hr />
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Regular Seating
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Coffee Break
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Custom Badge
                    </li>
                    <li class="text-muted">
                      <span class="fa-li"><i class="fa fa-times"></i></span
                      >Community Access
                    </li>
                    <li class="text-muted">
                      <span class="fa-li"><i class="fa fa-times"></i></span
                      >Workshop Access
                    </li>
                    <li class="text-muted">
                      <span class="fa-li"><i class="fa fa-times"></i></span
                      >After Party
                    </li>
                  </ul>
                  <hr />
                  <div class="text-center">
                    <button
                      type="button"
                      class="btn"
                      data-toggle="modal"
                      data-target="#buy-ticket-modal"
                      data-ticket-type="standard-access"
                    >
                      Compre Agora
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">
                    Plano Premium
                  </h5>
                  <h6 class="card-price text-center">R$250</h6>
                  <hr />
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Regular Seating
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Coffee Break
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Custom Badge
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Community Access
                    </li>
                    <li class="text-muted">
                      <span class="fa-li"><i class="fa fa-times"></i></span
                      >Workshop Access
                    </li>
                    <li class="text-muted">
                      <span class="fa-li"><i class="fa fa-times"></i></span
                      >After Party
                    </li>
                  </ul>
                  <hr />
                  <div class="text-center">
                    <button
                      type="button"
                      class="btn"
                      data-toggle="modal"
                      data-target="#buy-ticket-modal"
                      data-ticket-type="pro-access"
                    >
                      Compre Agora
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pro Tier -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">
                    Plano Pro
                  </h5>
                  <h6 class="card-price text-center">R$350</h6>
                  <hr />
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Regular Seating
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Coffee Break
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Custom Badge
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Community Access
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >Workshop Access
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span
                      >After Party
                    </li>
                  </ul>
                  <hr />
                  <div class="text-center">
                    <button
                      type="button"
                      class="btn"
                      data-toggle="modal"
                      data-target="#buy-ticket-modal"
                      data-ticket-type="premium-access"
                    >
                      Compre Agora
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Order Form -->
        <div id="buy-ticket-modal" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Tickets</h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="#">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="your-name"
                      placeholder="Your Name"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="your-email"
                      placeholder="Your Email"
                    />
                  </div>
                  <div class="form-group">
                    <select
                      id="ticket-type"
                      name="ticket-type"
                      class="form-control"
                    >
                      <option value="">-- Select Your Ticket Type --</option>
                      <option value="standard-access">Standard Access</option>
                      <option value="pro-access">Pro Access</option>
                      <option value="premium-access">Premium Access</option>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn">Buy Now</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </section>

      <!--==========================
      Contact Section
    ============================-->
      <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Entre em Contato</h2>
            <p>Preencha os campos a baixo com suas informações e entraremos em contato o mais breve possivel.</p>
          </div>

          <div class="row contact-info">
            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Endereço</h3>
                <address>Av.Itaquera, 8228</address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Telefone</h3>
                <p><a href="tel:+155895548855">011 96096 - 1599</a></p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">Gymfitness@Dealer.com</a></p>
              </div>
            </div>
          </div>

          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Seu nome.."
                    data-rule="minlen:4"
                    data-msg="Por favor entre com no minimo 4 caracteres"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Seu Email.."
                    data-rule="email"
                    data-msg="Entre com um email valido"
                  />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Assunto"
                  data-rule="minlen:4"
                  data-msg="Entre com no minimo 8 caracteres para o assunto"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  data-rule="required"
                  data-msg="Campo Obrigatorio"
                  placeholder="Mensagem"
                ></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center">
                <button type="submit">Enviar Mensagem</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- #contact -->
    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-info">
              <img src="img/logo.png" alt="TheEvenet" />
              <p>
                In alias aperiam. Placeat tempore facere. Officiis voluptate
                ipsam vel eveniet est dolor et totam porro. Perspiciatis ad
                omnis fugit molestiae recusandae possimus. Aut consectetur id
                quis. In inventore consequatur ad voluptate cupiditate debitis
                accusamus repellat cumque.
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                <li>
                  <i class="fa fa-angle-right"></i> <a href="#">About us</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i> <a href="#">Services</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Terms of service</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Privacy policy</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                <li>
                  <i class="fa fa-angle-right"></i> <a href="#">About us</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i> <a href="#">Services</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Terms of service</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Privacy policy</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                A108 Adam Street <br />
                New York, NY 535022<br />
                United States <br />
                <strong>Phone:</strong> +1 5589 55488 55<br />
                <strong>Email:</strong> info@example.com<br />
              </p>

              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a href="#" class="google-plus"
                  ><i class="fa fa-google-plus"></i
                ></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
