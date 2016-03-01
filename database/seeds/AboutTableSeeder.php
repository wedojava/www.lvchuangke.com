<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_raw = <<<EOT
#我们承诺

你还在东奔西跑，自己找律师吗？而且，你找的只是<span class="lck-highlight">一个</span>律师？太 Out 了！

我们为一个案件推荐该领域内最权威的<span class="lck-highlight">多名</span>律师，由众多律师分别给出答辩意见书，再有我们专业团队进行筛查，进入案件预审程序，最终则最优律师留下。

我们为您保驾护航！我们承诺，最终，你只需要话费请一名律师的钱！

<p>
    <a class="btn btn-lg btn-lck-blue" href="javascript:;" role="button">联系我们 <i class="fa fa-btn fa-arrow-right"></i>15899138838</a>
</p>
EOT;
        $data = [
            'detail_raw' => $detail_raw

        ];
        App\About::create($data);
    }
}
