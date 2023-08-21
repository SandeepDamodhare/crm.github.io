<div class="card">
  <div class="card-body d-flex pt-4">
    <div class="col-4 pe-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Name</h6>
        <h2 class="card-subtitle"><p style="color:blue;">{{ $user->name }}</h2></b>
      </div>
      <div>
        @can('update', $user)
          <x-buttons.anchor :href="route('users.edit', $user)" content="Edit" size="small" color="warning" class="my-1" />
        @endcan
      </div>
    </div>
    <div class="col-3 px-3">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Email</h6>
        <h6 class="card-subtitle"><p style="color:blue;"><b>{{ $user->email }}</h6></b>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1"><b>Phone</h6>
        <h6 class="card-subtitle"><p style="color:blue;">{{ $user->phone }}</h6>
      </div>
    </div>
    <div class="ps-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Address</h6>
        <h6 class="card-subtitle"><p style="color:blue;">{{ $user->address }}</h6>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-body d-flex pt-4">
    <div class="col-4 pe-2">
    <div class="ps-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><h1 style="color:black;">Other Details :</h6>
      </div>
    </div>
    </div>
    <div class="ps-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Work Details</h6>
        <h6 class="card-subtitle"><p style="color:blue;">{{ $user->workdetails }}</h6></h3>
      </div>
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Work Description</h6>
        <h6 class="card-subtitle"><p style="color:blue;">{{ $user->workdescription}}</h6>
      </div>
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Work Location</h6>
        <h6 class="card-subtitle"><p style="color:blue;">{{ $user->worklocation }}</h6>
      </div>
      <div class="align-bottom">
      <h6 class="card-subtitle text-muted mb-1"><b>Source of Mode</h6>
      <h6 class="card-subtitle">
        @can('view', $user->organization)<p style="color:blue;">
          {{ $user->organization->name }}</a>
        @else
          <p class="my-auto">{{ $user->organization->name }}</p>
        @endcan
      </h6></b>
     </div>
    </div>
  </div>
</div>