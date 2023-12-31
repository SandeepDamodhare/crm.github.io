<div class="list-group">
  <a class="list-group-item list-group-item-action @if ($activeOrganizationNav == 'clients') active @endif"
    href="{{ route('organizations.clients.index', $organization) }}">Customers</a>
  <a class="list-group-item list-group-item-action @if ($activeOrganizationNav == 'projects') active @endif"
    href="{{ route('organizations.projects.index', $organization) }}">Products</a>
  <a class="list-group-item list-group-item-action @if ($activeOrganizationNav == 'documents') active @endif"
    href="{{ route('organizations.documents.index', $organization) }}">Documents</a>
</div>
