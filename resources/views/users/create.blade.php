@extends('layout.app')

@section('title','Criar Usuario')
    

@section('content')
<h1>Novo Usúario</h1>
@if ($errors->all())
    <ul class="errors">
        @foreach ($errors->all() as $erro)
            <li class="error">
                {{$erro}}
            </li>
            
        @endforeach
    </ul>
@endif
<form action="{{route('users.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome : " value="{{old('name')}}">
    <input type="email" name="email" placeholder="Email : " value="{{old('email')}}">
    <input type="password" name="password" placeholder="Senha :>
    <button type="submit">
        Enviar
    </button>
    <a href="{{route('users.index')}}">Voltar</a>
</form>

@endsection