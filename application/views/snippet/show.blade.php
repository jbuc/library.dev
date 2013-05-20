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
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {mode: mixedMode, theme:'twilight', readOnly:true, lineNumbers:true, tabMode: "indent"});

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
		label {display:block;}
		input[type='text'], textarea {display:block; box-sizing:border-box; width:100%;}
		.CodeMirror {min-height: 500px; border:1px solid #303030;}
		body {background: #262626; color:#eee;}
	</style>
@endsection
@section('content')
	<h1>{{$snippet->title}} - <small><a href="{{$snippet->base_id}}/preview">preview</a></small></h1>
	<p>Snippet Tags: <small>{{$snippet->tags}}</small></p>
	
	<textarea id="code" style="display:none;">{{$snippet->code}}</textarea>
@endsection
