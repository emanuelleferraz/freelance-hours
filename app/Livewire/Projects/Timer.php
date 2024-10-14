<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Timer extends Component
{
    public Project $project;

    public function render()
    {
        //calculando a diferença para encerrar a proposta
        $diff = now()->diff($this->project->ends_at);

        return view('livewire.projects.timer', [
            'days' => $diff->d,
            'hours' => $diff->h,
            'minutes' => $diff->i,
            'seconds' => $diff->s,
        ]);
    }
}