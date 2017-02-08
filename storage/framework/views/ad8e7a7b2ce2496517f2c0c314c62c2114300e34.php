<?php echo '<?php' ?>

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class LaratrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('<?php echo e($laratrust['roles_table']); ?>', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('<?php echo e($laratrust['role_user_table']); ?>', function (Blueprint $table) {
            $table->integer('<?php echo e($laratrust['user_foreign_key']); ?>')->unsigned();
            $table->integer('<?php echo e($laratrust['role_foreign_key']); ?>')->unsigned();

            $table->foreign('<?php echo e($laratrust['user_foreign_key']); ?>')->references('<?php echo e($user->getKeyName()); ?>')->on('<?php echo e($user->getTable()); ?>')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('<?php echo e($laratrust['role_foreign_key']); ?>')->references('id')->on('<?php echo e($laratrust['roles_table']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['<?php echo e($laratrust['user_foreign_key']); ?>', '<?php echo e($laratrust['role_foreign_key']); ?>']);
        });

        // Create table for storing permissions
        Schema::create('<?php echo e($laratrust['permissions_table']); ?>', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('<?php echo e($laratrust['permission_role_table']); ?>', function (Blueprint $table) {
            $table->integer('<?php echo e($laratrust['permission_foreign_key']); ?>')->unsigned();
            $table->integer('<?php echo e($laratrust['role_foreign_key']); ?>')->unsigned();

            $table->foreign('<?php echo e($laratrust['permission_foreign_key']); ?>')->references('id')->on('<?php echo e($laratrust['permissions_table']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('<?php echo e($laratrust['role_foreign_key']); ?>')->references('id')->on('<?php echo e($laratrust['roles_table']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['<?php echo e($laratrust['permission_foreign_key']); ?>', '<?php echo e($laratrust['role_foreign_key']); ?>']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('<?php echo e($laratrust['permission_role_table']); ?>');
        Schema::drop('<?php echo e($laratrust['permissions_table']); ?>');
        Schema::drop('<?php echo e($laratrust['role_user_table']); ?>');
        Schema::drop('<?php echo e($laratrust['roles_table']); ?>');
    }
}
