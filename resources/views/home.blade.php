@extends('layout.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
    </p>
@endsection

@section('sidebar')
    @parent
    <p>This is append to the sidebar</p>
@endsection