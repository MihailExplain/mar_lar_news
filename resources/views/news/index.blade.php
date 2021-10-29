@extends('layouts.app')

@section('content')
    <h2>All news</h2>
    <div class="panel-body">
    @include('common.errors')
    </div>
    <a href="{{route('news.create')}}" class="btn btn-success"><i class="fa fa-plus"></i>Create new news</a>
    <!-- TODO: Текущие задачи -->
@endsection