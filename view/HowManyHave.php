<?php

class HowManyHave extends View
{

    public function bodyPage()
    { ?>
        <div class="form-group">
            <form action="post">
                <div class="row">
                    <div class="col-6">
                        <label class="mt-4" for="">Account Florian</label>
                        <input class="form-control" type="number" name="account1" id="account">
                    </div>
                    <div class="col-6">
                        <label class="mt-4" for="">Account Mary</label>
                        <input class="form-control" type="number" name="account2" id="account">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="mt-4" for="">Salary Florian</label>
                        <input class="form-control" type="number" name="salary1">
                    </div>
                    <div class="col-6">
                        <label class="mt-4" for="">Salary Mary</label>
                        <input class="form-control" type="number" name="salary2">
                    </div>
                </div>
                <!-- <label class="mt-4" for="">Spent</label>
                <input class="form-control" type="number" name="spent"> -->
                <button class="mt-4 btn btn-primary" type="submit">Calculate</button>
            </form>
        </div>
<?php
    }
}
