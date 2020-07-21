@extends('layouts.app')

@section('title', __('Tracking App'))

@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    User Management <small class="text-muted">Active</small>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-brand btn-elevate btn-icon-sm" title="@lang('labels.general.create_new')">
                            <i class="la la-plus"></i>
                            New User
                        </a>
                    </div><!--btn-toolbar--> 
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="users-table-container">
                <table class="table table-striped- table-bordered table-hover table-checkable table-data_table" >
                    <thead>
                        <tr>
                            <th>@lang('First Name')</th>
                            <th>@lang('Last Name')</th>
                            <th>@lang('Email')</th>
                            <th>@lang('Confirmed')</th>
                            <th>@lang('Active')</th>
                            <th>@lang('Role')</th>
                            <th>@lang('Last Updated')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>@include('admin.user.includes.confirm', ['user' => $user])</td>
                            <td>@include('admin.user.includes.active', ['user' => $user])</td>
                            <td>{!! $user->roles_label !!}</td>
                            <td>{{ $user->updated_at->diffForHumans() }}</td>
                            <td>@include('admin.user.includes.actions', ['user' => $user])</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination" style="margin-left:auto">
                {{-- {{ $users->links() }} --}}
            </div>
        </div>
    </div>
</div>
<!-- end:: Content -->
@endsection