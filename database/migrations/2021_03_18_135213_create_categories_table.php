<?php



use App\Models\Category;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Illuminate\Support\Facades\Schema::dropIfExists('categories');
        Illuminate\Support\Facades\Schema::create('categories', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $categories=[
            'Politica',
            'Spettacolo',
            'Sport',
            'Motori',
            'Attualità',
            'Tecnologia'
        ];

        foreach($categories as $category){
            $c = new Category();
            $c->name = $category;
            $c->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Illuminate\Support\Facades\Schema::dropIfExists('categories');
    }
}
