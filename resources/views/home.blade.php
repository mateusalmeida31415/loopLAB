@extends('layouts.app')

@section('content')
    <navbar-component 
    title="LoopLAB"
    :itens="[
        {'item': 'home', 'id': '#home-head-section'}, 
        {'item': 'explore', 'id': '#explore-head-section'}, 
        {'item': 'create', 'id': '#create-head-section'}, 
        {'item': 'share', 'id': '#share-head-section'}]">
    </navbar-component>
@endsection
