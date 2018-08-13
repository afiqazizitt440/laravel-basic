@extends('layouts.app')
@include('inc.cdn')
@section('content')
	<h2>report</h2>
	<div class="container"> 
		<div class="row">
	    <div class="col-sm-2">	
	    </div>
	    <div class="col-sm-8">

	      	{!! Form::open(['url' => 'report/submit']) !!}
		    	<div class="form-group">
		    		{{Form::label('name', 'name')}}
		    		{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'enter name'])}}
		    	</div>
		    	<div class="form-group">
		    		{{Form::label('name', 'E-Mail Address')}}
		    		{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'enter email'])}}
		    	</div>
		    	<div class="form-group">
		    		{{Form::label('report', 'Report')}}
		    		{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'enter message'])}}
		    	</div>
		    	<div class="form-group dropdown" id="dropdown1">
		    		{{Form::label('report', 'Category : ')}}
		    		{{Form::select('category', ['L' => 'Large ', 'S' => 'Small'], null, ['class' => 'btn btn-muted dropdown-toggle','placeholder' => 'Pick a Category...'])}}
		    	</div>
		    		{{Form::label('phase', '')}}
		    	<div class="form-group checkbox-inline" id="dropdown1">
		    		{{Form::label('phase1', 'Phase 1  ')}}&nbsp&nbsp&nbsp{{Form::checkbox('phase', 'p1', false)}}<br>
		    		{{Form::label('phase1', 'Phase 2  ')}}&nbsp&nbsp&nbsp{{Form::checkbox('phase', 'p2', false)}}
		    	</div>
		    	<div class="form-group checkbox-inline" id="dropdown1">
		    		{{Form::label('phase1', 'Action  ')}}<br>
		    		{{Form::label('phase1', 'Action 1  ')}}&nbsp&nbsp&nbsp{{Form::radio('action', 'a1', true)}}<br>
		    		{{Form::label('phase1', 'Action 2  ')}}&nbsp&nbsp&nbsp{{Form::radio('action', 'a2', true)}}
		    	</div>
		    	<div class="form-group checkbox-inline" id="dropdown1">
			    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
					  Launch demo modal
					</button>
				</div>
		    	<div>
		    		{{Form::submit('submit', ['class' => 'btn btn-primary'])}}
		    	</div>
			{!! Form::close() !!}
	    </div>
	    <div class="col-sm-2">
	    </div>
	  </div>

		
	</div>

@endsection


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>