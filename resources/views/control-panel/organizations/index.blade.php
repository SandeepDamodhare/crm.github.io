@extends('layouts.index')

@section('heading')
  <x-buttons.anchor :href="route('organizations.create')" content="Create Company" color="success" />
@endsection

@section('table')
  <x-organizations.table :organizations="$organizations" />
@endsection
