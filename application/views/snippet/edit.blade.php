@layout('master')
@section('script')
	<script src="/js/vendor/cm/codemirror.js"></script>
	<script src="/js/vendor/cm/xml.js"></script>
	<script src="/js/vendor/cm/javascript.js"></script>
	<script src="/js/vendor/cm/css.js"></script>
	<script src="/js/vendor/cm/htmlmixed.js"></script>
	<script>
      // Define an extended mixed-mode that understands vbscript and
      // leaves mustache/handlebars embedded templates in html mode
      var mixedMode = {
        name: "htmlmixed",
        scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                       mode: null}]
      };
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {mode: mixedMode, theme:'twilight', lineNumbers:true, tabMode: "indent"});
    </script>
@endsection
@section('styles')
	<link rel="stylesheet" href="/css/vendor/cm/codemirror.css">
	<link rel="stylesheet" href="/css/vendor/cm/twilight.css">
	<style>
		label {display:block;}
		input[type='text'], textarea {display:block; box-sizing:border-box; width:100%;}
		.CodeMirror {min-height: 500px; border:1px solid #303030;}
		body {background: #262626; color:#eee;}
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
			{{Form::textarea('code', $snippet->code, array('placeholder' => 'Paste HTML'), array('id' => 'code'))}}
		</div>

		{{Form::hidden('active', false)}}
		{{Form::submit('Update Snippet')}}
	{{Form::close()}}
@endsection