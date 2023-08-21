<div class="card">
  <div class="card-body d-flex pt-4">
    <div class="col-3 pe-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Company</b></h6>
        <h2 class="card-subtitle">{{ $organization->name }}</h2>
      </div>
      <div>
        @can('update', $organization)
          <x-buttons.anchor :href="route('organizations.edit', $organization)" content="Edit Company" size="small" color="warning" class="my-1" />
        @endcan
        @can('delete', $organization)
          <x-buttons.form :action="route('organizations.destroy', $organization)" content="Delete Company" size="small" color="danger" class="my-1" />
        @endcan
      </div>
    </div>
    <div class="col-2 px-3">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Address</b></h6>
        <h6 class="card-subtitle">{{ $organization->address }}</h6>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1"><b>Website</b></h6>
        <h6 class="card-subtitle">
          <a href="{{ $organization->website }}">Link</a>
        </h6>
      </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-body d-flex pt-4">
    
      <div class="mb-3">
      <h6 class="card-subtitle text-muted mb-1"><center><h2 style="color:blue;"><b>Company Description</b></h2></center></h6>
      <p class="card-subtitle"><h2 style="color:black;">{{ $organization->description }}</h2></p>

  </div>
 </div>
</div>

