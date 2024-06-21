<!--
<div class="container mt-5">
    <form>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Primera opción
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Segunda opción
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                    <label class="form-check-label" for="gridRadios3">
                        Tercera opción deshabilitada
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Casilla de verificación de ejemplo
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

-->

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
