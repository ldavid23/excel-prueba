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

                    {{ __('You are logged in!') }}

                    
                </div>
            </div>
            <a href="{{ route('export') }}" class="button">Exportar</a>
            <form action="{{route('import')}}" method="POST" enctype = "multipart/form-data">
                @csrf
                <input type="file" name="user_excel" id="user_excel" accept=".xlsx" required>
                <button type="submit">Importar</button>
            </form>
        </div>
        @if($message = Session::get('success'))
        <p> {{$message}} </p>
        @endif
    </div>
</div>
@endsection
