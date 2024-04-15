<div>
    <h1>Timezone App</h1>
    {{-- @if($showForm) --}}
        <form wire:submit.prevent="getTime">
            <label for="timezone">Select Timezone:</label>
            <select wire:model="selectedTimezone" id="timezone">
                @foreach($timezones as $tz)
                    <option value="{{ $tz }}">{{ $tz }}</option>
                @endforeach
            </select>
            <button type="submit">Get Time</button>
        </form>
    {{-- @endif --}}
    @if($currentTime)
        <p>Time in Selected Timezone: {{ $currentTime }}</p>
    @else
        <p>Current Time: {{ Carbon\Carbon::now() }}</p>
    @endif
</div>
