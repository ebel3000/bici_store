<div class="d-flex justify-content-center align-items-center p-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col text-center">



                <h1 class="mt-2 fw-bold text-primary">PANEL DE CONTROL</h1>

                <div class="d-flex justify-content-center">
                    <?= (new Alerta())->get_alertas() ?>
                </div>
                <h2 class="text-secondary">Bienvenido Administrador:</h2>
                <h2 class="fw-bold text-primary m-4"> <span class="badge bg-dark text-white rounded-pill px-3 py-2">"<?= $userData['username'] ?>"</span> </h2>            </div>
        </div>
    </div>
</div>

