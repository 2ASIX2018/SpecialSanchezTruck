

<?php

    #$usuaris=["Usuari 1", "Usuari 2", "Usuari 3", "Usuari 4"]; 
    require_once("models/usuari.php");
    $gestiousuaris= new Usuari();
    $usuarios=$gestiousuaris->LlistaUsuaris();
?>
    <table class="table">

    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">UserName</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>

<?php

        for ($i=0; $i<count($usuarios);$i++){

            if ($usuarios[$i]["rol"]==admin)
            {
?>
                
                    <tr>
                        <td scope="row"><?php echo($usuarios[$i]["id"]);?></td>
                        <td><?php echo($usuarios[$i]["username"]);?></td>
                        <td><?php echo($usuarios[$i]["nombre"]);?></td>
                        <td><?php echo($usuarios[$i]["email"]);?></td>
                        <td><?php echo($usuarios[$i]["rol"]);?></td>
                        <td>
                            <button class="btn btn-danger">Eliminar</button>
                            <button class="btn btn-warning">Editar</button>
                        </td>
                        
                    </tr>
                            
            <?php
            }
        }
        ?>

    </tbody>
    </table >

    <table class="table">

    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">UserName</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>


<?php

    for ($i=0; $i<count($usuarios);$i++){

        if ($usuarios[$i]["rol"]!=admin)
            {
            ?>
                
                    <tr>
                        <td scope="row"><?php echo($usuarios[$i]["id"]);?></td>
                        <td><?php echo($usuarios[$i]["username"]);?></td>
                        <td><?php echo($usuarios[$i]["nombre"]);?></td>
                        <td><?php echo($usuarios[$i]["email"]);?></td>
                        <td><?php echo($usuarios[$i]["rol"]);?></td>
                        <td>
                            <button class="btn btn-danger">Eliminar</button>
                            <button class="btn btn-warning">Editar</button>
                        </td>
                        
                    </tr>
                          
            <?php
            
        } 
    }
?>
    </tbody>
    </table >
    