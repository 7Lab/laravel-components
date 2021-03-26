<?php

namespace SevenLab\LaravelComponents\Commands;

use Illuminate\Console\Command;

class Publish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'components:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publishes the styles of the 7lab components';

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
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (!is_dir(resource_path('scss'))) {
            mkdir(resource_path('scss'));
        } else {
            if (
                is_dir(resource_path('scss/7lab')) &&
                !$this->confirm('The component styles already exists. Are you sure you want to continue?. It can overwrite existing files')
            ) {
                $this->warn('Component styles not published.');
                return 1;
            }
        }

        $this->call('vendor:publish', [
            '--tag' => '7lab.components.styles',
            '--force' => true
        ]);

        return 0;
    }
}
