@extends ('layouts.app')

@section ('title', 'Add Charity')

@section('content')
    

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light no-padding-bottom">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase font-dark"><i class="fa fa-filter" aria-hidden="true"></i> Add News</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-icon-only btn-default fullscreen" href="#"> </a>
                    </div>
                    
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body widget-container" id="manage-user-widget1">
                    {!! Form::model($charitiesData,['route' => array('news.store',1),'method' => 'post','id' => 'charity_form','files' => true]) !!}
                        @include('news.partials.add_edit_form', ['submitButton' => 'Create'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
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