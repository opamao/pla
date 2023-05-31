<?php

namespace App\Http\Controllers;

use App\Models\Locataire;
use App\Models\Relever;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LocataireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createLocataire(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(),
                [
                    'nom' => 'required',
                    'prenom' => 'required',
                    'email' => 'unique:locataires,email_loca',
                    'phone' => 'required|unique:locataires,phone_loca',
                    'password' => 'required'
                ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Vérifiez vos champs !',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = Locataire::create([
                'nom_loca' => $request->nom,
                'prenom_loca' => $request->prenom,
                'phone_loca' => $request->phone,
                'email_loca' => $request->email,
                'fonction' => $request->fonction,
                'motdepasse' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Votre compte a été créé, veuillez vous rapprocher de l\'agence ou locataire pour commencer votre paiement',
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function Synchronisation(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(),
                [
                    'engin_id' => 'required',
                    'parcelle_id' => 'required',
                    'debut' => 'required',
                    'fin' => 'required',
                ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Vérifiez vos champs !',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            // [
            //     {
            //         "id":1,
            //         "engin_id":1,
            //         "parcelle_id":2,
            //         "debut":1233,
            //         "fin":1300
            //     },
            //     {
            //         "id":2,
            //         "engin_id":1,
            //         "parcelle_id":2,
            //         "debut":1233,
            //         "fin":1300
            //     }
            // ]

                Relever::create([
                    'engin_id' => $request->engin_id,
                    'parcelle_id' => $request->prenom_loca,
                    'debut' => $request->phone_loca,
                    'email_loca' => $request->email_loca,
                    'fin' => $request->fonction,
                ]);


            return response()->json([
                'status' => true,
                'message' => 'Votre compte a été créé, veuillez vous rapprocher de l\'agence ou locataire pour commencer votre paiement',
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


    public function loginLocataire(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(),
                [
                    'login' => 'required',
                    'password' => 'required'
                ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Tous les champs sont obligatoires',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $locataire = Locataire::where('phone_loca', $request->login)->orWhere('email_loca', $request->login)->first();

            if ($locataire != null) {

                if (Hash::check($request->password, $locataire->motdepasse)) {

                    return response()->json([
                        'status' => true,
                        'message' => 'Vous êtes connecté',
                        'locataire' => $locataire
                    ], 200);

                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Votre mot de passe est incorrect !',
                    ], 401);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Votre numéro ou adresse mail est incorrect !',
                ], 401);
            }

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
