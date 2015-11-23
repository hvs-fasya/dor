@extends('layouts.main')

{{--<ключ> - <присадка>--}}
@section('title')Статус проектов@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-bordered" style="width: 400px">
                @foreach($projectsData as $project)
                    <tr>
                        <td>{{ $project['project'] }}</td>
                        <td style="@if($project['status'] == '200')color: green;@else color: red;@endif">{{ $project['status'] }}</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>

@stop

@section('javascript')@stop