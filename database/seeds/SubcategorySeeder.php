<?php

use App\Plant;
use App\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subcategory::class, 10)->create();
        $this->addPlantSubcategory();
    }

    public function addPlantSubcategory()
    {
        $plants =  Plant::with('category.subCategories')->get();
        foreach ($plants as $plant)
        {
            $category = $plant->category;
            $sub_categories_ids = $category->subCategories->pluck('id');
            $plant->subcategory_id = $sub_categories_ids->random();
            $plant->save();
        }
    }
}
