<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
                <div class="modal-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                    <div class="form-group">
                        <strong>Name:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','required' => true)) !!}
                        </div>
                        <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control','required' => true)) !!}
                    </div>
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','required' => true)) !!}
                    </div>
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control','required' => true)) !!}
                    </div>
                    @php
                        $roles = \Spatie\Permission\Models\Role::pluck('name','name')->all();
                    @endphp
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control', 'placeholder' => 'Choose Role','required' => true)) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>