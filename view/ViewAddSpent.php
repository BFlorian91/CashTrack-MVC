<?php

class ViewAppSpent extends View
{
    private $_spent;
    private $_accounts;

    public function __construct()
    {
        $this->_spent = null;
        $this->_accounts = null;
    }

    public function getAccount()
    {
        return $this->_accounts;
    }

    public function setAccount($value)
    {
        $this->_accounts = $value;
    }

    public function bodyPage()
    { ?>
        <div class="form-group">
            <h4>Total on the account's: <span class="font-weight-bold"> <?php echo $this->getAccount() . '€' ?></span></h4>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-6">
                        <label class="mt-4" for="">Category</label>
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

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">date</th>
                    <th class="text-center" scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $datas = unserialize(file_get_contents('data/datasSpent.txt'));
                    if (!empty($datas)) {
                        foreach ($datas as $key => $val) { 
                            if ($key > 0) :?>
                            <tr>
                                <th scope="row"><?php echo $key; ?></th>
                                <td><?php echo $val['nameOfSpent']; ?></td>
                                <td><?php echo $val['spent']; ?>€</td>
                                <td><?php echo $val['date']; ?></td>
                                <td class="text-center"><button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-primary"><i class="fas fa-edit"></i></button></td>
                            </tr>
                            <?php endif; }
                    }
                    ?>
            </tbody>
        </table>
<?php
    }
}
