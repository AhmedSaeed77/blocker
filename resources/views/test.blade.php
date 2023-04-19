@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> jdssj </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('teststore') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"> عربي </label>
                            <div class="col-md-6">
                                <input  type="text"  class="form-control" name="name_ar"  >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"> انجليزي  </label>
                            <div class="col-md-6">
                                <input  type="text"  class="form-control" name="name_en"  >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"> فرنساوى </label>
                            <div class="col-md-6">
                                <input  type="text"  class="form-control" name="name_fr"  >
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   save
                                </button>
                            </div>
                        </div>
                    </form>
                      @foreach (\App\Models\Test::all() as $r)
                                        <span> {{ $r->id }} </span>    <h1>{{ evaluate($r)['name'] }}</h1>
                      @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


