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
                               DELETE {{$news->id}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection