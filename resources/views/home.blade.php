@extends('layouts.app')

@section('content')
<div id="app">
    <router-view></router-view>
</div>
@endsection

<script src="{{ mix('/js/app.js') }}"></script>