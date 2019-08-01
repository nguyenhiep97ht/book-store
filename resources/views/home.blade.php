<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container body-content">
            <div class="row">
              <div class="col-sm-4">
                <div class="list-group">
                  @foreach($categories as $value)
                    <a href="/home/category/{{$value->category_id}}" class="list-group-item list-group-item-action">{{$value->name}}</a>
                  @endforeach
                    <!-- <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item list-group-item-action active">Morbi leo risus</a>
                    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a> -->
                  </div>
              </div>
              <div class="col-sm-8">
                
                  @if(Auth::check())
                  <a href="/logout" class="login">Logout</a>
                  <i class="login" style="margin-right: 5px">Hello {{$username}} </i>
                  @else
                  <a class="login" href="/login">Login</a>
                  @endif
                  <!-- <a href="auth/register" class="login">Register/</a> -->
                  <a href="cart.html" class="cart">Cart</a>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Price</th>
                        <th scope="col">Short Desc</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($books as $key => $value)
                      <tr>
                        <!-- <th scope="row">{{++$key}}</th> -->
                        <td>{{$value->name}}</td>
                        <td>{{$value->author}}</td>
                        <td>{{$value->price}}</td>
                        <td>{{$value->short_desc}}</td>
                        <td><button type="button" class="btn btn-primary">Buy</button></td>
                      </tr>
                      @endforeach
                      <!-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td></td>
                        <td><button type="button" class="btn btn-primary">Buy</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td></td>
                        <td><button type="button" class="btn btn-primary">Buy</button></td>
                      </tr> -->

                    </tbody>
                  </table>
                  <nav aria-label="Page navigation example" class="book-page">
                        <!-- <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>

                        </ul> -->
                        @if(count($books) > 4)
                       {{ $books->links() }}
                       @endif
                      </nav>
              </div>
            </div>
        </div>


    </body>
</html>
