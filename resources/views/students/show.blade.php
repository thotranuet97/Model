@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Article</div>

                <div class="panel-body">
                
                  <table class="table table-striped" align="center" border="2px">
                    <thead>
                      <tr>
                         <td align="center" width="20%"> <b>MSSV</b>    </td>
                         <td align="center" width="30%"> <b>Name </b>  </td>
                         <td align="center" width="30%"> <b>Address</b></td>
                         <td align="center" width="30%"> <b>Goal  </b>  </td>
                      </tr> 
                    </thead>
                      <tbody>
                  @foreach($students as $student)
                  
                      <tr>  
                        <td align="center" width="20%">{{ $student->student_id}}  </td>  
                        <td align="center" width="30%">{{ $student->name}} </td>
                        <td align="center" width="30%">{{ $student->address}} </td>
                        <td align="center" width="30%">{{ $student->goal}} </td>  
                      </tr> 
                    
                  
                  @endforeach
                  </tbody>
                  <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 