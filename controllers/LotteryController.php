<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class LotteryController extends Controller
{
    // 抽奖方法
    public function actionIndex()
    {
        // 获取当前登录用户ID，这里假设你的用户系统已经集成到Yii2中
        //$userId = Yii::$app->user->identity->id;
        $userId = 'user5';
        // 模拟抽奖逻辑，这里可以根据实际需求进行修改
        $winner = $this->drawWinner();

        if ($winner === $userId) {
            // 中奖逻辑
            $message = "恭喜你中奖了！";
        } else {
            // 未中奖逻辑
            $message = "很遗憾，你没有中奖。";
        }

        // 显示抽奖结果
        return $this->render('index', [
            'message' => $message,
        ]);
    }

    // 模拟抽奖逻辑
    private function drawWinner()
    {
        // 这里只是一个简单的随机抽奖逻辑，实际使用时可以根据具体需求进行修改
        $participants = ['user1', 'user2', 'user3', 'user4', 'user5'];
        $winnerIndex = array_rand($participants);
        $winner = $participants[$winnerIndex];

        return $winner;
    }
}
