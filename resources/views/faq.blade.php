@extends('layouts.head')

@section('content')
    <section class="container">
        <h2 class="d-flex justify-content-center fs-1 mt-4">Dúvidas Frequentes</h2>

        <!--Acordion Perguntas 1-->
        <div class="accordion mt-4" id="perguntas">
            <div class="accordion-item">
                <h2 class="accordion-header" id="tituloPergunta-1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        O UNIBanco é Seguro?
                    </button>
                </h2>
                <!--Acordion resposta 1-->
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="tituloPergunta-1"
                    data-bs-parent="#perguntas">
                    <div class="accordion-body">
                        <strong>Nosso banco é um banco novo, mas que vem com uma proposta inovadora para seu
                            dinheiro, te proporcionando praticidade, comodidade, agilidade e principalmente projetos
                            de investimentos para o seu dinheiro.</strong>
                    </div>
                </div>
            </div>
            <!--Acordion Pergunta 2-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="tituloPergunta-2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Consigo abrir uma conta com restrição no nome?
                    </button>
                </h2>
                <!--Acordion resposta 2-->
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="tituloPergunta-2"
                    data-bs-parent="#perguntas">
                    <div class="accordion-body">
                        <strong>Nosso banco é um banco novo, mas que vem com uma proposta inovadora para seu
                            dinheiro, te proporcionando praticidade, comodidade, agilidade e principalmente projetos
                            de investimentos para o seu dinheiro.</strong>
                    </div>
                </div>
            </div>

            <!--Acordion Pergunta 3-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="tituloPergunta-3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Como solicitar aumento de limite?
                    </button>
                </h2>
                <!--Acordion resposta 3-->
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tituloPergunta-3"
                    data-bs-parent="#perguntas">
                    <div class="accordion-body">
                        <strong>Com a movimentação da conta, criaremos um perfil adequado com seu patamar
                            financeiro, com base nisso estipulamos um valor de crédito para que o Sr possa estar
                            desfrutando.</strong>
                    </div>
                </div>
            </div>

            <!--Acordion Pergunta 4-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="tituloPergunta-4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Onde realizar saques?
                    </button>
                </h2>
                <!--Acordion resposta 4-->
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="tituloPergunta-4"
                    data-bs-parent="#perguntas">
                    <div class="accordion-body">
                        <strong>Saques podem ser efetuados em qualquer caixa 24H.</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
