@extends('layouts.form')

@section('title')
  Edit Lead
@endsection

@section('action')
  {{ route('users.update', $user) }}
@endsection

@section('method')
  @method('PUT')
@endsection

@section('input-fields')
  @include('control-panel.users.partials.input-fields', [
      'user' => $user,
      'organizations' => $organizations,
  ])
@endsection

@section('submit-button')
  <x-buttons.submit content="Update" color="warning" />
@endsection
