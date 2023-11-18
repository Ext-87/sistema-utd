<?php

namespace Database\Seeders;

use App\Models\Trimestral_malla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Trimestral_mallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


//================ INFORMATICA TRAYECTO I ================================

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'MATEMÁTICA I',
            'trayecto' => 'i',
            'trimestre_i' => 'LÓGICA',
            'uc_i' => 3,
            'trimestre_ii' => 'ESTADÍSTICA Y PROBABILIDADES',
            'uc_ii' => 3,
            'trimestre_iii' => 'CALCULO I',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'ARQUITECTURA DEL COMPUTADOR',
            'trayecto' => 'i',
            'trimestre_i' => 'ESTRUCTURA DEL COMPUTADOR',
            'uc_i' => 3,
            'trimestre_ii' => 'SISTEMAS OPERATIVOS I',
            'uc_ii' => 3,
            'trimestre_iii' => 'MANTENIMIENTO DE EQUIPOS DE COMPUTACIÓN',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'FORMACIÓN CRÍTICA I',
            'trayecto' => 'i',
            'trimestre_i' => 'CULTURA, DEPORTE Y RECREACIÓN I',
            'uc_i' => 1,
            'trimestre_ii' => 'INFORMÁTICA, POLÍTICAS DE ESTADO Y SOBERANÍA I',
            'uc_ii' => 1,
            'trimestre_iii' => 'INFORMÁTICA, POLÍTICAS DE ESTADO Y SOBERANÍA II',
            'uc_iii' => 1,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'ALGORÍTMICA Y  PROGRAMACIÓN',
            'trayecto' => 'i',
            'trimestre_i' => 'Algoritmia y Programción',
            'uc_i' => 4,
            'trimestre_ii' => 'Programación I',
            'uc_ii' => 4,
            'trimestre_iii' => 'Programación II',
            'uc_iii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'PROYECTO SOCIOTECNOLÓGICO I',
            'trayecto' => 'i',
            'trimestre_i' => 'SOPORTE TÉCNICO A USUARIOS Y EQUIPOS I',
            'uc_i' => 3,
            'trimestre_ii' => 'SOPORTE TÉCNICO A USUARIOS Y EQUIPOS II',
            'uc_ii' => 3,
            'trimestre_iii' => 'informatica, politica de estado y soberania ii',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'ELECTIVA I',
            'trayecto' => 'i',
            'trimestre_i' => 'DISEÑO INSTRUCCIONAL EN LAS TICS',
            'uc_i' => 3,
            'trimestre_ii' => 'CAPITAL INTELECTUAL Y RECURSOS HUMANOS',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'IDIOMAS',
            'trayecto' => 'i',
            'trimestre_i' => 'INGLÉS Y COMPRENSIÓN LECTORA  I',
            'uc_i' => 1,
            'trimestre_ii' => 'INGLÉS Y COMPRENSIÓN LECTORA  II',
            'uc_ii' => 1,
            'trimestre_iii' => 'INGLÉS Y COMPRENSIÓN LECTORA  III',
            'uc_iii' => 1,
        ]);

