@extends('app')

@section('title')
Add New Item
@endsection

@section('content')

<form action="/new-post" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
    </div>
    <div class="form-group">
        <textarea name='description'class="form-control">{{ old('description') }}</textarea>
    </div>
    <input type="submit" name='create' class="btn btn-success" value = "Create"/>
</form>
@endsection
