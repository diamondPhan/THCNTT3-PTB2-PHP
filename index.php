<!DOCTYPE html>

<html>

    <head>

        <title>Giải phương trình bậc hai</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <h1>Giải phương trình bậc hai</h1>
        <?php 

            $result = '';

            if (isset($_GET['calculate']))

            {
                $a=isset($_GET['a']?$_GET['a']:";
                $b=isset($_GET['a']?$_GET['b']:";
                $a=isset($_GET['c']?$_GET['c']:";
                
                $delta=($b*$b)-(a*$a*$c);
                if($delta<0)
                {
                $result='Phuong trinh vo nghiem';
                }
                else if( $delta==0)
                {
                $result='Phuong trinh co nghiem kep x1=x2='.(-$b/2*$a);
                }
                else
                {
                $result='Phuong trinh co 2 nghiem phan biet,x1='.((-$b+sqrt($delta))/2*$a);
                $result.=',x2='.((-$b-sqrt($delta))/2*$a);
                }

            }

        ?>

        <form method="post" action="">

            <input type="text" style="width: 20px" name="a" value=""/>x <sup>2</sup>+

            <input type="text" style="width: 20px" name="b" value=""/>x+

            <input type="text" style="width: 20px" name="c" value=""/>= 0

            <br/><br/>

            <input type="submit" name="calculate" value="Tính" />

        </form>
        <?php echo $result; ?>


    </body>

</html>