//=========== INFORMÁTICA TRAYECTO II ==========//

 Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'MATEMÁTICA II',
            'trayecto' => 'ii',
            'trimestre_i' => 'CALCULO II',
            'uc_i' => 3,
            'trimestre_ii' => 'ALGEBRA LINEAL',
            'uc_ii' => 3,
        ]);
        
    Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'REDES DE COMPUTADORAS',
            'trayecto' => 'ii',
            'trimestre_i' => 'FUNDAMENTOS Y COMPONENTES DE REDES',
            'uc_i' => 3,
            'trimestre_ii' => 'ADMINISTRACIÓN, PRINCIPIOS DE ENRUTAMIENTO Y SUBREDES',
            'uc_ii' => 3,
        ]);


        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'FORMACIÓN CRÍTICA II',
            'trayecto' => 'ii',
            'trimestre_i' => 'INFORMÁTICA, TECNOLOGÍA Y SOCIEDAD I',
            'uc_i' => 1,
            'trimestre_ii' => 'INFORMÁTICA, TECNOLOGÍA Y SOCIEDAD II',
            'uc_ii' => 1,
            'trimestre_iii' => 'CULTURA, DEPORTE Y RECREACIÓN II',
            'uc_iii' => 1,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'PARADIGMAS DE PROGRAMACIÓN',
            'trayecto' => 'ii',
            'trimestre_i' => 'PROGRAMACIÓN III',
            'uc_i' => 4,
            'trimestre_ii' => 'PROGRAMACIÓN IV',
            'uc_ii' => 4,
            'trimestre_iii' => 'PROGRAMACIÓN V',
            'uc_iii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'PROYECTO SOCIOTECNOLÓGICO II',
            'trayecto' => 'ii',
            'trimestre_i' => 'DESARROLLO DE SOLUCIONES INFORMÁTICAS I',
            'uc_i' => 3,
            'trimestre_ii' => 'DESARROLLO DE SOLUCIONES INFORMÁTICAS II',
            'uc_ii' => 3,
            'trimestre_iii' => 'DESARROLLO DE SOLUCIONES  INFORMÁTICAS III',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'INGENIERÍA DEL SOFTWARE I',
            'trayecto' => 'ii',
            'trimestre_iii' => 'FUNDAMENTOS DE SISTEMAS E INGENIERÍA DEL SOFTWARE',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'BASE DE DATOS',
            'trayecto' => 'ii',
            'trimestre_i' => 'BASE DE DATOS',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'ELECTIVA II',
            'trayecto' => 'ii',
            'trimestre_iii' => 'VOZ, Y TELEFONÍA IP- EDUMÁTICA',
            'uc_iii' => 3,
        ]);

    
//======== INFORMÁTICA TRAYECTO III =========//

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'MATEMÁTICA APLICADA',
            'trayecto' => 'iii',
            'trimestre_i' => 'ESTADÍSTICA Y PROBABILIDADES II',
            'uc_i' => 3,
            'trimestre_ii' => 'MATEMÁTICA DISCRETA',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'INVESTIGACIÓN DE OPERACIONES',
            'trayecto' => 'iii',
            'trimestre_iii' => 'INVESTIGACIÓN DE OPERACIONES',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'SISTEMAS OPERATIVOS',
            'trayecto' => 'iii',
            'trimestre_i' => 'SISTEMAS OPERATIVOS II',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'FORMACIÓN CRÍTICA III',
            'trayecto' => 'iii',
            'trimestre_i' => 'CULTURA, DEPORTE Y RECREACIÓN III',
            'uc_i' => 1,
            'trimestre_ii' => 'INFORMÁTICA, COMUNICACIÓN Y TRANSFORMACIÓN I',
            'uc_ii' => 1,
            'trimestre_iii' => 'INFORMÁTICA, COMUNICACIÓN Y TRANSFORMACIÓN II',
            'uc_iii' => 1,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'INGENIERÍA DEL SOFTWARE II',
            'trayecto' => 'iii',
            'trimestre_i' => 'FUNDAMENTOS DE INGENIERÍA DE REQUISITOS Y ANÁLISIS',
            'uc_i' => 3,
            'trimestre_ii' => 'FUNDAMENTOS DEL DISEÑO DE SOFTWARE',
            'uc_ii' => 3,
            'trimestre_iii' => 'PRUEBAS Y VALIDACIÓN DE SOFTWARE',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'MODELADO DE BASE DE DATOS',
            'trayecto' => 'iii',
            'trimestre_iii' => 'MODELADO DE BASE DE DATOS',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'ELECTIVA III',
            'trayecto' => 'iii',
            'trimestre_ii' => 'COMUNICACIONES VÍA SATÉLITE - TECNOLOGÍAS INTERNET',
            'uc_ii' => 3,
        ]);


