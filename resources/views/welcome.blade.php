<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vuejs Laravel CRUD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="#" />

    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;

        justify-content: center;
        margin-left: 20%;
        margin-right: 20%;
    }

    .position-ref {
        position: relative;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style>
</head>

<body>
    <div id="app">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Carros
                </div>
                <div class="form-group">
                    <label for="make">Marca</label>
                    <input type="text" class="form-control" id="make" required placeholder="Marca" name="marcak"
                        v-model="newCar.make">
                </div>

                <div class="form-group">
                    <label for="model">Modelo</label>
                    <input type="text" class="form-control" id="model" required placeholder="Modelo" name="model"
                        v-model="newCar.model">
                </div>

                <button class="btn btn-primary" @click.prevent="createCar()">
                    Agregar Carros
                </button>

                <table class="table table-striped" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="car in cars">
                            <th scope="row">@{{car.id}}</th>
                            <td>@{{car.make}}</td>
                            <td>@{{car.model}}</td>

                            <td @click="setVal(car.id, car.make, car.model)" class="btn btn-info"
                                class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i
                                    class="fa fa-pencil"></i>
                            </td>
                            <td @click.prevent="deleteCar(car)" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Editar</h4>
                            </div>
                            <div class="modal-body">

                                <input type="hidden" disabled class="form-control" id="e_id" name="id" required
                                    :value="this.e_id">
                                Marca: <input type="text" class="form-control" id="e_make" name="make" required
                                    :value="this.e_make">
                                Modelo: <input type="text" class="form-control" id="e_model" name="model" required
                                    :value="this.e_model">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" @click="editCar()">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/js/app.js"></script>
</body>

</html>