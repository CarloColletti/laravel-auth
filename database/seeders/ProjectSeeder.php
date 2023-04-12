<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker){
    for($i = 0; $i < 50; $i++){
      $new_project = new Project;
  
  
      $new_project->image = $faker->imageUrl(640, 480, 'robots', true);
      $new_project->title = $faker->catchPhrase();
      $new_project->description = $faker->text(100);
      $new_project->date = $faker->date('Y_m_d');
      
      $new_project->save();
    };
  }
}
