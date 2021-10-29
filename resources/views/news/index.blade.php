@extends('layouts.app')

@section('content')
    <h2>All news</h2>
    <div class="panel-body">
    @include('common.errors')
    </div>
    <a href="{{route('news.create')}}" class="btn btn-success"><i class="fa fa-plus"></i>Create new news</a>
    @if (count($newss) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                News
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Заголовок таблицы -->
                    <thead>
                    <tr>
                        <th>TITLE</th>
                        <th>ARTICLE</th>
                        <th>&nbsp;</th>
                    </tr>

                    </thead>

                    <!-- Тело таблицы -->
                    <tbody>

                    @foreach ($newss as $news)
                        <tr>
                            <!-- Имя задачи -->
                            <td class="table-text">
                                <div>{{ $news->title }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $news->article }}</div>
                            </td>

                            <td>
                                <form method="post" action="{{route('news.delete', $news->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                                <form method="post" action="{{route('news.edit', $news->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('GET')}}
                                    <button class="btn btn-danger"><i class="fa fa-pencil"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection