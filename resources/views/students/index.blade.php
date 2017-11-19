@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post New </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="savestudent">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="student_id" class="col-md-4 control-label">MSSV</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="student_id" required focus>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" required focus>
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" required focus>
                            </div>
                        </div>

                           <div class="form-group">
                            <label for="goal" class="col-md-4 control-label">Goal</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="goal" required focus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
