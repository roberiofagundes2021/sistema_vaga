<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>ATRAESC - Associação de Trânsito do Estado de Santa Catarina</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body class="app sidebar-mini">
   
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html"><img src="{{ URL::asset('images/logo.png'); }}"
        style="width:150px; height:30px;">
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      
      <ul class="app-nav">
        
       
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Sair</a></li>
          </ul>
        </li>
      </ul>
      
    
    </header>
    <!-- Sidebar menu-->
    
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
     <ul class="app-menu">
        <li><a class="app-menu__item" href="{{route('dashboard')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">dashboard</span></a></li>
        <img src="{{ URL::asset('img/agendar_aula.jpg'); }}"
        style="width:350px; height:150px;"><br></a>

        <li><a class="app-menu__item" href="{{route('Agendamento15Dias.index')}}"><i class=""></i><span class="app-menu__label">agendamentos de 15 dias</span></a>
        </li>
        
        </li>
          <li><a class="app-menu__item" href="{{route('Agendamento3Dias.index')}}"><i class=""></i><span class="app-menu__label">agendamentos de 3 dias</span></a>
        </li>

         <img src="{{ URL::asset('img/clientes.jpg'); }}"
        style="width:350px; height:150px;"><br></a>
        <li><a class="app-menu__item" href="{{route('Cliente.index')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Cliente</span></a></li>
        <li><a class="app-menu__item" href="{{route('Empresa.create')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Alugar carro</span></a>
        </li>
        <li><a class="app-menu__item" href="{{route('Instrutor.index')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Instrutor</span></a>
        </li>
        </li>
        <li><a class="app-menu__item" href="{{route('Empresa')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">empresa
        </span></a>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
         
        </div>
      
      </div>
      
    <x-app-layout>
 
        <x-slot name="header">
           <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2></h2><br>
             <form action="{{route('Agendamento15Dias.update', ['id' => $Agendamento_15_dia->id])}}" method="post">
                 @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
        @csrf
        @method('PUT')
        <label for="nome">dia1</label>
        {{-- Form Section 1 --}}
        <input type="date" name="dia1" class="form-control" value="{{$Agendamento_15_dia->dia1}}">
                
        <label>dia2</label>
        <input type="date" class="form-control" name="dia2" value="{{$Agendamento_15_dia->dia2}}">    
                
        <label>dia3</label><br>
        <input type="date" class="form-control" name="dia3" value="{{$Agendamento_15_dia->dia3}}"><br>

        <label>dia4</label><br>
        <input type="date" class="form-control" name="dia4" value="{{$Agendamento_15_dia->dia4}}"><br>

        <label>dia5</label><br>
        <input type="date" class="form-control" name="dia5" value="{{$Agendamento_15_dia->dia5}}"><br>

        <label>dia6</label><br>
        <input type="date" class="form-control" name="dia6" value="{{$Agendamento_15_dia->dia6}}"><br>

        <label>dia7</label><br>
        <input type="date" class="form-control" name="dia7" value="{{$Agendamento_15_dia->dia7}}"><br>

        <label>dia8</label><br>
        <input type="date" class="form-control" name="dia8" value="{{$Agendamento_15_dia->dia8}}"><br>

        <label>dia9</label><br>
        <input type="date" class="form-control" name="dia9" value="{{$Agendamento_15_dia->dia9}}"><br>

        <label>dia10</label><br>
        <input type="date" class="form-control" name="dia10" value="{{$Agendamento_15_dia->dia10}}"><br>

        <label>dia11</label><br>
        <input type="date" class="form-control" name="dia11" value="{{$Agendamento_15_dia->dia11}}"><br>

        <label>dia12</label><br>
        <input type="date" class="form-control" name="dia12" value="{{$Agendamento_15_dia->dia12}}"><br>

        <label>dia13</label><br>
        <input type="date" class="form-control" name="dia13" value="{{$Agendamento_15_dia->dia13}}"><br>

        <label>dia14</label><br>
        <input type="date" class="form-control" name="dia14" value="{{$Agendamento_15_dia->dia14}}"><br>

        <label>dia15</label><br>
        <input type="date" class="form-control" name="dia15" value="{{$Agendamento_15_dia->dia15}}"><br>
                
         <label for="carro">carro</label>
                            {{-- pega a variavel passada pelo metodo create do controller --}}
                            
                              <select name="automovel_id" class="form-control">
                             @if(isset($automovel)) 
                                @foreach($automovel as $automovel)
                                <option value="{{ $automovel->id ?? old(automovel_id) }}"> 
                                  {{ $automovel->modelo }} 
                                </option>
                                @endforeach
                            @endif
                              </select>  <br>    
                
         <input type="submit" class="btn btn-primary" value="alterar">
        
  
  </form>
                       
                      
        </x-slot>

       
                    
        
                    
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css'); }}">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=2.0">        
                            
                                     
                      
                </x-app-layout>
                

            </div>
        </div>
    </div>
</div>
<div class="tile-footer">
   
  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
