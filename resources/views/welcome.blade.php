<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Modal política de privacidade -->
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyModalLabel">Política de Privacidade</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <section class="hero-section">
        <div class="hero-content text-center">
            <div class="text-information">
                <div class="col-md-6">
                    <img src="{{ asset('images/logotipo-Speak-Up-School 1.png') }}" class="img-fluid rounded">
                </div>
                <h1>Quer aprender ou melhorar o seu inglês?</h1>
                <div class="col-md-6">
                    <img src="{{ asset('images/selo.png') }}" class="img-fluid rounded">
                </div>
            </div>
            <div class="info-box">
                <h4 class="info-text text-black">
                    OBTENHA MAIS
                    <span class="text-danger info-text-bold">Informações</span>
                </h4>
                <form class="form-info">
                    <div class="mb-2">
                        <input type="text" class="form-control" placeholder="Nome" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" placeholder="Apelido" required>
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" placeholder="Idade" required>
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" placeholder="Telefone" required>
                    </div>
                    <div class="mb-2">
                        <input type="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" placeholder="Concelho de Residência" required>
                    </div>
                    <div class="mb-2">
                        <select class="form-control">
                            <option value="" disabled selected>Nível de inglês</option>
                            <option value="1">Básico</option>
                            <option value="2">Intermediário</option>
                            <option value="3">Avançado</option>
                        </select>
                    </div>
                    <div class="mb-2 text-black">
                        <input type="checkbox" id="privacy-checkbox" required>
                        <label for="privacy-checkbox">
                            Li e aceito a <a href="#" id="privacy-link" class="text-black">Política de
                                Privacidade</a>
                        </label>
                    </div>
                    <button class="btn btn-danger w-100">INSCREVA-SE JÁ</button>
                </form>
            </div>
        </div>
    </section>

    <section class="container-fluid for-whom-section">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/Homepage.png') }}" class="img-fluid">
            </div>
            <div class="col-md-6 for-whom-info">
                <h2>Para quem?</h2>
                <div class="underline"></div>
                <ul class="list-unstyled custom-list">
                    <li>Interessados em aprender inglês</li>
                    <li>Estudantes universitários ou <span class="highlight">profissionais que precisam melhorar o
                            inglês para fins académicos ou profissionais</span></li>
                    <li>Profissionais que se querem destacar no mercado</li>
                    <li>Estudantes que frequentem o Ensino Básico, Secundário, ou Universitário e que querem estudar no
                        estrangeiro</li>
                    <li>Pessoas que querem aprender inglês para viagens cultura ou lazer</li>
                    <li>Pais que querem oferecer aos filhos educação em inglês de qualidade.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="advantages-section">
        <div class="container">
            <h2 class="title-section">Vantagens <span>do curso</span></h2>
            <div class="underline"></div>
            <ul class="advantages-list">
                <li>
                    <img src="{{ asset('images/icon1.svg') }}" alt="Acompanhamento permanente">
                    Acompanhamento permanente
                </li>
                <li>
                    <img src="{{ asset('images/icon5.svg') }}" alt="Acesso 24/7 a aulas e atividades">
                    Acesso 24/7 a aulas e atividades
                </li>
                <li>
                    <img src="{{ asset('images/icon2.svg') }}" alt="Lígios interativas">
                    Lígios interativas
                </li>
                <li>
                    <img src="{{ asset('images/icon3.svg') }}" alt="Horários flexíveis">
                    Horários flexíveis
                </li>
                <li>
                    <img src="{{ asset('images/icon4.svg') }}" alt="Resultados garantidos">
                    Resultados garantidos
                </li>
            </ul>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <h2 class="title-section">O que dizem <span>os nossos alunos</span></h2>
            <div class="underline"></div>
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-item">
                            <div class="row align-items-start">
                                <div class="col-12 col-md-4 text-center text-md-start">
                                    <img src="{{ asset('images/testi1.png') }}" class="d-block mx-auto mx-md-0"
                                        alt="Aluno 1">
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
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <div class="row align-items-start">
                                <div class="col-12 col-md-4 text-center text-md-start">
                                    <img src="{{ asset('images/testi2.png') }}" class="d-block mx-auto mx-md-0"
                                        alt="Aluno 2">
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
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <div class="row align-items-start">
                                <div class="col-12 col-md-4 text-center text-md-start">
                                    <img src="{{ asset('images/testi3.png') }}" class="d-block mx-auto mx-md-0"
                                        alt="Aluno 2">
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
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <div class="row align-items-start">
                                <div class="col-12 col-md-4 text-center text-md-start">
                                    <img src="{{ asset('images/testi4.png') }}" class="d-block mx-auto mx-md-0"
                                        alt="Aluno 2">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
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
                            <div>
                                <h2 class="section-title">TESTE JÁ O SEU INGLÊS</h2>
                                <p class="section-description mt-3">
                                    E descubra qual a melhor opção para iniciar o seu assunto comercial
                                </p>
                            </div>
                            <a href="#" class="btn btn-danger mt-4 mt-md-0">TESTE O SEU INGLÊS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-section">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('images/logo-adstrategy-footer-cinza.png') }}">
            </div>
        </div>
    </footer>

    <button type="button" class="btn btn-danger back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
