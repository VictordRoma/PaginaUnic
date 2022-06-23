<html>
    <head>
        <title>Pag Unica <?php if(isset($_GET['op'])){echo $_GET['op'];} ?></title>
    </head>
    <body>
        <a href="index.php?op=1">Op1</a>
        <a href="index.php?op=2">Op2</a>
        <a href="index.php?op=3">Op3</a>
 
        <?php if(isset($_GET['op'])){ ?>
            <?php if($_GET['op'] == 1) { ?>
                <h1>Conteudo da primeira pag</h1>
            <?php } elseif($_GET['op'] == 2){ ?>
                <h1>Conteudo da segunda pag</h1>
            <?php }else{?>
                <h1>Conteudo da Terceira pag</h1>
            <?php } ?>
        <?php }else{ ?>
        
        <h1>index</h1>
 
        <?php } ?>
 
    </body>
</html>
 
 