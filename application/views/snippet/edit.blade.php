@layout('master')
@section('styles')
	<style>
		label {display:block;}
		input[type='text'], textarea {display:block; box-sizing:border-box; width:100%;}
	</style>
@endsection
@section('content')
	<h1>Edit snippet: {{$snippet->title}}</h1>
	{{Form::open("/$snippet->base_id")}}
		<div class="formWrapper">
			<div class="inputGroup title">
				{{Form::label('title', 'Snippet Name')}}
				{{Form::text('title', $snippet->title, array('placeholder' => 'Snippet Name'))}}
			</div>
			<div class="inputGroup tags">
				{{Form::label('tags', 'Shop Record Name')}}
				{{Form::text('tags', $snippet->tags, array('placeholder' => 'tags, separated by, comma'))}}
			</div>
			<div class="inputGroup url">
				{{Form::label('url', 'Example URL')}}
				{{Form::text('url', $snippet->url, array('placeholder' => 'Example URL'))}}
			</div>
			<div class="inputGroup shoprecord">
				{{Form::label('shoprecord', 'Shop Record Name')}}
				{{Form::text('shoprecord', $snippet->shoprecord, array('placeholder' => 'Shop Record Name'))}}
			</div>
		</div>
		<div class="code">
			{{Form::label('code', 'Paste HTML')}}
			{{Form::textarea('code', $snippet->code, array('placeholder' => 'Paste HTML'))}}
		</div>

		{{Form::hidden('active', false)}}
		{{Form::submit('Update Snippet')}}
	{{Form::close()}}
@endsection