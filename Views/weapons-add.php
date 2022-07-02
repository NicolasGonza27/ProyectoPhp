<?php
    require_once('nav.php');
?>
<div class="container">
    <h2 class="mb-4">New Weapon</h2>
    <form action="<?php echo FRONT_ROOT ?>Weapon/Add" method="post" class="bg-light-alpha p-5">
        <div class="row">                         
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" id="name" name="parameters[name]" value="" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Class</label>
                        <input type="text" id="class" name="parameters[class]" value="" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Precision</label>
                        <input type="text" id="precision" name="parameters[precision]" value="" class="form-control">
                    </div>
                </div>
        </div>
        <button id="login_button" class="btn btn-dark ml-auto d-block">Add</button>
    </form>
</div>