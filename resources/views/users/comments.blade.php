    @foreach($comments as $comm)
        	Posted On: {{$comm->created_at}}
    		{{$comm->comment}}
    @endforeach