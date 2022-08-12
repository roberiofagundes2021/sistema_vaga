
 


  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css'); }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <title>Document</title>
</head>
<body>
    @yield('vagas')


        <div class="tab-content">
        <div class="tab-pane fade in active" id="descricao">
          @forelse($vagas as $vaga)
          {{$vaga->descricao}}
          
        </div>
      <div class="tab-pane fade" id="informacoes"> 
      <p>Feita em algodão importado.</p>
    </div>
    </div>
              
     @empty
      <p>Não existe vagas disponiveis no momento</p>
  @endforelse




</body>
</html>