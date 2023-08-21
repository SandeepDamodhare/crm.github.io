@extends('layouts.form')

@section('title')
  Edit Company
@endsection

@section('action')
  {{ route('organizations.update', $organization) }}
@endsection

@section('method')
  @method('PUT')
@endsection

@section('input-fields')
  @include('control-panel.organizations.partials.input-fields', [
      'organization' => $organization,
  ])
@endsection

@section('submit-button')
  <x-buttons.submit content="Update" color="warning" />
@endsection
