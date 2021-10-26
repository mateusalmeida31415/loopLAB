@extends('layouts.app')

@section('content')
    <navbar-component 
    title="LoopLAB"
    :itens="[
        {'item': 'home', 'id': '#home-section'}, 
        {'item': 'explore', 'id': '#explore-section'}, 
        {'item': 'create', 'id': '#create-section'}, 
        {'item': 'share', 'id': '#share-section'}]">
    </navbar-component>
    <home-section-component id="home-section"></home-section-component>
@endsection
