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

    public function incNoWord() {
        // $this->noOfWord = 100;
        $this->noOfWord++;
    }

    public function decNoWord() {
        // $this->noOfWord = 100;
        $this->noOfWord--;
    }
};
?>

<div>
    <h3>Sentence Generate</h3>
    <button wire:click="display">Generate</button>
    <div id="noOfWord" type="number" name="noOfWord">{{$noOfWord}}</div>
    <button wire:click="incNoWord">Increase</button>
    <button wire:click="decNoWord">Decrease</button>
    <div>Output:</div>
    <p style="padding: 1rem 0;">{{ $output }}</p>
    <h3>Sentence Generate</h3>
    @error('output')
    <div style="color: red;">{{ $message }}</div>
@enderror
</div>
