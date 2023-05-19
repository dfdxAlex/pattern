<?php
namespace PHP\CreationalPatterns\AbstractFactory;

class ListTwoGreen implements IList
{
    public function outList()
    {
        echo "Список 2<br>
              брюссельская капуста<br>
              стручковая фасоль<br>
              огурцы<br>
              кабачки<br>
             ";
    }
}
