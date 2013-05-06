@layout('master')

@section('content')
	{{Form::open('/snippets')}}
		<div class="formWrapper">
			<div class="inputGroup title">
				{{-- Form::label('title', 'Snippet Name')}}
				{{Form::text('title', '', array('placeholder' => 'Snippet Name'))}}
			</div>
			<div class="inputGroup tags">
				{{-- Form::label('tags', 'Shop Record Name')}}
				{{Form::text('tags', '', array('placeholder' => 'tags, separated by, comma'))}}
			</div>
			<div class="inputGroup url">
				{{-- Form::label('url', 'Example URL')}}
				{{Form::text('url', '', array('placeholder' => 'Example URL'))}}
			</div>
			<div class="inputGroup shoprecord">
				{{-- Form::label('shoprecord', 'Shop Record Name')}}
				{{Form::text('shoprecord', '', array('placeholder' => 'Shop Record Name'))}}
			</div>
		</div>
		<div class="code">
			{{-- Form::label('code', 'Paste HTML')}}
			{{Form::textarea('code', '', array('placeholder' => 'Paste HTML'))}}
		</div>

		{{Form::hidden('Activate', 'inactive')}}
		{{Form::submit('Create Snippet')}}
	{{Form::close()}}
@endsection