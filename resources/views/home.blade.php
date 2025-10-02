@extends('layout')
@section('content')
<title> Home</title>

<nav class="navbar bg-info">
  <div class="container-fluid">
    <a class="navbar-brand">Palavras pelo Mundo</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

@push('scripts')

<script>
    const myModal = new bootstrap.Modal(document.getElementById('#modal-s'))
</script>
@endsection