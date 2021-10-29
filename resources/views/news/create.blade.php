@extends('layouts.app')

@section('content')
    <h2>New news</h2>
    <div class="panel-body">
    @include('common.errors')
        <form action="{{ route('news.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Title</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="article" class="col-sm-3 control-label">Article</label>
                <div class="col-sm-6">
                    <textarea  name="article" id="article" class="form-control">{{old('article')}}</textarea>
{{--                    <input type="textaria" name="article" id="article" class="form-control">--}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить задачу
                    </button>
                </div>
            </div>
        </form>
    </div>
    <a href="{{route('news.create')}}" class="btn btn-success"><i class="fa fa-plus"></i>Create new news</a>
    <!-- TODO: Текущие задачи -->
@endsection