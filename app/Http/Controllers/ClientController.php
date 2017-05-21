<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Client;

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $clientes = DB::table('clients')->paginate(5);
        return view('clientes.index', ['clientes' => $clientes]);

    }

    /**
     * Search the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {

        $query=strtoupper(trim($request->apelido));
        $clientes=DB::table('clients')->where('apelido', 'LIKE', '%'.$query.'%')
            ->orderBy('codcli', 'DESC')
            ->paginate(5);
        return view('clientes.index', ['clientes'=>$clientes]);
    }


    /**
     * Create a new resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Client::all();
        $new_codcli = ((DB::table('clients')->max('codcli')) + 1);

        return view('clientes.create', ['new_codcli' => $new_codcli]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $dados = Input::all();
        $regras = array(
            'codcli'        => 'required|max:4|min:4',
            'apelido'       => 'required',
            'cnpj_cpf'      => 'required',
            'situac'         => 'required',
            'razsoc'        => 'required',
            'responsavel'   => 'required',
            'end_rua'       => 'required',
            'end_num'       => 'required',
            'end_compl'     => 'required',
            'end_bairro'    => 'required',
            'end_cep'       => 'required',
            'end_municipio' => 'required',
            'end_uf'        => 'required',
            'end_pais'      => 'required',
            'fone_1'        => 'required',
            'fone_2'        => 'required',
            'fone_3'        => 'required',
            'contato_1'     => 'required',
            'contato_2'     => 'required',
            'contato_3'     => 'required',
            'email_1'       => 'required',
            'email_2'       => 'required',
            'email_3'       => 'required',
            'obs'           => 'required',

        );

        $validac = Validator::make($dados, $regras);

        if ($validac->fails()) {
            return redirect::to('admin/clientes/novo')
                ->withErrors($validac)
                ->withInput();
        }

        $cli = new Client;
        $cli->codcli = $request->codcli;
        $cli->apelido = $request->apelido;
        $cli->cnpj_cpf = $request->cnpj_cpf;
        $cli->situac = $request->situac;
        $cli->razsoc = $request->razsoc;
        $cli->responsavel = $request->responsavel;
        $cli->end_cep = $request->end_cep;
        $cli->end_rua = $request->end_rua;
        $cli->end_num = $request->end_num;
        $cli->end_compl = $request->end_compl;
        $cli->end_bairro = $request->end_bairro;
        $cli->end_uf = $request->end_uf;
        $cli->end_pais = $request->end_pais;
        $cli->fone_1 = $request->fone_1;
        $cli->fone_2 = $request->fone_2;
        $cli->fone_3 = $request->fone_3;
        $cli->contato_1 = $request->contato_1;
        $cli->contato_2 = $request->contato_2;
        $cli->contato_3 = $request->contato_3;
        $cli->email_1 = $request->email_1;
        $cli->email_2 = $request->email_2;
        $cli->email_3 = $request->email_3;
        $cli->obs = $request->obs;

        // --- GRAVA REGISTRO --- //
        $clients->save();

        \Session::flash('mensagem_sucesso', 'Cliente armazenado com sucesso!');
        return redirect('clientes/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $cliente = Client::findOrFail($id);
        return view('clientes.show', compact('cliente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Client::findOrFail($id);
        return view('clientes.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = Input::all();
        $regras = array(
            'codcli'        => 'required|max:4|min:4',
            'apelido'       => 'required',
            'cnpj_cpf'      => 'required',
            'situac'         => 'required',
            'razsoc'        => 'required',
            'responsavel'   => 'required',
            'end_rua'       => 'required',
            'end_num'       => 'required',
            'end_compl'     => 'required',
            'end_bairro'    => 'required',
            'end_cep'       => 'required',
            'end_municipio' => 'required',
            'end_uf'        => 'required',
            'end_pais'      => 'required',
            'fone_1'        => 'required',
            'fone_2'        => 'required',
            'fone_3'        => 'required',
            'contato_1'     => 'required',
            'contato_2'     => 'required',
            'contato_3'     => 'required',
            'email_1'       => 'required',
            'email_2'       => 'required',
            'email_3'       => 'required',
            'obs'           => 'required',

        );

        $validac = Validator::make($dados, $regras);

        if ($validac->fails()) {
            return redirect::to('admin/clientes/novo')
                ->withErrors($validac)
                ->withInput();
        }

        $clients = Client::findOrFail($id);
        $clients->codcli = $request->codcli;
        $clients->apelido = $request->apelido;
        $clients->cnpj_cpf = $request->cnpj_cpf;
        $clients->situac = $request->situac;
        $clients->razsoc = $request->razsoc;
        $clients->responsavel = $request->responsavel;
        $clients->end_cep = $request->end_cep;
        $clients->end_rua = $request->end_rua;
        $clients->end_num = $request->end_num;
        $clients->end_compl = $request->end_compl;
        $clients->end_bairro = $request->end_bairro;
        $clients->end_uf = $request->end_uf;
        $clients->end_pais = $request->end_pais;
        $clients->fone_1 = $request->fone_1;
        $clients->fone_2 = $request->fone_2;
        $clients->fone_3 = $request->fone_3;
        $clients->contato_1 = $request->contato_1;
        $clients->contato_2 = $request->contato_2;
        $clients->contato_3 = $request->contato_3;
        $clients->email_1 = $request->email_1;
        $clients->email_2 = $request->email_2;
        $clients->email_3 = $request->email_3;
        $clients->obs = $request->obs;

        // --- GRAVA REGISTRO --- //
        $clients->update();

        \Session::flash('mensagem_sucesso', 'Cliente armazenado com sucesso!');
        return redirect('clientes/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes=Client::findOrFail($id);
        $clientes->situac='C';
        $clientes->update();
        return Redirect::to('clientes.index');
    }

}
