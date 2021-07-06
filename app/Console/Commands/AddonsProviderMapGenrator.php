<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 */

namespace App\Console\Commands;

use App\Meedu\Addons;
use Illuminate\Console\Command;

class AddonsProviderMapGenrator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addons:provider:map {except?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '重新生成已安装插件的map文件';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        $except = $this->argument('except');
        /**
         * @var $addons Addons
         */
        $addons = app()->make(Addons::class);
        $addons->reGenProvidersMap($except);
    }
}
