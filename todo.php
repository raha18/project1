<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .card
        {
            border-left : solid 5px red ;
            border-radius : 10px;
            padding: 20px 40px;
            position: relative;
        }
        .completed
        {
            border-left-color : green;
        }
        .completed .fa-check
        {
            color : green;
        }
        .fa-trash
        {
            color : red;
        }
        .dsecription
        {
            width: 80%;
        }
        .icons
        {
            width: 20%;
            position: absolute;
            right: 23px;
            color:#bbb;
            font-size:20px;
        }
        .icons a
        {
            color : #bbb;
            text-decoration : none;
        }
        .icons i
        {
            padding-left: 5px; 
        }
    </style>
</head>
<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Task Name</label>
                            <input type="text" name="taskName" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Task Dsecription</label>
                            <textarea class="form-control" name="taskDsec" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <header class="py-3 shadow fixed-top">
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-plus"></i>
                            Add Task
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php include 'objects.php';?>
    <div class="container py-5 my-5">
        <?php foreach($objects as $object){ ?>
        <div class="row py-1">
            <div class="col-md-6 mx-auto py-2">
                <div class="card <?php if($object['completed']){echo 'completed'; }?>">
                    <div class="dsecription">
                        <h2 class="py-2"><?= $object['name'] ?></h2>
                        <p><?= $object['dsec'] ?></p>
                    </div>
                    <div class="icons">
                        <a href="complete.php?id=<?= $object['id']; ?>&completed=<?= $object['completed'] ?>"><i class="fas fa-check"></i></a>
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>