<?php

class Brave extends Human
{
    const MAX_HITPOINT = 120;
    public $hitPoint = self::MAX_HITPOINT;
    public $attackPoint = 30;
    
    public function doAttack($enemy)
    {
        // 1/3 の確率でスキルを発動
        if(rand(1,3) === 1){
            //スキルの発動
            echo "「" . $this->name . "」のスキルが発動した！\n";
            echo "「せんりょくぎり」!!\n";
            echo $enemy->name . "に" . $this->attackPoint * 1.5 . "のダメージ!\n";
            $enemy->tookDamage($this->attackPoint * 1.5);
        }else{
            parent::doAttack($enemy);
        }
        return true;
    }
}