//============== INFORMÁTICA TRAYECTO IV =================//

    Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'REDES AVANZADAS',
            'trayecto' => 'iv',
            'trimestre_iv' => 'REDES DE TELECOMUNICACIONES Y DE DATOS',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'FORMACIÓN CRÍTICA IV',
            'trayecto' => 'iv',
            'trimestre_i' => 'INFORMÁTICA, GLOBALIZACIÓN Y CULTURA I',
            'uc_i' => 1,
            'trimestre_ii' => 'INFORMÁTICA, GLOBALIZACIÓN Y CULTURA II',
            'uc_ii' => 1,
            'trimestre_iii' => 'CULTURA, DEPORTE Y RECREACIÓN IV',
            'uc_iii' => 1,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'SEGURIDAD INFORMÁTICA',
            'trayecto' => 'iv',
            'trimestre_i' => 'SEGURIDAD INFORMÁTICA',
            'uc_i' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'GESTIÓN DE PROYECTOS INFORMÁTICOS',
            'trayecto' => 'iv',
            'trimestre_ii' => 'GESTIÓN DE PROYECTOS INFORMÁTICOS',
            'uc_i' => 4,
            'trimestre_iii' => 'AUDITORÍA INFORMÁTICA',
            'uc_iii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'PROYECTO SOCIOTECNOLÓGICO IV',
            'trayecto' => 'iv',
            'trimestre_i' => 'GESTIÓN DE PROYECTOS I',
            'uc_i' => 3,
            'trimestre_ii' => 'GESTIÓN DE PROYECTOS II',
            'uc_ii' => 3,
            'trimestre_iii' => 'GESTIÓN DE PROYECTOS III',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'ADMINISTRACIÓN DE BASE DE DATOS',
            'trayecto' => 'iv',
            'trimestre_i' => 'ADMINISTRACIÓN DE BASE DE DATOS',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'ELECTIVA IV',
            'trayecto' => 'iv',
            'trimestre_iii' => 'APLICACIONES MULTIMEDIA',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'IDIOMAS',
            'trayecto' => 'iv',
            'trimestre_i' => 'CONVERSACIONAL I',
            'uc_i' => 3,
            'trimestre_ii' => 'CONVERSACIONAL II',
            'uc_ii' => 3,
            'trimestre_iii' => 'CONVERSACIONAL III',
            'uc_iii' => 3,
        ]);


//================ ADMINISTRACION ================================

