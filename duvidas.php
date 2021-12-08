<?php include 'components/header.php' ?>

<div class="py-5">
    <div class="container">
        <div class="row border-bottom">
            <div class="col-lg-12">
                <nav style="--bs-breadcrumb-divider: '·';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none color-primary">Home</a></li>
                        <li class="breadcrumb-item color-dark active" aria-current="page">Dúvidas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 mb-5">
                <h1 class="font-35 color-dark fw-bold">Dúvidas</h1>
                <p class="font-17 color-dark mb-0">Bem-vindo! Esta é uma ferramenta que o Crea-MS disponibiliza para esclarecer suas dúvidas. Clique no assunto desejado:</p>
            </div>
            <div class="col-lg-10">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link font-13 text-uppercase active" id="pills-art-tab" data-bs-toggle="pill" data-bs-target="#pills-art" type="button" role="tab" aria-controls="pills-art" aria-selected="true">ART</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link font-13 text-uppercase" id="pills-fiscalizacao-tab" data-bs-toggle="pill" data-bs-target="#pills-fiscalizacao" type="button" role="tab" aria-controls="pills-fiscalizacao" aria-selected="false">Fiscalização</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link font-13 text-uppercase" id="pills-profissional-tab" data-bs-toggle="pill" data-bs-target="#pills-profissional" type="button" role="tab" aria-controls="pills-profissional" aria-selected="false">Profissional</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-art" role="tabpanel" aria-labelledby="pills-art-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <?php for ($i = 1; $i < 7; $i++) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading<?php echo $i ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i ?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
                                </h2>
                                <div id="flush-collapse<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body shadow-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel porro harum ex! Provident, ullam magnam eius deleniti asperiores, sed ad placeat, dolorum rem possimus odio non doloremque quis aut quae.
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-fiscalizacao" role="tabpanel" aria-labelledby="pills-fiscalizacao-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <?php for ($i = 1; $i < 7; $i++) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading<?php echo $i ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i ?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
                                </h2>
                                <div id="flush-collapse<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body shadow-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel porro harum ex! Provident, ullam magnam eius deleniti asperiores, sed ad placeat, dolorum rem possimus odio non doloremque quis aut quae.
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profissional" role="tabpanel" aria-labelledby="pills-profissional-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <?php for ($i = 1; $i < 7; $i++) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading<?php echo $i ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i ?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
                                </h2>
                                <div id="flush-collapse<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body shadow-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel porro harum ex! Provident, ullam magnam eius deleniti asperiores, sed ad placeat, dolorum rem possimus odio non doloremque quis aut quae.
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>