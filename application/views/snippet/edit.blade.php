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

	  	var setHeight = function(el){
			el.height($(window).height() - 350);
		}

		setHeight($('.CodeMirror'));

		$(window).resize(function(){
			setHeight($('.CodeMirror'));			
		});
    </script>
@endsection
@section('styles')
	<link rel="stylesheet" href="/css/vendor/cm/codemirror.css">
	<link rel="stylesheet" href="/css/vendor/cm/twilight.css">
	<style>
		.finalBtns {position: fixed; top:1rem; right:1rem;z-index: 999;}
		label {display:block;color:#777;}
		input[type="text"] {color:#607392;}
		input[type="text"]:focus {border-color:#607392;}
		input[type='text'], textarea {display:block; box-sizing:border-box; width:98%; height:auto;}
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
			{{Form::textarea('code', $snippet->code, array('placeholder' => 'Paste HTML', 'id' => 'code'))}}
		</div>

		{{Form::hidden('active', false)}}
		<div class="finalBtns btn-group">
			{{Form::submit('Update Snippet', array('class' => 'btn', 'id' => 'submitBtn'))}}			
			<a href="{{URL::to_route('edit_snippet', $snippet->base_id)}}" class="btn edit"><i class="fui-new-16"></i></a>
			<a href="{{URL::to_route('preview_snippet', $snippet->base_id)}}" class="btn preview"><i class="fui-eye-16"></i></a>
			{{HTML::link_to_route('snippet', '&times;', $snippet->base_id, array('class' => 'btn btn-disabled'))}}
		</div>
	{{Form::close()}}
@endsection