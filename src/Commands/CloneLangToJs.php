<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;

class CloneLangToJs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lang:clone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clone lang folder from php to js';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $langs = ['ar', 'en'];
        $this->output->progressStart(count($langs));
        foreach($langs as $lang)
        {
            App::setLocale($lang);
            $path = lang_path($lang);
            $collection = collect(File::allFiles($path))->flatMap(function ($file,$lang) {
                return [
                    ($translation = $file->getBasename('.php')) => trans($translation,array(),null,$lang),
                ];
            });
            $data='export default '.json_encode($collection->toArray());
            file_put_contents(resource_path('js/lang/').'/'.$lang.'_php.js',
                $data
            );
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
    }
}
