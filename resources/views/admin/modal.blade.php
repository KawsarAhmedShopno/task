<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="addnewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
      
            <h5 class="modal-title" id="addnewModalLabel">Add New user</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>  
        <div class="modal-body">
                {!! Form::open(['url' => 'save']) !!}
                    <div class="mb-3">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Input name', 'required']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Input Email', 'required']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('password', 'PASSWORD') !!}
                        {!! Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Input password', 'required']) !!}
                    </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>