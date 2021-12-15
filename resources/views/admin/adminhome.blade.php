
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>myDoctor Admin</title>
    {{-- css files --}}
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        {{-- side bar --}}
      @include('admin.sidebar')

      <div class="container-fluid page-body-wrapper">
       {{-- navbar --}}
         @include('admin.navbar')

         {{-- content --}}
        
      </div>
    </div>
    {{-- scripts --}}
    @include('admin.adminscripts')
  </body>
</html>