@extends('layout.master')

@section('title', 'Create news')

@section('content')
    <form method="POST" action="/news">
        @csrf
        
        <h4>Create news</h4>
        <div class="mb-3">
            <label class="form-label" >Title</label>
            <input class="form-control" type="text" name="title" />
        </div>

        @error('title')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea class="form-control" name="content" rows="10" ></textarea>
        </div>

        @error('content')
            @include('partials.error')
        @enderror
        <h4>
            @foreach ($teams as $team)
                <div class="form-grou from-chec">
                    <input 
                        type="checkbox" 
                        value="{{ $team->id }}" 
                        class="form-check-input"
                        name="teams[]"
                        id="team{{ $team->id }}"
                    >
                    <label for="team{{ $team->id }}" class="form-check-label">{{ $team->name }}</label>
                </div>
            @endforeach
        </h4>   
        <button type="submit" class="btn brn-primary">Submit</button>
    </form>
@endsection

