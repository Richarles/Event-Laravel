@extends('layout.base')

@section('titulo','cadastro de usuário')

@section('conteudo')
   <form action = "{{ route('product.store') }}" method="POST">
      @csrf
      
       
       <div class="field">
          <label for="Número do Eleitor">Nome:</label>
          <input type="text" name="name" id="name"  />        
       </div>
       <div class="field">
         <label for="Número do Eleitor">Valor:</label>
         <input type="text" name="value" id="value"  />        
      </div>
      {{-- <div class="field">
         <label for="Número do Eleitor">quantidade de acessos:</label>
         <input type="text" name="qt_acessos" id="qt_acessos"  />        
      </div> --}}

      
       <div class="btn">
          <input type="submit" value="Salvar">
       </div>
   </form>

@endsection