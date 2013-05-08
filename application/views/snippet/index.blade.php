@layout('master')
@section('content')
	@foreach ($snippets as $snippet)
		<p>{{$snippet->title}} - <a href="{{$snippet->url}}" style="color:#ccc">preview</a></p>
		<pre>{{$snippet->code}}</pre>
	@endforeach
@endsection
