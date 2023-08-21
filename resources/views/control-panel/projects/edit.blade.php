@extends('layouts.form')

@section('title')
  Edit Product / Service Type
@endsection

@section('action')
  {{ route('projects.update', $project) }}
@endsection

@section('method')
  @method('PUT')
@endsection

@section('input-fields')
  @include('control-panel.projects.partials.input-fields', [
      'project' => $project,
  ])
@endsection

@section('submit-button')
  <x-buttons.submit content="Update" color="warning" />
@endsection
