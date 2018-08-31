<!DOCTYPE html>
<html>
<head>
    <title>Webslesson | <?php echo $title; ?></title>
    <link rel="stylesheet"

          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
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

    <table class="table wy-table-striped">

        <?php foreach ($list as $item) { ?>
            <tr>
                <td>
                    <video width="320" height="240" controls>
                        <source src="<?php echo base_url(); ?><?php echo $item->path; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </td>
                <td>
                    <p><strong>Title : <?php echo $item->title; ?></strong> <br>
                        Desc : <?php echo $item->description; ?> <br>
                        Date Uploaded : <?php echo $item->date_added; ?> <br></p>
                </td>

            </tr>
        <?php } ?>


    </table>


</div>
</body>
</html>
