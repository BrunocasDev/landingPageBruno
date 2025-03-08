<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyModalLabel">
                        Política de Privacidade
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="hero-section">
        <div class="container">
            <div class="content">
                <div class="text">
                    <img src="{{ asset('images/logotipo-Speak-Up-School 1.png') }}" class="img-fluid rounded logo" />
                    <h1>Quer aprender ou melhorar o seu inglês?</h1>
                    <img src="{{ asset('images/selo.png') }}" class="img-fluid rounded" />
                </div>
                <div class="form-information target-form">
                    <div class="info-box">
                        <h4 class="info-text text-black">
                            OBTENHA MAIS
                            <span class="text-danger info-text-bold">Informações</span>
                        </h4>
                        <form class="form-info" id="registration-form">
                            @csrf
                            <div class="mb-2">
                                <input type="text" class="form-control" id="nome" name="nome"
                                    placeholder="Nome" required />
                                <small class="text-danger" id="nome-error"></small>
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="apelido" name="apelido"
                                    placeholder="Apelido" required />
                                <small class="text-danger" id="apelido-error"></small>
                            </div>
                            <div class="mb-2">
                                <input type="number" class="form-control" id="idade" name="idade"
                                    placeholder="Idade" required />
                                <small class="text-danger" id="idade-error"></small>
                            </div>
                            <div class="mb-2">
                                <input type="number" class="form-control" id="telefone" name="telefone"
                                    placeholder="Telefone" required />
                                <small class="text-danger" id="telefone-error"></small>
                            </div>
                            <div class="mb-2">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="E-mail" required />
                                <small class="text-danger" id="email-error"></small>
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="concelho" name="concelho"
                                    placeholder="Concelho de Residência" required />
                                <small class="text-danger" id="concelho-error"></small>
                            </div>
                            <div class="mb-2">
                                <select class="form-control" id="nivel-ingles" name="nivel-ingles" required>
                                    <option value="" disabled selected>Nível de inglês</option>
                                    <option value="1">Básico</option>
                                    <option value="2">Intermediário</option>
                                    <option value="3">Avançado</option>
                                </select>
                                <small class="text-danger" id="nivel-ingles-error"></small>
                            </div>
                            <div class="mb-2 text-black">
                                <input type="checkbox" id="privacy-checkbox" name="privacy-checkbox" required />
                                <label for="privacy-checkbox">
                                    Li e aceito a
                                    <a href="#" id="privacy-link" class="text-black">Política de
                                        Privacidade</a>
                                </label>
                                <small class="text-danger" id="privacy-checkbox-error"></small>
                            </div>
                            <button type="submit" class="btn btn-danger w-100">INSCREVA-SE JÁ</button>
                        </form>
                        <div id="success-message" class="alert alert-success mt-3" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="for-whom-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 img" data-aos="fade-right">
                    <img src="{{ asset('images/Homepage.png') }}" class="img-fluid" />
                </div>
                <div class="col-md-6 for-whom-info" data-aos="fade-down">
                    <h2>Para quem?</h2>

                    <ul class="list-unstyled custom-list">
                        <li data-aos="fade-up" data-aos-delay="100">
                            Interessados em aprender inglês
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            Estudantes universitários ou
                            <span class="highlight">
                                profissionais que precisam melhorar o inglês para fins académicos ou profissionais
                            </span>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            Profissionais que se querem destacar no mercado
                        </li>
                        <li data-aos="fade-up" data-aos-delay="400">
                            Estudantes que frequentem o Ensino Básico, Secundário, ou
                            Universitário e que querem estudar no estrangeiro
                        </li>
                        <li data-aos="fade-up" data-aos-delay="500">
                            Pessoas que querem aprender inglês para viagens cultura ou lazer
                        </li>
                        <li data-aos="fade-up" data-aos-delay="600">
                            Pais que querem oferecer aos filhos educação em inglês de
                            qualidade.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="advantages-section">
        <div class="container">
            <h2 class="title-section" data-aos="fade-up">Vantagens <span>do curso</span></h2>

            <ul class="advantages-list">
                <li data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('images/icon1.svg') }}" alt="Acompanhamento permanente" />
                    Acompanhamento permanente
                </li>
                <li data-aos="fade-right" data-aos-delay="200">
                    <img src="{{ asset('images/icon5.svg') }}" alt="Acesso 24/7 a aulas e atividades" />
                    Acesso 24/7 a aulas e atividades
                </li>
                <li data-aos="fade-right" data-aos-delay="300">
                    <img src="{{ asset('images/icon2.svg') }}" alt="Lígios interativas" />
                    Lígios interativas
                </li>
                <li data-aos="fade-right" data-aos-delay="400">
                    <img src="{{ asset('images/icon3.svg') }}" alt="Horários flexíveis" />
                    Horários flexíveis
                </li>
                <li data-aos="fade-right" data-aos-delay="500">
                    <img src="{{ asset('images/icon4.svg') }}" alt="Resultados garantidos" />
                    Resultados garantidos
                </li>
            </ul>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <h2 class="title-section" data-aos="fade-up">
                O que dizem <span>os nossos alunos</span>
            </h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                data-bs-interval="5000" data-aos="fade-up">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-start">
                            <div class="col-12 col-md-4 text-center text-md-start">
                                <img src="{{ asset('images/testi1.png') }}" class="d-block mx-auto mx-md-0"
                                    alt="Aluna 1">
                            </div>
                            <div class="col-12 col-md-8 text-center text-md-start">
                                <p class="testimonial-text">
                                    “Sentia que o inglês era uma lacuna e então escolhi a Speak up porque me
                                    permite ter aulas on-line, onde e quando quiser. Com as aulas multimédia
                                    posso estudar sempre que o tempo livre surge e depois contactar com os
                                    professores sempre disponíveis para me auxiliar nas minhas dúvidas.
                                    Estou imensamente satisfeita com a escola e já vou no segundo nível de
                                    estudo com eles.”
                                </p>
                                <p class="testimonial-author">Daniela Costa</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-start">
                            <div class="col-12 col-md-4 text-center text-md-start">
                                <img src="{{ asset('images/testi2.png') }}" class="d-block mx-auto mx-md-0"
                                    alt="Aluna 2">
                            </div>
                            <div class="col-12 col-md-8 text-center text-md-start">
                                <p class="testimonial-text">
                                    "A razão pela qual decidi inscrever-me nas aulas de inglês foi para me
                                    tornar fluente nessa língua, contudo como alguém que tem uma agenda
                                    preenchida era difícil encontrar uma escola que pudesse frequentar.
                                    Quando conheci o Speak Up percebi que finalmente poderia assistir às
                                    aulas, pois estas são marcadas sempre de acordo com a minha
                                    disponibilidade. Além disso, o Speak Up valoriza a prática da fala, que
                                    penso ser a razão pela qual evoluí tão rapidamente. Agora sinto-me muito
                                    mais fluente e raramente tenho aquelas situações de “brain freeze”
                                    quando estou a falar ou a escrever. O Speak Up é ótimo porque adapta as
                                    suas aulas aos nossos horários, ritmo de aprendizagem e dificuldades.
                                    Não podia estar mais feliz com a minha decisão."
                                </p>
                                <p class="testimonial-author">Ana Cunha</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-start">
                            <div class="col-12 col-md-4 text-center text-md-start">
                                <img src="{{ asset('images/testi3.png') }}" class="d-block mx-auto mx-md-0"
                                    alt="Aluna 3">
                            </div>
                            <div class="col-12 col-md-8 text-center text-md-start">
                                <p class="testimonial-text">
                                    “Sentia que o inglês era uma lacuna e então escolhi a Speak up porque me
                                    permite ter aulas on-line, onde e quando quiser. Com as aulas multimédia
                                    posso estudar sempre que o tempo livre surge e depois contactar com os
                                    professores sempre disponíveis para me auxiliar nas minhas dúvidas.
                                    Estou imensamente satisfeita com a escola e já vou no segundo nível de
                                    estudo com eles.”
                                </p>
                                <p class="testimonial-author">Daniela Costa</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-start">
                            <div class="col-12 col-md-4 text-center text-md-start">
                                <img src="{{ asset('images/testi4.png') }}" class="d-block mx-auto mx-md-0"
                                    alt="Aluna 4">
                            </div>
                            <div class="col-12 col-md-8 text-center text-md-start">
                                <p class="testimonial-text">
                                    "A razão pela qual decidi inscrever-me nas aulas de inglês foi para me
                                    tornar fluente nessa língua, contudo como alguém que tem uma agenda
                                    preenchida era difícil encontrar uma escola que pudesse frequentar.
                                    Quando conheci o Speak Up percebi que finalmente poderia assistir às
                                    aulas, pois estas são marcadas sempre de acordo com a minha
                                    disponibilidade. Além disso, o Speak Up valoriza a prática da fala, que
                                    penso ser a razão pela qual evoluí tão rapidamente. Agora sinto-me muito
                                    mais fluente e raramente tenho aquelas situações de “brain freeze”
                                    quando estou a falar ou a escrever. O Speak Up é ótimo porque adapta as
                                    suas aulas aos nossos horários, ritmo de aprendizagem e dificuldades.
                                    Não podia estar mais feliz com a minha decisão."
                                </p>
                                <p class="testimonial-author">Ana Cunha</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="test-your-english-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div
                            class="d-flex flex-column flex-md-row align-items-center justify-content-between text-md-start text-center">
                            <!-- Título com animação -->
                            <div data-aos="fade-right" data-aos-delay="100">
                                <h2 class="section-title">TESTE JÁ O SEU INGLÊS</h2>
                                <p class="section-description mt-3" data-aos="fade-right" data-aos-delay="200">
                                    E descubra qual a melhor opção para iniciar o seu
                                    estudo connosco!
                                </p>
                            </div>
                            <!-- Botão com animação -->
                            <a href="#" id="test-your-ingles" class="btn" data-aos="fade-down"
                                data-aos-delay="300">
                                Teste o seu inglês
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logo com animação -->
        <div class="footer-section">
            <div class="d-flex justify-content-center">
                <a href="https://www.adstrategy.pt/" target="_blank">
                    <img src="{{ asset('images/logo-adstrategy-footer-cinza.png') }}" alt="ADStrategy Logo" />
                </a>
            </div>
        </div>
    </footer>

    <!-- Botão "Voltar ao Topo" com animação -->
    <button type="button" class="btn btn-danger back-to-top" data-aos="fade-up" data-aos-delay="500">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Aos Js -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Global Js -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
