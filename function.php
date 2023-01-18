<?php
    function alertdirect($msg,$link)
    {
        ?>
        <script>
            alert('<?php echo $msg?>');
            window.location.href='<?php echo $link ?>';
        </script>
        <?php
        die();
    }
?>