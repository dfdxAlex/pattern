<?php
namespace PHP\CreationalPatterns\AbstractFactory;

class ListTwoRed implements IList
{
    public function outList()
    {
        echo "Список 2<br>
              краснокочанная капуста<br>
              сладкий перец<br>
             ";
    }
}
