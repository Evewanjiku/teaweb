<!doctype html>
    <html lang="en">
    <head>
        @include('partials._head')
    </head>
      <body style="background-color:#1f1b24;">
          <!--Bootstrap navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky" >
             @include('partials._nav')
          </nav>
          <br/>
              <div class="container">
                  @include('partials._messages')
                  @yield('content')
                  <br>
         <hr style="color: white" />
        <p class="text-center" style="color: white">&copy; 2020 -  Mount Kenya Coffee and Tea Packers Limited. All Rights Reserved.</p>
           </div> <!--end of container row-->
           <br/><br/>        
          @include('partials._javascript')
              <!--incase you want to add javascript-->
              @yield('scripts')
      </body>
</html>
