@extends('site.layout')

@section('title', __('contacts'))

@section('content')
    <div class="container">
        <main>
            <div class="row">
                <div class="offset-md-3 col-md-6 offset-lg-3 col-lg-6">
                    <h4 class="text-center mb-5 mt-5">
                        {{ __('feedback') }}
                    </h4>
                    <form action="{{ route('site.forms.contacts.handle') }}" class="needs-validation" method="POST">
                        @csrf
                        @method('POST')

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="first_name" class="form-label">
                                    {{ __('first name') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="first_name"
                                    class="form-control" 
                                    id="first_name" 
                                    placeholder="" 
                                    required=
                                >
                            </div>
            
                            <div class="col-sm-6">
                                <label for="last_name" class="form-label">
                                    {{ __('last name') }}
                                </label>
                                <input 
                                    type="text" 
                                    name="last_name"
                                    class="form-control" 
                                    id="last_name" 
                                    placeholder="" 
                                    required
                                >
                            </div>

                            <div class="col-12">
                                <label for="description" class="form-label">
                                    {{ __('description') }}
                                </label>
                                <textarea 
                                    name="description"
                                    class="form-control" 
                                    id="description" 
                                    rows="3"
                                    required
                                ></textarea>
                            </div>
                        </div>
        
                        <button class="w-100 btn btn-primary btn-lg mt-4" type="submit">
                            {{ __('send') }}
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection