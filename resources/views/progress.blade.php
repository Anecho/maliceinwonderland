@extends('layout')

@section('content')
<div class="container">
  <div class="bs-docs-section">
    <div class="row">
      @foreach($raids as $raid => $modes)
          @foreach($modes as $mode => $bosses)
              @if($mode == 10)                                     
      <div class="col-lg-6">
        <div class="bs-component">
          <div class="card text-white bg-primary mb-3">
            <div class="card text-white bg-dark mb-3">
              <div class="card-body" style="min-height:213px;background-image: url('{{$images[$raid]}}');background-size: cover;text-shadow: 1px 1px #000">
                  <h3>{{$raid}}</h3>
                  <div class="row">
                  @foreach($bosses as $boss => $data)
                    <div class="col-lg-6" style="font-size: 12px">
                      @can('ADMINISTRATOR')
                        <a href="{{url('/progress/toggle/'.$data['id'])}}" style="text-decoration: none">
                      @endcan
                      @if($data['done'])
                        <img width="12" title="dead" src="{{asset('wow_icons/boss.gif')}}"/>
                      @else
                        <i class="fa fa-spinner fa-spin"></i>
                      @endif
                      @can('ADMINISTRATOR')
                        </a>
                      @endcan
                        <a href="https://wotlk.evowow.com/?{{$data['npc_id']==181366?'object':'npc'}}={{$data['npc_id']}}" style="text-decoration:none;color:white">{{$boss}}</a>
                    </div>
                  @endforeach
                  </div>
              </div>
              <div class="card-footer">
                <div class="progress" style="width:100%">
                  <div class="progress-bar {{$color[$raid][$mode]}}" role="progressbar" style="width: {{$progress[$raid][$mode]}}%;" aria-valuenow="{{$progress[$raid][$mode]}}" aria-valuemin="0" aria-valuemax="100">
                  @if($kills[$raid][$mode] == count($bosses))
                      Full
                  @else
                      {{$kills[$raid][$mode]}} / {{count($bosses)}}
                  @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
              @endif
          @endforeach
      @endforeach

    </div>
  </div>
</div>
@endsection
