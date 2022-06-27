<?php
include "header.php";
?>

    <div class="">
        <p>داشبورد</p>

        <div class="row">

            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="addSpecialt" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="Specialt" class="form-control" placeholder="نخصص خود را وارد کنید..." aria-label="First name">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>


<?php
include "footer.php";
?>