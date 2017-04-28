@extends('app')

@section('title')
Items
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $key=>$item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <form action="{{ URL::route('items.destroy',$item->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger btn-sm">Delete Item</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="well">
        <form action="{{ URL::route('items.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
        </div>
        <div class="form-group">
            <textarea name='description'class="form-control">{{ old('description') }}</textarea>
        </div>
        <input type="submit" name='create' class="btn btn-success" value = "Create"/>
    </form>
    </div>


@endsection
