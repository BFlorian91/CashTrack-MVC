<?php

class ViewAddMoney extends View
{

    public function bodyPage()
    { ?>
        <div class="form-group">
            <form method="post">
                <div class="row">
                    <div class="col-6">
                        <label class="mt-4" for="">Account Florian</label>
                        <input class="form-control text-right" type="text" name="account1" id="account1" placeholder="€">
                    </div>
                    <div class="col-6">
                        <label class="mt-4" for="">Account Mary</label>
                        <input class="form-control text-right" type="text" name="account2" id="account2" placeholder="€">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="mt-4" for="">Salary Florian</label>
                        <input class="form-control text-right" type="text" name="salary1" placeholder="€">
                    </div>
                    <div class="col-6">
                        <label class="mt-4" for="">Salary Mary</label>
                        <input class="form-control text-right" type="text" name="salary2" placeholder="€">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button class="mt-4 w-50 btn btn-success" type="submit">Add Money</button>
                    </div>
                    <div class="col-6">
                        <a href="index.php?page=addspent"><button class="mt-4 w-50 btn btn-danger">Add Spent</button></a>
                    </div>
                </div>
            </form>
        </div>
<?php
    }
}
