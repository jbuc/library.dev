@layout('master')
@section('content')
	<h1> Showing All the Latest Snippets </h1>	
	@foreach ($snippets as $snippet)
		<p>{{$snippet->title}} - <a href="/{{$snippet->base_id}}/edit" style="color:#ccc">edit</a></p>
		<pre>{{$snippet->code}}</pre>
	@endforeach
@endsection
