@extends('layouts.app')

@section('content')
    <h2>Edit news</h2>
    <div class="panel-body">
    @include('common.errors')
        <form action="{{ route('news.update', $news->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
            {{method_field('PUT')}}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Title</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="title" class="form-control" value="{{$news->title}}">
                </div>
            </div>
            <div class="form-group">
                <label for="article" class="col-sm-3 control-label">Article</label>
                <div class="col-sm-6">
                    <textarea  name="article" id="article" class="form-control">{{$news->article}}</textarea>

                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-save"></i> Save news
                    </button>
                </div>
            </div>
        </form>
    </div>
    <a href="{{route('news.create')}}" class="btn btn-warning"><i class="fa fa-plus"></i>Create new news</a>
@endsection