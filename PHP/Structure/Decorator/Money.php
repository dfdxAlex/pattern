<?php

class Money implements IMoney
{
    public function returnMoney($s, $m)
    {
        // 1 килограмм груза на 10 км = 1 доллар
        return $s/10*$m;
    }
}
