<?php
if ($role_session!=='0') {
    header("location: index.php");
    die();
}

function generujPassword($length = 8)
{
    $genpassword = "";
    $possible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $i = 0;
    while ($i < $length) {
        $char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
        if (!strstr($genpassword, $char)) {
            $genpassword .= $char;
            $i++;
        }
    }
    return $genpassword;
}

?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Přidat uživatele</h6>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="py-2">
                        <form id="myForm">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" required/>
                                    <span id="message"></span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" name="password" id="password"
                                           value="<?php echo generujPassword(); ?>" required/>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1">Role</label>
                                    <select name="role" class="form-control">
                                        <option value="0">0 - Admin</option>
                                        <option value="1">1 - Uživatel</option>
                                    </select>

                                </div>
                            </div>

                            <input type="hidden" name="addUser" value="data1" id="addUser">
                            <!-- ajax hidden for post isset -->
                            <input type="submit" class="btn btn-primary" name="addUser" id="addUser2"
                                   value="Vytvořit uživatele"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

