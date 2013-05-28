@layout('master')
@section('style')
<style>
	.snippets a {
		color:#3498DB;
	}
	.snippets a:hover {
		color:#2980B9;
	}
</style>
@endsection
@section('content')
	<h1> Showing All the Latest Snippets </h1>	
	<ul class="snippets">
	@foreach ($snippets as $snippet)
		<li class="" tags="[{{$snippet->tags}}]">
			{{HTML::link_to_route('snippet', $snippet->title, $snippet->base_id, array('class' => 'title'))}} -
			<span class="btn-group">
				<a href="{{URL::to_route('edit_snippet', $snippet->base_id)}}" class="btn edit"><i class="fui-new-16"></i></a>
				<a href="{{URL::to_route('preview_snippet', $snippet->base_id)}}" class="btn preview"><i class="fui-eye-16"></i></a>
			</span>
		</li>
	@endforeach
	</ul>
@endsection
