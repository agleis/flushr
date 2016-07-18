@extends('layouts.prelogin')

@section('head')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYmxJX9tfQEhJsbAjQViXzm83l4pixEkQ&libraries=places&callback=initAutocomplete" async defer></script>
@endsection

@section('content')
  <div class="row">
    <div class="col-xs-3"></div>
    <div class="col-xs-6 contact-form">
      <h1>Contact the Flushr Team</h1>
      @if(Session::has('success-message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{Session::get('success-message')}}
        </div>
      @endif
      {!! Form::open(['method' => 'POST', 'route' => 'contactUs']) !!}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              {!! Form::label('email', 'Email: ', ['class' => 'prelogin-form']) !!}<span class="text-danger glyphicon glyphicon-asterisk"></span>
              {!! Form::text('email', null, ['class' => 'form-control prelogin-form', 'required' => 'required']) !!}
              <small class="text-danger">{{ $errors->first('email') }}</small>
          </div>

          <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
              {!! Form::label('message', 'Message: ', ['class' => 'prelogin-form']) !!}<span class="text-danger glyphicon glyphicon-asterisk"></span>
              {!! Form::textarea('message', null, ['class' => 'form-control prelogin-form', 'required' => 'required']) !!}
              <small class="text-danger">{{ $errors->first('message') }}</small>
          </div>

          <div class="btn-group pull-right">
              {!! Form::submit("Contact Us", ['class' => 'btn btn-primary']) !!}
          </div>
      {!! Form::close() !!}
    </div>
    <div class="col-xs-3"></div>
  </div>

@endsection
