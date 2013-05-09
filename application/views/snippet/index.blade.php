@layout('master')
@section('content')
	@foreach ($snippets as $snippet)
		<p>{{$snippet->title}} - <a href="/{{$snippet->base_id}}/edit" style="color:#ccc">edit</a></p>
		<pre>{{$snippet->code}}</pre>
	@endforeach
@endsection
