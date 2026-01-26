<?php

use Livewire\Component;

new class extends Component
{
    public $output;

    public function display() {
        $output = fake()->sentence();
        dd($this->output);
        return view('components.⚡live-generate', [
            'output' => $this->output
        ]);
    }

};
?>

<div>
    <button wire:click="display">Generate</button>
    <div wire:model="output"></div>
    @error('output')
    <div style="color: red;">{{ $message }}</div>
@enderror
</div>
