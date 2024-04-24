<div>
    <h1>Timezone App</h1>
    <label for="timezone">Select Timezone:</label>
    <select wire:model="selectedTimezone" id="timezone" wire:change="getTime">
        @foreach($timezones as $tz)
            <option value="{{ $tz }}">{{ $tz }}</option>
        @endforeach
    </select>

    @if($currentTime)
        <p>Time in Selected Timezone: {{ $currentTime }}</p>
    @else
        <p>Current Time: {{ Carbon\Carbon::now() }}</p>
    @endif
</div>


