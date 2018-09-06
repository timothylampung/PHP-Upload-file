<!DOCTYPE html>
<html>
<head>
    <title>Webslesson | <?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
<!--    <link href="--><?php //echo base_url(); ?><!--assets/css/custom-css.css" rel="stylesheet">-->
</head>
<body>
<div class="container">

    <br>
    <br>
    <br>


    <form action="<?php echo base_url(); ?>index.php/Asset/do_upload" method="post" enctype="multipart/form-data">

        <div class="wy-form"><input type="text" name="title" placeholder="Title" required class="form-control"/>

            <input type="text" name="description" placeholder="Title" required class="form-control"/>
        </div>
        <input type="file" name="userFile"/>
        <input type="submit"/>
    </form>


    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="row text-center">
        <?php foreach ($list as $item) { ?>

            <div class="col-sm-4">

                <div class="thumbnail">


                    <video width="320" height="240" controls>
                        <source src="<?php echo base_url(); ?><?php echo $item->path; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <p><strong>Title : <?php echo $item->title; ?></strong> <br>
                        Desc : <?php echo $item->description; ?> <br>
                        Date Uploaded : <?php echo $item->date_added; ?> <br></p>


                </div>

            </div>
        <?php } ?>

    </div>

    <table class="table wy-table-striped"></table>

    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</div>
</body>
</html>