//------- TRAYECTO I -----//

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PROYECTO I',
            'trayecto' => 'i',
            'trimestre_i' => 'IDENTIFICAR Y CONOCER LOS PROCESOS ADMINISTRATIVOS EN DISTINTAS ORGANIZACIONES',
            'uc_i' => 9,
            'trimestre_ii' => 'IDENTIFICAR Y CONOCER LOS PROCESOS ADMINISTRATIVOS EN DISTINTAS ORGANIZACIONES',
            'uc_ii' => 9,
            'trimestre_iii' => 'IDENTIFICAR Y CONOCER LOS PROCESOS ADMINISTRATIVOS EN DISTINTAS ORGANIZACIONES',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'FORMACIÓN SOCIO-CRÍTICA I',
            'trayecto' => 'i',
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'CONTABILIDAD I',
            'trayecto' => 'i',
            'uc_i' => 5,
            'uc_ii' => 5,
            'uc_iii' => 5,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'FUNDAMENTOS DE LA ADMINISTRACIÓN',
            'trayecto' => 'i',
            'uc_i' => 5,
            'uc_ii' => 5,
            'uc_iii' => 5,
        ]);


        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'EXPRESIÓN ORAL Y ESCRITA',
            'trayecto' => 'i',
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'MARCO JURÍDICO I',
            'trayecto' => 'i',
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'TECNOLOGÍA DE LA INFORMACIÓN Y COMUNICACIÓN',
            'trayecto' => 'i',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ESTADÍSTICA I',
            'trayecto' => 'i',
            'uc_ii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'TEORÍA Y PRÁCTICA DEL MERCADEO',
            'trayecto' => 'i',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ELECTIVA I',
            'trayecto' => 'i',
            'trimestre_ii' => 'ÉTICA EN EL EJERCICIO PROFESIONAL DE LA ADMINISTRACIÓN',
            'uc_ii' => 2,
        ]);
        
        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'OPERACIONES FINANCIERAS',
            'trayecto' => 'i',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'DEBERES FORMALES DEL CONTRIBUYENTE',
            'trayecto' => 'i',
            'uc_ii' => 3,
        ]);


        //------ TRAYECTO II ------//

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PROYECTO II',
            'trayecto' => 'ii',
            'trimestre_i' => 'SUPERVISIÓN Y CONDUCCIÓN TÉCNICA DE LOS PROCESOS ADMINISTRATIVOS',
            'uc_i' => 9,
            'trimestre_ii' => 'SUPERVISIÓN Y CONDUCCIÓN TÉCNICA DE LOS PROCESOS ADMINISTRATIVOS',
            'uc_ii' => 9,
            'trimestre_iii' => 'SUPERVISIÓN Y CONDUCCIÓN TÉCNICA DE LOS PROCESOS ADMINISTRATIVOS',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'FORMACIÓN SOCIO-CRÍTICA II',
            'trayecto' => 'ii',
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'CONTABILIDAD II',
            'trayecto' => 'ii',
            'uc_i' => 5,
            'uc_ii' => 5,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ORGANIZACIÓN Y SISTEMA',
            'trayecto' => 'ii',
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PRESUPUESTO PÚBLICO Y PRIVADO',
            'trayecto' => 'ii',
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'GESTIÓN DE TALENTO HUMANO',
            'trayecto' => 'ii',
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'MARCO JURÍDICO II',
            'trayecto' => 'ii',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'FUNDAMENTO DE ECONOMÍA',
            'trayecto' => 'ii',
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'DEBERES FORMALES AL CONTRIBUYENTE',
            'trayecto' => 'ii',
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ADMINISTRACIÓN DE COSTOS',
            'trayecto' => 'ii',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'GESTIÓN ECOLÓGICA AMBIENTAL',
            'trayecto' => 'ii',
            'uc_iii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ELECTIVA II',
            'trayecto' => 'ii',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'HABILIDADES DIRECTIVAS',
            'trayecto' => 'ii',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PRÁCTICA PROFESIONAL 120 HORAS',
            'trayecto' => 'ii',
            'uc_iii' => 0,
        ]);

        // ----- TRAYECTO III ------//


        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PROYECTO III',
            'trayecto' => 'iii',
            'trimestre_i' => 'PLANIFICACIÓN, DISEÑO, DESARROLLO E INNOVACIÓN DE SISTEMAS ADMINISTRATIVOS',
            'uc_i' => 9,
            'trimestre_ii' => 'PLANIFICACIÓN, DISEÑO, DESARROLLO E INNOVACIÓN DE SISTEMAS ADMINISTRATIVOS',
            'uc_ii' => 9,
            'trimestre_iii' => 'PLANIFICACIÓN, DISEÑO, DESARROLLO E INNOVACIÓN DE SISTEMAS ADMINISTRATIVOS',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'FORMACIÓN SOCIO-CRÍTICA III',
            'trayecto' => 'iii',
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ADMINISTRACIÓN DE COSTOS II',
            'trayecto' => 'iii',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'CONTABILIDAD GUBERNAMENTAL',
            'trayecto' => 'iii',
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'SISTEMAS ADMINISTRATIVOS',
            'trayecto' => 'iii',
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PLANIFICACIÓN Y GESTIÓN',
            'trayecto' => 'iii',
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ESTADÍSTICA II',
            'trayecto' => 'iii',
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ADMINISTRACIÓN DE LA PRODUCCIÓN',
            'trayecto' => 'iii',
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ANÁLISIS E INTERPRETACIÓN DE ESTADOS FINANCIEROS',
            'trayecto' => 'iii',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ADMINISTRACIÓN DE MERCADEO',
            'trayecto' => 'iii',
            'uc_iii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ELECTIVA III',
            'trayecto' => 'iii',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'HABILIDADES DIRECTIVAS II',
            'trayecto' => 'iii',
            'uc_iii' => 3,
        ]);

        // ------ TRAYECTO IV ------//

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PROYECTO IV',
            'trayecto' => 'iv',
            'trimestre_i' => 'DIRECCIÓN, CONTROL Y EVALUACIÓN DE SISTEMAS ADMINISTRATIVOS.',
            'uc_i' => 9,
            'trimestre_ii' => 'DIRECCIÓN, CONTROL Y EVALUACIÓN DE SISTEMAS ADMINISTRATIVOS.',
            'uc_ii' => 9,
            'trimestre_iii' => 'DIRECCIÓN, CONTROL Y EVALUACIÓN DE SISTEMAS ADMINISTRATIVOS.',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'FORMACIÓN SOCIO-CRÍTICA IV',
            'trayecto' => 'iv',
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ADMINISTRACIÓN FINANCIERA',
            'trayecto' => 'iv',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'AUDITORÍA ADMINISTRATIVA',
            'trayecto' => 'iv',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'INVESTIGACIÓN DE OPERACIONES',
            'trayecto' => 'iv',
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'CONTROL DE GESTIÓN ADMINISTRATIVO',
            'trayecto' => 'iv',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'GESTIÓN PÚBLICA',
            'trayecto' => 'iv',
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'FORMULACIÓN Y EVALUACIÓN DE PROYECTO',
            'trayecto' => 'iv',
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PAQUETES INFORMÁTICOS APLICADOS A LA ADMINISTRACIÓN',
            'trayecto' => 'iv',
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'ELECTIVA IV',
            'trayecto' => 'i',
            'trimestre_ii' => 'PLANIFICACIÓN ESTRATÉGICA DE LOS RECURSOS HUMANOS',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'PRÁCTICA PROGESIONAL 120 HORAS',
            'trayecto' => 'iv',
            'uc_iii' => 0,
        ]);



