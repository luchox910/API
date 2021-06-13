<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Empresa</th>
                  <th>Rol</th>
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($lista as $users)
                <tr>
                  <td>{{$users->idContacto}}</td>
                  <td>{{$users->email}}</td>
                  <td> {{$users->nombre}}</td>
                 
                  
                 
                
                </tr>
                
                </tbody>
                @endforeach
               
                
              </table>