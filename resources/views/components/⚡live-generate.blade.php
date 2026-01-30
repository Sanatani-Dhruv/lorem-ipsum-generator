<?php

use Livewire\Component;

new class extends Component
{
    public $output;
    public $noOfWord;

    public function __construct() {
        $this->output = "Default Value";
        $this->noOfWord = 15;
    }

    public function display() {
        $this->output = fake()->sentence($this->noOfWord);
        // dd(fake()->sentence());
        return view('components.⚡live-generate', [
            'output' => $this->output
        ]);
    }

    public function changeNoWord() {
        $this->noOfWord = 100;
    }

};
?>

<div>
    <button wire:click="display">Generate</button>
    <input id="noOfWord" type="number" name="noOfWord" value="{{$noOfWord}}">
    <button wire:click="changeNoWord">Submit</button>
    <p style="padding: 1rem 0;">{{ $output }}</p>
    @error('output')
    <div style="color: red;">{{ $message }}</div>
@enderror
</div>
