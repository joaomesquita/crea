<?php include 'components/header.php' ?>

<div class="py-5">
    <div class="container">
        <div class="row border-bottom">
            <div class="col-lg-12">
                <nav style="--bs-breadcrumb-divider: '·';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none color-primary">Home</a></li>
                        <li class="breadcrumb-item color-dark active" aria-current="page">Contato</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <h1 class="font-35 color-dark fw-bold">Contato</h1>
                <p class="font-17 color-dark mb-5">Rua Sebastião Taveira, 272 - Monte, Castelo Campo Grande - MS.</p>
                <a href="#" class="btn btn-outline-primary font-13 color-primary text-uppercase">Ver no mapa</a>
            </div>  
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 mb-5">
                <form class="row g-3">
                    <div class="col-12">
                        <label for="input-nome" class="form-label">Nome *</label>
                        <input type="text" class="form-control" id="input-nome" placeholder="Digite aqui">
                    </div>
                    <div class="col-6">
                        <label for="input-telefone" class="form-label">Telefone *</label>
                        <input type="text" class="form-control" id="input-telefone" placeholder="Digite aqui">
                    </div>
                    <div class="col-6">
                        <label for="input-email" class="form-label">E-mail *</label>
                        <input type="email" class="form-control" id="input-email" placeholder="Digite aqui">
                    </div>
                    <div class="col-12">
                        <label for="input-assunto" class="form-label">Assunto *</label>
                        <select class="form-select" id="input-assunto" aria-label="Assunto">
                            <option selected>Selecione</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="input-mensagem" class="form-label">Mensagem *</label>
                        <textarea class="form-control" id="input-mensagem" rows="3" placeholder="Digite aqui"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn bg-primary font-13 color-light w-100 rounded text-uppercase">Enviar Denúncia</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <h1 class="font-35 color-dark fw-bold">Dúvidas frequentes</h1>
                <p class="font-17 color-dark mb-5">Lorem ipsum dolor sit ame consr adipiscing elit Quisque enim velit tempor eu dolor sed, tincidunt placerat est. Sed malesuada ex vel metus volutpat ultrices.</p>
                <a href="#" class="btn btn-outline-primary font-13 color-primary text-uppercase w-100"><i class="bi bi-list-ul"></i> Todas as dúvidas frequentes</a>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>