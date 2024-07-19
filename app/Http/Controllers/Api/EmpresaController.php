<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator as ValidationValidator;

class EmpresaController extends Controller
{
    public function index(){
        $empresas = Empresa::all();



        return response()->json($empresas, 200);
    }

    public function store(Request $request){

        $validator =  Validator::make($request->all(), [
            'razon_social' => 'required|string|max:255',
            'nit' => 'required|integer',
            'objeto_social' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

            if($validator->fails()){
                $data = [

                    'message' => 'Error en validar datos',
                    'erros'=>$validator->errors(),
                    'status'=>400
                ];
                return response()->json($data, 400);
            }
             // Crear una nueva empresa
            $empresa = Empresa::create([
                'razon_social' => $request->razon_social,
                'nit' => $request->nit,
                'objeto_social' => $request->objeto_social,
                'user_id' => $request->user_id,
            ]);
            if (!$empresa) {
                $data = [
                    'message' => 'Error al crear el empresa',
                    'status' => 500
                ];
                return response()->json($data, 500);
            }
             // Retornar la empresa creada
            $data = [
                'empresa' => $empresa,
                'status' => 201
            ];

            return response()->json($data, 201);


        }








    }



