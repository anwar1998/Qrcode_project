@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ADD
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="qcodes" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nom">Nom :</label>
                                                <input type="text" class="form-control" id="nom" name="name"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label>Type :</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type"
                                                        class="chngRadio" id="valeur1" value="number" required>
                                                    <label class="form-check-label" for="valeur1">
                                                        Téle
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type"
                                                        class="chngRadio" id="valeur2" value="site">
                                                    <label class="form-check-label" for="valeur2">
                                                        Site web
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type"
                                                        class="chngRadio" id="valeur3" value="page">
                                                    <label class="form-check-label" for="valeur3">
                                                        Page facebook
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="valeur">Valeur :</label>
                                                <input type="text" class="form-control" id="qrcode_value"
                                                    name="qrcode_value" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description :</label>
                                                <textarea class="form-control" id="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer Qrcode</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="qcodes" method="POST" id="form_for_delete">
                                        @csrf
                                        @method('DELETE')
                                        <div class="row mx-auto justify-content-center align-items-center flex-column ">
                                            <div>
                                                <input type="text" name="id_qrcode_delete" id="id_qrcode_delete">
                                                Voulez vous_vraiment supprimer ce Qrcode?
                                                {{-- <div id="qrcode"></div> --}}
                                                {{-- <div class="card text-white bg-info ">
                                            <div class="card-body ">
                                                <h5 class="card-title" id="type_qrcode"></h5>
                                                <p class="card-text" id=value_qrcode>
                                                </p>
                                            </div>
                                        </div> --}}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Non</button>
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalDetail" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Qrcode</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="row mx-auto justify-content-center align-items-center flex-column ">
                                        <div>
                                            <div id="qrcode"></div>
                                            <div class="card text-white bg-info ">
                                                <div class="card-body ">
                                                    <h5 class="card-title" id="type_qrcode"></h5>
                                                    <p class="card-text" id=value_qrcode>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($qrcodes as $qrcode)
                                    <tr>
                                        <th scope="row">{{ $qrcode->id }}</th>
                                        <td>{{ $qrcode->type }}</td>
                                        <td>{{ $qrcode->qrcode_value }}</td>
                                        <td>{{ $qrcode->description }}</td>
                                        <td>
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalDelete"
                                                onclick="Delete_Qrcode({{ $qrcode }})">Supprimer</button>
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalDetail"
                                                onclick="Charger_qrcode({{ $qrcode }})">Détail</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        {{ $qrcodes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .pagination .img,
        svg {
            width: 15px
        }
    </style>
    <script>
        $(document).ready(function() {
            // Listen for change event on radio inputs
            var inputElement = document.getElementById('qrcode_value');
            // Change the type attribute
            $('input[type="radio"]').change(function() {
                // Get the selected value
                var selectedValue = $('input[type="radio"]:checked').val();
                console.log(inputElement)
                // Perform actions based on the selected value
                if (selectedValue === "site") {
                    inputElement.type = 'url';
                } else if (selectedValue === "page") {
                    inputElement.type = 'url';
                } else if (selectedValue === "number") {
                    inputElement.type = 'number';
                }
            });
        });

        function Delete_Qrcode(Qrcode_object) {
            document.getElementById('id_qrcode_delete').value = Qrcode_object.id
            var form = document.getElementById('form_for_delete');
            form.action = "qcodes/"+Qrcode_object.id;
        }

        function Charger_qrcode(Qrcode_Obj) {
            document.getElementById("qrcode").innerHTML = ""
            document.getElementById("type_qrcode").innerHTML = "Type :" + Qrcode_Obj.type
            document.getElementById("value_qrcode").innerHTML = Qrcode_Obj.qrcode_value
            var qr = {
                text: Qrcode_Obj.qrcode_value,
                width: 300,
                height: 300
            };
            var qrcode = new QRCode(document.getElementById("qrcode"), qr);
        }
    </script>
@endsection
