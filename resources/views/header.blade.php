<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid m-2">
        <a class="navbar-brand" href="#">E-com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav  pe-4">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order</a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <form action="/search" class="d-flex" role="search">
                <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Cart </a>
            </li>
        </ul>

    </div>
</nav>