@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')

    <h1 class="text-2xl font-semibold leading-tigh py-2">Listagem do Usuário {{ $user->name }}</h1>

    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.delete', $user->id) }}" method="post" class="py-6">
        @method('DELETE')
        @csrf
        <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
    </form>
    
@endsection
