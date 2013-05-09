@layout('master')
@section('styles')
	<style>
		label {display:block;}
		input[type='text'], textarea {display:block; box-sizing:border-box; width:100%;}
	</style>
@endsection
@section('content')
	<h1>Show the snippet "{{$snippet->title}}"</h1>
@endsection
