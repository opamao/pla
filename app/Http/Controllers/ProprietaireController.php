<?php

namespace App\Http\Controllers;

use App\Models\Propritaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProprietaireController extends Controller
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

    public function listeProrietaire()
    {
        try {

            $proprio = Propritaire::select('proprioid', 'nom', 'prenom')->get();

            return response()->json([
                'status' => true,
                'proprietaire' => $proprio
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function createProprietaire(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(),
                [
                    'nom' => 'required',
                    'prenom' => 'required',
                    'email' => 'unique:proprietaires,email',
                    'phone' => 'required|unique:proprietaires,telephone',
                    'password' => 'required'
                ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Vérifiez vos champs !',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = Propritaire::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'telephone' => $request->phone,
                'email' => $request->email,
                'motdepasse' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Votre compte a été créé avec succès',
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function loginProprietaire(Request $request)
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

            $proprietaire = Propritaire::where('telephone', $request->login)->orWhere('email', $request->login)->first();

            if ($proprietaire != null) {

                if (Hash::check($request->password, $proprietaire->motdepasse)) {

                    return response()->json([
                        'status' => true,
                        'message' => 'Vous êtes connecté',
                        'proprietaire' => $proprietaire
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
