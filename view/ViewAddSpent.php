<?php

class ViewAppSpent extends View
{
    public function bodyPage()
    { ?>
        <div class="form-group">
            <h4>Total on the account's: <span class="font-weight-bold"> <?php echo file_get_contents('data/database.txt') . '€' ?></span></h4>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-6">
                        <label class="mt-4" for="">Name of Spent</label>
                        <input class="form-control" type="text" name="nameOfSpent">
                    </div>
                    <div class="col-6">
                        <label class="mt-4" for="">Spent</label>
                        <input class="form-control text-right" type="text" name="spent" placeholder="€">
                    </div>
                </div>
                <button type="submit" class="mt-4 w-25 btn btn-danger">Add Spent</button>
            </form>
        </div>
<?php
    }
}
