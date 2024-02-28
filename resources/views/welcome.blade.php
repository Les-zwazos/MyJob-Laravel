
@extends("front.layouts.app")

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
    <div class="container">
        <a class="navbar-brand" href="">MyJob</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Stage</a>
                </li>
            </ul>
            <a class="btn btn-outline-info me-2" href="{{ route('login') }}" type="submit">Login</a>
            <a class="btn btn-info" href="{{ route('register') }}" type="submit">Register</a>
        </div>
    </div>
</nav>
            @section('main')
            <section class="section-0 lazy d-flex bg-image-style dark align-items-center "  class="" data-bg="{{ asset('assets/images/banner5.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-8">
                            <h1>Trouver votre travail de reve</h1>
                            <p>Des emplois et stages</p>
                            <div class="banner-btn mt-5"><a href="#" class="btn btn-info mb-4 mb-sm-0">Explorer maintenant</a></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-1 py-5 ">
                <div class="container">
                    <div class="card border-0 shadow p-5">
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="mot cle">
                                </div>
                                <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                                    <input type="text" class="form-control" name="location" id="location" placeholder="Localisation">
                                </div>
                                <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                                    <select name="category" id="category" class="form-control">
                                        <option value="">Selectionner categorie</option>
                                    </select>
                                </div>

                                <div class=" col-md-3 mb-xs-3 mb-sm-3 mb-lg-0">
                                    <div class="d-grid gap-2">
                                        {{-- <a href="jobs.html" class="btn btn-primary btn-block">Search</a> --}}
                                        <button type="submit" class="btn btn-info btn-block">Search</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
    </body>
</html>
