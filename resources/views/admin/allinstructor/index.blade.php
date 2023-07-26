@extends('admin.layouts.master')
@section('title', 'All Instructors - Admin')
@section('maincontent')
<?php
$data['heading'] = 'All Instructors';
$data['title'] = 'All Instructors';
?>
@include('admin.layouts.topbar',$data)
<div class="contentbar">                
    <!-- Start row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card dashboard-card m-b-30">
        <div class="card-header all-user-card-header">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false" title="{{ __('All Instructors') }}">{{ __('All Instructors') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" title="{{ __('Pending Instructors Request') }}">{{ __('Pending Instructors Request') }}</a>
            </li>
          </ul>
        </div>
        <div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="all-user-menu">
              <div class="row">
                <div class="col-lg-4">
                    <h5 class="box-title">{{ __('All Instructors') }}</h5>
                </div>
                <div class="col-lg-8 text-right menus-button">
                  <form method="post" action="{{ action('BulkdeleteController@instructorrequestdeleteAll') }}" id="bulk_delete_form" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <a href="#" class="btn btn-danger-rgba"  data-toggle="modal" data-target=".bd-example-modal-sm1" title="{{ __('Delete Selected') }}"><i class="feather icon-trash mr-2"></i>{{ __('Delete Selected') }}</a>
                  </form>
                  <!-- Rest of the code ... -->
                </div>
              </div>
            </div>
            <!-- Rest of the code ... -->
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="col-lg-8 text-right">
              <form method="post" action="{{ url('requestinstructor/delete-all-pending') }}" id="bulk_delete_pending_form" data-parsley-validate class="form-horizontal form-label-left">
                {{ csrf_field() }}
                <a href="#" class="btn btn-danger-rgba"  data-toggle="modal" data-target=".bd-example-modal-sm2"><i class="feather icon-trash mr-2"></i>{{ __('Delete Selected') }}</a>
              </form>
              <!-- Rest of the code ... -->
            </div>
            <!-- Rest of the code ... -->
          </div>
        </div>
      </div>
      <!-- End col -->
  </div>
  <!-- End row -->
</div>        
@endsection

@section('scripts')
<script>
  // You can add your JavaScript code here, if needed
</script>
@endsection
