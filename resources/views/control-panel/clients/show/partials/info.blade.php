<div class="card">
  <div class="card-body d-flex pt-4">
    <div class="col-4 pe-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Name</h6>
        <h2 class="card-subtitle">{{ $client->name }}</h2>
      </div>
      <div>
        @can('update', $client)
          <x-buttons.anchor :href="route('clients.edit', $client)" content="Edit" size="small" color="warning" class="my-1" />
        @endcan
      </div>
    </div>
    <div class="col-3 px-3">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Email</h6>
        <h6 class="card-subtitle"><p style="color:blue;">{{ $client->email }}</h6>
      </div>
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Phone</h6>
        <h6 class="card-subtitle"><p style="color:blue;">{{ $client->phone }}</h6>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1">Address</h6>
        <h6 class="card-subtitle"><p style="color:blue;">{{ $client->address }}</h6>
      </div>
    </div>
  </div>
</div>
