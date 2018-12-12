@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @can('write posts')
                    <a class="btn btn-round btn-primary" href="{{ route('posts.create') }}">Create</a>
                @endcan
                <div class="card-header">Posts</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Title</th>
                                @role('admin|manager')
                                    <th>Operations</th>
                                @endrole
                            </thead>
                            <tbody>                    
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{       $post->id      }}</td>
                                        <td>{{       $post->title      }}</td>
                                        <td>
                                            <div class="row">
                                                @can('update posts')
                                                    <form method="GET" action="{{ route('posts.edit',[$post->id]) }}">  
                                                        {{ csrf_field() }}
                                                        <button class="btn btn-round btn-primary btn-sm" type="submit">Edit</button>                                             
                                                    </form>      
                                                @endcan
                                                &nbsp;&nbsp;
                                                @can('delete posts')
                                                    <button class="btn btn-round btn-primary btn-sm" onclick="showMessage({{$post->id}})">Delete</button>                                
                                                    <form id="{{$post->id}}" method="POST" action="{{ route('posts.delete',[$post->id]) }}">
                                                        <input type="hidden" name="_method" value="delete">                                    
                                                        {{ csrf_field() }}
                                                    </form> 
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 

    function showMessage(number)
    {
        var result = swal({
            title: "Are you sure?",
            text: "Do you wish to delete this Post?",
            icon: "warning",
            buttons: {
                confirm: {
                    text: "Confirm",
                    value: true
                },
                cancel: {
                    text: "Cancel",
                    value: false,
                    visible: true
                }                
            }
        })
        .then((value) => {
            if (value == true) {               
                document.getElementById(number).submit();                    
            } 
        });
    }

</script>   
@endsection
