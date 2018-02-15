@extends('layout')

@section('content')
<style>
h3:hover {cursor:pointer}
</style>
<div class="container">
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="bs-component">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header">
                                Required addons
                            </div>
                          <div class="card-body">
                            <p>
                              Required:
                              <ul>
                                <li><i class="fas fa-download"></i> <a href="">Deadly boss mod</a></li>
                                <li><i class="fas fa-download"></i> <a href="">Omen</a></li>
                                <li><i class="fas fa-download"></i> <a href="">Healbot</a> / <a href="">Grid</a></li>
                                <li><i class="fas fa-download"></i> <a href="">Recount</a></li>
                              </ul>
                              Suggested:
                              <ul>
                                <li><i class="fas fa-download"></i> <a href="">Gearscore</a></li>
                                <li><i class="fas fa-download"></i> <a href="">Atlasloot</a></li>
                                <li><i class="fas fa-download"></i> <a href="">Cheese</a></li>
                              </ul>
                            </p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
@endsection