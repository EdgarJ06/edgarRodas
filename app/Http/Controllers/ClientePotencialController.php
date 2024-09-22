<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientePotencialRequest;
use App\Http\Requests\UpdateClientePotencialRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ClientePotencialRepository;
use Illuminate\Http\Request;
use Flash;

class ClientePotencialController extends AppBaseController
{
    /** @var ClientePotencialRepository $clientePotencialRepository*/
    private $clientePotencialRepository;

    public function __construct(ClientePotencialRepository $clientePotencialRepo)
    {
        $this->clientePotencialRepository = $clientePotencialRepo;
    }

    /**
     * Display a listing of the ClientePotencial.
     */
    public function index(Request $request)
    {
        $clientePotencials = $this->clientePotencialRepository->paginate(10);

        return view('cliente_potencials.index')
            ->with('clientePotencials', $clientePotencials);
    }

    /**
     * Show the form for creating a new ClientePotencial.
     */
    public function create()
    {
        return view('cliente_potencials.create');
    }

    /**
     * Store a newly created ClientePotencial in storage.
     */
    public function store(CreateClientePotencialRequest $request)
    {
        $input = $request->all();

        $clientePotencial = $this->clientePotencialRepository->create($input);

        Flash::success('Cliente Potencial saved successfully.');

        return redirect(route('clientePotencials.index'));
    }

    /**
     * Display the specified ClientePotencial.
     */
    public function show($id)
    {
        $clientePotencial = $this->clientePotencialRepository->find($id);

        if (empty($clientePotencial)) {
            Flash::error('Cliente Potencial not found');

            return redirect(route('clientePotencials.index'));
        }

        return view('cliente_potencials.show')->with('clientePotencial', $clientePotencial);
    }

    /**
     * Show the form for editing the specified ClientePotencial.
     */
    public function edit($id)
    {
        $clientePotencial = $this->clientePotencialRepository->find($id);

        if (empty($clientePotencial)) {
            Flash::error('Cliente Potencial not found');

            return redirect(route('clientePotencials.index'));
        }

        return view('cliente_potencials.edit')->with('clientePotencial', $clientePotencial);
    }

    /**
     * Update the specified ClientePotencial in storage.
     */
    public function update($id, UpdateClientePotencialRequest $request)
    {
        $clientePotencial = $this->clientePotencialRepository->find($id);

        if (empty($clientePotencial)) {
            Flash::error('Cliente Potencial not found');

            return redirect(route('clientePotencials.index'));
        }

        $clientePotencial = $this->clientePotencialRepository->update($request->all(), $id);

        Flash::success('Cliente Potencial updated successfully.');

        return redirect(route('clientePotencials.index'));
    }

    /**
     * Remove the specified ClientePotencial from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clientePotencial = $this->clientePotencialRepository->find($id);

        if (empty($clientePotencial)) {
            Flash::error('Cliente Potencial not found');

            return redirect(route('clientePotencials.index'));
        }

        $this->clientePotencialRepository->delete($id);

        Flash::success('Cliente Potencial deleted successfully.');

        return redirect(route('clientePotencials.index'));
    }
}
