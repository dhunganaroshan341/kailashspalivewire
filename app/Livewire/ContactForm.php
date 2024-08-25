<!-- <?php

// namespace App\Http\Livewire;

// use App\Models\UserMessage;
// use Livewire\Component; // Make sure to import the UserMessage model

// class ContactForm extends Component
// {
//     public $name;

//     public $email;

//     public $phone;

//     public $subject;

//     public $message;

//     protected $rules = [
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|max:255',
//         'phone' => 'required|string|max:20',
//         'subject' => 'required|string|max:255',
//         'message' => 'required|string',
//     ];

//     public function submit()
//     {
//         $this->validate();

//         UserMessage::create([
//             'name' => $this->name,
//             'email' => $this->email,
//             'phone' => $this->phone,
//             'subject' => $this->subject,
//             'message' => $this->message,
//         ]);

//         // Optionally, reset the form fields
//         $this->reset();

//         // Optionally, emit a success message
//         session()->flash('message', 'Message sent successfully!');
//     }

//     public function render()
//     {
//         return view('livewire.contact');
//     }
// }
