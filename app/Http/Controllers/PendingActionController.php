<?php

namespace App\Http\Controllers;

use App\Models\pending_actions;
use Illuminate\Http\Request;

class PendingActionController extends Controller
{
    /**
     * Afficher la liste des actions en attente de validation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendingActions = pending_actions::where('status', 'en attente')->get();
        return view('pending_actions.index', compact('pending_actions'));
    }

    /**
     * Afficher les détails d'une action en attente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendingAction = pending_actions::findOrFail($id);
        return view('pending_actions.show', compact('pending_actions'));
    }

    /**
     * Valider une action en attente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function valider($id)
        {
            $pendingAction = pending_actions::findOrFail($id);
            $pendingAction->status = 'validé';
            $pendingAction->save();
            return redirect()->route('pending_actions.index');
        }

    /**
     * Rejeter une action en attente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reject($id)
    {
        $pendingAction = pending_actions::findOrFail($id);
        $pendingAction->status = 'rejeté';
        $pendingAction->save();
        return redirect()->route('pending-actions.index');
    }
}
