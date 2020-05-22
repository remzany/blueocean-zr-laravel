<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//use Agent model
use App\Agent;

class AgentController extends Controller
{
    public function findAll(){
        //get all agents from database
        $agent = Agent::All();

        //return agents to view with data
        return view('agents', ['agents' => $agent]);
    }

    public function findById($id){

        //get specific agent by id
        $agent = Agent::find($id);

        //return agent to view
        return view('agent', ['agent' => $agent]);
    }


}
