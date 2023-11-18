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
            'unidad_curricular' => 'MODELADO DE BASE DE DATOS',
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

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'Proyecto',
            'trayecto' => 'i',
            'trimestre_i' => 'Identificar y conocer los procesos administrativos en distintas organizaciones',
            'uc_i' => 9,
            'trimestre_ii' => 'Identificar y conocer los procesos administrativos en distintas organizaciones',
            'uc_ii' => 9,
            'trimestre_iii' => 'Identificar y conocer los procesos administrativos en distintas organizaciones',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'Formación Socio-critica ',
            'trayecto' => 'i',
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'Contabilidad',
            'trayecto' => 'i',
            'uc_i' => 5,
            'uc_ii' => 5,
            'uc_iii' => 5,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'Fundamentos de la Administración',
            'trayecto' => 'i',
            'uc_i' => 5,
            'uc_ii' => 5,
            'uc_iii' => 5,
        ]);

        


//================ AGROALIMENTACION ================================

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Proyecto Formativo',
        'trayecto' => 'i',
        'uc_i' => 6,
        'uc_ii' => 6,
        'uc_iii' => 6,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '2',
        'unidad_curricular' => 'Principios de agroecologia',
        'trayecto' => 'i',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Sociohistoria de la Agricultura Latinoamericana',
        'trayecto' => 'i',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Biodiversidad y Sociodiversidad',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    
    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Calculo geometico avanzado',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Principios de biologia',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Matematica Aplicada',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Fisica Aplicada',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);
    
    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Quimica General Aplicada',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Politicas y legislacion Agraria',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Botanica y Fisiologia vegetal',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Zoologia y Fisiologia Animal',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Maquinaria, Equipos e Implementos Agricolas',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Principios de Bioquimica',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    }
}
