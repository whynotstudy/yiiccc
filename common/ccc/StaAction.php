<?php
namespace app\common\ccc;
use yii\base\Action;

/**
 * 
 */
class StaAction extends Action
{
	
	public function run()
	{
		echo "test这是一个独立动作的调用，静态页不是这么用的，一直报错66666";
	}
}
