<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeResourceViews extends Command
{
    protected $signature = 'make:views {name} {--resource}';
    protected $description = 'Create view file(s), optionally as resource views (index, create, edit, show)';

    protected $resourceViews = ['index', 'create', 'edit', 'show'];

    public function handle()
    {
        $name = str_replace('.', '/', $this->argument('name'));
        $basePath = resource_path("views/{$name}");

        if ($this->option('resource')) {
            $this->makeDirectory($basePath);
            foreach ($this->resourceViews as $view) {
                $this->makeView("{$basePath}/{$view}.blade.php");
            }
            $this->info("Resource views created at: resources/views/{$name}/");
        } else {
            $path = resource_path("views/{$name}.blade.php");
            $this->makeDirectory(dirname($path));
            $this->makeView($path);
            $this->info("View created: resources/views/{$name}.blade.php");
        }
    }

    protected function makeDirectory($path)
    {
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
    }

    protected function makeView($path)
    {
        if (File::exists($path)) {
            $this->warn("View already exists: {$path}");
            return;
        }

        File::put($path, "<!-- View: " . basename($path) . " -->");
    }
}
