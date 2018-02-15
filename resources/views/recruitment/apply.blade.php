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








<form method="post" action="">
  {{csrf_field()}}
  <fieldset>
    <div class="form-group row">
      <label for="charactername" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        {{Auth::user()->username}}
        <small id="charactername" class="form-text text-muted">Your discord name must match main in-game character name.</small>
      </div>
    </div>
    <div class="form-group row">
      <label for="class" class="col-sm-2 col-form-label">Class</label>
      <div class="col-sm-10">
          <select class="form-control form-control-sm" id="class" name="class">
            @foreach($classes as $class => $specs)
            <option {{old('class')==ucfirst($class)?'selected="selected"':""}}>{{ucfirst($class)}}</option>
            @endforeach
          </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="mainspec" class="col-sm-2 col-form-label">Mainspec</label>
      <div class="col-sm-4">
        <input class="form-control form-control-sm" name="mainspec" id="mainspec" value="{{old('mainspec')}}" type="text">
      </div>
      <label for="offspec" class="col-sm-2 col-form-label">Offspec</label>
      <div class="col-sm-4">
        <input class="form-control form-control-sm" name="offspec" id="offspec" value="{{old('offspec')}}" type="text">
      </div>
    </div>
 
     <div class="form-group row">
      <label for="available_on" class="col-sm-2 col-form-label">Raid days</label>
      <div class="col-sm-10">
        <select multiple="" class="form-control form-control-sm" id="available_on" name="available_on[]">
          <option {{old('available_on')&&in_array("Monday",old('available_on'))?'selected="selected"':""}}>Monday</option>
          <option {{old('available_on')&&in_array("Tuesday",old('available_on'))?'selected="selected"':""}}>Tuesday</option>
          <option {{old('available_on')&&in_array("Wednesday",old('available_on'))?'selected="selected"':""}}>Wednesday</option>
          <option {{old('available_on')&&in_array("Thursday",old('available_on'))?'selected="selected"':""}}>Thursday</option>
          <option {{old('available_on')&&in_array("Friday",old('available_on'))?'selected="selected"':""}}>Friday</option>
          <option {{old('available_on')&&in_array("Saturday",old('available_on'))?'selected="selected"':""}}>Saturday</option>
          <option {{old('available_on')&&in_array("Sunday",old('available_on'))?'selected="selected"':""}}>Sunday</option>
        </select>
        <small id="available_onHelp" class="form-text text-muted">Use <kbd>Ctrl+click</kbd> to select multiple days</small>
      </div>
    </div>
     <div class="form-group row">
      <label for="timezone" class="col-sm-2 col-form-label">Time zone</label>
      <div class="col-sm-10">
        <select class="form-control form-control-sm" id="timezone" name="timezone">
        @foreach(\DateTimeZone::listIdentifiers(\DateTimeZone::ALL) as $tzone)
         <option>{{$tzone}}</option>
        @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="additional_info">Any additional info (optional)</label>
      <textarea class="form-control form-control-sm" id="additional_info" name="additional_info" rows="3"></textarea>
    </div>
    <fieldset class="form-group">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" value="" checked="true" type="checkbox" id="terms" name="terms">
          I have read and agree to the guild rules.
        </label>
      </div>
    </fieldset>
    <button type="submit" class="btn btn-block btn-primary">Apply</button>
  </fieldset>
</form>







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
