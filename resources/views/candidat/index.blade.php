@extends("front.layouts.app")
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
