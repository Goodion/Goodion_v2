<?php

namespace App\Http\Livewire;


use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FeedbackForm extends Component
{
    public Feedback $feedback;

    protected $rules = [
        'feedback.name' => 'required|min:2',
        'feedback.phone' => 'nullable|digits_between:10,11|required_without:feedback.email',
        'feedback.email' => 'nullable|required_without:feedback.phone|email',
        'feedback.message' => 'required|min:5',
        'feedback.registered' => 'boolean',
    ];

    public function sendMessage()
    {
        $this->feedback->phone = normalizePhoneNumber($this->feedback->phone);
        $this->validate();
        $this->feedback->save();
        session()->flash('message', 'Сообщение успешно отправлено.');
        $this->dispatchBrowserEvent('message-sent');
    }

    public function mount(Feedback $feedback)
    {
        if (Auth::check()) {
            $feedback->name = auth()->user()->name;
            $feedback->phone = auth()->user()->phone ? auth()->user()->phone : null;
            $feedback->email = auth()->user()->email ? auth()->user()->email : null;
            $feedback->registered = true;
        }

        $this->feedback = $feedback;
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}
