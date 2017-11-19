@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Article</div>

                <div class="panel-body">
                   @foreach($articles as $article)

                   <h2>{{ $article->title}}</h2>
                   <p>{{ $article->body}}</p>
                   <hr/>
                   
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
