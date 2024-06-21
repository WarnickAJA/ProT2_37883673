<!-- Formulario obtenido de phind
    Podes sacar py-4 para achicar la caja de input -->

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                <div class="card-header"><h3 class="text-center font-weight-light">Crear Cuenta</h3></div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="small mb-1" for="nombre">Nombre</label>
                            <input class="form-control py-4" id="nombre" type="text" placeholder="Tu Nombre" required />
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="apellido">Apellido</label>
                            <input class="form-control py-4" id="apellido" type="text" placeholder="Tu Apellido" required />
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Correo Electrónico</label>
                            <input class="form-control py-4" id="email" type="email" placeholder="ejemplo@dominio.com" required />
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="usuario">Usuario</label>
                            <input class="form-control py-4" id="usuario" type="text" placeholder="Usuario" required />
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="password">Contraseña</label>
                            <input class="form-control py-4" id="password" type="password" placeholder="Tu Contraseña" required />
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registrarse</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
