<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder {
    public function run(){
        $items = [
            [
                'title'=>'Portfolio Site',
                'slug'=>'portfolio-site',
                'thumbnail'=>'/img/project1.jpg',
                'description'=>'Personal portfolio built with Laravel & Tailwind.',
                'tech'=>json_encode(['Laravel','Tailwind','MySQL']),
                'url'=>'https://example.com'
            ],
            // ... add more
        ];
        foreach($items as $it){
            Project::updateOrCreate(['slug'=>$it['slug']], $it);
        }
    }
}
