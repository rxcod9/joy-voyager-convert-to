<?php

namespace Joy\VoyagerConvertTo\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class ConvertTo extends Command
{
    protected $name = 'joy-convert-to';

    protected $description = 'Joy Voyager ConvertToer';

    public function handle()
    {
        $this->output->title('Starting convert-to');

        // Your magic here

        $this->output->success('ConvertTo successful');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['arguement1', InputArgument::REQUIRED, 'The argument1 description'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            [
                'option1',
                'o',
                InputOption::VALUE_OPTIONAL,
                'The option1 description',
                config('joy-voyager-convert-to.option1')
            ],
        ];
    }
}
