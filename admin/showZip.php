<section id="show">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800" block="title">Data uživatelů</h1>

    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Seznam uživatelů</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-sm">
                    <thead>
                    <tr>
                        <th># id</th>
                        <th>Jméno zipu</th>

                        <th>Akce</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $sel_query = "SELECT myblob.id, branches.title, myblob.name FROM myblob JOIN branches ON myblob.id_branches=branches.id;";
                    $result = mysqli_query($con, $sel_query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            
                                <tr>
                                <td>' . $row['id'] . '</td>
                                    <td>' . $row['title'] . '</td>
                               
                                   
                                   <td>
       
       
        <a class="btn btn-sm btn-success" href="' . $row['name'] . '" title="Stáhnout" target="_blank"><i class="fas fa-download"></i></a>
        <a id="' . $row['id'] . '" class="btn btn-sm btn-danger deleteZip" href="#" title="Odstranit" target="_blank"><i class="fas fa-trash"></i></a>
        
                                    </td>
                                    
                                </tr>';
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>