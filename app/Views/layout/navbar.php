<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/'); ?>"
                style="font-weight: bold; background-color: rgba(128, 128, 128, 0.029);"><img src="img/image.png"
                    style="width: 70px;" alt="logo"> Jídelna Tlumačov</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 40px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/'); ?>">Domů</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/jidelnicek'); ?>">Jídelníček</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/onas'); ?>">O Nás</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/nastym'); ?>">Náš tým</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/clanky'); ?>">Články</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Přihlášení
                        </a>
                        <ul class="dropdown-menu p-4" style="width: 250px;">
                            <h5 class="mb-3 text-center">Přihlášení</h5>
                            <form action="<?= base_url('prihlaseni'); ?>">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Uživatelské jméno" required>
                                    <label for="floatingInput">Uživatelské jméno</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Heslo" required>
                                    <label for="floatingPassword">Heslo</label>
                                </div>
                                <button type="submit" class="btn btn-secondary w-100">Přihlásit se</button>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>