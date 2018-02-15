@extends('layout')

@section('content')
<div class="container">
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="bs-component">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header">
                                Applications
                            </div>
                            <div class="card-body">
                              <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade show active" id="home">
                                  @forelse($applications as $application)
                                    @if($loop->first)
                                  <table class="table table-sm">
                                    @endif
                                    <tr>
                                      <td scope="row"><a href="" class="btn btn-sm btn-success">✔</a><a href="" class="btn btn-sm btn-danger">✗</a></td>
                                      <td scope="row">{{$application->user->username}}</td>
                                      <td>
                                        Hello, I am a <abbr title="">{{$application->class}}</abbr> named <abbr title="">{{$application->user->username}}</abbr>. I am usually playing as <abbr title="">{{$application->mainspec}}</abbr>, but sometimes roll to <abbr title="">{{$application->offspec}}</abbr> for fun. I am available for raids on <abbr title="">{{implode(', ',json_decode($application->available_on))}}</abbr>. I live in <abbr title="">{{$application->timezone}}</abbr>. <abbr title="">{{$application->additional_info}}</abbr><br>That's probably it.
                                      </td>
                                    </tr>
                                    @if($loop->last)
                                  </table>
                                    @endif
                                  @empty
                                  <div>No active aplications at the moment.</div>
                                  @endforelse
                                </div>
                              </div>
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
