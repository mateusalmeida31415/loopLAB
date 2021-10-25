@extends('layouts.app')

@section('content')
    <navbar-component 
    title="LoopLAB"
    :itens="[
        {'item': 'home', 'id': '#'}, 
        {'item': 'explore', 'id': '#'}, 
        {'item': 'create', 'id': '#'}, 
        {'item': 'share', 'id': '#'}]">
    </navbar-component>
@endsection
