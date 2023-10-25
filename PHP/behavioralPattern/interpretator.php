<?php
// include_once "autoloader.php";
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Привет мир!</title>
  </head>
  <body>

  <!-- Форма ввода примера -->
  <?php if (!isset($_POST['str'])): ?>

    <form action="#" method="post">
      <input type="text" name="str">
      <input type="submit" value="Вычислить">
    </form>

  <?php else: ?>
     
    <form action="#" method="post">
      <input type="submit" value="Новое вычисление">
    </form>

  <?php endif ?>
  <!-- ------------------------------------------------- -->
  
  <?php


   // Паттерн интерпретатор внизу \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    class Subtract implements Expression
    {
        private $left;
        private $right;    

        public function __construct(INumber $left, INumber $right)
        {
            $this->left = $left->interpret();
            $this->right = $right->interpret();
        }    

        public function interpret()
        {
            return  $this->left - $this->right;
        }
    }

    class Add implements Expression
    {
        private $left;
        private $right;

        public function __construct(INumber $left, INumber $right)
        {
            $this->left = $left->interpret();
            $this->right = $right->interpret();
        }

        public function interpret()
        {
            return  $this->left + $this->right;
        }
    }

    interface INumber
    {
      
    }

    class Number implements Expression, INumber
    {
        private $number;

        public function __construct($number)
        {
            $this->number = $number;
        }

        public function interpret()
        {
            return  $this->number;
        }
    }

    interface Expression
    {
        public function interpret();
    }



  // Запустить проект если был отправлен пример.
  if (isset($_POST['str'])) {
      $calc = new Calculator;
      echo '<h1>';
      echo $calc->calculator($_POST['str']);
      echo '</h1>';
  }

// Использует классы паттерна Интерпретатора
class Calculator
{
    public function calculator($str)
    {
        $mas = preg_split('/([+-])/', $str, -1, PREG_SPLIT_DELIM_CAPTURE);

        if ($mas[1] == "+") $operation = new Add(new Number($mas[0]), new Number($mas[2]));
        else $operation = new Subtract(new Number($mas[0]), new Number($mas[2]));

        return $operation->interpret();
    }
}
  
  ?>

  </body>
</html>


