<?php

if (!isset($_POST['submit']) ||  $_SERVER['REQUEST_METHOD'] === 'GET' || $_POST['length'] == '' || $_POST['width'] == '') { ?>
    <form action="" method="POST">
        <input type="number" name="length">
        <input type="number" name="width">
        <input type="submit" name="submit" value="submit">
        <a href="<?= $previous ?>">Reset</a>
    </form>

    <?php }

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['length'] != '' && $_POST['width'] != '') { ?>
        <p><?php echo $_POST['length'] * $_POST['width'] ?></p>
        <a href="<?= $previous ?>">Back</a>
<?php unset($_POST['submit']);
    }

    $previous = "javascript:history.go(-1)";
    if (isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'];
    }
}
