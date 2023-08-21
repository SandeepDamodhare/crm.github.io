@props(['tasks'])

@if ($tasks->isEmpty())
  <div class="pt-3 pb-2">
    <h4 class="text-muted">No Quotations found.</h4>
  </div>
@else
  <div class="table-responsive">
    <table class="table-hover table align-middle">
      <thead>
        <tr>
          <th>Quotation Title</th>
          <th>Quotation Amount</th>
          <th>Contact</th>
          <th>Quote Date</th>
          <th>Next Follow-Up Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task)
          <tr>
            <td>{{ $task->title }}</td>
            <td><b>₹</b>{{ $task->Amount }}</td>
            <td>
              @isset($task->user)
                @can('view', $task->user)
                  <a href="{{ route('users.show', $task->user) }}">{{ $task->user->name }}</a>
                @else
                  <p class="my-auto">{{ $task->user->name }}</p>
                @endcan
              @else
                Deleted user
              @endisset
            </td>
            <td>{{ $task->created_at->toDateString() }}</td>
            <td>{{ $task->deadline->toDateString() }}</td>
            <td>{{ $task->status->name }}</td>
            <td>
              <div class="d-flex gap-1">
                @can('view', $task)
                  <x-buttons.anchor :href="route('tasks.show', $task)" content="Show" size="small" color="primary" />
                @endcan
                @can('update', $task)
                  <x-buttons.anchor :href="route('tasks.edit', $task)" content="Edit" size="small" color="warning" />
                @endcan
                @can('delete', $task)
                  <x-buttons.form :action="route('tasks.destroy', $task)" content="Delete" size="small" color="danger" />
                @endcan
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{ $tasks->links() }}
@endif
