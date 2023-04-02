<?php 


trait lani 
{
    function a () : void
    {
        echo "lani" . PHP_EOL;
    }

    function b () : void
    {
        echo "LANI" . PHP_EOL;
    }
}



trait lanis 
{
    function a () : void
    {
        echo "lani" . PHP_EOL;
    }

    function b() : void
    {
        echo "LANI" . PHP_EOL;
    }
}


class Sampel 
{
    use lani, lanis{
        lani :: a insteadof lanis;
        lanis :: b insteadof lani;
    }
}

$sampel = new Sampel();
$sampel->a();
$sampel->b();