@extends ('backend.layouts.app')

@section ('title', 'Edit Charity | '.app_name())'))

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{ route('admin.charities.index') }}">Manage Charities</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Charity</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="date-time clearfix">
                <div id="myTime" class="show-date">Tue Mar 28 2017</div>
                <div id="myTimeData" class="show-time"></div>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light no-padding-bottom">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase font-dark"><i class="fa fa-filter" aria-hidden="true"></i> Edit Charity</span>
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                    <div class="actions">
                        <a class="btn btn-icon-only btn-default fullscreen" href="#"> </a>
                    </div>
                </div>
                <div class="portlet-body widget-container" id="manage-user-widget1">
                    {!! Form::model($charitiesData,['route' => array('admin.charities.update',$charitiesData->id),'method' => 'put','id' => 'charity_form','files' => true]) !!}
                        @include('backend.charities.partials.add_edit_form', ['submitButton' => 'Update'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        `
        @endsection
        @section('after-scripts')
            <script>
                $(document).ready(function () {
                    $('#charity_form').validate({
                        errorClass: 'has-error',
                        rules:{
                            website_url :{
                                checkUrl : true
                            },
                        },
                    });

                    $(document).on("click", "#resetCharitied", function () {
                        $('#charity_form')[0].reset();
                        $(".reset-charity").val('').trigger("change");
                    });
                });
            </script>
@endsection
