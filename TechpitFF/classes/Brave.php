<?php

class Brave extends Human
{
    const MAX_HITPOINT = 120;
    public $hitPoint = self::MAX_HITPOINT;
    private $attackPoint = 30;
    
    public function __construct($name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint);
    }
    
    public function doAttack($enemy)
    {
        // 1/3 の確率でスキルを発動
        if(rand(1,3) === 1){
            //スキルの発動
            echo "「" . $this->getName() . "」のスキルが発動した！\n";
            echo "「せんりょくぎり」!!\n";
            echo $enemy->getName() . "に" . $this->getAttackPoint() * 1.5 . "のダメージ!\n";
            $enemy->tookDamage($this->getAttackPoint() * 1.5);
        }else{
            parent::doAttack($enemy);
        }
        return true;
    }
}