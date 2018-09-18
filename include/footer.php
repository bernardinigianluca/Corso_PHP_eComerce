<!--Template footer-->
<style>
html{
    position: relative;
    min-height:100%;
}
body{
    margin-bottom: 100px;
}

.footer{
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #f3f1f1;
    height: 60px;
}

</style>

<footer class="footer">
    <div class="container">
        <p class="text-muted">
            <?php
            $anno  = date("Y");
            echo "Copyright &copy; - $anno"
            ?>
        </p>
    </div>
</footer>