<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('produtos', function (Blueprint $table) {
        $table->id(); // ID único do produto (chave primária)
        $table->string('nome'); // Nome do produto
        $table->text('descricao')->nullable(); // Descrição do produto (opcional)
        $table->decimal('preco', 8, 2); // Preço com duas casas decimais
        $table->integer('quantidade'); // Quantidade disponível
        $table->timestamps(); // Cria as colunas "created_at" e "updated_at"
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
