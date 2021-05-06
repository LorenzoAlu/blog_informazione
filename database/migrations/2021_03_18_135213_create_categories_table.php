<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Category;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {

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
        Schema::dropIfExists('categories');
    }
}
