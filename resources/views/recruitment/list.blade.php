@extends('layout')

@section('content')
<div class="container">
    <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Recruitment</h4>
                  <p class="card-text">
                    <table class="col-sm-12">
                        @foreach($classes as $class => $specs)
                        <tr>
                            <td class="col-sm-8 text-uppercase" style="padding: 0px;color: {{$color[$class]}}">{{$class}}</td>
                            @if(count($specs)<=3) <td></td> @endif
                            @foreach($specs as $spec)
                            <td>
                                @can('ADMINISTRATOR')
                                  <a href="{{url('/recruitment/toggle/'.$spec->id)}}" style="text-decoration: none">
                                @endcan
                                <img
                                    src="/wow_icons/specs/{{$class}}/{{$spec->name}}.jpg"
                                    alt="{{$spec->name}}"
                                    title="{{$spec->name}}"
                                    width="23px"
                                    height="23px"
                                    style="border: 1px solid {{$color[$class]}};{{!$spec->recruiting?'opacity: .3':''}}"
                                />
                                @can('ADMINISTRATOR')
                                  </a>
                                @endcan
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </table>
                  </p>
                  @cannot('SPEAK')
                  <p>
                    <a class="btn btn-block btn-outline-primary" href="/apply">Apply</a>
                  </p>
                  @endcan
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection
