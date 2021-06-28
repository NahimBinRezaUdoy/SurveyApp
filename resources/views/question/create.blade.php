@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Question</div>

                    <div class="card-body">
                        <form action="/questionnaires/{{ $questionnaire->id }}/question" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="question">Question</label>
                                <input name="question[question]" type="text" class="form-control" id="question"
                                    aria-describedby="questionHelp" placeholder="Enter Question"
                                    value="{{ old('question.question') }}">
                                <small id="questionHelp" class="form-text text-muted">Ask Simple Question</small>

                                @error('question.question')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <legend>Choices</legend>
                                    <small id="choicesHelp" class="form-text text-muted">Give Choices Here</small>

                                    <div class="form-group">
                                        <label for="answer1">Choice 1</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer1"
                                            aria-describedby="answer1Help" placeholder="Enter Choice 1"
                                            value="{{ old('answers.0.answer') }}">
                                        <small id="answer1Help" class="form-text text-muted">Please Give Here A
                                            answer1</small>

                                        @error('answers.0.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer2"
                                            aria-describedby="answer2Help" placeholder="Enter Choice 2"
                                            value="{{ old('answers.1.answer') }}">
                                        <small id="answer2Help" class="form-text text-muted">Please Give Here A
                                            answer2</small>

                                        @error('answers.1.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer3"
                                            aria-describedby="answer3Help" placeholder="Enter Choice 3"
                                            value="{{ old('answers.2.answer') }}">
                                        <small id="answer3Help" class="form-text text-muted">Please Give Here A
                                            answer3</small>

                                        @error('answers.2.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer4"
                                            aria-describedby="answer4Help" placeholder="Enter Choice 4"
                                            value="{{ old('answers.3.answer') }}">
                                        <small id="answer4Help" class="form-text text-muted">Please Give Here A
                                            answer4</small>

                                        @error('answers.3.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </fieldset>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
