@extends('layouts.form')

@section('title')
  Edit Quotation
@endsection

@section('action')
  {{ route('tasks.update', $task) }}
@endsection

@section('method')
  @method('PUT')
@endsection

@section('input-fields')
  @include('control-panel.tasks.partials.input-fields', [
      'task' => $task,
  ])
@endsection

@section('submit-button')
  <x-buttons.submit content="Update" color="warning" />
@endsection
