<?php

/** Надо создать класс, который будет выводить все 
 * возможные комбинации без повторений из строки символов, 
 * установленной длинны. Так же кол-во комбинаций.
 * Например, вводим строку "123", и длинну строки 2, получаем
 */

class Combinator
{

  function __construct(string $str, int $length)
  {    
    $this->arr = str_split($str);
    $this->length = $length;
    $this->perms = [];
    $this->perm = array_fill(0, $this->length, 0);
  }

  public function combine(): void
  {
    try {
      if (count($this->arr)<$this->length) {
        throw new Exception('Длина комбинация больше строки!');
      }

      $this->permutate($this->arr, 0);
      $this->perms = array_map(fn($elem) => implode('', $elem), $this->perms);
      $this->print($this->perms);

    } catch (Exception $e) {

      $this->print($e->getMessage());

    }
  }

  private function permutate($elems, $depth)
  {
    if ($depth === $this->length) {
      $this->perms[] = $this->perm;
      return;
    }

    for ($i = 0; $i < count($elems); $i++) {
      $this->perm[$depth] = $elems[$i];

      $part = [...array_slice($elems, 0, $i), ...array_slice($elems, $i + 1)];

      $this->permutate($part, $depth + 1);
    }
  }

  private function print($data): void
  {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
  }
}

$combinator = new Combinator('123', 2);
$combinator->combine();
