<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tabelioes.index') }}">Tabeliões</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('certidoes.index') }}">Certidões</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contratos.index') }}">Contratos</a>
            </li>
        </ul>
    </div>
</nav>