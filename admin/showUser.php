<?php
if ($role_session!=='0') {
    header("location: index.php");
    die();
}
?>

<section id="show">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800" block="title">Data uživatelů</h1>
        <div>
            <a href="index.php?page=addUser" class="btn btn-success"><i class="fas fa-plus mr-1"></i> Přidat uživatele</a>
        </div>
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
                                <th>Jméno uživatele</th>
                                <th>Uživatelská role</th>
                                <th>Akce</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $sel_query = "Select * from users ORDER BY id asc;";
                            $result = mysqli_query($con, $sel_query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '
                            
                                <tr>
                                <td>' . $row['id'] . '</td>
                                    <td>' . $row['username'] . '</td>
                                    <td>';
                                if($row['role']==0){
                                    echo '0 - Admin';
                                }else{
                                    echo'1 - Uživatel';
                                }
                                echo'</td>
                                   <td>
       
       
        <a id="' . $row['id'] . '" class="btn btn-sm btn-danger deleteUser" href="#" title="Odstranit" target="_blank"><i class="fas fa-trash"></i></a>
        
                                    </td>
                                    
                                </tr>';
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

    </div>
</section>




