@extends('master');
@section('title', 'Create Content')

@section('content')
    <h1>Create Content</h1>

    <form action="{{ empty($content->id) ? url('/content') : url('/content/' . $content->id) }}" method="post">
        @if(!empty($content->id))
            @method('put')            
        @endif

        @csrf
        <div class="mb-3">
            <label for="topic" class="form-label">หัวข้อ</label>
            <input type="text" class="form-control" id="topic" name="topic" value="{{ old('topic', $content->topic) }}">
            @error('topic')
            <div class="invalid-feedback d-block">{{ $errors->first('topic') }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">รายละเอียด</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $content->description) }}</textarea>
            @error('description')
            <div class="invalid-feedback d-block">{{ $errors->first('description') }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags', $content->tags) }}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ url('/content') }}" class="btn btn-danger" role="button">Back</a>
    </form>
@endsection