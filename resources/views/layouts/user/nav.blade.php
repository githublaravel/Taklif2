<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container p-2">
        <a class="navbar-brand" href="javascript:void(0)">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <div class="dropdown">
                    <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown">
                        Categories
                    </button>
                    <div class="dropdown-menu">
                        @foreach ($cats as $cat)
                            <a class="dropdown-item" href="/home/products/{{$cat->id}}">{{ $cat->name }}</a>
                        @endforeach
                    </div>
                </div>
            </ul>
            <form class="d-flex" action="">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
            </form>
        </div>
    </div>
</nav>
