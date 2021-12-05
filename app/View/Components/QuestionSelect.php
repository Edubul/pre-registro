<?php

namespace App\View\Components;

use Illuminate\View\Component;

class QuestionSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $questions = [
            [0, 'What is your real FULL name'],
            [1, 'Which is your Favorite Soccer team'],
            [2, 'Who was your favorite teacher'],
            [3, 'Who is/was your first love name'],
            [4, 'Provide some security code, that you will remember / no password']
        ];

        return view('components.question-select',compact('questions'));
    }
}
