<footer class="page-footer rodape">
    <div class="container">
      <div class="footer-copyright">
        <div class="container">
        © 2019 Copyright São Domingos Savio Nº 1
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
 </footer>


 <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>

  <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.tabs').tabs();
      });

  </script>

 @yield('js')
</body>
</html>
