<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfiles')->insert(['nombre' => 'Master']);
		DB::table('perfiles')->insert(['nombre' => 'Administrador']);
		DB::table('perfiles')->insert(['nombre' => 'Paciente']);

		DB::table('departamentos')->insert(['nombre' => 'General']);
		DB::table('departamentos')->insert(['nombre' => 'Nutricion']);
		DB::table('departamentos')->insert(['nombre' => 'Acondicionamiento']);
		DB::table('departamentos')->insert(['nombre' => 'Psicologia']);

		DB::table('divisionesug')->insert(['nombre' => "DICIS"]);
		DB::table('divisionesug')->insert(['nombre' => "DAAD"]);
		DB::table('divisionesug')->insert(['nombre' => "DCEA"]);
		DB::table('divisionesug')->insert(['nombre' => "DCNE"]);
		DB::table('divisionesug')->insert(['nombre' => "DCSH"]);
		DB::table('divisionesug')->insert(['nombre' => "DDPG"]);
		DB::table('divisionesug')->insert(['nombre' => "DI"]);
		DB::table('divisionesug')->insert(['nombre' => "Otra"]);
		
		DB::table('programaseduug')->insert(['division_id' => 1, 'nombre' => "Ing. Sistemas Computacionales"]);
		DB::table('programaseduug')->insert(['division_id' => 1, 'nombre' => "Ing. Mecánica"]);
		DB::table('programaseduug')->insert(['division_id' => 1, 'nombre' => "Ing. Mecatrónica"]);
		DB::table('programaseduug')->insert(['division_id' => 1, 'nombre' => "Ing. Eléctrica"]);
		DB::table('programaseduug')->insert(['division_id' => 1, 'nombre' => "Ing. Electrónica "]);
		DB::table('programaseduug')->insert(['division_id' => 1, 'nombre' => "Lic. Artes Digitales"]);
		DB::table('programaseduug')->insert(['division_id' => 1, 'nombre' => "Lic. Gestión Empresarial"]);
		DB::table('programaseduug')->insert(['division_id' => 2, 'nombre' => "Arquitectura"]);
		DB::table('programaseduug')->insert(['division_id' => 2, 'nombre' => "Artes Visuales"]);
		DB::table('programaseduug')->insert(['division_id' => 2, 'nombre' => "Artes Escénicas"]);
		DB::table('programaseduug')->insert(['division_id' => 2, 'nombre' => "Diseño Gráfico"]);
		DB::table('programaseduug')->insert(['division_id' => 2, 'nombre' => "Diseño de Interiores"]);
		DB::table('programaseduug')->insert(['division_id' => 2, 'nombre' => "Música y Artes Escénicas"]);
		DB::table('programaseduug')->insert(['division_id' => 3, 'nombre' => "Admin. de la Calidad y la Productividad"]);
		DB::table('programaseduug')->insert(['division_id' => 3, 'nombre' => "Admin. de Recursos Turísticos"]);
		DB::table('programaseduug')->insert(['division_id' => 3, 'nombre' => "Comercio Internacional"]);
		DB::table('programaseduug')->insert(['division_id' => 3, 'nombre' => "Contador Publico"]);
		DB::table('programaseduug')->insert(['division_id' => 3, 'nombre' => "Economía"]);
		DB::table('programaseduug')->insert(['division_id' => 3, 'nombre' => "Relaciones Industriales"]);
		DB::table('programaseduug')->insert(['division_id' => 3, 'nombre' => "Sistemas de Información Administrativa"]);
		DB::table('programaseduug')->insert(['division_id' => 4, 'nombre' => "Biología Experimental"]);
		DB::table('programaseduug')->insert(['division_id' => 4, 'nombre' => "Ing. Química"]);
		DB::table('programaseduug')->insert(['division_id' => 4, 'nombre' => "Matemáticas"]);
		DB::table('programaseduug')->insert(['division_id' => 4, 'nombre' => "Química"]);
		DB::table('programaseduug')->insert(['division_id' => 4, 'nombre' => "Químico Farmacéutico Bíologo"]);
		DB::table('programaseduug')->insert(['division_id' => 5, 'nombre' => "Educación"]);
		DB::table('programaseduug')->insert(['division_id' => 5, 'nombre' => "Ens. Español como 2 Leng."]);
		DB::table('programaseduug')->insert(['division_id' => 5, 'nombre' => "Ens. del Inglés"]);
		DB::table('programaseduug')->insert(['division_id' => 5, 'nombre' => "Filosofía"]);
		DB::table('programaseduug')->insert(['division_id' => 5, 'nombre' => "Historia"]);
		DB::table('programaseduug')->insert(['division_id' => 5, 'nombre' => "Letras Españolas"]);
		DB::table('programaseduug')->insert(['division_id' => 6, 'nombre' => "Administración Pública"]);
		DB::table('programaseduug')->insert(['division_id' => 6, 'nombre' => "Ciencia Política"]);
		DB::table('programaseduug')->insert(['division_id' => 6, 'nombre' => "Derecho"]);
		DB::table('programaseduug')->insert(['division_id' => 7, 'nombre' => "Geografía"]);
		DB::table('programaseduug')->insert(['division_id' => 7, 'nombre' => "Ing. Ambiental"]);
		DB::table('programaseduug')->insert(['division_id' => 7, 'nombre' => "Ing. Civil"]);
		DB::table('programaseduug')->insert(['division_id' => 7, 'nombre' => "Ing. en Geomática"]);
		DB::table('programaseduug')->insert(['division_id' => 7, 'nombre' => "Ing. en Minas"]);
		DB::table('programaseduug')->insert(['division_id' => 7, 'nombre' => "Ing. Hidráulica"]);
		DB::table('programaseduug')->insert(['division_id' => 7, 'nombre' => "Ing. Metalúrgica"]);
		DB::table('programaseduug')->insert(['division_id' => 7, 'nombre' => "Ing. Geólogo"]);
		DB::table('programaseduug')->insert(['division_id' => 8, 'nombre' => "Otra"]);
    }
}
