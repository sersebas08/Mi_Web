@extends('template.index')

@section('title', 'Proyectos')

@section('index')
        <h1 class="text-center pt-4 font__family">Enviar Consulta</h1>
        <div class="col-12 col-md-8 shadow p-4 m-auto">
            <form  action="{{ route('create') }}" method="post" enctype="multipart/form-data" class="">
                @csrf
                <div class="pt-4">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text"
                           id="name"
                           name="name"
                           placeholder="Escribir Nombre"
                           value="{{ old('name') }}"
                           class="@error('name') border border-warning shadow @enderror form-control"
                    >
                    @error('name')
                    <div class="text-dark fw-bold" id="error-name"><i class="bi bi-snow px-1 text-warning"></i>{{ $message }}</div>
                    @enderror
                </div>
                <div class="pt-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder="Escribir Email"
                           value="{{ old('email') }}"
                           class="@error('email') border border-warning shadow @enderror form-control" >
                    @error('email')
                    <div class="text-dark fw-bold" id="error-email"><i class="bi bi-snow px-1 text-warning"></i>{{ $message }}</div>
                    @enderror
                </div>
                <div class="pt-4 textArea">
                    <label for="descripcion" class="form-label">Consulta</label>
                    <textarea id="descripcion"
                              name="descripcion"
                              cols="15" rows="5"
                              placeholder="Escribir Consulta"
                              class="@error('descripcion') border border-warning shadow @enderror form-control"
                    >{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                    <div class="text-dark fw-bold" id="error-descripcion"><i class="bi bi-snow px-1 text-warning"></i>{{ $message }}</div>
                    @enderror
                </div>
                <button  class="btn btn-dark mt-5 w-100"><i class="bi bi-envelope-check px-1"></i>Enviar consulta</button>
            </form>
        </div>
@endsection
