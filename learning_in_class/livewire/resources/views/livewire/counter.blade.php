<div style="text-align:center; margin-top: 50px;">
    <h1>{{ $count }}</h1>

    <button 
        wire:click="increment" 
        style="padding:10px 20px; font-size:18px; background:#4CAF50; color:white; border:none; border-radius:8px; cursor:pointer;"
    >
        +
    </button>

    <button 
        wire:click="decrement" 
        style="padding:10px 20px; font-size:18px; background:#4CAF59; color:white; border:none; border-radius:8px; cursor:pointer;"
    >
        -
    </button>


</div>
