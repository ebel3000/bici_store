<div class="row mt-5 justify-content-center">
    <div class="col col-md-5">
<?=(new Alerta())->get_alertas()?>
</div>
</div>

<div class="d-flex justify-content-center align-items-center  p-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                            

                <h1 class="display-4 mb-5 fw-bold text-primary">PANEL DE CONTROL</h1>
                <h2 class="text-secondary">Bienvenido Administrador:</h2> 
                <h2 class= "fw-bold text-primary"> "<?= $userData['username'] ?>"</h2>
            </div>
        </div>
    </div>
</div>


