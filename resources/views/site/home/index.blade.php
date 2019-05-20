@extends('site.templates.main')

@section('title', 'Home - Pagina Inicial')

@section('css')
@endsection

@section('content_page')
<section class="container section" id="seccao">
    <h3 class="center">Secções de Escuteiros</h3>
	<hr />
    <div class="row">
        <div class="col s12 l4">
            <img src="image/lobito.jpg" alt="" class="responsive-img">
        </div>
        <div class="col s12 l6 offset-l1">
            <h3 class="indigo-text text-darken-4">1º Lobito</h3>
            <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblboblobobo,
            jvkhbkbklnlnlknblbnkjbkjb.</p>
        </div>
    </div> 
    <div class="row">
        <div class="col s12 l4 push-l7 offset-l1">
            <img src="image/junior.jpg" alt="" class="responsive-img">
        </div>
        <div class="col s12 l6 pull-l5 right-align offset-l1">
            <h3 class="indigo-text text-darken-4">2º Junior</h3>
            <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblbo,
            jvkhbkbklnlnlknblbnkjbkjb.</p>
        </div>
    </div> 
    <div class="row">
        <div class="col s12 l4">
            <img src="image/senior.jpg" alt="" class="responsive-img">
        </div>
        <div class="col s12 l6 offset-l1">
            <h3 class="indigo-text text-darken-4">3º Senior</h3>
            <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblboblobobo,
            jvkhbkbklnlnlknblbnkjbkjb.</p>
        </div>
    </div> 
    <div class="row">
        <div class="col s12 l4 push-l7 offset-l1">
            <img src="image/cla.jpg" alt="" class="responsive-img">
        </div>
        <div class="col s12 l6 pull-l5 right-align offset-l1">
            <h3 class="indigo-text text-darken-4">4º Caminheiro</h3>
            <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblbo,
            jvkhbkbklnlnlknblbnkjbkjb.</p>
        </div>
    </div> 
  </section>
  <!--Paralax -->
  <div class="parallax-container ">
      <div class="parallax">
         <img src="image/fundo.jpg" alt="" class="responsive-img">
      </div>
  </div>
<!--Serviços / Tabs -->
<section class="container" id="servicos">
      <h3 class="text-darken-4 center">A Quem Nós Servimos...?</h3>
      <hr />
     <div class="row">
        <div class="col s12 l6 offset-l2">
            <ul class="tabs">
                <li class="tab col s4">
                    <a href="#igreja" class="indigo-text text-darken-4">A Igreja</a>
                </li>
                <li class="tab col s4">
                    <a href="#patria" class="indigo-text text-darken-4">A Patria</a>
                </li>
                <li class="tab col s4">
                    <a href="#proximo" class="indigo-text text-darken-4">Ao Proximo</a>
                </li>
            </ul>
            <div class="col" id="igreja">
                <p class="flow-text indigo-text text-darken-4">A IGREJA</p>
                <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblbo,
                jvkhbkbklnlnlknblbnkjbkjb.</p>
                <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblbo,
                jvkhbkbklnlnlknblbnkjbkjb.</p>
            </div>
            <div class="col" id="patria">
                <p class="flow-text indigo-text text-darken-4">A PATRIA</p>
                <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblbo,
                jvkhbkbklnlnlknblbnkjbkjb.</p>
                <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblbo,
                jvkhbkbklnlnlknblbnkjbkjb.</p>
            </div>
            <div class="col" id="proximo">
                <p class="flow-text indigo-text text-darken-4">AO PROXIMO</p>
                <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblbo,
                jvkhbkbklnlnlknblbnkjbkjb.</p>
                <p>jbhksfakbkbkugkbkjnklhohohohhooljnlansluoj,enlouhoblblbo,
                jvkhbkbklnlnlknblbnkjbkjb.</p>
            </div>
        </div>
     </div>
</section>
 <!--Paralax -->
  <div class="parallax-container" id="paralla-1">
      <div class="parallax">
         <img src="image/fundo2.jpg" alt="" class="responsive-img">
      </div>
  </div>

<!--Contactos -->
  <section id="contactos" class="container">
        <div class="row">
            <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="disabled">Disabled</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                This is an inline input field:
                <div class="input-field inline">
                    <input id="email" type="email" class="validate">
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                </div>
                </div>
            </div>
            </form>
        </div>
</section>  


@endsection

@section('js')
@endsection