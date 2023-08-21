@extends('layouts.form')

@section('title')
  Create
@endsection

@section('action')
  {{ route('users.store') }}
@endsection

@section('input-fields')
  @include('control-panel.users.partials.input-fields', [
      'user' => null,
      'organizations' => $organizations,
  ])
@endsection

@section('submit-button')
  <x-buttons.submit content="Create" color="success" />
@endsection