//================ AGROALIMENTACION ================================

        // -------- TRAYECTO I ------//

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PROYECTO FORMATIVO I',
        'trayecto' => 'i',
        'uc_i' => 6,
        'uc_ii' => 6,
        'uc_iii' => 6,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '2',
        'unidad_curricular' => 'PRINCIPIOS DE AGROECOLOGÍA',
        'trayecto' => 'i',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'SOCIOISTORIA DE LA AGRICULTUTRA LATINOAMERICANA',
        'trayecto' => 'i',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'BIODIVERSIDAD Y SOCIODIVERSIDAD',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    
    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'CÁLCULO GEOMÉTRICO APLICADO',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PRINCIPIOS DE LA BIOLOGÍA',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'MATEMÁTICA APLICADA',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'FÍSICA APLICADA',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);
    
    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'QUIMICA GENERAL APLICADA',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'POLÍTICAS Y LEGISLACIÓN AGRARIA',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'BOTÁNICA Y FISIOLOGÍA VEGETAL',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ZOOLOGÍA Y FISIOLOGÍA ANIMAL',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'MAQUINARIA, EQUIPOS E IMPLEMENTOS AGRÍCOLAS',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PRINCIPIOS DE BIOQUÍMICA',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    }
}

    // ------ TRAYECTO II ------ //

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PROYECTO FORMATIVO II',
        'trayecto' => 'ii',
        'uc_i' => 6,
        'uc_ii' => 6,
        'uc_iii' => 6,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'TÉCNICAS Y METODOLOGÍAS AGROECOLÓGICAS',
        'trayecto' => 'ii',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'SISTEMAS DE PRODUCCIÓN VEGETAL',
        'trayecto' => 'ii',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ALIMENTACIÓN Y NUTRICIÓN ANIMAL ALTERNATIVA',
        'trayecto' => 'ii',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'MICROBIOLOGÍA',
        'trayecto' => 'ii',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ORGANIZACIONES SOCIOPRODUCTIVAS',
        'trayecto' => 'ii',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'AGROEPISTEMOLOGÍA',
        'trayecto' => 'ii',
        'uc_ii' => 2,
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'MICROBOLOGÍA DE LOS ALIMENTOS',
        'trayecto' => 'ii',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'DISEMINACIÓN Y REPRODUCCIÓN DE ESPECIES VEGETALES',
        'trayecto' => 'ii',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'SUELO, ECOLOGÍA Y AGRICULTURA',
        'trayecto' => 'ii',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'REPRODUCCIÓN DE ESPECIES ANIMALES',
        'trayecto' => 'ii',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'TOPOGRAFÍA',
        'trayecto' => 'ii',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'AGROCLIMATOLOGÍA',
        'trayecto' => 'ii',
        'uc_iii' => 2,
    ]);

    // ------ TRAYECTO III ------ //

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PROYECTO FORMATIVO III',
        'trayecto' => 'iii',
        'uc_i' => 6,
        'uc_ii' => 6,
        'uc_iii' => 6,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'GESTIÓN AGROECOLÓGICA',
        'trayecto' => 'iii',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ANÁLISIS MATEMÁTICO',
        'trayecto' => 'iii',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ECONOMÍA POLÍTICA Y SOCIAL',
        'trayecto' => 'iii',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ESTADÍSTICA',
        'trayecto' => 'iii',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'MANEJO ECOLÓGICO DE INSECTOS Y ENFERMEDADES',
        'trayecto' => 'iii',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'SISTEMAS DE PRODUCCIÓN ANIMAL',
        'trayecto' => 'iii',
        'uc_ii' => 2,
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'MANEJO SANITARIO ANIMAL',
        'trayecto' => 'iii',
        'uc_ii' => 2,
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ECONOMÍA ECOLÓGICA',
        'trayecto' => 'iii',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'SISTEMAS DE RIESGO Y DRENAJE',
        'trayecto' => 'iii',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'OPERACIONES BÁSICAS EN LA TRANSFORMACIÓN',
        'trayecto' => 'iii',
        'uc_iii' => 2,
    ]);

    // ----- TRAYECTO IV ----//

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PROYECTO FORMATIVO IV',
        'trayecto' => 'iv',
        'uc_i' => 6,
        'uc_ii' => 6,
        'uc_iii' => 6,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'CIENCIA, TECNOLOGÍA Y SOCIEDAD',
        'trayecto' => 'iv',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'SISTEMAS DE INFORMACIÓN GEOGRÁFICA',
        'trayecto' => 'iv',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ECORREGIONES',
        'trayecto' => 'iv',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'MEJORAMIENTO ANIMAL PARTICIPATIVO',
        'trayecto' => 'iv',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'ECOCONSTRUCCIONES',
        'trayecto' => 'iv',
        'uc_ii' => 2,
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PENSAMIENTO SOCIOPOLÍTICO LATINOAMERICANO',
        'trayecto' => 'iv',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PLANIFICACIONES ECORREGIONAL',
        'trayecto' => 'iv',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'FITOMEJORAMIENTO PARTICIPATIVO',
        'trayecto' => 'iv',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'PEDAGOGÍA Y POLÍTICA',
        'trayecto' => 'iv',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'SISTEMAS INTEGRALES DE PRODUCCIÓN',
        'trayecto' => 'iv',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'HIEGENE Y CONTROL DE CALIDAD DE LOS ALIMENTOS',
        'trayecto' => 'iv',
        'uc_iii' => 2,
    ]);

