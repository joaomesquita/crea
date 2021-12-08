<?php include 'components/header.php' ?>

<div class="py-5">
    <div class="container">
        <div class="row border-bottom">
            <div class="col-lg-12">
                <nav style="--bs-breadcrumb-divider: '·';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none color-primary">Home</a></li>
                        <li class="breadcrumb-item color-dark active" aria-current="page">Fiscalização</li>
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
                <h1 class="font-35 color-dark fw-bold">Fiscalização</h1>
                <p class="font-17 color-dark mb-0">Bem-vindo! Esta é uma ferramenta que o Crea-MS disponibiliza para esclarecer suas dúvidas. Clique no assunto desejado:</p>
            </div>
            <div class="col-lg-10">
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

<?php include 'components/footer.php' ?>