<?php
class Enemy
{
    const MAX_HITPOINT = 50;
    public $name; // 敵の名前
    public $hitPoint = 50; // 現在のHP
    public $attackPoint = 10; // 攻撃力
    
    public function doAttack($human)
    {
                echo "「" . $this->name . "」の攻撃！\n";
        echo "「" . $enemy->name . "」に" . $this->attackPoint . "のダメージ!\n";
        $enemy->tookDamage($this->attackPoint);

    }
}