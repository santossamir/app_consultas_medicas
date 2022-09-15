<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Consultas Médicas</title>

		<link rel="stylesheet" href="css/estilo.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <body>
        <nav>
            @include('site.components.topo')
        </nav>
        <div class="container app">
            <div class="row">
                <div class="col-sm-3 menu">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/">Especialidades</a></li>
                        <li class="list-group-item active"><a href="/medicos">Nossos médicos</a></li>
                        <li class="list-group-item"><a href="/pacientes">Pacientes</a></li>
                        <li class="list-group-item"><a href="/nova-consulta">Nova consulta</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="container pagina">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-success">
                                    Novo médico
                                </h3>
                                <hr />
                                <form method="post" action="/medicos/create">
                                    @csrf
                                    <div class="form-group">
                                        <label class="text-secondary">Dados do médico:</label>
                                        <input type="text" name="name" value="" class="form-control" placeholder="Nome do médico">
                                        {{--<input type="text" name="especialidade" value="" class="form-control" placeholder="Especialidade">--}}
                                        <select name="especialidade_id" class="form-control text-secondary" id="select">
                                            <option>Especialidades</option>

                                            @foreach ($especialidades as $especialidade)
                                                <option  value="{{$especialidade->id}}">{{$especialidade->especialidade}}</option>
                                            @endforeach

                                        </select>
                                        <input type="text" name="crm" value="" class="form-control" placeholder="CRM">
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Cadastrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 tabela">
                    <div class="container pagina">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-success">Todos os médicos</h3>
                                <hr />
                                <table class="table table-borderless">
                                    <thead class="text-secondary">
                                        <tr>
                                            <th>CRM</th>
                                            <th>Nome</th>
                                            <th>Especialidade</th>
                                            <th>Excluir</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($medicos as $medico )
                                            <tr>
                                                <th>{{$medico->crm}}</th>
                                                <td>{{$medico->name}}</td>
                                                <td>{{$medico->especialidade}}</td>

                                                @if ($medico == "")
                                                    <td></td>
                                                    <td></td>
                                                @else
                                                    <td><a class="fas fa-trash-alt fa-lg text-danger" href=""></a></td>
                                                    <td><a class="fas fa-edit fa-lg text-info"  href=""></a></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
