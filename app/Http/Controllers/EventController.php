<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use Auth;

use \App\Models\Event;

class EventController extends Controller
{
    public function addEvent(){
        
        request()->validate([   //validation du contenu des champs, si un champ n'est pas correct l'utilisateur est renvoyé vers le même formulaire
            'event_name' => ['required', 'string'],
            'event_desc' => ['required', 'string'],
            'event_price' => ['required', 'numeric'],
            'event_type' => ['required', 'string'],
            'event_date' => ['required', 'date'],
            'isRecurrent' => ['required', 'boolean'],
        ]);
        
        
        $event = new Event;     //instancie un nouvel évènement et associe le contenu des inputs aux champs de la table events
        $event->event_name = request('event_name');
        $event->event_desc = request('event_desc');
        $event->event_date = request('event_date');        
        $event->event_type = request('event_type');
        $event->event_price = request('event_price');
        $event->isRecurrent = request('isRecurrent');
        // Si l'évènement posté est passé, alors isCurrent est automatiquement mis à false
        if($event->event_date > date('d-m-Y')){
            $event->isCurrent = '1';
        }else{
            $event->isCurrent = '0';
        }

        $event = Event::create([    //insertion dans la table events
            'event_name' => request('event_name'),
            'event_desc' => request('event_desc'),
            'event_date' => request('event_date'),
            'event_type' => request('event_type'),
            'event_price' => request('event_price'),
            'isRecurrent' => request('isRecurrent'),
            'isCurrent' => $event->isCurrent,
        ]);

        return back()->with('success', 'L\'évènement '.request('event_name').' a bien été ajouté');
    }

    public function voirFormulaire(){   //retourne la vue du formulaire permettant d'ajouter des évènements
        if(auth()->check && Auth::user()->role = 'BDE'){       //si l'utilisateur est connecté et membre du BDE...
            return view('pages.addEvent');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //affiche la liste des évènements
    {
        if(auth()->check()){
        $events = DB::table('events')->get();
        return view('pages.events', compact('events'));
        }
    }

    /**
     * Affiche un évènement en particulier
     */

    public function showEvent($id){
        if(auth()->check && Auth::user()->role = 'BDE'){
        $event = DB::table('events')->where('id_events', $id)->get();
        return view('pages.showEvent', compact('event'));
        }
    }

    /**
     * Liste les évènements pour que les membres du BDE puissent les gérer
     */

    public function manage(){
        if(auth()->check() && Auth::user()->role = 'BDE'){
            $events = DB::table('events')->get();
            return view('pages.eventMgmt', compact('events'));
        }

        return view('pages.login')->with('error', 'Vous devez être membre du BDE et connecté pour voir cette page');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventsModel  $eventsModel
     * @return \Illuminate\Http\Response
     */
    public function show(eventsModel $eventsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventsModel  $eventsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(eventsModel $eventsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventsModel  $eventsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eventsModel $eventsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventsModel  $eventsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventsModel $eventsModel)
    {
        //
    }
}
