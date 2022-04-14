@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <h1>
        Listagem de usuários
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>
                    Nome
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Detalhes
                </th>
                <th>
                    Comentários
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th> {{ $user->name }} </th>  
                    <th> {{ $user->email }} </th>
                    <th> <a href="{{ route('users.edit', $user->id) }}"> Editar </a> </th>
                    <th> <a href="{{ route('users.show', $user->id) }}"> Detalhes </a> </th>
                    <th> <a href="{{ route('comments.index', $user->id) }}"> Anotações (0) </a> </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection