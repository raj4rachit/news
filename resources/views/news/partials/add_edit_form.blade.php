 {!! Form::hidden('id',isset($charitiesData->id) ? $charitiesData->id : '') !!}

 <div class="form-body">
     <div class="row">
         <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <div class="input-group" title="Title">
                    <span class="input-group-addon no-bg"><i class="fa fa-external-link blue-color"></i></span>
                    {!! Form::text('title',old('title') ? old('title') : isset($charitiesData->title) ? $charitiesData->title : '',['class' => 'form-control','id'=>'title','placeholder'=>"Title *",'required'=>'required']) !!}
                </div>
            </div>
        </div>
         <div class="col-md-6 col-lg-4">
             <div class="form-group">
                 <div class="input-group" title="Title">
                     <span class="input-group-addon no-bg"><i class="fa fa-external-link blue-color"></i></span>
                     {!! Form::text('summary',old('summary') ? old('summary') : isset($charitiesData->summary) ? $charitiesData->summary : '',['class' => 'form-control','id'=>'summary','placeholder'=>"Summary *",'required'=>'required']) !!}
                 </div>
             </div>
         </div>
         <div class="col-md-6 col-lg-4">
             <div class="form-group">
                 <div class="input-group" title="Title">
                     <span class="input-group-addon no-bg"><i class="fa fa-external-link blue-color"></i></span>
                     <textarea class="" name="description" required>{{old('description') ? old('description') : isset($charitiesData->description) ? $charitiesData->description : ''}}</textarea>
                 </div>
             </div>
         </div>
         <div class="col-md-6 col-lg-4">
             <div class="form-group">
                 <div class="input-group" title="Title">
                     <span class="input-group-addon no-bg"><i class="fa fa-external-link blue-color"></i></span>
                     {!! Form::text('publish_date',old('publish_date') ? old('publish_date') : isset($charitiesData->publish_date) ? $charitiesData->publish_date : '',['class' => 'form-control','id'=>'publish_date','placeholder'=>"Publish Date *",'required'=>'required']) !!}
                 </div>
             </div>
         </div>
         <div class="col-md-6 col-lg-4">
             <div class="form-group">
                 <div class="input-group" title="Title">
                     <span class="input-group-addon no-bg"><i class="fa fa-external-link blue-color"></i></span>
                     {!! Form::text('expiry_date',old('expiry_date') ? old('expiry_date') : isset($charitiesData->expiry_date) ? $charitiesData->expiry_date : '',['class' => 'form-control','id'=>'expiry_date','placeholder'=>"Expiry Date *",'required'=>'required']) !!}
                 </div>
             </div>
         </div>
         <div class="col-md-6 col-lg-4">
             <div class="form-group">
                 <div class="input-group" title="Title">
                     <span class="input-group-addon no-bg"><i class="fa fa-external-link blue-color"></i></span>
                     {!! Form::file('image',['class' => 'form-control','id'=>'image','placeholder'=>"Upload Image *",'required'=>'required']) !!}
                 </div>
             </div>
         </div>

         <div class="col-lg-4 col-md-4">
             <div class="form-group">
                 {!! Form::submit($submitButton,['class' => 'btn blue custom-filter-submit'])!!}
                 <button class="btn default custom-filter-cancel" data-dismiss="modal" type="reset" name="btnReset" id="resetCharitied">Reset</button>
                 <a  href="{{route('news.index')}}" class="btn default custom-filter-cancel">Cancel </a>
             </div>
         </div>
     </div>
 </div>
 <div class="clearfix"></div>
