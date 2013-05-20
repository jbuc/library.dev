@layout('master')

@section('content')
	{{Form::open('/')}}
		<div class="code">
			{{Form::label('code', 'Paste HTML')}}
			{{Form::textarea('code', '', array('placeholder' => 'Paste HTML', 'ID' => 'code'))}}
		</div>
		<div class="formWrapper">
			<div class="inputGroup title">
				{{Form::label('title', 'Snippet Name')}}
				{{Form::text('title', '', array('placeholder' => 'Snippet Name'))}}
			</div>
			<div class="inputGroup tags">
				{{Form::label('tags', 'Shop Record Name')}}
				{{Form::text('tags', '', array('placeholder' => 'tags, separated by, comma'))}}
			</div>
			<div class="inputGroup url">
				{{Form::label('url', 'Example URL')}}
				{{Form::text('url', '', array('placeholder' => 'Example URL'))}}
			</div>
			<div class="inputGroup shoprecord">
				{{Form::label('shoprecord', 'Shop Record Name')}}
				{{Form::text('shoprecord', '', array('placeholder' => 'Shop Record Name'))}}
			</div>
		</div>


		{{Form::hidden('active', false)}}
		{{Form::submit('Create Snippet', array('class' => 'btn btn-large'))}}
	{{Form::close()}}
@endsection


@section('script')
	<script src="/js/vendor/cm/codemirror.js"></script>
	<script src="/js/vendor/cm/emmet.min.js"></script>
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
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {mode: mixedMode, theme:'twilight', readOnly:false, lineNumbers:true, tabMode: "indent"});

      	var setHeight = function(el){
			el.height($(window).height() - 50);
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
		.content {width:98%; margin:0 auto;}
		label {display:block;}
		textarea {box-sizing:border-box;}
		input[type='text'], textarea {display:block;  width:90%;}
		input[type='text'] {line-height:1.5em;width:95%;background: #141414; border-color: #323435;}
		.inputGroup {width:50%; float:left;}
		.CodeMirror {min-height: 500px; border:1px solid #303030; margin:0 auto;}
		.formWrapper {margin:20px; overflow: hidden;}
		input[type='submit'] {clear:both;}
		body {background: #262626; color:#eee;}
	</style>
@endsection