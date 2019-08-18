<section id="show">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800" block="title">Data poboček</h1>
        <div>
            <a href="index.php?page=form" class="btn btn-success"><i class="fas fa-plus mr-1"></i> Vytvořit data pro
                pobočku</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Seznam dat poboček</h6>
        </div>

        <div class="card-body">

                    <div class="table-responsive">

                        <table id="dataTable" class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th># id</th>
                                <th>Název Pobočky</th>
                                <th>Akce</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php

                            $sel_query = "Select * from branches ORDER BY id asc;";
                            $result = mysqli_query($con, $sel_query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '
                            
                                <tr>
                                <td>' . $row['id'] . '</td>
                                    <td>' . $row['title'] . '</td>
      
                                   <td>
        <button type="button" data-id="' . $row['id'] . '" class="btn btn-sm btn-warning" data-toggle="modal" data-target=".bd-example-modal-lg' . $row['id'] . '" title="Ukázat vzhled"><i class="fas fa-eye"></i></button>
        <a class="btn btn-sm btn-primary" href="form_update.php?id=' . $row['id'] . '" title="Edit"><i class="fas fa-edit"></i></a>
        <a id="' . $row['id'] . '" class="btn btn-sm btn-danger myDelete" href="#" title="Odstranit" target="_blank"><i class="fas fa-trash"></i></a>
        <div class="modal fade bd-example-modal-lg' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-md-4">
                            <a  href="../template/template1/index.php?id=' . $row['id'] . '&url_id=' . $row['id'] . '" target="_blank" title="Zobrazit Vzhled 1"><img class="img-fluid" src="assets/temp1.png"></a>
                            <a  class="btn btn-sm btn-success" href="export.php?id=' . $row['id'] . '&export1" title="Export 1" target="_blank"><i class="fas fa-file-export"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a  href="../template/template2/index.php?id=' . $row['id'] . '" target="_blank" title="Zobrazit Vzhled 2"><img class="img-fluid" src="assets/temp2.png"></a>
                            <a class="btn btn-sm btn-success" href="export.php?id=' . $row['id'] . '&export2" title="Export 2" target="_blank"><i class="fas fa-file-export"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a  href="../template/template3/index.php?id=' . $row['id'] . '" target="_blank" title="Zobrazit Vzhled 3"><img class="img-fluid" src="assets/no-preview-available.png"></a>
                            <a class="btn btn-sm btn-success" href="export.php?id=' . $row['id'] . '&export3" title="Export 3" target="_blank"><i class="fas fa-file-export"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a  href="../template/template4/index.php?id=' . $row['id'] . '" target="_blank" title="Zobrazit Vzhled 4"><img class="img-fluid" src="assets/no-preview-available.png"></a>
                            <a class="btn btn-sm btn-success" href="export.php?id=' . $row['id'] . '&export4" title="Export 4" target="_blank"><i class="fas fa-file-export"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a  href="../template/template5/index.php?id=' . $row['id'] . '" target="_blank" title="Zobrazit Vzhled 5"><img class="img-fluid" src="assets/no-preview-available.png"></a>
                            <a class="btn btn-sm btn-success" href="export.php?id=' . $row['id'] . '&export5" title="Export 5" target="_blank"><i class="fas fa-file-export"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a  href="../template/template6/index.php?id=' . $row['id'] . '" target="_blank" title="Zobrazit Vzhled 6"><img class="img-fluid" src="assets/no-preview-available.png"></a>
                            <a class="btn btn-sm btn-success" href="export.php?id=' . $row['id'] . '&export6" title="Export 6" target="_blank"><i class="fas fa-file-export"></i></a>
                        </div>

                    </div>



                </div>
            </div>
        </div>
                                    </td>
                                    
                                </tr>';
                            } ?>
                            </tbody>
                        </table>
                    </div>

        </div>
    </div>
</section>

