<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Read</title>
  </head>
  <body>
    <div class="container">
      <h1>Read <a href="tambah.php" class="btn btn-primary">tambah</a></h1>
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Nama Product</th>
            <th scope="col" colspan="2">Harga</th>
          </tr>
        </thead>
        <tbody>
            @for($i=1;$i<=10;$i++)
            <tr>
              <td>{{$i}} </td>
              <td>product {{$i}} </td>
              <td>Rp 2000</td>
            </tr>
        </tbody>
      </table>
    </div>  
  </body>
</html>