<div class="modal fade" id="edit{{$user->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Edit user</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                {!! Form::model($users, [ 'method' => 'patch','route' => ['user.update', $user->id] ]) !!}
                    <div class="mb-3">
                        {!! Form::label('name', 'name') !!}
                        {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('email', 'email') !!}
                        {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('password', 'password') !!}
                        {!! Form::text('password', $user->password, ['class' => 'form-control']) !!}
                    </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>
 
<!-- Delete Modal -->
<div class="modal fade" id="delete{{$user->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Delete user</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::model($users, [ 'method' => 'delete','route' => ['user.delete', $user->id] ]) !!}
                <h4 class="text-center">Are you sure you want to delete user?</h4>
                <h5 class="text-center">Name: {{$user->name}} Email:{{$user->email}}</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>