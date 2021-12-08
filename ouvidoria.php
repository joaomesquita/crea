<?php include 'components/header.php' ?>

<div class="py-5">
    <div class="container">
        <div class="row border-bottom">
            <div class="col-lg-12">
                <nav style="--bs-breadcrumb-divider: '·';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none color-primary">Home</a></li>
                        <li class="breadcrumb-item color-dark active" aria-current="page">Ouvidoria</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <h1 class="font-35 color-dark fw-bold">Ouvidoria</h1>
                <p class="font-17 color-dark">Canal de comunicação ágil e direto entre o Conselho, profissionais e a sociedade, a Ouvidoria do Crea-MS é um instrumento ao incentivo à transparência que contribui para a garantia de direitos e o fortalecimento da cidadania. Podem ser apresentadas denúncias, elogios, reclamações, sugestões, agradecimentos ou solicitação de informações sobre a estrutura, organização e o funcionamento do Crea-MS.</p>
                <p class="font-17 color-dark">Todas as manifestações levadas à Ouvidoria serão tratadas com isenção, imparcialidade e com total sigilo. É importante lembrar que a Ouvidoria deve ser procurada somente após esgotadas todas as possibilidades de solução pelas unidades organizacionais do Crea-MS.</p>
                <a href="#" class="btn bg-primary font-13 color-light rounded text-uppercase">Nova Manifestação</a>
            </div>  
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="font-17 color-dark">A Ouvidoria funciona na sede do Crea-MS de segunda a sexta-feira das 12h às 18h. O contato também pode ser realizado pelo telefone (67) 3368-1000 ou 0800-368-1000.</p>
                <h5 class="font-22 color-dark fw-bold">Consulte abaixo o andamento da sua manifestação:</h5>
                
                <div class="form-ouvidoria rounded mt-5">
                    <form class="row g-3">
                        <div class="col-12">
                            <label for="input-protocolo" class="form-label">Nº Protocolo *</label>
                            <input type="text" class="form-control" id="input-protocolo" placeholder="Digite aqui">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Verificação de Segurança *</label>
                        </div>
                        <div class="col-6">
                            <label for="input-email" class="form-label">E-mail *</label>
                            <input type="email" class="form-control" id="input-email" placeholder="Digite aqui">
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn bg-primary font-13 color-light w-100 rounded text-uppercase">Pesquisar</button>
                            <button type="reset" class="btn btn-link font-13 color-primary text-uppercase rounded">Limpar pesquisa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>