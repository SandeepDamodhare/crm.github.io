<div class="card">
  <div class="card-body d-flex pt-4">
    <div class="col-3 pe-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1"><b>Quotation title</b></h6>
        <h2 class="card-subtitle">{{ $task->title }}</h2>
      </div>
      <div>
        @can('update', $task)
          <x-buttons.anchor :href="route('tasks.edit', $task)" content="Edit Quotation" size="small" color="warning" class="my-1" />
        @endcan
      </div>
    </div>
    <div class="col-2 px-3">
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1"><b>Contact</b></h6>
        <h6 class="card-subtitle">
          @isset($task->user)
            @can('view', $task->user)
              <a href="{{ route('users.show', $task->user) }}">{{ $task->user->name }}</a>
            @else
              <p class="my-auto">{{ $task->user->name }}</p>
            @endcan
          @else
            Deleted Lead
          @endisset
        </h6>
      </div><p>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1"><b>Quote Date</b></h6>
        <h6 class="card-subtitle">{{ $task->created_at->toDateString() }}</h6>
      </div></p>
  </div>
    <div class="col-2 px-3">
      <div class="align-bottom">
      <h6 class="card-subtitle text-muted mb-1"><b>Amount</b></h6>
      <p class="card-subtitle"><b>₹</b>{{ $task->Amount }}</p>
    </div><p>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1"><b>Status</b></h6>
        <h6 class="card-subtitle">{{ $task->status->name }}</h6>
      </p></div>
    </div>
<div class="col-2 px-3">
   <div class="mb-3">
      <h6 class="card-subtitle text-muted mb-1"><b>Next Follow-Up Date</b></h6>
      <x-forms.date name="deadline" :value="optional(optional($task)->deadline)->toDateString()" />
      </div>      <div class="align-bottom">
      <h6 class="card-subtitle text-muted mb-1"><b>Note</b></h6>
      <x-forms.textarea name="Note"  style="background-color:black;color:white;padding:20px;" :value="optional($task)->Note" /></a>
      </div>
   </div>
</div>
  <div class="card">
    <div class="card-body d-flex pt-4">
      <h6 class="card-subtitle text-muted mb-1"><center><h2 style="color:blue;"><b>Quotation Description</b></center></h2></h6>
    </div>
  </div>
     <x-forms.textarea name="Quotation Description"  style="background-color:black;color:white;padding:200px;" :value="optional($task)->description" /></a>
</div>
