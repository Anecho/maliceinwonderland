@extends('layout')

@section('content')
<div class="container">
    <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="bs-component">
              <div class="card text-white bg-primary mb-3">
                <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                  <h4 class="card-title">Guild application</h4>
                  <p class="card-text">
                    Hello, I am a <abbr title="">{{$application->class}}</abbr> named <abbr title="">{{$application->user->username}}</abbr>. I am usually playing as <abbr title="">{{$application->mainspec}}</abbr>, but sometimes roll to <abbr title="">{{$application->offspec}}</abbr> for fun. I am available for raids on <abbr title="">{{implode(', ',json_decode($application->available_on))}}</abbr>. I live in <abbr title="">{{$application->timezone}}</abbr>. <abbr title="">{{$application->additional_info}}</abbr><br>That's probably it.
                  </p>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
@endsection
