@layout('master')
@section('content')
	<h1> Showing All the Latest Snippets </h1>	
	@foreach ($snippets as $snippet)
		<p><a href="/{{$snippet->base_id}}" style="color:#ccc">{{$snippet->title}}</a> - <a href="/{{$snippet->base_id}}/edit" style="color:#ccc">edit</a></p>
	@endforeach
@endsection
