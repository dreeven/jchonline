<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user());
       

        // $inscripciones = DB::table('cursos_inscritos')
        //           ->select( 'cursos.nombre',
        //                     DB::raw('DATE_FORMAT(cursos.fecha_ini, "%d/%m/%Y, %h:%i %p") as fecha_ini'),
        //                     'profesores.nombre as prof_nom',
        //                     'profesores.ap_paterno as prof_pat',
        //                     'profesores.ap_materno as prof_mat',
        //                     'estado_pago.nombre as pago' ,
        //                     'asistencia.nombre as asistencia'
        //                   )
        //           ->join('cursos', 'cursos.id','=','cursos_inscritos.curso_id')
        //           ->join('users', 'users.id','=','cursos_inscritos.user_id')
        //           ->join('profesores', 'profesores.id','=','cursos.profesor_id')
        //           ->join('roles', 'roles.id','=','users.rol_id')
        //           ->join('asistencia', 'asistencia.id','=','cursos_inscritos.asistencia_id')
        //           ->join('estado_pago', 'estado_pago.id','=','cursos_inscritos.estado_pago_id')
        //           ->where('users.id', '=', Auth::user()->id)
        //           ->get();


        //           $no_cursos = DB::table('cursos_inscritos')
        //           ->where('cursos_inscritos.user_id','=',Auth::user()->id)
        //           ->count();

        //           $cursos_realizados = DB::table('cursos_inscritos')
        //           ->where([['cursos_inscritos.user_id','=',Auth::user()->id],['cursos_inscritos.asistencia_id','=', 1]])
        //           ->count();
                  
        //           $incidencias = DB::table('cursos_inscritos')
        //           ->where([['cursos_inscritos.user_id','=',Auth::user()->id],['cursos_inscritos.asistencia_id','=', 3]])
        //           ->count();

        //   dd($inscripciones);


        return view('home' /*,
                            ['inscripciones' => $inscripciones, 
                            'no_cursos' => $no_cursos, 
                            'cursos_realizados' => $cursos_realizados,
    'incidencias' => $incidencias] */);
    }

    public function mostrarActividades()
    {
        return view('actividadesins');
    }
}
