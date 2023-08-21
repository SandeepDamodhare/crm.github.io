<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function index(Organization $organization)
    {
        $this->authorize('view', $organization);

        return view('control-panel.organizations.show.users', [
            'organization' => $organization,
            'users' => $organization->users()->latest()->paginate(10),
        ]);
    }
}
