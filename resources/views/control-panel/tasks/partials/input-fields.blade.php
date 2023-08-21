<div class="mb-3">
  <x-forms.text name="title" label="Title" :value="optional($task)->title" />
</div>
<div class="mb-3">
  <x-forms.select name="status_id" label="Status" :options="$statuses" :selected="optional($task)->status_id" />
</div>
<div class="mb-3">
  <x-forms.select name="user_id" label="Lead" :options="$users" :selected="optional($task)->user_id" />
</div>
<div class="mb-3">
  <x-forms.date name="deadline" label="Next Follow-Up Date" :value="optional(optional($task)->deadline)->toDateString()" />
</div>
<div class="mb-3">
  <x-forms.textarea name="description" label="Description" :value="optional($task)->description" />
</div>
<div class="mb-3">
  <x-forms.textarea name="Amount" label="Amount" :value="optional($task)->Amount" />
</div>
<div class="mb-3">
  <x-forms.textarea name="Note" label="Note" :value="optional($task)->Note" />
</div>
