<?php

namespace App\Console\Commands;

use App\Mail\NewYearMail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:sendMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email for user';

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
        \Log::info('haha');
//        Mail::to('hoanghoa@gmail.com')->send(new NewYearMail());
    }

}
