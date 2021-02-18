
@yield('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{asset('js/jquery-3.5.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

@yield('nav')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> 
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						
						<li class="nav-item active">
							 <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href="{{route('encomendas.index')}}">Encomendas</a>
						</li>
						<li class="nav-item">
							 <a class="nav-link " href="{{route('encomendas_produtos.index')}}">EncomendasProdutos</a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href="{{route('vendedores.index')}}">Vendedores</a>
						</li>
						
					</form>
					</ul>
					 <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
					
				</div>
			</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				@yield('titulo')
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h3>
				@yield('conteudolink')
			</h3>
		</div>
		<div class="col-md-4">
			@yield('capaimg')
		<!--<img src="{{URL::to('img/foto2.png')}}" height="100%">-->
		</div>
	</div>
</div>





<div class="container-fluid">
	<div class="row">
		<div class="col-md-4" style="align-content: left">
			 
			 @yield('tproduto')
			
		</div>
		<div class="col-md-4" style="align-content: center;">
			 
			 @yield('tquantidade')
		</div>
		<div class="col-md-4" style="align-content: right;">
			  @yield('tpreco')
		</div>
	</div>
	<div class="row">
		<div class="col-md-4" style="align-content: left">
			 @yield('produto')
		</div>
		<div class="col-md-4" style="align-content: center;">
			 @yield('quantidade')
		</div>
		<div class="col-md-4" style="align-content: right;">
			 
				  @yield('preco')
		</div>
	</div>
</div>

			


			
			</div>
		</div>
	</div>
</div>

@yield('fim')


