<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: blue">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Toy Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=product">All product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?page=category&category_name=Cardfight Vanguard">Cardfight Vanguard</a></li>
                        <li><a class="dropdown-item" href="index.php?page=category&category_name=YuGiOh">YuGiOh</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=customer">Customer List</a>
                </li>
            </ul>
            <form class="d-flex" method="post" action="index.php?page=search">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav><?php
