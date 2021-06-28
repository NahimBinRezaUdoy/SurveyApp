@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="/questionnaires/create" class="btn btn-dark">Create New Questionnaire</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">My Questionnaire</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($questionnaires as $questionnaire)
                                <li class="list-group-item">
                                    <a href="{{ $questionnaire->path() }}">{{ $questionnaire->title }}</a>

                                    <div class="mt-2">
                                        <small class="font-weight-bold">Share URL</small>
                                        <p>
                                            <a href="{{ $questionnaire->publicPath() }}">
                                                {{ $questionnaire->publicPath() }}
                                            </a>
                                        </p>
                                    </div>


                                    <div>
                                        <form action="/questionnaires/{{ $questionnaire->id }}/delete" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>

                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
