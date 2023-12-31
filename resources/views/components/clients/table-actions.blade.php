@can('create', App\Models\Client::class)

<div {{ $attributes->merge([
    'class' => 'd-flex justify-content-between',
]) }}>
  <x-buttons.anchor :href="route('clients.create')" content="Create Customer" color="success" />
</div>
@endcan
