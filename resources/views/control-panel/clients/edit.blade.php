@extends('layouts.form')

@section('title')
  Edit Lead
@endsection

@section('action')
  {{ route('clients.update', $client) }}
@endsection

@section('method')
  @method('PUT')
@endsection

@section('input-fields')
  @include('control-panel.clients.partials.input-fields', [
      'client' => $client,
      'organizations' => $organizations,
  ])
@endsection

@section('submit-button')
  <x-buttons.submit content="Update" color="warning" />
@endsection
