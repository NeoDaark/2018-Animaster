dice-roller
===================

Usage
-----

- Import element:
```html
<link rel="import" href="/dice-roller/dice-roller.html">
```

- Example usage 
```html
<button on-click="{{ rollDie }}">Roll a die</button>
<button on-click="{{ reset }}">Reset</button>

<dice-roller
              reset="{{ reset }}"       // Removes all the dice from the scene
              rollDie="{{ rollDie }}"   // Drops a dice into the scene
              diceColor="#458B00"       // The colour of the dice
              dotColor="#0A0A0A">       // The colour of the dots on the dice
</dice-roller>
````

See example.html for a full example.
