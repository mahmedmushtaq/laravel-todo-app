@extends("layouts.app")

@section("title")

{{$todo->name}}
@endsection

@section("content")

 <h1 class="text-center my-5">{{$todo->name}}</h1>


 <div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card card-default">
      <div class="card-header">
        Details
      </div>

      
      <div class="card-body">
   
        {{ $todo->description }}
   
      </div>
    </div>
    @if(!$todo->completed)
    <a  href="/todos/{{$todo->id}}/edit" class="btn btn-info my-2">Edit</a>
    <a  href="/todos/{{$todo->id}}/delete" class="btn btn-danger my-2">Delete</a>
    <a  href="/todos/{{$todo->id}}/completed" class="btn btn-info my-2">I have completed My Todo</a>
  

    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     Complete My Todo
    </button> -->

 
 


    @endif
  </div>
</div>

 </div>

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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



 <!-- <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Complete My Todo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are you sure you have completed your todo?


      </div>
      <div class="modal-footer">
     
        
      </div>
    </div>
  </div>
</div> -->


 @endsection
 
 
